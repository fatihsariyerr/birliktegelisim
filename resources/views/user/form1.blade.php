
<div class="page-section pb-0">
      <div class="container">
      <form action="{{url('sonucugonder')}}" method="POST" >
        @csrf
        <div class="input-group">
        <input id="formid" name="formid" type="text" value="{{session()->get('form')}}" style="display:none;" class="form-control">
      <input id="privateid" name="privateid" type="text" value="{{session()->get('privateid')}}" style="display:none;" class="form-control">
    </div>
        <div class="form-group">
    <label>Ani ses ya da gürültüden ürküp sıçrar mı?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru1" id="radio_0" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_0" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru1" id="radio_1" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_1" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Konuşulunca sesler (ağlama dışında) çıkarır mı? (Cevap
 evetse.) Nasıl sesler çıkarır diye sorun ve kaydedin</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru2" id="radio_2" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_2" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru2" id="radio_3" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_3" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Tanıdık bir sese başını çevirir mi?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru3" id="radio_4" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_4" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru3" id="radio_5" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_5" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Kucağa alındığında susar sakinleşir mi?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru4" id="radio_6" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_6" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru4" id="radio_7" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_7" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Kaşık, meme yaklaşınca daha ağzına dokunmadan
 ağzını açar mı?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru5" id="radio_8" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_8" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru5" id="radio_9" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_9" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Kucağınıza aldığınızda kafasını dik tutar mı?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru6" id="radio_10" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_10" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru6" id="radio_11" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_11" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Bebek sırt üstü yatarken ellerini seyreder mi?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru7" id="radio_12" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_12" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru7" id="radio_13" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_13" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>Bebek yüzüstü yatarken başını kadırır mı?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru8" id="radio_14" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_14" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru8" id="radio_15" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_15" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>Bebeğinizle konuşup gülümserseniz bebeğiniz de size
 gülümser mi?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru9" id="radio_16" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_16" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru9" id="radio_17" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_17" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>Gözleri ile hareket eden şekilleri izler mi?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru10" id="radio_18" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_18" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru10" id="radio_19" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_19" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>Kucağınızda otururken kafasını çevirip etrafa bakar mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru11" id="radio_20" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_20" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru11" id="radio_21" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_21" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>Bebek biberonunu, anne memesini görünce hareketlenir,
 elini kolunu sallar mı?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru12" id="radio_22" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_22" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru12" id="radio_23" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_23" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>Kucağınıza aldığınızda kafasını dik tutar mı?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru13" id="radio_24" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_24" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru13" id="radio_25" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_25" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
  <button type="submit" style="background-color:green;"class="btn btn-primary mt-3 wow zoomIn">Sonucu Gönder</button>
  </div>

</form>
</div>  </div>

