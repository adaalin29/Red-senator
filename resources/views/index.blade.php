@extends('parts.template') @section('title', 'Page Title') @section('content')

<div class="swiper-container swiper-container-header">
  <div class="swiper-wrapper">
    @foreach($imgs_swiper as $imagine)
    <div class="swiper-slide" style="background:url({{Voyager::image($imagine['image'])}})"></div>
    @endforeach
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination swiper-pag-first"></div>
</div>
<div class="black-container">
  <div class="container">
    <div class="about-senator">
      <div class="senator-picture">
        <img src="{{ Voyager::image(setting('site.index_image')) }}">
      </div>
      <div class="info-senator">
        <div id="about-header">
          <h1 class="title-page">{{setting('site.index_title')}}</h1>
        </div>
        <div id="about-text">
          <span>{{setting('site.description')}}</span>
        </div>
      </div>
    </div>


  </div>
</div>
<div class = "container">
<div class="news">
  <div class="title-page">
    News
  </div>


  <div class="news-container mobile">
    <div class="swiper-container swiper-container-puppies-mobile news1">
      <div class="swiper-wrapper">
        @foreach($indexNews as $news)
        <div class="swiper-slide">
          <div class="news-box news-box-mobile">
            <img src="{{ Voyager::image($news['imagine']) }}" alt="Smiley face">
            <div class="news-box-title box-item">
              <h1>{{$news['titlu']}}</h1>
            </div>
            <div class="box-info box-item">
              {{ str_limit(strip_tags($news['descriere']),80) }}
            </div>
            <div class="read-more box-item">
              <a href="news/{{$news['slug']}}">Read More</a>
            </div>
          </div>
        </div>
        @endforeach


      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination swiper-pag-puppies-mobile news1"></div>
    </div>
  </div>


  <div class="news-container desktop">
    @foreach($indexNews as $news)
    <div class="news-box">
      <img src="{{ Voyager::image($news['imagine']) }}" alt="Smiley face">
      <div class="news-box-title box-item">
        <h1>{{$news['titlu']}}</h1>
      </div>
      <div class="box-info box-item">
        {{ str_limit(strip_tags($news['descriere']),80) }}
      </div>
      <div class="read-more box-item">
        <a href="news/{{$news['slug']}}">Read More</a>
      </div>
    </div>
    @endforeach
  </div>
</div>
@foreach($indexDogs as $key => $itemDog)
<div class="news">
  <div class="title-page">
    Our {{$itemDog['nume_categorie']}}
  </div>

  <div class="news-container mobile">
    <div class="swiper-container swiper-container-puppies-mobile swiper{{$key}}">
      <div class="swiper-wrapper">
        @foreach($itemDog['dogs'] as $dog)
        <div class="swiper-slide">
          <div class="news-box news-box-mobile">
            <img src="{{ Voyager::image($dog['imagine']) }}" alt="Smiley face">
            <div class="news-box-title box-item">
              <h1>{{$dog['titlu']}}</h1>
            </div>
            <div class="read-more box-item">
              <a href="{{$dog['url']}}">Read More</a>
            </div>
          </div>
        </div>
        @endforeach

      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination swiper-pag-puppies-mobile pag{{$key}}"></div>
    </div>
  </div>

  <div class="news-container desktop">
    @foreach($itemDog['dogs'] as $dog)
    <div class="news-box">
      <img src="{{ Voyager::image($dog['imagine']) }}" alt="Smiley face">
      <div class="news-box-title box-item">
        <h1>{{$dog['titlu']}}</h1>
      </div>
      <div class="read-more box-item">
        <a href="{{$dog['url']}}">Read More</a>
      </div>
    </div>
    @endforeach



  </div>
</div>
@endforeach

<div class="our-puppies">
  <div class="title-page">
    Our Puppies
  </div>
  <div class="news-container puppies-swiper">
    <div class="swiper-container swiper-container-puppies">
      <div class="swiper-wrapper">
         @foreach($indexBreed as $itemBreed)
        <div class="swiper-slide">
          <div class="container-slide-modificat">
            <div class="text">
              <h1>{{$itemBreed['title']}}</h1>
            </div>
            <div class="slide-pair-container">

              <div class="slide-pair">
                <div class="news-box box-swiper">
                  <img src="{{ Voyager::image($itemBreed['image']) }}" alt="Smiley face">
                  <div class = "swiper-text-align">
                    <div class="news-box-title box-item swiper-title">
                    <h1>{{$itemBreed['subtitlu1']}}</h1>
                  </div>
                  <div class="news-box-title box-item swiper-title">
                    <h1>{{$itemBreed['subtitlu2']}}</h1>
                  </div>
                  </div>
                </div>
              </div>
              <div class="read-more box-item swiper-button puppies-button">
                <a href="{{$itemBreed['url']}}">find more</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination swiper-pag-puppies"></div>
    </div>
  </div>
</div>
</div>
@endsection

@push('scripts')
    <script>
      $(document).ready(function(){
          var slideuriMobile = 2;
          if(screen.width<=480){
            slideuriMobile = 1;
          }
//         Trec prin toti cainii primiti in variabila $indexDogs si creez un array in care pun cheia
        var dogs = [
          @foreach ($indexDogs as $key => $dog)
            {{ $key }},
          @endforeach
          ];
        for(var i=0;i<dogs.length;i++){
            
            var swiper = new Swiper('.swiper-container.swiper-container-puppies-mobile.swiper'+i, {
                    pagination: '.swiper-pagination.swiper-pag-puppies-mobile.pag'+i,
                    paginationClickable: true,
                      autoplay: 5000,
                      slidesPerView: slideuriMobile,
                      spaceBetween: 30,
              });
        }
        
      });
    </script>
@endpush