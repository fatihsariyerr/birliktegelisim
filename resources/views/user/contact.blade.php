@include('user.header')
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/homepagebg.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Anasayfa</a></li>
            <li class="breadcrumb-item active" aria-current="page">İletisim</li>
          </ol>
        </nav>
        <h1 style="font-size:30px;" class="font-weight-normal">İletisim</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
  <div class="container">
    
   
      @if (session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">X</button>
    {{ session()->get('message') }}
</div>
@endif
      <form class="contact-form mt-5" method="POST" action="{{url('submit')}}">
        @csrf
        <div class="row mb-3">
          <div class="col-sm-6 py-2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
            <label for="fullName">Ad Soyad</label>
            <input type="text" id="fullName" name="name" class="form-control" placeholder="Ad Soyad">
          </div>
          <div class="col-sm-6 py-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
            <label for="emailAddress">E-Mail Adresi</label>
            <input type="text" name="email" id="emailAddress" class="form-control" placeholder="E-Mail Adresi">
          </div>
          <div class="col-12 py-2 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <label for="subject">Konu</label>
            <input type="text" name="subject" id="subject" class="form-control" placeholder="Konu Başığı">
          </div>
          <div class="col-12 py-2 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <label for="message">Mesaj</label>
            <textarea id="message"  name="message" class="form-control" rows="8" placeholder="Mesaj Yazın.."></textarea>
          </div>
        </div>
        <button type="submit" style="background-color:green;"class="btn btn-primary mt-3 wow zoomIn">Mesaj Gönder</button>
      </form>
    </div>
    </div>
</body>
  
    <script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
</html>