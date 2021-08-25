<?php

namespace App\Http\Controllers;
use App\Category;
use App\Http\Controllers\Controller;
use App\Puppy;

class ForSaleController extends Controller
{
    
    
    public function index()
    {
      $puppies = Puppy::get();
      return view('forsale',[
        'puppiesItems' =>$puppies
      ]);
    
    }
    
    
}