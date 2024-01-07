    
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
          <!-- partial -->
          <div class="container-fluid page-body-wrapper">
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  
          <div class="container" text-align="center" style="padding-top:50px;">
          @if (session()->has('message'))
  <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">X</button>
      {{ session()->get('message') }}
  </div>
  @endif
<div>
<form class="main-form" action="{{url('selectgdf')}}" method="POST" >
        @csrf
<span style="font-weight:bold;">Hasta Adı :</span>  
<select name="hasta" style="width:300px;color:black;">
                        <option >--Seçiniz--</option>
                        @foreach ($uniqueHastaAdlari as $gdf)
                            <option value="{{$gdf}}">{{$gdf}}</option>
                           
                            @endforeach
                        </select>
    </div>
    <button type="submit" style="background-color:green;"class="btn btn-primary mt-3 wow zoomIn">Gönder</button>
      </form>

  </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>

     
  </body>
</html>