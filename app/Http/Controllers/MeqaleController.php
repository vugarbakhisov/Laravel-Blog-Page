<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Image;
use App\meqaleler;

class MeqaleController extends Controller
{
    public function meqale_index(){
    	$meqaleler=meqaleler::all();
    	foreach ($meqaleler as $meqale) {
    		$meqale->vaxt = $this->Tarix($meqale->vaxt);
    	}
    	return view('backend.meqale.index',compact('meqaleler'));
    }
    public function insert()
    {
    	return view('backend.meqale.insert');
    }
    public function insert_save(Request $request){
   			$this->validate($request,[
   				'sekil'=>'mimes:jpeg,jpg,png,gif,'
   			]);

   			$sekil=Input::file('sekil');
   			$tipi=$sekil->getClientOriginalExtension();
   			$sekil_yol='meqale/' . time() .'.' .$tipi;
   			Image::make($sekil)->save($sekil_yol);

   			unset($request['_token']);
   			$save=$request->all();
   			$save['sekil']=$sekil_yol;
   			meqaleler::insert($save);
   			return redirect()->route('meqale');

    }
    public function change_status($id){
		$meqale = meqaleler::find($id);
		$meqale->status = !$meqale->status;
		$meqale->save();

		return 'ok';
	}


public function Tarix($x)
	{
		$tarix = explode("-",$x); // 2019-02-12  =  [2019,02,12]
		$aylar =["Yanvar","Fevral","Mart","Aprel","May","İyun","İyul","Avqust","Sentyabr","Oktyabr","Noyabr","Dekabr"];
		return [$tarix[2] , $aylar[$tarix[1]-1] , $tarix[0]]; // [12, 'Fevral' , 2019]
			
	}
public function delete($id){
    try{
      $meqale = meqaleler::find($id);
      if($meqale){
        $sekil_yolu = $meqale->sekil;
        $meqale->delete();
        unlink($sekil_yolu);
        return 'ok';
      }else{
        return 'no';
      }
    }catch(Exception $e){
      return 'no';
    }
  }
  public function edit($id){
 $data = meqaleler::findOrFail($id);
        return view('backend.meqale.edit', compact('data'));
  }
public function meqale_edit_save(Request $request,$id){
      $slide=meqaleler::find($id);
    if (isset($request->sekil)) {
      
      $validator=Validator::make($request->all(),[
        'sekil'=>'mimes:jpg,jpeg,png,gif', 
      ]);

      if ($validator->fails()) {
        return 'Şəkil ölçüsü uygun deyil';
      }
      
      $sekil=Input::file('sekil');
      $uzanti = $sekil->getClientOriginalExtension();
      $sekil_yolu = 'meqale/'. time() . '.' . $uzanti;
      Image::make($sekil)->save($sekil_yolu);
    }


    if (isset($request->sekil)) {
      unset($request['_token']);
      unset($request['sekil']);
      meqaleler::where('id',$id)->update($request->All());
      meqaleler::where('id',$id)->update(['sekil'=>$sekil_yolu]);

      return  redirect()->route('meqale');
    }else{
      $k_sekil=$request->k_sekil;
      unset($request['k_sekil']);
    }
    
    unset($request['_token']);
    unset($request['h_yenile']);
    unset($request['k_sekil']);
      meqaleler::where('id',$id)->update($request->All());
    return  redirect()->route('meqale');
  }
}
