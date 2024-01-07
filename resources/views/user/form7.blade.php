<div class="page-section pb-0">
      <div class="container">
      <form action="{{url('sonucugonder')}}" method="POST" >
        @csrf
        <div class="input-group">
        <input id="formid" name="formid" type="text" value="{{session()->get('form')}}" style="display:none;" class="form-control">
      <input id="privateid" name="privateid" type="text" value="{{session()->get('privateid')}}" style="display:none;" class="form-control">
    </div>
        <div class="form-group">
    <label>Evdeki bazı eşyaların yerlerini bilir mi? Örneğin
 bardağın mutfakta olduğunu bilir mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru71" id="radio_114" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_114" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru71" id="radio_115" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_115" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Bebek sever mi? Bebeğine dayak atar mı? Kendinden
 ufak bir bebeği sever mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru72" id="radio_116" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_116" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru72" id="radio_117" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_117" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Sandalyeye, sedire çıkar mı
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru73" id="radio_118" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_118" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru73" id="radio_119" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_119" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Arkasından oyuncak çekerek yürür mü</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru74" id="radio_120" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_120" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru74" id="radio_121" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_121" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Koşar mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru75" id="radio_122" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_122" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru75" id="radio_123" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_123" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Ayakkabı ve çorabını çıkarır mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru76" id="radio_124" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_124" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru76" id="radio_125" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_125" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
  <button type="submit" style="background-color:green;"class="btn btn-primary mt-3 wow zoomIn">Sonucu Gönder</button>
  </div>

</form>
</div>  </div>

