
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>

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
    <div class="container-scroller">
      
    @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
       @include('admin.main')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>