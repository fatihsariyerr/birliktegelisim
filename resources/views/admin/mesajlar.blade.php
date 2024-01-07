
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
    @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
        
        <div class="container-fluid " style="margin-top:70px;">
        @if (session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">X</button>
    {{ session()->get('message') }}
</div>
@endif
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Ad Soyad</th>
      <th scope="col">Email Adresi</th>
      <th scope="col">Konu</th>
      <th scope="col">Mesaj</th>
      <th scope="col">Tarih</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($mesajlar as $mesajlar)
            <tr >
              
                <td style="padding-top:20px;">{{$mesajlar->name}}</td>
                <td style="padding-top:20px;">{{$mesajlar->email}}</td>
                <td style="padding-top:20px;">{{$mesajlar->subject}}</td>
                <td style="padding-top:20px;">{{$mesajlar->message}}</td>
                <td style="padding-top:20px;">{{$mesajlar->created_at}}</td>
                <td><a class="btn btn-danger" href="{{url('mesajokundu',$mesajlar->id)}}">Okundu</a></td>
               
             
            </tr>
            @endforeach
           
  </tbody>
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