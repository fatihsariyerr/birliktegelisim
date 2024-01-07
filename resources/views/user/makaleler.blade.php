
@include('user.header')
  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/homepagebg.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Anasayfa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Makaleler</li>
          </ol>
        </nav>
        <h1 style="font-size:30px;" class="font-weight-normal">Makaleler</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->



<!-- Sayfalama düğmeleri -->
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

<div class="page-section">
    <div class="container">
      <div class="row">

      <div  class="col-lg-12">
    <div class="search-form">
        <form action="{{ url('/makaleler') }}" method="get" id="searchForm">
            <div class="input-group">
                          
            <div class="form-group">
                <input class="form-field" type="text" placeholder="Makale Ara" name="query" id="searchQuery" value="{{ $query }}">
                <span>Ara</span>
            </div>
            </div>
        </form>
    </div>
</div>
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
        <div class="col-lg-12">
          <div class="row" id="searchResults">
          @foreach ($articles as $blogs)
             <div class="col-sm-4 py-4" >
              <div class="card-blog">
                <div class="header">
                <div style="position:absolute;margin-left:170px;" class="post-category">
                  <a href="../blog/{{$blogs->slug}}">{{$blogs->tag}}</a>
                  </div>
                  <a href="../blog/{{$blogs->slug}}" class="post-thumb">
                    <img style="width:262px;height:160px;" src="../blogimages/{{$blogs->blogimage}}" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="../blog/{{$blogs->slug}}">{{$blogs->title}}</a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                        <img src="../{{$blogs->doctorimage}}" alt="">
                      </div>
                      <span>{{$blogs->author}}</span>
                    </div>
                    <span style="position:absolute;margin-top:8px;margin-left:30px;" class="mai-time"><span style="position:relative;margin-left:5px;margin-top:-2px;">{{$blogs->date}}</span></span> 
               </div>
                </div>
              </div>
            </div>
            @endforeach

            <div class="col-12 my-5">
              <nav aria-label="Page Navigation">
                <ul class="pagination justify-content-center">
               
                {{ $articles->links('pagination::bootstrap-4') }}
                </ul>
              </nav>
            </div>
          </div> <!-- .row -->
          
        
         
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div>
  
</body>
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
</html>