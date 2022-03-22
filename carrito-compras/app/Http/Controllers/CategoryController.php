<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
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

    
        $categories= new Category( $request->all());
        $categories->save();


        return response()->json([

          'saved' => true,
          'category' => $categories

        ]);
        }
    
        public function delete(Category $category): \Illuminate\Http\JsonResponse
        {
    
          $category->delete();

          return response()->json([

            'deleted' => true,
           
  
          ]);
    
        }
    
        public function edit(Category $category){
    
          //  $product->load('sons');
            
            return view('category.edit', compact('category'));
        }
    
    
        public function update(Request $request, Category $category){
    
            
            $category->update($request->all());
         
            return back();
        }
}
