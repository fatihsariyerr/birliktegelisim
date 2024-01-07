@include('admin.lightheader')
<body>
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
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
   @include('admin.lightsidebar')
    <!--  Main wrapper -->
    <div class="body-wrapper">
    @include('admin.lightnavbar')
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
        @if($bildirimler->count() > 0)
        
        <div class="col-lg-12 d-flex align-items-strech">
          <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Bildirimler</h5>
                
        @foreach($bildirimler as $nots)
        <div class="alert alert-primary" role="alert">{{$nots->icerik}}</div>
        @endforeach
        <a href="{{url('okundu')}}" type="button" class="btn btn-outline-primary m-1">Tümünü Okudum</a>
        </div></div></div>
        @endif
                
          <div class="col-lg-12 d-flex align-items-strech">
          <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Makale Ekle</h5>
                <form action="{{url('lightmakale_ekle')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Kapak Görseli</label>
                      <input class="form-control"  type="file" name="file"  id="file-input" onchange="previewImage()"> 
                      </div>
                      <div style="padding:15px;" id="preview-container">
<label>Önizleme</label>
    <img style="width:30%;" id="image-preview" src="#" alt="Görsel Önizleme">
</div>
                      <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Makale Başlığı</label>
                      <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">İçerik</label>
                      <textarea id="editor" name="content" placeholder="İçerik"> </textarea>
                      </div>
                      <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Etiket</label>
                      <input type="text" class="form-control" name="tag" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                  
                
                <div style="padding:15px;">
                <input type="submit" style="color:white;background-color:#5D87FF;" value="Ekle"  class="btn btn-outline-primary">
                </div>
            </form>
              </div>
            </div>
          
          </div>
        </div>
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://www.linkedin.com/in/fatihsariyer/" target="_blank" class="pe-1 text-primary text-decoration-underline">Fatih Sarıyer</a> </p>
       
        </div>
     
      </div>
    
    </div>
  </div>
  @include('admin.lightfooter')