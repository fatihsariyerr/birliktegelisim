 <!-- Sidebar Start -->
 <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./lightmain" class="text-nowrap logo-img">
            <img src="../light/assets/images/logos/panellogo.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Anasayfa</span>
            </li>
            @if(Auth::user()->usertype == '2')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('lightadddoctor')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-nurse"></i>
                </span>
              <span class="menu-title">Doktor Ekle</span>
            </a>
          </li>
          @endif
            @if(Auth::user()->usertype == '2')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('lightmessage')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-message"></i>
                </span>
              <span class="menu-title">Mesajlar</span>
            </a>
          </li>
          @endif
          @if(Auth::user()->usertype == '2')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('lightuyeler')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
              <span class="menu-title">Üyeler</span>
            </a>
          </li>
          @endif
          @if(Auth::user()->usertype == '1')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('lightrandevu')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-book"></i>
                </span>
                <span class="hide-menu">Randevularım</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('takvim')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-calendar"></i>
                </span>
                <span class="hide-menu">Takvimim</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Profil Ayarlarım</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('lightprofile')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Profili Güncelle</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('lightprice')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-currency-lira"></i>
                </span>
                <span class="hide-menu">Seans Ücreti Belirle</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('lightmusaitlikbelirle')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-clock-hour-10"></i>
                </span>
                <span class="hide-menu">Musaitlik Belirle</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Makale Ayarları</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('lightmakaleekle')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Makale Ekle</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Gelişim Değerlendirme Formu</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('lightformgoruntule')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">GDF Görüntüle</span>
              </a>
            </li>
            @endif
          </ul>
        
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->