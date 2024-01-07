<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Birlikte Gelişim</title>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Doktorlarınızla güvenli ve hızlı bir şekilde görüntülü görüşmeler ayarlayın. Sağlık sorularınızı uzaktan çözün, randevularınızı kolayca planlayın.">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">
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

<style type="text/css">
  
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
  </style>

@foreach($doktoradi as $doktoradii)
<div class="page-section pt-5">
    <div class="container">
    <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Anasayfa</a></li>
              <li class="breadcrumb-item"><a href="{{url('doctors')}}">Doktorlar</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$doktoradii->name}}</li>
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->
     
    <div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
           
          <div class="col-lg-5">
               <div style="width:320px;" class="post-thumb">
            <img src="../doctorimages/{{$doktoradii->doctorimage}}" alt="">
            </div>
            </div>
            <h2 style="font-size:25px;font-weight:bold;" class="post-title h3">{{$doktoradii->name}} / <span style="color:#a7537d;">{{$doktoradii->speciality}}</span></h2>
            @if($profile->isEmpty())
            
            <div class="post-content">
          
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Duis viverra dui eu pharetra pellentesque. Donec a eros leo. Quisque sed ligula vitae lorem efficitur faucibus. Praesent sit amet imperdiet ante. Nulla id tellus auctor, dictum libero a, malesuada nisi. Nulla in porta nibh, id vestibulum ipsum. Praesent dapibus tempus erat quis aliquet. Donec ac purus id sapien condimentum feugiat.</p>

              <p>Praesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate</p>
            </div>
            @endif
            @foreach($profile as $profil)
            <br><div class="post-content">
            {!! $profil ->about !!}    </div>
           @endforeach
          </article> <!-- .blog-details -->
        
        <div class="comment-form-wrap pt-5">
                  @if (session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{ session()->get('message') }}
        </div>
        @endif
        @if(Route::has('login'))
        @auth
        <h1 class="text-center wow " style="font-size:20px;">Doktoru Yorumla</h1>
            <form class="main-form" action="{{url('yorumyap')}}" method="POST" >
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow ">
        
         
            <input type="text" name ="name"  class="form-control"  value="{{Auth::user()->name}}" disabled>
         
        
          </div>
          <div class="col-12 py-2 wow " data-wow-delay="300ms">
            <textarea  name="yorum" id="yorum" class="form-control" rows="6" placeholder="Yorumunuzu Giriniz"></textarea>
          </div>
        </div>
                  <span class="text-center wow " style="color:#596261;">Puanla</span><br>
            <div class="rate">
              <input type="radio" id="star5" name="rate" value="5" />
              <label for="star5" title="Çok İyi">5 stars</label>
              <input type="radio" id="star4" name="rate" value="4" />
              <label for="star4" title="İyi">4 stars</label>
              <input type="radio" id="star3" name="rate" value="3" />
              <label for="star3" title="Normal">3 stars</label>
              <input type="radio" id="star2" name="rate" value="2" />
              <label for="star2" title="Kötü">2 stars</label>
              <input type="radio" id="star1" name="rate" value="1" />
              <label for="star1" title="Çok Kötü">1 star</label>
            </div>
                  <input style="visibility:hidden;" type="text" name ="doktor"  class="form-control"  value="{{$doktoradii->id}}" >
                  <button type="submit" style="background-color:green;"class="btn btn-primary mt-3 wow ">Yorumu Gönder</button>
                </form>
                    
       
       
        @endauth
           
           @endif
           </div>
           <br>
           </div>
        <div class="col-lg-4">
          <div class="sidebar">
           
            <div class="sidebar-block">
              <h4 class="sidebar-title">Hakkındaki Yorumlar</h4>
              @if($comments)
              @foreach($comments as $yorumlar)
              <span style="color:#596261;font-weight:bold;">{{$yorumlar->kimden}} </span><br>  <span style="color:#596261;word-wrap: break-word;">{{$yorumlar->yorum}}</span>
                <hr><br>
             @endforeach
             @endif
            </div>

            <div class="sidebar-block">
              <h4 class="sidebar-title">Son Paylaşılanlar</h4>
              
                @foreach($latestData as $datalar)
              <div class="blog-item">
                <a style="width:110px;height:75px;" class="post-thumb" href="">
                  <img style="object-fit:cover;" src="../blogimages/{{$datalar->blogimage}}" alt="">
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
      </div> @endforeach
    </div> <!-- .container -->
    <div class="row">
    <div class="col-lg-8">
</div>
</div>
  </div>

  
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>