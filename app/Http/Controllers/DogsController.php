<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Dog;
use App\Category;
use App\Breed;

class DogsController extends Controller
{
    
    
    public function index($url)
    {
      $url = ucfirst($url);
      
      $categorie  = Category::where("nume_categorie",$url)->firstOrFail();
      $dogs =Dog::where('tip_categorie', $categorie['id'])->get();
      return view('dogs',[
        'dogsItems'=>$dogs,
        'dogsCategory'=>$categorie
      ]);
      
    }
  
  public function getPuppies(){
    $puppies = Breed::get();
    return view('puppies',[
      'puppiesItems' => $puppies
    ]);
  }
  
}
