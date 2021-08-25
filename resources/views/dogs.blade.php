@extends('parts.template') @section('title', 'Page Title') @section('content')
<div class="parallax-window sub-header  banner" data-parallax="scroll" data-image-src="{{ Voyager::image($dogsCategory['imagine_banner']) }}"></div>
<div class="container">
  <div class="news">
    <div class="title-page">
      Our {{$dogsCategory['nume_categorie']}}
    </div>
    <div class="news-container">
      @foreach($dogsItems as $dogs)
      <div class="news-box">
        <img src="{{ Voyager::image($dogs['imagine']) }}" alt="Smiley face">
        <div class="news-box-title box-item">
          <h1>{{$dogs['titlu']}}</h1>
        </div>
<!--         <div class="box-info box-item">
          {{ str_limit(strip_tags($dogs['descriere']),80) }}
        </div> -->
        <div class="read-more box-item">
          <a href="{{$dogs['url']}}">Read More</a>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</div>
@endsection