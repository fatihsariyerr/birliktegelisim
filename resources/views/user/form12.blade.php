<div class="page-section pb-0">
      <div class="container">
      <form action="{{url('sonucugonder')}}" method="POST" >
        @csrf
        <div class="input-group">
        <input id="formid" name="formid" type="text" value="{{session()->get('form')}}" style="display:none;" class="form-control">
      <input id="privateid" name="privateid" type="text" value="{{session()->get('privateid')}}" style="display:none;" class="form-control">
    </div>
        <div class="form-group">
    <label>Düz bir çizgi çizer mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru121" id="radio_196" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_196" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru121" id="radio_197" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_197" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Bir iki düğmeyi ilikler mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru122" id="radio_198" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_198" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru122" id="radio_199" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_199" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>"Hangisi uzun" diye sorulunca,uzun olanı gösterir mi? (Göstererek sorun)

</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru123" id="radio_200" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_200" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru123" id="radio_201" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_201" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Tuvalete yardımsız gider mi? Kilodunu yardımsız indirip çeker mi?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru124" id="radio_202" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_202" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru124" id="radio_203" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_203" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Ayakkabılarını yardımsız giyer mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru125" id="radio_204" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_204" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru125" id="radio_205" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_205" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Ezbere televizyon reklamı, şiir, tekerleme söyler mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru126" id="radio_206" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_206" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru126" id="radio_207" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_207" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>"Nasıl" kelimesini kullanarak soru sorar mı?
 (Örnet isteyiniz)
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru127" id="radio_208" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_208" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru127" id="radio_209" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_209" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>Başka çocuklarla körebe, sek sek, saklambaç gibi oyunlar oynar mı
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru128" id="radio_210" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_210" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru128" id="radio_211" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_211" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Sek sek oynar mı? Tek ayağı üzerinde zıplar mı?
 (Göstererek sorun)


</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru129" id="radio_212" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_212" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru129" id="radio_213" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_213" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Mahallede (köyde) veya evinizin bahçesinde tek başına dolaşır mı

</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru130" id="radio_214" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_214" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru130" id="radio_215" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_215" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Yaşını bilir mi?

</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru131" id="radio_216" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_216" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru131" id="radio_217" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_217" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Yardımsız pantalonunu, kazağını giyer mi?
 Kızlara: Yardımsız etekliğini, kazağını giyer mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru132" id="radio_218" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_218" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru132" id="radio_219" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_219" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Tek başına komşuya gidip istenileni alır mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru133" id="radio_220" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_220" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru133" id="radio_221" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_221" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Parmaklarını şaklatır mı? (gösteriniz)
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru134" id="radio_222" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_222" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru134" id="radio_223" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_223" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>"Eğer uslu durursam bana şeker verir misin?" gibi
 eğerle başlayan cümleler kurar mı
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru135" id="radio_224" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_224" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru135" id="radio_225" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_225" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>



  <div class="form-group">
  <button type="submit" style="background-color:green;"class="btn btn-primary mt-3 wow zoomIn">Sonucu Gönder</button>
  </div>

</form>
</div>  </div>

