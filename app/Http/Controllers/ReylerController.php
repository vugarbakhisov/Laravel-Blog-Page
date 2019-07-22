<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Image;
use App\Reyler;


class ReylerController extends Controller
{
    public function reyler(){
        $reylers=Reyler::all();
    	return view('backend.reyler.index',compact('reylers'));
    }

    public function insert(){
    	return view('backend.reyler.insert');
    }
    public function insert_save(Request $request){
    		$this->validate($request,[
    			'image'=>'mimes:jpeg,jpg,png,gif,'
  ]);
    		$image=Input::file('image');
    		$uzanti=$image->getClientOriginalExtension();
    	   $sekil_yol='meqale/' . time() .'.' .$uzanti;
    		Image::make($image)->resize(728, 718)->save($sekil_yol);
    			unset($request['_token']);
    			$save=$request->all();
    			$save['image']=$sekil_yol;
    			Reyler::insert($save);
    			 return redirect()->route('reyler');



    }
     public function reyler_edit($id){
 $data = Reyler::find($id);
        return view('backend.reyler.edit', compact('data'));
  }
  public function reyler_edit_save(Request $request,$id){
      $reyler=Reyler::find($id);
    if (isset($request->image)) {
      
      $validator=Validator::make($request->all(),[
        'image'=>'mimes:jpg,jpeg,png,gif', 
      ]);

      if ($validator->fails()) {
        return 'Şəkil ölçüsü uygun deyil';
      }
      
      $image=Input::file('image');
      $uzanti = $image->getClientOriginalExtension();
      $sekil_yolu = 'meqale/'. time() . '.' . $uzanti;
      Image::make($image)->save($sekil_yolu);
    }


    if (isset($request->image)) {
      unset($request['_token']);
      unset($request['image']);
      Reyler::where('id',$id)->update($request->All());
      Reyler::where('id',$id)->update(['image'=>$sekil_yolu]);

      return  redirect()->route('reyler');
    }else{
      $k_sekil=$request->k_sekil;
      unset($request['k_sekil']);
    }
    
    unset($request['_token']);
    unset($request['h_yenile']);
    unset($request['k_sekil']);
      Reyler::where('id',$id)->update($request->All());
    return  redirect()->route('reyler');
  }

  public function change_status($id){
        $reyler = Reyler::find($id);
        $reyler->status = !$reyler->status;
        $reyler->save();

        return 'ok';
    }
    public function delete($id)
    {
       $reyler=Reyler::find($id);
       if ($reyler) {
          $sekil_yol=$reyler->image;
          $reyler->delete();
          unlink($sekil_yol);
          return 'ok';
       }else{
            return 'no';
       }
    }
}
