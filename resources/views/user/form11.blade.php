<div class="page-section pb-0">
      <div class="container">
      <form action="{{url('sonucugonder')}}" method="POST" >
        @csrf
        <div class="input-group">
        <input id="formid" name="formid" type="text" value="{{session()->get('form')}}" style="display:none;" class="form-control">
      <input id="privateid" name="privateid" type="text" value="{{session()->get('privateid')}}" style="display:none;" class="form-control">
    </div>
        <div class="form-group">
    <label>Düğmesini açar mı, açabilir mi
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru110" id="radio_174" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_174" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru110" id="radio_175" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_175" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Diğer çocukların kız ya da oğlan olduklarını bilir mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru111" id="radio_176" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_176" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru111" id="radio_177" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_177" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Kakasını tutup, söyleyebilir mi

</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru112" id="radio_178" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_178" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru112" id="radio_179" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_179" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>"Hangisi büyük" deyince daha büyük olanı gösterir mi?
 (Göstererek sorun)</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru113" id="radio_180" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_180" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru113" id="radio_181" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_181" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Sevdiği, tercih ettiği arkadaşı var mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru114" id="radio_182" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_182" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru114" id="radio_183" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_183" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>2, 3 gün önceki olayları hatırlayıp anlatır mı? "hani
 çarşıya gitmiştik ya" gibi.
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru115" id="radio_184" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_184" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru115" id="radio_185" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_185" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>İsmin ne diye sorulunca ismini söyler mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru116" id="radio_186" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_186" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru116" id="radio_187" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_187" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>"Bayram geliyor" veya "bir yere gideceğiz", diye
 heyecanlanır mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru117" id="radio_188" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_188" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru117" id="radio_189" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_189" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>"Ekmeğin, simidin yarısını ver" deyince yarısını verebilir mi?
 "yarım"ın ne demek oldugunu bilir mi?

</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru118" id="radio_190" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_190" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru118" id="radio_191" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_191" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Siz konuşurken anlamadığı bir kelime olursa sorar mı? ‘ne,
 demek’ der mi?

</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru119" id="radio_192" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_192" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru119" id="radio_193" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_193" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Kutu, makarna gibi eşyaları oyuncak amacıyla kullanır mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru120" id="radio_194" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_194" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru120" id="radio_195" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_195" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>



  <div class="form-group">
  <button type="submit" style="background-color:green;"class="btn btn-primary mt-3 wow zoomIn">Sonucu Gönder</button>
  </div>

</form>
</div>  </div>

