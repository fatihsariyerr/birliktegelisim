<style>.listing-card[_ngcontent-xbs-c152]{border:1px solid #eceffa;border-radius:6px;padding:16px;margin-bottom:16px;display:flex;flex-direction:column;background-color:#fff;cursor:pointer}.listing-card.lab[_ngcontent-xbs-c152]{cursor:default}.listing-card.lab[_ngcontent-xbs-c152]   .listing-card__actions[_ngcontent-xbs-c152]{justify-content:end}.listing-card__detail[_ngcontent-xbs-c152]{width:100%;display:flex;justify-content:space-between;padding-bottom:16px;border-bottom:1px solid #eceffa}.listing-card__detail__image[_ngcontent-xbs-c152]{width:82px;height:82px;margin-right:16px;border-radius:4px;object-fit:contain}.listing-card__detail__info[_ngcontent-xbs-c152]{display:flex;flex-direction:column;flex:auto}.listing-card__detail__info__name[_ngcontent-xbs-c152]{font-weight:600;font-size:16px;line-height:150%;color:#404977;margin-bottom:12px}.listing-card__detail__info__speciality-name[_ngcontent-xbs-c152], .listing-card__detail__info__institution-name[_ngcontent-xbs-c152]{font-size:14px;line-height:150%;color:#a5a9bc}.listing-card__detail__info__actions[_ngcontent-xbs-c152]{display:flex;flex-direction:column;align-items:end}.listing-card__detail__info__actions__favorite[_ngcontent-xbs-c152]{margin-top:8px;margin-bottom:12px;display:block}.listing-card__detail__info__actions__institution-logo[_ngcontent-xbs-c152]{max-width:90px;height:60px;object-fit:contain}.listing-card__actions[_ngcontent-xbs-c152]{padding-top:16px;display:flex;align-items:center;justify-content:space-between}.listing-card__actions__info[_ngcontent-xbs-c152]{color:#404977}.listing-card__actions__info__text[_ngcontent-xbs-c152]   i[_ngcontent-xbs-c152]{font-size:16px;margin-right:8px}.listing-card__actions__info__text__not-available[_ngcontent-xbs-c152]{font-weight:400;font-size:12px;line-height:18px;color:#a5a9bc}.listing-card__actions__info__text__available[_ngcontent-xbs-c152]{font-weight:600;font-size:12px;line-height:16px}.listing-card__actions__info__date[_ngcontent-xbs-c152]{font-weight:400;font-size:12px;line-height:18px;color:#a5a9bc;margin-top:4px}.availabilityButton[_ngcontent-xbs-c152]{justify-content:center;align-items:center;background:#ffffff;border:1px solid #404977;border-radius:6px;color:#404977}.availabilityButton[_ngcontent-xbs-c152]:hover{background-color:#404977;color:#fff}</style>
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
    width:0.9em;
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
      @foreach($doctor as $doctors)
    
      <div _ngcontent-xbs-c152="" class="listing-card"><div _ngcontent-xbs-c152="" class="listing-card__detail">  <a href="../profile/{{$doctors->id}}"> <img _ngcontent-xbs-c152="" class="listing-card__detail__image" src="doctorimages/{{$doctors->doctorimage}}" alt="{{$doctors->name}}"></a><div _ngcontent-xbs-c152="" class="listing-card__detail__info">  <a href="../profile/{{$doctors->id}}"> <div _ngcontent-xbs-c152="" class="listing-card__detail__info__name">  {{$doctors->name}} </div></a><div _ngcontent-xbs-c152="" class="listing-card__detail__info__speciality-name"> {{$doctors->speciality}} </div></div><div _ngcontent-xbs-c152="" class="listing-card__detail__info__actions"><app-heart _ngcontent-xbs-c152="" class="listing-card__detail__info__actions__favorite ng-star-inserted" _nghost-xbs-c129=""><div _ngcontent-xbs-c129="" class="d-flex align-items-center"><!---->
    
   <img _ngcontent-xbs-c129="" src="https://img-evital.mncdn.com/evital/assets/images/icons/heart.svg" class="me-2 cursor-heart ng-star-inserted"><!----><!----><!---->
      &nbsp;
        <p _ngcontent-xbs-c129="" class="semibold mb-0 h7">
      @php
    $doctorComments = $comments->where('doktor', $doctors->id)->count();
    
  
@endphp
{{$doctorComments}}
      </p> 
    </div></app-heart><!----><!----></div></div><div _ngcontent-xbs-c152="" class="listing-card__actions"><div _ngcontent-xbs-c152="" class="listing-card__actions__info ng-star-inserted"><div _ngcontent-xbs-c152="" class="listing-card__actions__info__text"><i _ngcontent-xbs-c152="" class="fa-light fa-calendar"></i><span _ngcontent-xbs-c152="" class="listing-card__actions__info__text__available ng-star-inserted">Doktorun Değerlendirmesi</span><!----><!----></div><span _ngcontent-xbs-c152="" class="listing-card__actions__info__date">
    <div  class="rate">
    @for ($i = 5; $i >= 1; $i--)
    @php
    $doctorComment = $comments->where('doktor', $doctors->id);
    $averageRate = $doctorComment->avg('rank');
    $roundedAverage = ceil($averageRate);
  
@endphp
        <input type="radio" id="star{{ $i }}" name="rate{{$doctors->name}}" value="{{ $i }}" {{ $roundedAverage == $i ? 'checked' : '' }} disabled />
      
        <label for="star{{ $i }}" title="{{ $i }} stars">{{ $i }} stars</label>

    @endfor
</div> 
</span></div><!---->

@if(Route::has('login'))
          
          @auth   
          <a href="#appointment">    <span  class="badge badge-outline-success">Seans Ücreti : {{$doctors->price}} ₺</span></a>
     @else
     <a href="{{url('login')}}">  <span  class="badge badge-outline-success">Seans Ücreti : {{$doctors->price}} ₺</span></a>
     @endauth
     @endif

<!----><!----></div></div>

    
    

 
        
      
           
         
      
@endforeach

      </div>
    </div>
  </div>

  
