@include('admin.lightheader')
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
   @include('admin.lightsidebar')
    <!--  Main wrapper -->
    <div class="body-wrapper">
    @include('admin.lightnavbar')

        <!--  Row 1 -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#searchForm').on('submit', function (e) {
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: 'GET',
                url: $(this).attr('action'),
                data: formData,
                success: function (data) {
                  $('#searchResults').html($(data).find('#searchResults').html());
                }
            });
        });

        $('#searchQuery').on('input', function () {
            $('#searchForm').submit();
        });
    });
</script>
        <div class="row">
          <div class="col-lg-12 d-flex align-items-strech">
          <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Randevularım</h5><br>
                <form action="{{ url('/lightrandevu') }}" method="get" id="searchForm">
            <div class="input-group">
                          
            <div class="form-group">
                <input class="form-field" type="text" placeholder="Hasta Adı ile Arama" name="query" id="searchQuery" value="{{ $query }}">
                <span>Ara</span>
            </div>
            </div>
        </form>
        <br>
 <style>
  :root {

--input-color: #99A3BA;
--input-border: #CDD9ED;
--input-background: #fff;
--input-placeholder: #CBD1DC;

--input-border-focus: #275EFE;

--group-color: var(--input-color);
--group-border: var(--input-border);
--group-background: #EEF4FF;

--group-color-focus: #fff;
--group-border-focus: var(--input-border-focus);
--group-background-focus: #678EFE;

}

.form-field {
display: block;
width: 100%;
padding: 8px 16px;
line-height: 25px;
font-size: 14px;
font-weight: 500;
font-family: inherit;
border-radius: 6px;
-webkit-appearance: none;
color: var(--input-color);
border: 1px solid var(--input-border);
background: var(--input-background);
transition: border .3s ease;
&::placeholder {
    color: var(--input-placeholder);
}
&:focus {
    outline: none;
    border-color: var(--input-border-focus);
}
}

.form-group {
position: relative;
display: flex;
width: 100%;
& > span,
.form-field {
    white-space: nowrap;
    display: block;
    &:not(:first-child):not(:last-child) {
        border-radius: 0;
    }
    &:first-child {
        border-radius: 6px 0 0 6px;
    }
    &:last-child {
        border-radius: 0 6px 6px 0;
    }
    &:not(:first-child) {
        margin-left: -1px;
    }
}
.form-field {
    position: relative;
    z-index: 1;
    flex: 1 1 auto;
    width: 1%;
    margin-top: 0;
    margin-bottom: 0;
}
& > span {
    text-align: center;
    padding: 8px 12px;
    font-size: 14px;
    line-height: 25px;
    color: var(--group-color);
    background: var(--group-background);
    border: 1px solid var(--group-border);
    transition: background .3s ease, border .3s ease, color .3s ease;
}
&:focus-within {
    & > span {
        color: var(--group-color-focus);
        background: var(--group-background-focus);
        border-color: var(--group-border-focus);
    }
}
}

html {
box-sizing: border-box;
-webkit-font-smoothing: antialiased;
}

* {
box-sizing: inherit;
&:before,
&:after {
    box-sizing: inherit;
}
}

// Center
body {
min-height: 100vh;
font-family: 'Mukta Malar', Arial;
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
background: #F5F9FF;  
.form-group {
    max-width: 360px;
    &:not(:last-child) {
        margin-bottom: 32px;
    }
}
}
  </style>
                <div id="searchResults" class="table-responsive">
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
                          <h6 class="fw-semibold mb-0">Tarih</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Saat</h6>
                        </th>
                      
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Durum</h6>
                        </th> <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Aksiyon</h6>
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
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">{{$appoints->date}}</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">{{$appoints->time}}</span>
                          </div>
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
                            <td><a class="btn btn-danger" href="{{url('admincancel_appointment',$appoints->id)}}">İptal Et</a></td>
                <td><a class="btn btn-warning" href="{{url('delete_appointment',$appoints->id)}}">Randevuyu Sil</a></td>
                <td><a class="btn btn-success" style="width:150px;" href="{{url('accept_appointment',$appoints->id)}}">Kabul Et</a></td>
              
                       <td><a class="btn btn-success" href="{{url('joinchat',$appoints->id)}}">Görüşmeye Katıl</a></td>
               
             
            </tr>
            @endforeach             
                    </tbody>
                  </table>
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