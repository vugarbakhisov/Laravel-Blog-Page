<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Image;
use App\Teacher;


class TeacherController extends Controller
{
   public function teacher()
   {
   	$teachers=Teacher::all();
   return view('backend.teacher.index',compact('teachers'));
   }
   public function teacher_insert()
   {
    return view('backend.teacher.insert');
   }
   public function insert_save(Request $request){
    		$this->validate($request,[
    			'sekil'=>'mimes:jpeg,jpg,png,gif,'
  ]);
    		$sekil=Input::file('sekil');
    		$tipi=$sekil->getClientOriginalExtension();
    	   $sekil_yol='uploads/' . time() .'.' .$tipi;
    		Image::make($sekil)->resize(800, 835)->save($sekil_yol);
    			unset($request['_token']);
    			$save=$request->all();
    			$save['sekil']=$sekil_yol;
    			Teacher::insert($save);
    			 return redirect()->route('teacher');



    }
    public function teacher_edit($id){
 $data = Teacher::find($id);
        return view('backend.teacher.edit', compact('data'));

  }
   public function teacher_edit_save(Request $request,$id){
      $teacher=Teacher::find($id);
    if (isset($request->sekil)) {
      
      $validator=Validator::make($request->all(),[
        'sekil'=>'mimes:jpg,jpeg,png,gif', 
      ]);

      if ($validator->fails()) {
        return 'Şəkil ölçüsü uygun deyil';
      }
      
      $sekil=Input::file('sekil');
      $tipi = $sekil->getClientOriginalExtension();
      $sekil_yolu = 'uploads/'. time() . '.' . $tipi;
      Image::make($sekil)->save($sekil_yolu);
    }


    if (isset($request->sekil)) {
      unset($request['_token']);
      unset($request['sekil']);
      Teacher::where('id',$id)->update($request->All());
      Teacher::where('id',$id)->update(['sekil'=>$sekil_yolu]);

      return  redirect()->route('teacher');
    }else{
      $k_sekil=$request->k_sekil;
      unset($request['k_sekil']);
    }
    
    unset($request['_token']);
    unset($request['k_sekil']);
      Teacher::where('id',$id)->update($request->All());
    return  redirect()->route('teacher');
  }

 

  public function change_status($id){
        $teacher = Teacher::find($id);
        $teacher->status = !$teacher->status;
        $teacher->save();

        return 'ok';
    }
    public function delete($id)
    {
       $teacher=Teacher::find($id);
       if ($teacher) {
          $sekil_yol=$teacher->sekil;
          $teacher->delete();
          unlink($sekil_yol);
          return 'ok';
       }else{
            return 'no';
       }
    }
}
