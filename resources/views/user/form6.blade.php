<div class="page-section pb-0">
      <div class="container">
      <form action="{{url('sonucugonder')}}" method="POST" >
        @csrf
        <div class="input-group">
        <input id="formid" name="formid" type="text" value="{{session()->get('form')}}" style="display:none;" class="form-control">
      <input id="privateid" name="privateid" type="text" value="{{session()->get('privateid')}}" style="display:none;" class="form-control">
    </div>
        <div class="form-group">
    <label>Kollarını uzatarak elbisesinin giydirilmesinde yardımcı
 olur mu?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru60" id="radio_93" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_93" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru60" id="radio_94" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_94" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>İstediği bir eşyayı eliyle gösterir mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru61" id="radio_95" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_95" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru61" id="radio_96" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_96" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Bir şeyi isteyip istemediğini belli eder mi? (evet ise ne yaptığını sorunuz)
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru62" id="radio_97" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_97" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru62" id="radio_98" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_98" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Yardımsız bir kaç adım atar mı</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru63" id="radio_99" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_99" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru63" id="radio_100" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_100" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Yardımsız yürür mü?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru64" id="radio_101" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_101" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru64" id="radio_102" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_102" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Sepet, kova, file içine birşeyler koyarak taşır mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru65" id="radio_10222" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_10222" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru65" id="radio_10333" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_10333" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>"Bana ayakkabını göster" derseniz gösterir mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru66" id="radio_104" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_104" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru66" id="radio_105" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_105" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Tek tek kelimelerle konuşur mu? Örnek vermesini isteyiniz
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru67" id="radio_106" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_106" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru67" id="radio_107" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_107" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Bazı işleri kendi başına yapmakta ısrar eder mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru68" id="radio_108" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_108" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru68" id="radio_109" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_109" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Ayaktayken topa ayağı ile vurur mu?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru69" id="radio_110" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_110" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru69" id="radio_111" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_111" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>"Kapıyı kapat" gibi söylenen basit işleri yapar mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru70" id="radio_112" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_112" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru70" id="radio_113" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_113" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
  <button type="submit" style="background-color:green;"class="btn btn-primary mt-3 wow zoomIn">Sonucu Gönder</button>
  </div>

</form>
</div>  </div>

