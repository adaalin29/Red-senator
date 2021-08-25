@extends('parts.template') @section('title', 'Page Title') @section('content')
<div class="parallax-window sub-header  banner" data-parallax="scroll" data-image-src="{{ Voyager::image(setting('site.banner-puppies')) }}"></div>
<div class="container">
  <div class="news">
    <div class="title-page">
      Our Puppies
    </div>
    <div class="news-container">
      @foreach($puppiesItems as $dogs)
      <div class="container-slide-modificat container-puppies">
            <div class="text puppies-text">
              <h1>{{$dogs['title']}}</h1>
            </div>
            <div class="slide-pair-container">

              <div class="slide-pair">
                <div class="news-box box-swiper">
                  <img src="{{ Voyager::image($dogs['image']) }}" alt="Smiley face">
                  <div class="swiper-text-align">
                    <div class="news-box-title box-item swiper-title">
                    <h1>{{$dogs['subtitlu1']}}</h1>
                  </div>
                  <div class="news-box-title box-item swiper-title">
                    <h1>{{$dogs['subtitlu2']}}</h1>
                  </div>
                  </div>
                </div>
              </div>
              <div class="read-more box-item swiper-button">
                <a href="{{$dogs['url']}}">find more</a>
              </div>
            </div>
          </div>
      
      @endforeach
    </div>

  </div>
</div>
@endsection