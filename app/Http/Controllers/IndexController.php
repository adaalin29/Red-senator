<?php

namespace App\Http\Controllers;
use App\Category;
use App\Swiper;
use App\News;
use App\Http\Controllers\Controller;
use App\Breed;

class IndexController extends Controller
{
    
    
    public function index()
    {
      
     
      $imgs_swiper = Swiper::get();
      $indexNews = News::orderBy('created_at', 'desc')->take(4)->get();
      $dogs = Category::with("dogs")->get();
//       dump($dogs->toArray());
      $breed = Breed::get();
      
      
      return view('index', [
            'imgs_swiper' => $imgs_swiper,
            'indexNews' => $indexNews,
            'indexDogs' =>$dogs,
            'indexBreed' =>$breed
        ]);
      
      
    }
    
    
}
