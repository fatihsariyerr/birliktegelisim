
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    @include('admin.css');
    <style type="text/css">
        #preview-container {
           
            display:none;
        }

        #image-preview {
            max-width: 100%;
            height: auto;
            display: none; /* Önizleme başlangıçta gizlenmiş */
        }
       label{
        display:inline-block;
        width:300px;
       }
      
       </style>
<script src="https://cdn.tiny.cloud/1/yf7opbo4zakohk0cc7ukh5v9ldkpp8a4ciq29bk6w8e8zk4d/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
   function previewImage() {
        var fileInput = document.getElementById('file-input');
        var previewContainer = document.getElementById('preview-container');
        var imagePreview = document.getElementById('image-preview');

        var file = fileInput.files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function (e) {
                imagePreview.src = e.target.result;
                previewContainer.style.display = 'block';
                imagePreview.style.display = 'block'; // Önizleme gösterilir
            };

            reader.readAsDataURL(file);
        } else {
          previewContainer.style.display = 'none';
            imagePreview.style.display = 'none'; // Dosya seçilmediğinde önizleme gizlenir
            imagePreview.src = '#';
        }
    }
  tinymce.init({
    selector: 'textarea#editor',
    skin: 'bootstrap',
    plugins: 'lists, link, image, media',
    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
    menubar: false,
  });
</script>
    

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
            <form action="{{url('makaleekle')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding:15px;">
                    <label>Kapak Görseli</label>
                    <input type="file" name="file" id="file-input" onchange="previewImage()"> 
                </div>
            
<div style="padding:15px;" id="preview-container">
<label>Önizleme</label>
    <img style="width:30%;" id="image-preview" src="#" alt="Görsel Önizleme">
</div>
                <div style="padding:15px;">
                    <label >Makale Başlığı</label><hr>
                    <input type="text" style="color:black;width:100%;" name="title" placeholder="Başlık Giriniz"> 
                </div>
                <div style="padding:15px;">
                    <label>İçerik</label>
                    <textarea id="editor" name="content" placeholder="İçerik"> </textarea>
                </div>
                <div style="padding:15px;">
                    <label>Etiket</label>
                    <input type="text" style="color:black;width:300px;" name="tag" placeholder="Etiket"> </textarea>
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
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>

</html>