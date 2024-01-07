<div class="page-section pb-0">
      <div class="container">
      <form action="{{url('sonucugonder')}}" method="POST" >
        @csrf
        <div class="input-group">
        <input id="formid" name="formid" type="text" value="{{session()->get('form')}}" style="display:none;" class="form-control">
      <input id="privateid" name="privateid" type="text" value="{{session()->get('privateid')}}" style="display:none;" class="form-control">
    </div>
        <div class="form-group">
    <label>Misafirlere oyuncağını gösterir mi
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru77" id="radio_126" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_126" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru77" id="radio_127" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_127" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Geri geri yürür mü?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru78" id="radio_128" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_128" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru78" id="radio_129" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_129" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Kaşıkla yemek yer mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru79" id="radio_130" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_130" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru79" id="radio_131" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_131" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Şarkı söyler ya da mırıldanır mı</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru80" id="radio_132" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_132" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru80" id="radio_133" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_133" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>2 ya da 3 kelimeyi açıkça söyler mi? 
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru81" id="radio_134" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_134" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru81" id="radio_135" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_135" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Televizyonda görüdüğü bazı şeyleri tanır mı? Kedi,
 araba gibi.
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru82" id="radio_136" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_136" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru82" id="radio_137" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_137" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>"Topunu (bebeğini) kaldır, bardağı içeri götür"
 dendiğinde söyleneni yapar mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru83" id="radio_138" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_138" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru83" id="radio_139" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_139" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>Şekerin ya da sakızın kağıdını açar mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru84" id="radio_140" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_140" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru84" id="radio_141" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_141" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
  <button type="submit" style="background-color:green;"class="btn btn-primary mt-3 wow zoomIn">Sonucu Gönder</button>
  </div>

</form>
</div>  </div>

