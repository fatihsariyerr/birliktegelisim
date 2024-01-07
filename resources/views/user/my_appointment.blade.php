@include('user.header')
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/homepagebg.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Anasayfa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Randevularım</li>
          </ol>
        </nav>
        <h1 style="font-size:30px;" class="font-weight-normal">Randevularım</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->


  <div class="page-section">
   <div class="container">
    <div class="row">
      <div class="col-lg-12">
            @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{ session()->get('message') }}
            </div>
            @endif

                          <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Doktor adı</th>
                          <th scope="col">Tarih</th>
                          <th scope="col">Saat</th>

                          <th scope="col">Durum</th>
                          <th scope="col"></th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($appoint as $appoints)
                                <tr >
                                  
                                    <td style="width:200px;padding-top:20px;">{{$appoints->doctor}}</td>
                                    <td style="width:200px;padding-top:20px;">{{$appoints->date}}</td>
                                    <td style="width:200px;padding-top:20px;">{{$appoints->time}}</td>
                                  
                                    <td style="padding-top:20px;">{{$appoints->status}}</td>
                                    <td><a class="btn btn-danger" href="{{url('cancel_appointment',$appoints->id)}}">Randevuyu Sil</a></td>
                                  @if($appoints->status=="Kabul Edildi")
                                    <td><a class="btn btn-success" href="{{url('joinchat',$appoints->id)}}">Görüşmeye Katıl</a></td>
                                    @else
                                    <td><a class="btn btn-success" href="{{url('payment',$appoints->id)}}">Ödeme Yap</a></td>
                                  @endif
                                    
                                </tr>
                                @endforeach
                      </tbody>
                    </table>
        </div>
    </div>
  </div>
</div>
</body>


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
</html>