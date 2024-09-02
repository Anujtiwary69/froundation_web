{{--  <header id="js-video" class="header-banner" data-video-mp4="/-/media/GFO/Home/GFHPHeroVideo720p.ashx" data-video-poster="/-/media/GFO/Home/banner-1.ashx" data-mandarin="false">
    <div id="bodyregion_0_Opacity" class="header-banner--opacity" style="opacity:.80;"></div>
    <div id="bodyregion_0_Cover" class="header-banner__cover" style="background-image:url(&#39;/-/media/GFO/Home/banner-1.ashx&#39;);"></div>
    <div class="header-banner__title" id="headerTitle">
      @if
        <h1>
            All lives&nbsp;<br> have equal value
        </h1>
        <h5>
            we are impatient optimists working to reduce inequity
        </h5>
    </div>
    <video autoplay="" loop="" poster="/-/media/GFO/Home/banner-1.ashx">
        <source type="video/mp4" src="/-/media/GFO/Home/GFHPHeroVideo720p.ashx"></video>
</header>  --}}
@if(App::getLocale()=='en')
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('/img/slider/1.jpg') }}" class="d-block w-100" alt="...">
        {{--  <div class="header-banner__title" id="headerTitle">
            <h1>
                All lives&nbsp;<br> have equal value
            </h1>
            <h5>
                we are impatient optimists working to reduce inequity
            </h5>
        </div>  --}}
       
         <div class="carousel-caption d-none d-md-block header-banner__title" style="top:100px;bottom:0px">
          <h1 class="text-white mb-1">EVERYONE SHOULD HAVE THE
SKILLS & OPPORTUNITIES</h1>
          <h5 class="text-white mb-1">to participate in the benefits of growth of tourism in Uzbekistan</h5>
        </div>
      </div>
      <div class="carousel-item" >
        <img src="{{ asset('/img/slider/2.jpg') }}"  class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block header-banner__title">
          <h1 class="text-white mb-1">WE BELIEVE IN A FUTURE WHERE</h1>
          <h5 class="text-white mb-1">every person has access to skills & knowledge</h5>
        </div>
      </div>
      <div class="carousel-item" >
        <img src="{{ asset('/img/slider/3.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block header-banner__title" style="top:100px;bottom:0px">
         <h5 class="text-white mb-1">Bolder efforts can help achieve</h5>
          <h1 class="text-white mb-1">  UNIVERSAL EDUCATION GOALS </h1>
        </div>
      </div>
       <div class="carousel-item">
        <img src="{{ asset('/img/slider/4.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block header-banner__title">
    
          <h5 class="text-white mb-1"> Collective action is needed more than ever to develop</h5>
          <h1 class="text-white mb-1">  THE PEOPLE OF UZBEKISTAN </h1>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  @else
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('/img/slider/1.jpg') }}" class="d-block w-100" alt="...">
        {{--  <div class="header-banner__title" id="headerTitle">
            <h1>
                All lives&nbsp;<br> have equal value
            </h1>
            <h5>
                we are impatient optimists working to reduce inequity
            </h5>
        </div>  --}}
       
         <div class="carousel-caption d-none d-md-block header-banner__title" style="top:100px;bottom:0px">
          <h1 class="text-white mb-1">ВСЕ ДОЛЖНЫ ИМЕТЬ НАВЫКИ И ВОЗМОЖНОСТИ, чтобы принимать </h1>
          <h5 class="text-white mb-1">участие в процессе роста туризма и его прибыли в Узбекистане</h5>
        </div>
      </div>
      <div class="carousel-item" >
        <img src="{{ asset('/img/slider/2.jpg') }}"  class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block header-banner__title">
          <h1 class="text-white mb-1">МЫ ВЕРИМ В БУДУЩЕЕ, ГДЕ</h1>
          <h5 class="text-white mb-1">каждый человек имеет доступ к обретению навыков и знаний</h5>
        </div>
      </div>
      <div class="carousel-item" >
        <img src="{{ asset('/img/slider/3.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block header-banner__title" style="top:100px;bottom:0px">
         <h5 class="text-white mb-1">Смелые усилия помогают достичь</h5>
          <h1 class="text-white mb-1">  УНИВЕРСАЛЬНЫХ ЦЕЛЕЙ ОБРАЗОВАНИЯ </h1>
        </div>
      </div>
       <div class="carousel-item">
        <img src="{{ asset('/img/slider/4.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block header-banner__title">
    
          <h5 class="text-white mb-1">Совместные действия, как никогда,  </h5>
          <h1 class="text-white mb-1">необходимы НАРОДУ УЗБЕКИСТАНА</h1>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  @endif
