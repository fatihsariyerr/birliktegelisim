<div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="/"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
             
            </ul>
            <ul class="navbar-nav navbar-nav-right">
        
           
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
               
                  @if($bildirimler->count() > 0)
                  <span class="count bg-danger"></span>
                  @else
                  <span class=""></span>
                  @endif
                </a> 
                @if($bildirimler->count() > 0)
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Bildirimler</h6>
                  <div class="dropdown-divider"></div>
                  @foreach($bildirimler as $nots)
                  <a href="{{url('showappointment')}}" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
               
                    <p class="preview-subject mb-1">{{$nots->baslik}}</p>
                      <p class="text-muted mb-0">{{$nots->icerik}}</p>
                    </div>
                  </a>
                  @endforeach
                  <div class="dropdown-divider"></div>
                  <a href="{{url('okundu')}}"><p class="p-3 mb-0 text-center">Tümünü Okudum</p></a>
                </div>
              </li>
        
              @else
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Bildirimler</h6>
                  <div class="dropdown-divider"></div>
                  <a href="{{url('showappointment')}}" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                     
                    <p class="preview-subject mb-1">Bildirim Yok</p>
                      <p class="text-muted mb-0">Henüz Bildirim Yok</p>
                    </div>
                  </a>
                 
                  
              </li>
              @endif
          
              <x-app-layout></x-app-layout>
             
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>