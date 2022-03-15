<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function store(Request $request){
        /*
            $request->validate([
                'name'=>['required','string','min:3'],
                'email'=>['required','email','min:3','unique:people']
                            
             ]);
        */

    
        $categories= new Category( $request->all());
        $categories->save();
        return back();
        }
    
        public function delete(Category $categories){
    
          $categories->delete();
          return back();
    
        }
    
        public function edit(Category $categories){
    
          //  $product->load('sons');
            
            return view('category.edit', compact('categories'));
        }
    
    
        public function update(Request $request, Category $categories){
    
            
            $categories->update($request->all());
         
            return back();
        }
}
