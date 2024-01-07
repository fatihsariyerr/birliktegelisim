<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Doktor Paneli | Birlikte Gelişim</title>
  <link rel="shortcut icon" type="image/png" href="../favicon/favicon3.png" />
  <link rel="stylesheet" href="../light/assets/css/styles.min.css" />

  <script>
     var logoutRoute = "{{ route('logout') }}";
  var csrfToken = "{{ csrf_token() }}";

  var userEmail = "{{ Auth::user()->usertype }}";
  var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);



   
 
  if (isMobile && userEmail === "1") {
    
  window.onload = function() {
    document.body.innerHTML = "";
}
    alert("Doktorlar Yalnızca Bilgisayar Üzerinden Erişim Sağlayabilir");

  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", logoutRoute, true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.setRequestHeader("X-CSRF-Token", csrfToken);

   

    xhr.send();
    document.body.innerHTML = "";
   
  
    location.reload();
  }
</script>
</head>
