
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
    @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
        
        <div class="container-fluid " style="margin-top:70px;">
        @if (session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">X</button>
    {{ session()->get('message') }}
</div>
@endif
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
<form action="{{ url('/showappointment') }}" method="get" id="searchForm">
            <div class="input-group">
                          
            <div class="form-group">
                <input class="form-field" type="text" placeholder="Hasta Adı ile Arama" name="query" id="searchQuery" value="{{ $query }}">
                <span>Ara</span>
            </div>
            </div>
        </form>
        
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
  <div id="searchResults">
        <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Hasta Adı</th>
      <th scope="col">Email Adresi</th>
      <th scope="col">Telefon Numarası</th>
      <th scope="col">Doktor Adı</th>
      <th scope="col">Tarih</th>
      <th scope="col">Saat</th>
      <th scope="col">Mesaj</th>
      <th scope="col">Durum</th>
      <th scope="col">Aksiyon</th>
    </tr>
  </thead>
  <tbody>
  @foreach($randevu as $appoints)
            <tr >
              
                <td style="padding-top:20px;">{{$appoints->name}}</td>
                <td style="padding-top:20px;">{{$appoints->email}}</td>
                <td style="padding-top:20px;">{{$appoints->phone}}</td>
                <td style="padding-top:20px;">{{$appoints->doctor}}</td>
                <td style="padding-top:20px;">{{$appoints->date}}</td>
                <td style="padding-top:20px;">{{$appoints->time}}</td>
                <td style="padding-top:20px;">{{$appoints->message}}</td>
                @if($appoints->status=='Kabul Edildi')
                <td>
                              <div class="badge badge-outline-success">Kabul Edildi</div>
                            </td>
                            @elseif($appoints->status=='Ödeme Bekleniyor') 
                            <td>
                              <div class="badge badge-outline-warning">Ödeme Bekleniyor</div>
                            </td>
                            @else
                            <td>
                              <div class="badge badge-outline-danger">İptal Edildi</div>
                            </td>
                            @endif
            
                <td><a class="btn btn-danger" href="{{url('admincancel_appointment',$appoints->id)}}">İptal Et</a></td>
                <td><a class="btn btn-warning" href="{{url('delete_appointment',$appoints->id)}}">Randevuyu Sil</a></td>
                <td><a class="btn btn-success" style="width:150px;" href="{{url('accept_appointment',$appoints->id)}}">Kabul Et</a></td>
              
                @if($appoints->date==now()->toDateString()&& now()->addHours(3)->addMinutes(5)->format('H:i')>=$appoints->time && now()->addHours(3)->addMinutes(0)->format('H:i')<=$appoints->time  && $appoints->status=='Kabul Edildi')
                <td><a class="btn btn-success" href="{{url('joinchat',$appoints->id)}}">Görüşmeye Katıl</a></td>
               @else
               <td><a style="pointer-events:none;" class="btn btn-light" href="{{url('joinchat',$appoints->id)}}">Görüşmeye Katıl</a></td>
              
                @endif
               
             
            </tr>
            @endforeach
           
  </tbody>
</table>
<div>
          <!-- content-wrapper ends -->
          </div> <!-- partial:partials/_footer.html -->
         
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>