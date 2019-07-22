<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Image;
use App\slider;

class SliderController extends Controller{
   
	public function index(){
		$sliders = slider::all();
		return view('backend.slider.index',compact('sliders'));
	}
	

	public function insert(){
		return view('backend.slider.insert');
	}
	

	public function insert_save(Request $request){
		$validator=Validator::make($request->all(),[
	 		'sekil'=>'mimes:jpg,jpeg,png,gif', 
	 	]);

	 	if ($validator->fails()) {
	 		return 'error';
	 	}

		$sekil=Input::file('sekil');
		$uzanti = $sekil->getClientOriginalExtension();
		$sekil_yolu = 'sliders/'. time() . '.' . $uzanti;

		Image::make($sekil)->save($sekil_yolu);

			
		unset($request['_token']);
	 	unset($request['insert']);
	 	$data = $request->all();
	 	$data['sekil'] = $sekil_yolu;
	 	slider::insert($data);
	 	

	 	return redirect()->route('slider.insert');
	}


	public function change_status($id){
		$slider = slider::find($id);
		$slider->status = !$slider->status;
		$slider->save();

		return 'ok';
	}

	public function delete($id){
		try{
			$slider = slider::find($id);
			if($slider){
				$sekil_yolu = $slider->sekil;
				$slider->delete();
				unlink($sekil_yolu);
				return 'ok';
			}else{
				return 'no';
			}
		}catch(Exception $e){
			return 'no';
		}
	}
	
	// Slider edit sehifesi ucun datani cekdik ve view faylina gonderdik.
	public function slider_edit($id)
	{
		 $data = slider::findOrFail($id);
        return view('backend.slider.edit', compact('data'));
	}

	public function slider_edit_save(Request $request,$id){
			$slide=slider::find($id);
		if (isset($request->sekil)) {
 			
		 	$validator=Validator::make($request->all(),[
		 		'sekil'=>'mimes:jpg,jpeg,png,gif', 
		 	]);

		 	if ($validator->fails()) {
		 		return 'Şəkil ölçüsü uygun deyil';
		 	}
			
			$sekil=Input::file('sekil');
			$uzanti = $sekil->getClientOriginalExtension();
			$sekil_yolu = 'sliders/'. time() . '.' . $uzanti;
			Image::make($sekil)->save($sekil_yolu);
		}


		if (isset($request->sekil)) {
			unset($request['_token']);
			unset($request['sekil']);
		 	slider::where('id',$id)->update($request->All());
		 	slider::where('id',$id)->update(['sekil'=>$sekil_yolu]);

		 	return  redirect()->route('slider');
		}else{
			$k_sekil=$request->k_sekil;
			unset($request['k_sekil']);
		}
	 	
	 	unset($request['_token']);
	 	unset($request['h_yenile']);
	 	unset($request['k_sekil']);
	 		slider::where('id',$id)->update($request->All());
	 	return  redirect()->route('slider');
	}


	public function create_new_user(){
		return view('backend.user.create');
	}

	public function save_new_user(Request $r){
		$user = new User();
		$user->password = Hash::make($r->password);
		$user->email = $r->email;
		$user->name = $r->name;
		$user->save();

		return redirect()->route('admin.index');
	}


}