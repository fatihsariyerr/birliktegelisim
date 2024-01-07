@include('user.header')


@if (session()->has('tamamlandi'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">X</button>
    {{ session()->get('tamamlandi') }}
</div><br>
<a href="/home/#appointment" class="btn btn-primary">Randevu Al</a>
@else

@if (session()->has('form'))


@if(session()->get('form')=="1")

@include('user.form1')

@elseif(session()->get('form')=="2")

@include('user.form2')

@elseif(session()->get('form')=="3")

@include('user.form3')

@elseif(session()->get('form')=="4")

@include('user.form4')


@elseif(session()->get('form')=="5")

@include('user.form5')

@elseif(session()->get('form')=="6")

@include('user.form6')

@elseif(session()->get('form')=="7")

@include('user.form7')

@elseif(session()->get('form')=="8")

@include('user.form8')

@elseif(session()->get('form')=="9")

@include('user.form9')

@elseif(session()->get('form')=="10")

@include('user.form10')

@elseif(session()->get('form')=="11")

@include('user.form11')

@elseif(session()->get('form')=="12")

@include('user.form12')

@elseif(session()->get('form')=="13")

@include('user.form13')




@endif


@else

<div class="page-section pb-0">
      <div class="container">
      <form action="{{url('testebasla')}}" method="POST" >
        @csrf
  <div class="form-group">
    <label for="cocukadi">Çocuk Adı</label> 
    <div class="input-group">
      
      <input id="cocukadi" name="cocukadi" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group">
    <label>Cinsiyet</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="cinsiyet" id="cinsiyet_0" type="radio" class="custom-control-input" value="erkek" required="required"> 
        <label for="cinsiyet_0" class="custom-control-label">Erkek</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="cinsiyet" id="cinsiyet_1" type="radio" class="custom-control-input" value="kiz" required="required"> 
        <label for="cinsiyet_1" class="custom-control-label">Kız</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Kreş / Ana okuluna devam ediyor mu?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="kresanaokulu" id="radio_0" type="radio" class="custom-control-input" value="evet"> 
        <label for="radio_0" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="kresanaokulu" id="radio_1" type="radio" class="custom-control-input" value="hayir"> 
        <label for="radio_1" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="kardesyascinsiyet">Kardeşlerinin Yaşları ve Cinsiyetleri</label> 
    <input id="kardesyascinsiyet" name="kardesyascinsiyet" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="textarea">Değerlendirme Nedeni (Açıklayınız)</label> 
    <textarea id="degerlendirmenedeni" name="degerlendirmenedeni" cols="40" rows="2" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="fizikselozur">Fiziksel Özür Bulunuyor İse Aşağıya Yazınız</label> 
    <input id="fizikselozur" name="fizikselozur" type="text" class="form-control" >
  </div>
  <div class="form-group">
    <label for="dogumtarihi">Doğum Tarihi</label> 
    <input id="dogumtarihi" name="dogumtarihi" type="date" class="form-control" required="required">
  </div>
  <div class="form-group">
    <label for="cocukyas">Yaşı (Ay Olarak Giriniz)</label> 
    <input id="cocukyas" name="cocukyas" placeholder="Örn. 12 veya 6" type="text" class="form-control" required="required">
  </div> 
  <div class="form-group">
  <button type="submit" style="background-color:green;"class="btn btn-primary mt-3 wow zoomIn">Teste Başla</button>
  </div>
</form>
</div>  </div>



@endif


@endif
