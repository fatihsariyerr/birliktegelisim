@include('user.header')

@if (session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">X</button>
    {{ session()->get('message') }}
</div>
@endif
<div class="alert alert-success" role="alert">
<span style="font-weight:bold;display:inline;" >Görüşmenin Tamamlanmasına Kalan Süre :  </span> <div style="font-weight:bold;display:inline;" id="countdown" data-roomname="{{$roomname}}">2:00</div>
</div>

<script>
        document.addEventListener('DOMContentLoaded', function () {
            var countdownElement = document.getElementById('countdown');
            var roomname = countdownElement.dataset.roomname;

            // Sunucudan süre bilgisini al ve sayacı başlat
            function getTimer() {
                fetch('/get-timer/' + roomname)
                    .then(response => response.json())
                    .then(data => {
                        startCountdown(data.expires_at);
                    })
                    .catch(error => {
                        console.error('Süre bilgisi alınamadı:', error);
                    });
            }

            // Sayacı başlat
            function startCountdown(expiresAt) {
                var targetDate = new Date(expiresAt);

                var countdownInterval = setInterval(function () {
                    var currentDate = new Date().getTime();
                    var distance = targetDate - currentDate;

                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    countdownElement.innerHTML = minutes + ":" + (seconds < 10 ? "0" : "") + seconds;

                    if (distance < 0) {
                        clearInterval(countdownInterval);
                        countdownElement.innerHTML = "Süre doldu";

                        // Süre dolduğunda belirli bir sayfaya yönlendir
                        window.location.href = '/roomdelete/' + roomname;
                    }
                }, 1000);
            }

            // Sayfa yüklendiğinde süre bilgisini al ve sayacı başlat
            getTimer();
        });
    </script>
<div  id="metered-frame"></div>
<script src="https://cdn.metered.ca/sdk/frame/1.4.3/sdk-frame.min.js"></script>
<script>
    var frame = new MeteredFrame(); 
    frame.init({
        roomURL: "birliktegelisim.metered.live/{{$roomname}}",
    }, document.getElementById("metered-frame"));
</script>
