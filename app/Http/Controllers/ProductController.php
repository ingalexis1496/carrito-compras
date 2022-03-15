<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\PersonRequest;
use App\Models\Product;
use SebastianBergmann\Environment\Console;

class ProductController extends Controller
{

/** 

    @return Illuminate\Http\JsonResponse
*/
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        /*
            $request->validate([
                'name'=>['required','string','min:3'],
                'email'=>['required','email','min:3','unique:people']
                            
             ]);
        */

     
        
      $products= new Product( $request->all());
       
      $products->save();
        
        return response()->json([

          'saved' => true,
          'pruduct' => $products

        ]);
        
        }
    
          
    
      
    
        public function delete(Product $product): \Illuminate\Http\JsonResponse
        {
    
          $product->delete();
          return response()->json([

            'deleted' => true,
           
  
          ]);
          
    
        }
    
        public function edit(Product $products){
    
          //  $product->load('sons');
            
            return view('product.edit', compact('products'));
        }
    
    
        public function update(Request $request, Product $products){
    
            
            $products->update($request->all());
         
            return back();
        }
}
