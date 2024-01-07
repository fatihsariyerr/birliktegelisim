<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#doctor').change(function() {
      var id = $(this).find('option:selected').data('doctor-id'); // data-doctor-id özelliğini alın
      var timeSelect = $('#time');
      timeSelect.empty();
      timeSelect.append('<option>Gün Seç</option>');
    
        if (id !== '') {
         
             $.ajax({
                url: '/get-doctor-fee/' + id, // Doktor ücret bilgisini getiren bir API rotası eklemelisiniz
                type: 'GET',
                success: function(data) {
                    $('#fee-label').text('Seans Ücreti: ' + data.fee + ' ₺');
                }
            });
        } else {
            $('#fee-label').text('Seans Ücreti: 0 ₺');
        }
    });
    $('[name="date"]').change(function() {
      var doctorName = $('#doctor').find('option:selected').val(); // Doktorun adını al

      var selectedDate = $(this).val();
      var timeSelect = $('#time');
      timeSelect.empty();
      if (doctorName !== '' && selectedDate !== '') {
        var url = '/gunsecimi/' + doctorName + '/' + selectedDate;
        for (var i = 10; i <= 17; i++) {
        var time = i + ':00';
        timeSelect.append('<option value="' + time + '">' + time + '</option>');
        }  
  
        $.ajax({
          url: url,
          type: 'GET',
         
          success: function(data) {
          
            for (var i = 0; i < data.length; i++) {
           
                    var disabledTime = data[i];
                    $('#time option[value="' + disabledTime + '"]').prop('disabled', true).text(disabledTime + ' / Dolu');;
                }
          }
        });
      }
    });
});
</script>

<div id="appointment" class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp" style="font-size:30px;">Randevu Oluştur</h1>
      <br>
<h3 class="text-center ">Çocuğunuz ile ilgili danışmanlık hizmeti almak istiyor iseniz , <a href="{{url('gelisimseldegerlendirmeformu')}}"><span style="color:blue;font-weight:bold;">Gelişimsel Değerlendirme Formu</span></a>'nu doldurmanız <span style="color:red;font-weight:bold;">zorunludur !</span></h3>
   <form class="main-form" action="{{url('appointment')}}" method="POST" >
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name ="name"  class="form-control"  value="{{Auth::user()->name}}" disabled>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name ="email" class="form-control"   value="{{Auth::user()->email}}" disabled>
          </div>
        
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select  name ="doctor" id="doctor" class="custom-select">
            <option >Doktor Seç</option>
             @foreach($doctor as $doctors)
             @if($doctors-> musaitlik == 'musait')
             <option  data-doctor-id="{{ $doctors->id }}" value="{{$doctors->name}}">{{$doctors->name}} / {{$doctors->speciality}}</option>
           @else
             <option disabled data-doctor-id="{{ $doctors->id }}" value="{{$doctors->name}}">{{$doctors->name}} / Müsait Değil</option>
             @endif 
             @endforeach
            </select>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <label id="fee-label" style="margin-top:10px;color:green;font-weight:bold;"></label>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" id="date" name ="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select  name ="time" id="time" class="custom-select">
            <option >Saat Seç</option>
           
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input name ="phone" type="text" class="form-control" placeholder="Telefon Numarası Giriniz">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea  name="message" id="message" class="form-control" rows="6" placeholder="Mesajınızı Giriniz"></textarea>
          </div>
        </div>

        <button type="submit" style="background-color:green;"class="btn btn-primary mt-3 wow zoomIn">Randevu Oluştur</button>
      </form>
      
    </div>
  </div> <!-- .page-section -->