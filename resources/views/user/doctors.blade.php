
@include('user.header')
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

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#searchForm').on('submit', function (e) {
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: 'GET',
                url: $(this).attr('action'),
                data: formData,
                success: function (data) {
                  $('#searchResults').html($(data).find('#searchResults').html());
                }
            });
        });

        $('#searchQuery').on('input', function () {
            $('#searchForm').submit();
        });
    });
</script>

  <div class="page-section ">
    <div class="container">
      <div class="row">
      <div  class="col-lg-12">
    <div class="search-form">
        <form action="{{ url('/doctors') }}" method="get" id="searchForm">
            <div class="input-group">
                          
            <div class="form-group">
                <input class="form-field" type="text" placeholder="Uzmanlık Alanı veya Doktor Adı ile Ara" name="query" id="searchQuery" value="{{$query}}">
                <span>Ara</span>
            </div>
            </div>
        </form>
    </div>
</div>
 <style>
  :root {

--input-color: #99A3BA;
--input-border: #CDD9ED;
--input-background: #fff;
--input-placeholder: #CBD1DC;

--input-border-focus: #275EFE;

--group-color: var(--input-color);
--group-border: var(--input-border);
--group-background: #EEF4FF;

--group-color-focus: #fff;
--group-border-focus: var(--input-border-focus);
--group-background-focus: #678EFE;

}

.form-field {
display: block;
width: 100%;
padding: 8px 16px;
line-height: 25px;
font-size: 14px;
font-weight: 500;
font-family: inherit;
border-radius: 6px;
-webkit-appearance: none;
color: var(--input-color);
border: 1px solid var(--input-border);
background: var(--input-background);
transition: border .3s ease;
&::placeholder {
    color: var(--input-placeholder);
}
&:focus {
    outline: none;
    border-color: var(--input-border-focus);
}
}

.form-group {
position: relative;
display: flex;
width: 100%;
& > span,
.form-field {
    white-space: nowrap;
    display: block;
    &:not(:first-child):not(:last-child) {
        border-radius: 0;
    }
    &:first-child {
        border-radius: 6px 0 0 6px;
    }
    &:last-child {
        border-radius: 0 6px 6px 0;
    }
    &:not(:first-child) {
        margin-left: -1px;
    }
}
.form-field {
    position: relative;
    z-index: 1;
    flex: 1 1 auto;
    width: 1%;
    margin-top: 0;
    margin-bottom: 0;
}
& > span {
    text-align: center;
    padding: 8px 12px;
    font-size: 14px;
    line-height: 25px;
    color: var(--group-color);
    background: var(--group-background);
    border: 1px solid var(--group-border);
    transition: background .3s ease, border .3s ease, color .3s ease;
}
&:focus-within {
    & > span {
        color: var(--group-color-focus);
        background: var(--group-background-focus);
        border-color: var(--group-border-focus);
    }
}
}

html {
box-sizing: border-box;
-webkit-font-smoothing: antialiased;
}

* {
box-sizing: inherit;
&:before,
&:after {
    box-sizing: inherit;
}
}

// Center
body {
min-height: 100vh;
font-family: 'Mukta Malar', Arial;
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
background: #F5F9FF;  
.form-group {
    max-width: 360px;
    &:not(:last-child) {
        margin-bottom: 32px;
    }
}
}
  </style>
    </div>
      <div class="row justify-content-center">

      
        <div class="col-lg-10">

          <div class="row" id="searchResults">
            
         
          @foreach($doctor as $doctors)
       
     
       <div class="item">
                 <div class="card-doctor">
                 <a href="../profile/{{$doctors->slug}}"> 
                   <div class="header" style="height:240px;">
                     <img loading="lazy" src="doctorimages/{{$doctors->doctorimage}}" alt="">
                    
                   </div>
       </a>
               <div class="body">
                   <a href="../profile/{{$doctors->slug}}">    <p class="text-xl mb-0">{{$doctors->name}} / <span style="color:#a7537d;">{{$doctors->speciality}} </span></p> </a>
                     <br>
                  
                     @if(Route::has('login'))
                 
                 @auth   
                 <a href="#appointment">    <span  class="badge badge-outline-success w-100">Seans Ücreti : {{$doctors->price}} ₺</span></a>
            @else
            <a href="{{url('login')}}">  <span class="badge badge-outline-success w-100">Seans Ücreti : {{$doctors->price}} ₺</span></a>
            @endauth
            @endif
          <br>
       <div style="position:relative;margin-left:10px;" class="rate">
           @for ($i = 5; $i >= 1; $i--)
           @php
           $doctorComments = $comments->where('doktor', $doctors->id);
           $averageRate = $doctorComments->avg('rank');
           $roundedAverage = ceil($averageRate);
         
       @endphp
               <input  type="radio" id="star{{ $i }}" name="rate{{$doctors->name}}" value="{{ $i }}" {{ $roundedAverage == $i ? 'checked' : '' }} disabled />
               <label  for="star{{ $i }}" title="{{ $i }} stars">{{ $i }} stars</label>
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


