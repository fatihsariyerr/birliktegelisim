<div class="page-section pb-0">
      <div class="container">
      <form action="{{url('sonucugonder')}}" method="POST" >
        @csrf
        <div class="input-group">
        <input id="formid" name="formid" type="text" value="{{session()->get('form')}}" style="display:none;" class="form-control">
      <input id="privateid" name="privateid" type="text" value="{{session()->get('privateid')}}" style="display:none;" class="form-control">
    </div>
        <div class="form-group">
    <label>"Atta" dendiğinde kapıya bakar ya da hareketlenir mi?
 (1 puan alması için sözel uyarıcıya tepki vermesi gereklidir.)
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru44" id="radio_62" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_62" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru44" id="radio_63" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_63" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Elindeki iki kutuyu, oyuncağı birbirine vurur mu
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru45" id="radio_64" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_64" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru45" id="radio_65" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_65" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Bardağı iki eliyle tutar mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru46" id="radio_66" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_66" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru46" id="radio_67" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_67" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Yatarken yastıklara ya da ellerinize tutunup kendini yukarı çekerek oturur mu?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru47" id="radio_68" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_68" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru47" id="radio_69" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_69" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Küçük bir parça ekmek ya da bisküviyi bir elinden öbür eline geçirir mi?
 (kaşık, çıngırak gibi uzun sapı olmayan bir şeyi bir elinden diğerine geçirmesi gerekir.)
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru48" id="radio_70" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_70" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru48" id="radio_71" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_71" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Eğilerek, düşen eşyaları arar mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru49" id="radio_72" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_72" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru49" id="radio_73" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_73" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
  <button type="submit" style="background-color:green;"class="btn btn-primary mt-3 wow zoomIn">Sonucu Gönder</button>
  </div>

</form>
</div>  </div>

