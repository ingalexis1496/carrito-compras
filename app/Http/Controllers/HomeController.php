<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\category;


class HomeController extends Controller
{
    

    public function index(){

        $products = Product::get();

    
       
        return view ('welcome',compact('products'));
        
    }
    
    public function ir(){

        $categories = category::get();

        return view ('category',compact('categories'));
        
}

public function mostrar(){

  

    return view ('vue');
    
}





 }
