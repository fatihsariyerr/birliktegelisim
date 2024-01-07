<div class="page-section pb-0">
      <div class="container">
      <form action="{{url('sonucugonder')}}" method="POST" >
        @csrf
        <div class="input-group">
        <input id="formid" name="formid" type="text" value="{{session()->get('form')}}" style="display:none;" class="form-control">
      <input id="privateid" name="privateid" type="text" value="{{session()->get('privateid')}}" style="display:none;" class="form-control">
    </div>
        <div class="form-group">
    <label>Oyuncakları yere atıp düşüşünü seyreder mi?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru28" id="radio_30" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_30" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru28" id="radio_31" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_31" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Önüne konan bir kesme şekeri eline almaya çalışır mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru29" id="radio_32" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_32" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru29" id="radio_33" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_33" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Bardağı iki eliyle tutar mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru30" id="radio_34" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_34" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru30" id="radio_35" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_35" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Yatarken yastıklara ya da ellerinize tutunup kendini yukarı çekerek oturur mu?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru31" id="radio_36" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_36" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru31" id="radio_37" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_37" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Küçük bir parça ekmek ya da bisküviyi bir elinden öbür eline geçirir mi?
 (kaşık, çıngırak gibi uzun sapı olmayan bir şeyi bir elinden diğerine geçirmesi gerekir.)
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru32" id="radio_38" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_38" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru32" id="radio_39" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_39" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Eğilerek, düşen eşyaları arar mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru33" id="radio_40" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_40" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru33" id="radio_41" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_41" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Kollarının altından tutunca yürüme hareketleri yapar mı</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru34" id="radio_42" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_42" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru34" id="radio_43" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_43" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>Başlığını çekip çıkarır mı? (göstererek sorunuz)</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru35" id="radio_44" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_44" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru35" id="radio_45" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_45" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
    
  <div class="form-group">
    <label>Sırtüstü yatarken yana döner mi? ( elinizi düz durumdan yada çevirerek gösterinz)
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru36" id="radio_46" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_46" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru36" id="radio_47" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_47" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>Sırtüstü yatarken karnının üzerine döner mi? (avcunuzu düz durumdan tersine 
 çevirerek gösteriniz)
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru37" id="radio_48" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_48" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru37" id="radio_49" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_49" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>Elindeki kaşığı ses çıkarmak için yere vurur mu?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru38" id="radio_50" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_50" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru38" id="radio_51" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_51" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Küçük üzüm tanelerini avuçlayarak eline alır mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru39" id="radio_52" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_52" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru39" id="radio_53" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_53" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>Yemeğini çiğner mi?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru40" id="radio_54" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_54" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru40" id="radio_55" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_55" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>"Da-da, ba-ba, ma-ma, de-de" gibi sesler çıkarır mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru41" id="radio_56" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_56" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru41" id="radio_57" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_57" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>İki elini kullanarak bardağı kaldırır mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru42" id="radio_58" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_58" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru42" id="radio_59" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_59" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Elindeki oyuncakları yere atarak oyun yapıp sizin almanızdan hoşlanır mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru43" id="radio_60" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_60" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru43" id="radio_61" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_61" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
  <button type="submit" style="background-color:green;"class="btn btn-primary mt-3 wow zoomIn">Sonucu Gönder</button>
  </div>

</form>
</div>  </div>

