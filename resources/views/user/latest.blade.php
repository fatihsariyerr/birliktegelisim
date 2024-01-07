
<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp" style="font-size:30px;">Son Paylaşılanlar</h1>
      <div class="row mt-5">
 
@foreach($latestData as $datalar)
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div style="position:absolute;margin-left:170px;" class="post-category">
                <a href="blog/{{$datalar->id}}">Pedagog</a>
              </div>
              <a href="blog/{{$datalar->id}}" class="post-thumb">
                <img loading="lazy" style="height:140px;width:262px;" src="../blogimages/{{$datalar->blogimage}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog/{{$datalar->id}}">{{$datalar->title}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img loading="lazy" src="{{$datalar->doctorimage}}" alt="">
                  </div>
                  <span>{{$datalar->author}}</span>
                </div>
                <span style="position:absolute;margin-top:8px;margin-left:30px;" class="mai-time"><span style="position:relative;margin-left:5px;margin-top:-2px;">{{$datalar->date}}</span></span> 
              </div>
            </div>
          </div>
        </div>
        @endforeach

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="{{url('makaleler')}}" class="btn btn-primary">Daha Fazlası</a>
        </div>

      </div>
    </div>
  </div> <!-- .page-section -->
