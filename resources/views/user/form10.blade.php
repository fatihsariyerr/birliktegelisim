<div class="page-section pb-0">
      <div class="container">
      <form action="{{url('sonucugonder')}}" method="POST" >
        @csrf
        <div class="input-group">
        <input id="formid" name="formid" type="text" value="{{session()->get('form')}}" style="display:none;" class="form-control">
      <input id="privateid" name="privateid" type="text" value="{{session()->get('privateid')}}" style="display:none;" class="form-control">
    </div>
        <div class="form-group">
    <label>Elini, ağzını, gözünü, ayağını, burnunu gösterip "bu ne"
 derseniz isimlerini doğru olarak söyler mi? (Göstererek
 sorun)
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru102" id="radio_158" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_158" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru102" id="radio_159" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_159" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Resimlere ya da Tv’ye bakarken tanıdığı şeylerin adını
 söyler mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru103" id="radio_160" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_160" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru103" id="radio_161" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_161" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Bardağa şişeden su doldurur mu?

</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru104" id="radio_162" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_162" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru104" id="radio_163" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_163" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Basit sorulara "evet, hayır" diyerek cevap verir mi?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru105" id="radio_164" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_164" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru105" id="radio_165" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_165" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Soru sorar mı? "baba nerede", "bu kim", "bu ne"? gibi
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru106" id="radio_166" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_166" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru106" id="radio_167" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_167" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Konuşması kolaylıkla anlaşılır mı
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru107" id="radio_168" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_168" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru107" id="radio_169" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_169" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Çişini tutup, söyleyebilir mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru108" id="radio_170" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_170" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru108" id="radio_171" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_171" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>Topu başının üzerinden ileri doğru atar mı? (gösteriniz)

</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru109" id="radio_172" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_172" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru109" id="radio_173" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_173" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
  <button type="submit" style="background-color:green;"class="btn btn-primary mt-3 wow zoomIn">Sonucu Gönder</button>
  </div>

</form>
</div>  </div>

