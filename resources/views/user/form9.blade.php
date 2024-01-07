<div class="page-section pb-0">
      <div class="container">
      <form action="{{url('sonucugonder')}}" method="POST" >
        @csrf
        <div class="input-group">
        <input id="formid" name="formid" type="text" value="{{session()->get('form')}}" style="display:none;" class="form-control">
      <input id="privateid" name="privateid" type="text" value="{{session()->get('privateid')}}" style="display:none;" class="form-control">
    </div>
        <div class="form-group">
    <label>İki kibrit kutusunu üst üste koyup kule yapar mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru85" id="radio_142" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_142" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru85" id="radio_143" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_143" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Altı ıslandığında size haber verir mi?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru86" id="radio_144" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_144" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru86" id="radio_145" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_145" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Kavanozların, şişelerin kapaklarını açıp kapar mı?

</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru87" id="radio_146" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_146" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru87" id="radio_147" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_147" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Kapıyı açar mı?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru88" id="radio_148" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_148" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru88" id="radio_149" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_149" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>2 ya da 3 kelimeyi açıkça söyler mi? 
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru89" id="radio_150" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_150" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru89" id="radio_151" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_151" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Ufak ev işlerini yapar mı? Örnek verilebilir: "Bardağı 
 mutfağa koyar mı? hırkasını kaldırır mı"?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru90" id="radio_152" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_152" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru90" id="radio_153" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_153" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Müziğe uygun olarak ellerini çırpar mı?
 (Tempo tutar mı?)
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru91" id="radio_154" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_154" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru91" id="radio_155" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_155" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>Bir elini öbür eline tercih eder mi?

</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru92" id="radio_156" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_156" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru92" id="radio_157" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_157" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>İki kelimelik cümleler kurar mı? "Baba gitti", "elma ver"
 gibi, örnekler veriniz.
</label> 
  <div>    
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru93" id="radio_158" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_158" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru93" id="radio_159" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_159" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Kendi kendine kaşık çatal kullanarak yemek yer mı? (Yemeğinin çoğunu çatal
 kaşıkla yerse puan verilir.)</label> 
  <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru94" id="radio_160" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_160" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru94" id="radio_161" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_161" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Tehlikelerden kendini korur mu? Sıcak soba, kırık cam,
 bıçak, ateş gibi. </label> 
  <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru95" id="radio_162" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_162" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru95" id="radio_163" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_163" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Arkadaşının ismini bilir mi? </label> 
  <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru96" id="radio_164" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_164" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru96" id="radio_165" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_165" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>İsteklerini basit cümlelerle ifade eder mi?</label> 
  <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru97" id="radio_166" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_166" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru97" id="radio_167" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_167" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Bir kutuyu alıp sanki arabasıymış gibi yürütür mü?
 ya da bir sopa parçasını at yerine koyar mı?</label> 
  <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru98" id="radio_168" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_168" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru98" id="radio_169" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_169" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Ellerini yıkamayı bilir mi?</label> 
  <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru99" id="radio_170" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_170" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru99" id="radio_171" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_171" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Diğer çocuklarla (evcilik) oynar mı?</label> 

  <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru100" id="radio_172" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_172" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru100" id="radio_173" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_173" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Kendi başına merdivenden inip çıkar mı? (Büyüklerin
 inip çıktığı gibi) göstererek sorun.</label> 
  <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru101" id="radio_174" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_174" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru101" id="radio_175" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_175" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>



  <div class="form-group">
  <button type="submit" style="background-color:green;"class="btn btn-primary mt-3 wow zoomIn">Sonucu Gönder</button>
  </div>

</form>
</div>  </div>

