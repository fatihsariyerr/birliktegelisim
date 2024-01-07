<div class="page-section pb-0">
      <div class="container">
      <form action="{{url('sonucugonder')}}" method="POST" >
        @csrf
        <div class="input-group">
        <input id="formid" name="formid" type="text" value="{{session()->get('form')}}" style="display:none;" class="form-control">
      <input id="privateid" name="privateid" type="text" value="{{session()->get('privateid')}}" style="display:none;" class="form-control">
    </div>
        <div class="form-group">
    <label>Müzik çalınca sallanır mı
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru50" id="radio_74" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_74" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru50" id="radio_75" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_75" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>İşaret parmağını kullanarak masa üzerindeki şeyleri
 yoklar, iter, yuvarlar mı? ( İşaret parmağınızla gösteriniz
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru51" id="radio_76" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_76" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru51" id="radio_65" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_65" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Eşyaya tutunarak sıralar mı? (anlaşılmazsa göstererek sorunuz
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru52" id="radio_77" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_77" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru52" id="radio_78" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_78" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Tek eli tutulduğunda adım atar mı?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru53" id="radio_79" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_79" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru53" id="radio_80" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_80" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Babasını görünce "baba", yemek isteyince "mama", su isteyince 
 "su" gibi kelimeler söyler mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru54" id="radio_81" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_81" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru54" id="radio_82" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_82" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Bir yere giderken baş baş yapar mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru55" id="radio_83" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_83" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru55" id="radio_84" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_84" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Tay-tay durur mu, çok kısa da olsa kendi başına 
 ayakta durur mu?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru56" id="radio_85" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_85" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru56" id="radio_86" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_86" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Ayaktayken çömelir mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru57" id="radio_87" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_87" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru57" id="radio_88" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_88" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Bana ver deyince elindeki oyuncağı size uzatır mı
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru58" id="radio_89" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_89" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru58" id="radio_90" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_90" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>"Hayır" "cıs", denince durur mu?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru59" id="radio_91" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_91" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru59" id="radio_92" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_92" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
  <button type="submit" style="background-color:green;"class="btn btn-primary mt-3 wow zoomIn">Sonucu Gönder</button>
  </div>

</form>
</div>  </div>

