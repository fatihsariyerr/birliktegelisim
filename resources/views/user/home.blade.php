@include('user.header')
@if (session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">X</button>
    {{ session()->get('message') }}
</div>
@endif
<style type="text/css">



  .page-hero {
  position: relative;
}

.bg-video-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.bg-video {
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

  </style>
<div class="page-hero overlay-dark">
  <div class="bg-video-container">
    <video autoplay loop muted playsinline class="bg-video">
      <source src="../assets/img/homepagebg-min.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
  <div class="hero-section">
    <div class="container text-center wow zoomIn">
      <span class="subhead">Hayatınızı Mutlu Hale Getirelim</span>
      <h1 class="display-4">Sağlıklı Aile Yapıları</h1>
      @if(Route::has('login'))
        @auth
          <a href="#appointment" class="btn btn-primary">Danışmanlık Al</a>
        @else
          <a href="/login" class="btn btn-primary">Danışmanlık Al</a>
        @endauth
      @endif
    </div>
  </div>
</div>



  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Pedagoglar</span> ile görüş</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>Aile</span> Sağlığını İyileştirir</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-heart"></span>
              </div>
              @if(Route::has('login'))
          

          @auth
                        <a href="{{url('gelisimdegerlendirmeformu')}}" >   <p><span>Gelişim</span> Değerlendirme Formu</p></a>
                        @else
                        <a href="{{url('login')}}" >   <p><span>Gelişim</span> Değerlendirme Formu</p></a>
                        @endauth
            @endif
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-6  wow fadeInUp">
          
          <p class="text-grey mb-4"> <a class="navbar-brand" href="{{url('home')}}"><span class="text-primary">Birlikte</span>-<span style="color:black;">Gelişim</span></a>  olarak, çocukların sağlıklı gelişimi ve ailelerin ihtiyaçlarını merkeze alan bir yaklaşım benimsemekteyiz. Çocuklarımızın hayatlarının ilk yılları büyük bir önem taşır ve bu dönemde alınan destek ve rehberlik, çocukların gelecekteki başarılarına doğrudan etki edebilir.

          <br><br>Pedagog olarak, sizlere çocuklarınızın eğitim, duygusal gelişim, davranış sorunları, öğrenme güçlükleri ve aile içi ilişkiler gibi birçok konuda destek sağlama konusunda uzmanız. Çocukların benzersiz ihtiyaçlarına odaklanır ve ailelerin onlara en iyi şekilde rehberlik etmelerine yardımcı oluruz.
         </p>     <a href="{{url('about')}}" class="btn btn-primary">Daha Fazlası</a>
         </div>
         <script>
              var animation = bodymovin.loadAnimation({
                container : document.getElementById('animation'),
                path : 'mental-therapy.json',
                render : 'svg',
                loop : true,
                autoplay : true,
                name : 'Mental Theraphy'
              });

              
            </script>
            <div class="col-lg-6 wow fadeInRight"  data-wow-delay="400ms" id="animation"></div>
          <!-- <div class="col-lg-6 wow fadeInRight"  data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img style="width:390px;heigh:509px;" src="../assets/img/bg-doctor.png" alt="">
            </div> -->
           
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->
@include('user.doctor')
@include('user.latest')
@if(Route::has('login'))
          

          @auth
          @include('user.appointment')
@else
         
          @endauth
          @endif


       
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
</body>
</html>