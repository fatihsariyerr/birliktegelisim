<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Birlikte Gelişim</title>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Doktorlarınızla güvenli ve hızlı bir şekilde görüntülü görüşmeler ayarlayın. Sağlık sorularınızı uzaktan çözün, randevularınızı kolayca planlayın.">

  <meta name="copyright" content="Birlikte Gelişim">
  <link rel="icon" type="image/x-icon" href="../favicon/favicon3.png">
 <script src="//code.tidio.co/gtuuwxd0nfyi5rez6x0vq2npffr9l5xc.js" async></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.2/lottie.min.js" integrity="sha512-vUtWeTFNtPyJbdP2eG8etyAhG1ssqBQkaD5SEWJkaDeJJylxg8ZkL0SkcQEAJXLmzpXjE1QFN7GK/zOMHP8vBA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
   
<style>

  header {
    position: fixed;
    width: 100%;
    top: 0;
    background-color: #ffffff; /* Header'ın arka plan rengini ayarlayın */
    z-index: 1000; /* Gerekirse, header'ı diğer öğelerin üzerine getirin */
}
/* Gerekirse, sayfanın geri kalan içeriğini aşağı kaydırın */
body {
    padding-top: 70px; /* Header'ın yüksekliğine göre uygun bir üst boşluk ekleyin */
}
.button-55 {
  align-self: center;
  background-color: #fff;
  background-image: none;
  background-position: 0 90%;
  background-repeat: repeat no-repeat;
  background-size: 4px 3px;
  border-radius: 15px 225px 255px 15px 15px 255px 225px 15px;
  border-style: solid;
  border-width: 2px;
  box-shadow: rgba(0, 0, 0, .2) 15px 28px 25px -18px;
  box-sizing: border-box;
  color: #41403e;
  cursor: pointer;
  display: inline-block;
  font-family: Neucha, sans-serif;
  font-size: 1rem;
  line-height: 20px;
  outline: none;
  padding: .75rem;
  text-decoration: none;
  transition: all 235ms ease-in-out;
  border-bottom-left-radius: 15px 255px;
  border-bottom-right-radius: 225px 15px;
  border-top-left-radius: 255px 15px;
  border-top-right-radius: 15px 225px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-55:hover {
  box-shadow: rgba(0, 0, 0, .3) 2px 8px 8px -5px;
  text-decoration: none;
  transform: translate3d(0, 2px, 0);
}

.button-55:focus {
  box-shadow: rgba(0, 0, 0, .3) 2px 8px 4px -6px;
}
 
 .badge-outline-success {
    color: #00d25b;
    border: 1px solid #00d25b;
}
  .badge {
  border-radius: 0.25rem;
  font-size: 0.75rem;
  font-weight: initial;
  line-height: 1;
  padding: 0.5rem 0.7rem;
  font-weight: $font-weight-medium;
  &.badge-pill {
    border-radius: 10rem;
  }
}


/*Badge variations*/


  </style>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="/"><span class="text-primary">Birlikte</span>-Gelişim</a>

      

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div  class="collapse navbar-collapse" id="navbarSupport">
          <ul  class="navbar-nav ml-auto">
            <li  class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Anasayfa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/about')}}">Hakkımızda</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('/doctors')}}">Doktorlar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/makaleler')}}">Makaleler</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/contact')}}">İletişim</a>
            </li>
            @if(Route::has('login'))
          
          
            @auth
            @if(Auth::user()->usertype =='0')
            <li class="nav-item">
              <a class="nav-link" id="randevubutton" style="border-radius:10px;background-color:green; color:white;" href="{{url('myappointment')}}">Randevularım</a>
            </li>
            @endif
            <x-app-layout>
</x-app-layout>

@else
            <li class="nav-item">
              <!-- HTML !-->
<a style="margin-left:150px;" class="button-55" href="{{route('login')}}" >Giriş Yap</a>


           
            </li>
            @endauth
            @endif



          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

@foreach ($blog as $blogs)
<div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Anasayfa</a></li>
              <li class="breadcrumb-item"><a href="{{url('makaleler')}}">Makaleler</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$blogs->title}}</li>
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->

      <div class="row">
      <div class="col-sm-8 py-12">
          <article class="blog-details">
            <div  class="post-thumb">
              <img  src="../blogimages/{{$blogs->blogimage}}" alt="">
            </div>
            <div class="post-meta">
              <div class="post-author">
                <span class="text-grey">Yazar :</span> <a >{{$blogs->author}}</a>  
              </div>
              <span class="divider">|</span>
              <div class="post-date">
                <a >{{$blogs->date}}</a>
              </div>
              <span class="divider">|</span>
             
            </div>
          
          
        
      
          </article> <!-- .blog-details -->

          
        </div>
         <div class="col-lg-4">

         <div class="sidebar-block">
              <h3 class="sidebar-title">Son Paylaşılanlar</h3>
              
                @foreach($latestData as $datalar)
              <div class="blog-item">
                <a style="width:110px;height:75px;" class="post-thumb" href="">
                  <img loading="lazy" style="object-fit:cover;" src="../blogimages/{{$datalar->blogimage}}" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="../blog/{{$datalar->id}}">{{$datalar->title}}</a></h5>
                  <div class="meta">
                    <a href="../blog/{{$datalar->id}}"><span class="mai-calendar"></span> {{$datalar->date}}</a>
                    <a href="../blog/{{$datalar->id}}"><span class="mai-person"></span> {{$datalar->author}}</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
        </div>

      </div> <!-- .row -->
      <div class="row">
      <div class="col-sm-12 py-4">
      <h2 class="post-title h1">{{$blogs->title}}</h2>
      <br>
            <div class="post-content">
             
            {!! $blogs->content !!}
            
            </div>

      </div></div>
      @endforeach
    </div> <!-- .container -->
  </div>

  
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>