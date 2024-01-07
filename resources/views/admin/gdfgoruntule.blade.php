    
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
       label{
        display:inline-block;
        width:300px;
       }
      
       </style>

  </head>
  <body>
  
  <div class="container-scroller">
    
      @include('admin.sidebar')
        <!-- partial -->
       @include('admin.navbar')
       <div class="container-fluid " style="margin-top:70px;">
        @if (session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">X</button>
    {{ session()->get('message') }}
</div>
@endif<br>
        <table  class="table">
  <thead class="thead-light">
    <tr>
       
       
      <th scope="col">Hasta Adı</th>
      @foreach($gelisimsel as $sor)
       <th scope="col">{{$sor->hastaadi}}</th> 
       @endforeach
    </tr>

    <tr>
    <th scope="col">Çocuk Adı</th>
    @foreach($gelisimsel as $sor)
       <th scope="col">{{$sor->cocukadi}}</th>
       @endforeach
     
     </tr>
     <tr>
    <th scope="col">Cinsiyet</th>
    @foreach($gelisimsel as $sor)
       <th scope="col">{{$sor->cinsiyet}}</th>
       @endforeach
     
     </tr>
     <tr>
    <th scope="col">Kreş / Ana Okulu</th>
    @foreach($gelisimsel as $sor)
       <th scope="col">{{$sor->kresanaokulu}}</th>
       @endforeach
     
     </tr>
     <tr>
    <th scope="col">Değerlendirme Nedeni</th>
    @foreach($gelisimsel as $sor)
       <th scope="col">{{$sor->degerlendirmenedeni}}</th>
       @endforeach
     
     </tr>
     <tr>
    <th scope="col">Fiziksel Özür</th>
    @foreach($gelisimsel as $sor)
       <th scope="col">{{$sor->fizikselozur}}</th>
       @endforeach
     
     </tr>
     <tr>
    <th scope="col">Doğum Tarihi</th>
    @foreach($gelisimsel as $sor)
       <th scope="col">{{$sor->dogumtarihi}}</th>
       @endforeach
     
     </tr>
     <tr>
    <th scope="col">Çocuk Yaşı</th>
    @foreach($gelisimsel as $sor)
       <th scope="col">{{$sor->cocukyas}} Ay</th>
       @endforeach
     
     </tr>

     <tr>
    <th style="background-color:green;color:white;" scope="col">Dil Bilişsel Puanı</th>
    @foreach($gelisimsel as $sor)
       <th style="background-color:green;color:white;" scope="col">{{$sor->dilbilissel}}</th>
       @endforeach
     
     </tr>
     <tr>
    <th style="background-color:green;color:white;" scope="col">İnce Motor Puanı</th>
    @foreach($gelisimsel as $sor)
       <th style="background-color:green;color:white;" scope="col">{{$sor->incemotor}}</th>
       @endforeach
     
     </tr>
     <tr>
    <th style="background-color:green;color:white;" scope="col">Kaba Motor Puanı</th>
    @foreach($gelisimsel as $sor)
       <th style="background-color:green;color:white;" scope="col">{{$sor->kabamotor}}</th>
       @endforeach
     
     </tr>
     <tr>
    <th style="background-color:green;color:white;" scope="col">Sosyal Beceri Özbakım Puanı</th>
    @foreach($gelisimsel as $sor)
       <th style="background-color:green;color:white;" scope="col">{{$sor->sosyalbeceriozbakim}}</th>
       @endforeach
     
     </tr>
    
     <th style="background-color:green;color:white;" scope="col">Genel Beceri Toplam Puanı</th>
    @foreach($gelisimsel as $sor)
       <th style="background-color:green;color:white;" scope="col">{{$sor->dilbilissel + $sor->incemotor + $sor->kabamotor + $sor->sosyalbeceriozbakim }}</th>
       @endforeach
     
     </tr>

  </thead>
</table>
<hr><br>
Cevaplanan Sorular <hr><br>

<table  class="table">
  <thead class="thead-light">
    <tr>
       
       @foreach($cevaplanansorular as $cevaplanan)
      <th scope="col">{{$cevaplanan}}</th>
    
       <th scope="col">Evet</th> 
     
    </tr>

    @endforeach


  </thead>
</table>

          <!-- content-wrapper ends -->
          </div> <!-- partial:partials/_footer.html -->
         
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