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
@include('user.header')
  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/homepagebg.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Anasayfa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Doktorlar</li>
          </ol>
        </nav>
        <h1 style="font-size:30px;" class="font-weight-normal">Uzman Doktorlarımız</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="row">
            
         
            @foreach($doctor as $doctors)
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
              <a href="../profile/{{$doctors->id}}"> 
              <div class="header" style="height:240px;">
                  
             <img loading="lazy" src="doctorimages/{{$doctors->doctorimage}}" alt="">
                 
                </div></a>
                <div class="body">
                <a href="../profile/{{$doctors->id}}">    <p class="text-xl mb-0">{{$doctors->name}}</p></a>
              <span class="text-sm text-grey">{{$doctors->speciality}}</span>
              <div  class="rate">
    @for ($i = 5; $i >= 1; $i--)
    @php
    $doctorComments = $comments->where('doktor', $doctors->id);
    $averageRate = $doctorComments->avg('rank');
    $roundedAverage = ceil($averageRate);
  
@endphp
        <input type="radio" id="star{{ $i }}" name="rate{{$doctors->name}}" value="{{ $i }}" {{ $roundedAverage == $i ? 'checked' : '' }} disabled />
        <label for="star{{ $i }}" title="{{ $i }} stars">{{ $i }} stars</label>
    @endfor
</div>
                </div>
              </div>
            </div>
            @endforeach
          </div>

        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

@if(Route::has('login'))
          

          @auth
          @include('user.appointment')
@else
         
          @endauth
          @endif


  
</body>

  
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
</html>


