@extends('parts.template') 

@section('title', 'Page Title')

@section('content')

<div class="parallax-window sub-header  banner" data-parallax="scroll" data-image-src="{{ Voyager::image(setting('site.banner-for')) }}"></div>
<div class="black-container">
<div class="container">
  <div class="news">
    <div class="title-page">
      For Sale
    </div>
    <div class="news-container">
      @foreach($puppiesItems as $item)
      <div class="news-box">
        <img src="{{ Voyager::image($item['image']) }}" alt="Smiley face">
        <div class="news-box-title box-item">
          <h1>{{$item['title']}}</h1>
        </div>
        <div class="read-more box-item">
          <a href="{{$item['url']}}">Read More</a>
        </div>
      </div>
     @endforeach
    </div>
  </div>
</div>
  </div>

@endsection