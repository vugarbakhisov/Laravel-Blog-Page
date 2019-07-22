<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
   public function category(){
   	$category=Category::all();
   	return view('backend.category.index',compact('category'));
   }
   public function category_insert()
   {
   	return view ('backend.category.insert');
   }
   public function category_save(Request $request){
   unset($request['_token']);
   	$save=$request->all();
   	Category::insert($save);
   	return redirect()->route('category.index');
   	}
    public function category_delete($id)
    {
       $category=Category::find($id);
       if ($category) {
          $category->delete();
          return 'ok';
       }else{
            return 'no';
       }
    }
   		


}
