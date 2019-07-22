<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Image;
use App\Courses;
use App\Category;


class CoursesController extends Controller{
	
	public function courses(){
		$courses=Courses::all();
   		return view('backend.courses.index',compact('courses'));
   	} 
    public function category_id($id)
    {
      $category=Category::find($id);
      return $category['category'];
    }

   

   public function courses_insert(){
    $courses=Courses::all();
    $category=Category::all();
    return view('backend.courses.insert',compact('courses'),compact('category'));
   }
   

   public function courses_insert_save(Request $request){
		//dd($request->all());

		// $this->validate($request,[
		// 	'sekil'=>'mimes:jpeg,jpg,png,gif,'
		// ]);

		$this->validate($request , [
			'basliq' => 'required|max:100',
			'odenis' => 'required|integer',
			'mezmun' => 'required',
			'sekil'=>'required|mimes:jpeg,jpg,png,gif',
		]);


		
		$sekil=Input::file('sekil');
		$tipi=$sekil->getClientOriginalExtension();
		$sekil_yol='courses/' . time() .'.' .$tipi;
		
		Image::make($sekil)->save($sekil_yol);
		unset($request['_token']);
		$save=$request->all();
		$save['sekil']=$sekil_yol;
		//dd($save);
		Courses::insert($save);
		
		return redirect()->route('courses.index');
    }
     public function courses_edit($id){
 $data = Courses::find($id);
    $category=Category::all();

  return view('backend.courses.edit', compact('data'),compact('category'));

  }
   public function courses_edit_save(Request $request,$id){
      $courses=Courses::find($id);
    if (isset($request->sekil)) {
      
      $validator=Validator::make($request->all(),[
        'sekil'=>'mimes:jpg,jpeg,png,gif', 
      ]);

      if ($validator->fails()) {
        return 'Şəkil ölçüsü uygun deyil';
      }
      
      $sekil=Input::file('sekil');
      $tipi = $sekil->getClientOriginalExtension();
      $sekil_yolu = 'courses/'. time() . '.' . $tipi;
      Image::make($sekil)->save($sekil_yolu);
    }


    if (isset($request->sekil)) {
      unset($request['_token']);
      unset($request['sekil']);
      Courses::where('id',$id)->update($request->All());
      Courses::where('id',$id)->update(['sekil'=>$sekil_yolu]);

      return  redirect()->route('courses');
    }else{
      $k_sekil=$request->k_sekil;
      unset($request['k_sekil']);
    }
    
    unset($request['_token']);
    unset($request['k_sekil']);
      Courses::where('id',$id)->update($request->All());
    return  redirect()->route('courses.index');
  }

 

  public function change_status($id){
        $courses = Courses::find($id);
        $courses->status = !$courses->status;
        $courses->save();

        return 'ok';
    }
    public function delete($id)
    {
       $courses=Courses::find($id);
       if ($courses) {
          $sekil_yol=$courses->sekil;
          $courses->delete();
          unlink($sekil_yol);
          return 'ok';
       }else{
            return 'no';
       }
    }
}
