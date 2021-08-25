@extends('parts.template') 

@section('title', 'Page Title')

@section('content')

<div class="parallax-window sub-header  banner" data-parallax="scroll" data-image-src="{{ Voyager::image(setting('site.banner-news')) }}"></div>
<div class="black-container">
<div class="container">
  <div class="news">
    <div class="title-page">
      News
    </div>
    <div class="news-container">
      @foreach($newsItems as $item)
      <div class="news-box">
        <img src="{{ Voyager::image($item['imagine']) }}" alt="Smiley face">
        <div class="news-box-title box-item">
          <h1>{{$item['titlu']}}</h1>
        </div>
        <div class="box-info box-item">
        {{ str_limit(strip_tags($item['descriere']),80) }}
        </div>
        <div class="read-more box-item">
          <a href="news/{{$item['slug']}}">Read More</a>
        </div>
      </div>
     @endforeach
    </div>
  </div>
</div>
  </div>


@endsection