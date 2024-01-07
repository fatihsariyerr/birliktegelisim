
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css');
    <style type="text/css">
       label{
        display:inline-block;
        width:300px;
       }
      
       </style>

  </head>
  <body>
    <div class="container-scroller">
      
    @include('admin.sidebar');
      <!-- partial -->
     @include('admin.navbar');
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


        <div class="container" text-align="center" style="padding-top:50px;">
        @if (session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">X</button>
    {{ session()->get('message') }}
</div>
@endif
            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding:15px;">
                    <label>Doktor Adı</label>
                    <input type="text" style="color:black;width:300px;" name="name" placeholder="Doktorun Adını Giriniz.."> 
                </div>
                <div style="padding:15px;">
                    <label>Telefon Numarası</label>
                    <input type="text" style="color:black;width:300px;" name="phone" placeholder="Doktorun Telefonunu Giriniz.."> 
                </div>
                <div style="padding:15px;">
                    <label>Bölümü</label>
                        <select name="speciality" style="width:300px;color:black;">
                        <option >--Seçiniz--</option>
                            <option value="Pedagog">Pedagog</option>
                            <option value="Psikolog">Psikolog</option>
                        </select>
                </div>
                <div style="padding:15px;">
                    <label>Doktor Resmi</label>
                    <input type="file" name="file"> 
                </div>
                <div style="padding:15px;">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
        </div>
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
    @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>