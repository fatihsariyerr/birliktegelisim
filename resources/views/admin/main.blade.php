<div class="main-panel">
          <div class="content-wrapper">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                   
                    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Müşteri Adı</th>
      <th scope="col">Email Adresi</th>
      <th scope="col">Telefon Numarası</th>
      <th scope="col">Doktor Adı</th>
      <th scope="col">Tarih</th>
      <th scope="col">Saat</th>
      <th scope="col">Mesaj</th>
      <th scope="col">Durum</th>

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
              
               
             
            </tr>
            @endforeach
           
  </tbody>
</table>
                  </div>
                </div>
              </div>
        
            
            </div>
          </div>