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
                <h5 class="card-title fw-semibold mb-4">Randevularım</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Müşteri Adı</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Email Adresi</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Telefon Numarası</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Doktor Adı</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Tarih</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Saat</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Mesaj</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Durum</h6>
                        </th>

                      </tr>
                    </thead>
                    <tbody>
                    @foreach($randevu as $appoints)
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{$appoints->name}}</h6></td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{$appoints->email}}</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{$appoints->phone}}</p>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">{{$appoints->doctor}}</h6>                                          
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">{{$appoints->date}}</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">{{$appoints->time}}</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{$appoints->message}}</p>
                        </td>
                        @if($appoints->status=='Kabul Edildi')
                <td>
                <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-success rounded-3 fw-semibold">Kabul Edildi</span>
                          </div>
                            </td>
                            @elseif($appoints->status=='Ödeme Bekleniyor') 
                            <td>
                            <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-warning rounded-3 fw-semibold">Ödeme Bekleniyor</span>
                          </div>
                            </td>
                            @else
                            <td>
                            <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-3 fw-semibold">İptal Edildi</span>
                          </div>
                            </td>
                            @endif
                      </tr> 
                     
                      @endforeach                 
                    </tbody>
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