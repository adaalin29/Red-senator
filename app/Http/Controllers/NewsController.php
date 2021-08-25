<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
// Incarc modelul News - acesta preia datele din tabelul news
use App\News;

// Aici am controllerul NewsController
class NewsController extends Controller
{
//     Aici amn functia index care
    public function index()
    {
//      creeaza  o variabila numita $news in care pune datele pe care le ia din tabelul news
      $news = News::get();
//       Returnez view-ul news pe care il gasesc in news.blade.php
//       si caruia ii atribui un vector care are cheia newsItems si care contine toate informatiile din $news
      return view('news',[
        'newsItems'=>$news
      ]);
      
    }
  public function detaliu_news($url)
    {
      $news = News::where('slug', $url)->firstOrFail();
      return view('detaliu',[
        'newsElement'=>$news
      ]);
      
    }
    
    
}
