
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
<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp"style="font-size:30px;">Uzman Doktorlarımız</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
    

        @foreach($doctor as $doctors)
       
     
<div class="item">
          <div class="card-doctor">
          <a href="../profile/{{$doctors->id}}"> 
            <div class="header" style="height:240px;">
              <img loading="lazy" src="doctorimages/{{$doctors->doctorimage}}" alt="">
             
            </div>
</a>
        <div class="body">
            <a href="../profile/{{$doctors->id}}">    <p class="text-xl mb-0">{{$doctors->name}}</p> </a>
              <br>
              <span class="text-sm text-grey">{{$doctors->speciality}}</span>
              @if(Route::has('login'))
          
          @auth   
          <a href="#appointment">    <span style="position:absolute;margin-top:-2px;margin-left:30px;" class="badge badge-outline-success">Seans Ücreti : {{$doctors->price}} ₺</span></a>
     @else
     <a href="{{url('login')}}">  <span style="position:absolute;margin-top:-2px;margin-left:30px;" class="badge badge-outline-success">Seans Ücreti : {{$doctors->price}} ₺</span></a>
     @endauth
     @endif
   <br>
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

  
