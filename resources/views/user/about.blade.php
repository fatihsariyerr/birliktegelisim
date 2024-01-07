@include('user.header')
  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/homepagebg.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Anasayfa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hakkımızda</li>
          </ol>
        </nav>
        <h1 style="font-size:30px;" class="font-weight-normal">Hakkımızda</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Pedagoglar</span> ile görüş</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>Aile</span> Sağlığını İyileştirir</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-heart"></span>
              </div>
              @if(Route::has('login'))
          

          @auth
                        <a href="{{url('gelisimdegerlendirmeformu')}}" >   <p><span>Gelişim</span> Değerlendirme Formu</p></a>
                        @else
                        <a href="{{url('login')}}" >   <p><span>Gelişim</span> Değerlendirme Formu</p></a>
                        @endauth
            @endif
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
      <div class="col-lg-8  wow fadeInUp">
          
          <p class="text-grey mb-4">  <a class="navbar-brand" href="{{url('home')}}"><span class="text-primary">Birlikte</span>-<span style="color:black;">Gelişim</span></a> olarak, çocukların sağlıklı gelişimi ve ailelerin ihtiyaçlarını merkeze alan bir yaklaşım benimsemekteyiz. Çocuklarımızın hayatlarının ilk yılları büyük bir önem taşır ve bu dönemde alınan destek ve rehberlik, çocukların gelecekteki başarılarına doğrudan etki edebilir.

          <br><br>Pedagog olarak, sizlere çocuklarınızın eğitim, duygusal gelişim, davranış sorunları, öğrenme güçlükleri ve aile içi ilişkiler gibi birçok konuda destek sağlama konusunda uzmanız. Çocukların benzersiz ihtiyaçlarına odaklanır ve ailelerin onlara en iyi şekilde rehberlik etmelerine yardımcı oluruz.
          <br><br> Hizmetlerimiz şunları içerir:
          <br><br>
<span style="font-weight:bold;text-decoration:underline;">Bireysel Danışmanlık:</span> Çocuğunuzun özel ihtiyaçlarına yönelik kişiselleştirilmiş danışmanlık hizmetleri sunuyoruz. Öğrenme güçlükleri, davranış sorunları, zihinsel sağlık sorunları veya herhangi bir gelişimsel konuda size yardımcı olmak için buradayız.
<br><br>
<span style="font-weight:bold;text-decoration:underline;">Aile İçi İletişim ve Eğitim:</span> Aile içi ilişkiler önemlidir, bu nedenle ailelerin daha sağlıklı iletişim kurmalarına ve çocuklarını daha iyi anlamalarına yardımcı oluyoruz. Ebeveynlik becerilerinizi geliştirmenize katkı sağlıyoruz.
<br><br>
<span style="font-weight:bold;text-decoration:underline;">Eğitim Seminerleri ve Atölyeler:</span> Ailelere ve eğitimcilerimize yönelik eğitim seminerleri ve atölyeler düzenliyoruz. Çocuk gelişimi, ebeveynlik stratejileri ve daha fazlası hakkında bilgi edinmek için bu fırsatları kaçırmayın.
<br><br>
<span style="font-weight:bold;text-decoration:underline;">Online Destek:</span> Teknolojinin gücünü kullanarak, uzaktan danışmanlık hizmetleri sunuyoruz. Herhangi bir coğrafi sınırlamayı aşarak, ihtiyaç duyduğunuz destek ve rehberliği size ulaştırıyoruz.
<br><br>
"Birlikte Gelişim" olarak amacımız, çocukların daha sağlıklı, mutlu ve başarılı bir geleceğe sahip olmalarına katkıda bulunmaktır. Sizlere, çocuklarınızın potansiyellerini keşfetmeleri ve en iyi şekilde gelişmeleri için gerekli araçları sunmak için buradayız.
<br><br>
Sorularınız veya danışmanlık hizmetleriyle ilgili daha fazla bilgi almak isterseniz, lütfen bizimle iletişime geçmekten çekinmeyin. Size yardımcı olmaktan mutluluk duyacağımızdan emin olabilirsiniz.
<br><br> </p>  </div>
        <div class="col-lg-10 mt-5">
          <h1 class="text-center mb-5 wow fadeInUp" style="font-size:30px;">Uzman Doktorlarımız</h1>
          <div class="row justify-content-center">
          @foreach($doctor as $doctors)
       
     
       <div class="item">
                 <div class="card-doctor">
                 <a href="../profile/{{$doctors->slug}}"> 
                   <div class="header" style="height:240px;">
                     <img loading="lazy" src="doctorimages/{{$doctors->doctorimage}}" alt="">
                    
                   </div>
       </a>
               <div class="body">
                   <a href="../profile/{{$doctors->slug}}">    <p class="text-xl mb-0">{{$doctors->name}} / <span style="color:#a7537d;">{{$doctors->speciality}} </span></p> </a>
                     <br>
                  
                     @if(Route::has('login'))
                 
                 @auth   
                 <a href="#appointment">    <span  class="badge badge-outline-success w-100">Seans Ücreti : {{$doctors->price}} ₺</span></a>
            @else
            <a href="{{url('login')}}">  <span class="badge badge-outline-success w-100">Seans Ücreti : {{$doctors->price}} ₺</span></a>
            @endauth
            @endif
          <br>
       <div style="position:relative;margin-left:10px;" class="rate">
           @for ($i = 5; $i >= 1; $i--)
           @php
           $doctorComments = $comments->where('doktor', $doctors->id);
           $averageRate = $doctorComments->avg('rank');
           $roundedAverage = ceil($averageRate);
         
       @endphp
               <input  type="radio" id="star{{ $i }}" name="rate{{$doctors->name}}" value="{{ $i }}" {{ $roundedAverage == $i ? 'checked' : '' }} disabled />
               <label  for="star{{ $i }}" title="{{ $i }} stars">{{ $i }} stars</label>
           @endfor
       </div>
                   </div>
                 </div>
               </div>
       @endforeach
            <style type="text/css">
  
  .rate {
      float: left;
      height: 46px;
      padding: 0 10px;
  }
  .rate:not(:checked) > input {
      position:absolute;
      top:-9999px;
  }
  .rate:not(:checked) > label {
      float:right;
      width:1em;
      overflow:hidden;
      white-space:nowrap;
      cursor:pointer;
      font-size:30px;
      color:#ccc;
  }
  .rate:not(:checked) > label:before {
      content: '★ ';
  }
  .rate > input:checked ~ label {
      color: #ffc700;    
  }
  .rate:not(:checked) > label:hover,
  .rate:not(:checked) > label:hover ~ label {
      color: #deb217;  
  }
  .rate > input:checked + label:hover,
  .rate > input:checked + label:hover ~ label,
  .rate > input:checked ~ label:hover,
  .rate > input:checked ~ label:hover ~ label,
  .rate > label:hover ~ input:checked ~ label {
      color: #c59b08;
  }
    </style>
          </div>
        </div>
      </div>
    </div>
  </div>

@if(Route::has('login'))
          

          @auth
          @include('user.appointment')
@else
         
          @endauth
          @endif



  
</body>

  
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
</html>


