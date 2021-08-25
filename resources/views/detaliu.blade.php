@extends('parts.template') @section('title', 'Page Title') @section('content')
<div class="black-container">
  <div class="container">
    <div class="about-senator ab-sen-detaliu">
      <div id="about-header" class="ab-sen-header">
        <h1 class="title-page detaliu">{{$newsElement['titlu']}}</h1>
      </div>
      <div class="senator-picture detaliu-picture">
        <img src="{{ Voyager::image($newsElement['imagine']) }}">
      </div>
      <div class="info-senator detaliu-text">
        <div class="ab-sen-text" id="about-text">
          <span> {{$newsElement['descriere']}}</span>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection