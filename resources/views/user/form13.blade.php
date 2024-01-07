<div class="page-section pb-0">
      <div class="container">
      <form action="{{url('sonucugonder')}}" method="POST" >
        @csrf
        <div class="input-group">
        <input id="formid" name="formid" type="text" value="{{session()->get('form')}}" style="display:none;" class="form-control">
      <input id="privateid" name="privateid" type="text" value="{{session()->get('privateid')}}" style="display:none;" class="form-control">
    </div>
        <div class="form-group">
    <label>Birden ona kadar sayar mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru136" id="radio_225" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_225" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru136" id="radio_226" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_226" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Terliklerini doğru giyer mi? Sağ terliğini sağa, sol
 terliğini sol ayağına giyer mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru137" id="radio_227" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_227" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru137" id="radio_228" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_228" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Rüyalarını anlatır mi?

</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru138" id="radio_229" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_229" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru138" id="radio_230" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_230" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Renkleri bilir mi? Renk adı verilerek sorulabilir</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru139" id="radio_231" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_231" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru139" id="radio_232" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_232" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Paraları tanır mı? 

</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru140" id="radio_233" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_233" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru140" id="radio_234" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_234" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Bir elde kaç parmak olduğunu bilir mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru141" id="radio_235" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_235" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru141" id="radio_236" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_236" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Yardımsız kendi kendine elbisesinin hepsini giyip
 çıkarır mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru142" id="radio_237" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_237" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru142" id="radio_238" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_238" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>Tv’de sevdiği programın zamanını bilir mi
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru143" id="radio_239" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_239" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru143" id="radio_240" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_240" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>"Bugün" "Yarın" "Dün" gibi kelimeleri doğru ve yerinde
 kullanır mı?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru144" id="radio_241" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_241" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru144" id="radio_242" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_242" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Makasla gazeteden, dergiden resim keser mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru145" id="radio_243" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_243" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru145" id="radio_244" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_244" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Bakarak bir kaç kelime yazar mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru146" id="radio_245" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_245" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru146" id="radio_246" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_246" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>7'den sonra hangi sayının geldiğini bilir mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru147" id="radio_247" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_247" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru147" id="radio_248" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_248" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>1'den 9'a kadar sayıları yazar mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru148" id="radio_249" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_249" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru148" id="radio_250" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_250" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Ekmek, simit gibi yiyeceklerin kaç para olduğunu
 bilir mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru149" id="radio_251" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_251" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru149" id="radio_252" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_252" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Birer birer yüze kadar sayar mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru150" id="radio_253" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_253" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru150" id="radio_254" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_254" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Haftanın günlerini sırası ile bilir mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru151" id="radio_255" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_255" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru151" id="radio_256" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_256" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Basit toplama işlemleri yapar mı? 2,2 daha kaç eder gibi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru152" id="radio_257" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_257" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru152" id="radio_258" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_258" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Adını yazar mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru153" id="radio_259" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_259" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru153" id="radio_260" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_260" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Adresini bilir mi? Köydeyse: Köyün, kasabanın adını bilir mi?
 Şehirdeyse: Mahallenin, sokağın adını bilir mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru154" id="radio_261" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_261" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru154" id="radio_262" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_262" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
  <button type="submit" style="background-color:green;"class="btn btn-primary mt-3 wow zoomIn">Sonucu Gönder</button>
  </div>

</form>
</div>  </div>

