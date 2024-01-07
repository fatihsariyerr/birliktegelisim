  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="{{url('/home')}}"><SPAN style="color:white;">DOKTOR PANELI</SPAN></a>
          <a class="sidebar-brand brand-logo-mini" href="{{url('/home')}}"><img src="favicon/favicon1.png" alt="logo" /></a>
        </div>
        <ul class="nav">
         @if(Auth::user()->usertype == '2')
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('add_doctor_view')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Doktor Ekle</span>
            </a>
          </li>
          @endif
          @if(Auth::user()->usertype == '1')
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showappointment')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Randevularım</span>
            </a>
          </li>
          @endif
          @if(Auth::user()->usertype == '1')
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('takvim')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Takvimi Gör</span>
            </a>
          </li>
          @endif
          @if(Auth::user()->usertype == '1')
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('updateprofile')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Profil Güncelle</span>
            </a>
          </li>
          @endif
          @if(Auth::user()->usertype == '1')
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('uploadprice')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Seans Ücreti Belirle</span>
            </a>
          </li>
          @endif
          @if(Auth::user()->usertype == '1')
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('musaitlikbelirle')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Musaitlik Belirle</span>
            </a>
          </li>
          @endif
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('addblog')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Makale Ekle</span>
            </a>
          </li>
          @if(Auth::user()->usertype == '2')
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('mesajlar')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Mesajlar</span>
            </a>
          </li>
          @endif
        
         
          @if(Auth::user()->usertype == '1')
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('formgoruntule')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">GDF Görüntüle</span>
            </a>
          </li>
          @endif
         


        </ul>
      </nav>