@include('admin.lightheader')
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
   @include('admin.lightsidebar')
    <!--  Main wrapper -->
    <div class="body-wrapper">
    @include('admin.lightnavbar')
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
        @if($bildirimler->count() > 0)
        
        <div class="col-lg-12 d-flex align-items-strech">
          <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Bildirimler</h5>
                
        @foreach($bildirimler as $nots)
        <div class="alert alert-primary" role="alert">{{$nots->icerik}}</div>
        @endforeach
        <a href="{{url('okundu')}}" type="button" class="btn btn-outline-primary m-1">Tümünü Okudum</a>
        </div></div></div>
        @endif
                
          <div class="col-lg-12 d-flex align-items-strech">
          <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Sonuçlar</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Hasta Adı</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Çocuk Adı</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Cinsiyet</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Kreş / Ana Okulu</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Değerlendirme Nedeni</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Fiziksel Özür</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Doğum Tarihi</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Çocuk Yaşı</h6>
                        </th>

                      </tr>
                    </thead>
                    <tbody>
                    @foreach($gelisimsel as $sor)
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{$sor->hastaadi}}</h6></td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">{{$sor->cocukadi}}</h6>
                        </td>
                        <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">{{$sor->cinsiyet}}</h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">{{$sor->kresanaokulu}}</h6>                                          
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                          <h6 class="fw-semibold mb-0">{{$sor->degerlendirmenedeni}}</h6>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                          <h6 class="fw-semibold mb-0">{{$sor->fizikselozur}}</h6>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">{{$sor->dogumtarihi}}</h6>
                        </td>
                        <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">{{$sor->cocukyas}} Ay</h6>
                        </td>
                       
                      </tr> 
                     
                      @endforeach                 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          
          </div>
       
          <div class="col-lg-12 d-flex align-items-strech">
          <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Puanlar</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th  class="border-bottom-0">
                          <h6  class="fw-semibold mb-0">Dil Bilişsel Puanı</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">İnce Motor Puanı</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Kaba Motor Puanı</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Sosyal Beceri Özbakım Puanı</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Genel Beceri Toplam Puanı</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($gelisimsel as $sor)
                      <tr>
                        <td  class="border-bottom-0"><p class="badge bg-primary rounded-3 fw-semibold">{{$sor->dilbilissel}}</p></td>
                        <td class="border-bottom-0">
                        <p class="badge bg-primary rounded-3 fw-semibold">{{$sor->incemotor}}</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="badge bg-primary rounded-3 fw-semibold">{{$sor->kabamotor}}</p>
                        </td>
                        <td class="border-bottom-0">
                        <p class="badge bg-primary rounded-3 fw-semibold">{{$sor->sosyalbeceriozbakim}}</p>                                          
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                          <p class="badge bg-primary rounded-3 fw-semibold">{{$sor->dilbilissel + $sor->incemotor + $sor->kabamotor + $sor->sosyalbeceriozbakim}}</p>
                          </div>
                        </td>
                        
                      </tr> 
                     
                      @endforeach                 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          
          </div>

          <div class="col-lg-12 d-flex align-items-strech">
          <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Cevaplanan Sorular <a style="color:rgb(18 87 201 / 84%);" target="_blank" href="./gdfoku">(Soruları Görmek için Tıklayın)</a></h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                  <thead class="thead-light">
    <tr>
       
       @foreach($cevaplanansorular as $cevaplanan)
      <th scope="col">{{$cevaplanan}}</th>
    
       <th scope="col">Evet</th> 
     
    </tr>

    @endforeach


  </thead>
                  </table>
                </div>
              </div>
            </div>
          
          </div>


        </div>
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://www.linkedin.com/in/fatihsariyer/" target="_blank" class="pe-1 text-primary text-decoration-underline">Fatih Sarıyer</a> </p>
       
        </div>
     
      </div>
    
    </div>
  </div>
  @include('admin.lightfooter')