    
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
  
  
          <div class="container" text-align="center" style="padding-top:50px;">
          @if (session()->has('message'))
  <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">X</button>
      {{ session()->get('message') }}
  </div>
  @endif
              <form action="{{url('musaitlikdegistir')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div style="padding:15px;">
                      <label>Müsaitlik Durumu</label>
                    
               
                
                
                        <select class="form-select" name="musaitlik" style="width:300px;color:black;">
                        <option >--Seçiniz--</option>
                            <option value="musait">Müsait</option>
                            <option value="musaitdegil">Müsait Değil</option>
                        </select>
            


              </select>
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

     
  </body>
</html>