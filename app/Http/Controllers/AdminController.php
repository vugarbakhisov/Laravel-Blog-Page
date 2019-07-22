<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\nizamlar;
use App\haqqinda;

use Illuminate\Http\Request;
use Image;
use App\User;
use Hash;


class AdminController extends Controller{
  

  public function get_index(){
  	$N = nizamlar::find(1);
	return view('backend.nizamlar.nizam_edit',["N"=>$N]);
  	
  }
   public function edit(){
  	$N = nizamlar::find(1);
	return view('backend.nizamlar.nizam_edit',["N"=>$N]);
  	
  }
   
   

   
 	public function post(Request $request)
 	{
 	unset($request['_token']);
 	unset($request['u_yenile']);
 	nizamlar::where('id',1)->update($request->All());
 	return  redirect()->route('nizam.edit');
	}

	

  public function haqqinda(){
  	$H = haqqinda::find(1);
		return view('backend.haqqinda.haqqinda_edit',["H"=>$H]);
  }
  
  public function haqqinda_post(Request $request){
 		if (isset($request->sekil)) {
 			
		 	$validator=Validator::make($request->all(),[
		 		'sekil'=>'mimes:jpg,jpeg,png,gif', 
		 	]);

		 	if ($validator->fails()) {
		 		return 'error';
		 	}
			
			$sekil=Input::file('sekil');
			$uzanti = $sekil->getClientOriginalExtension();
			$sekil_yolu = 'uploads/'. time() . '.' . $uzanti;
			Image::make($sekil)->save($sekil_yolu);
		}


		if (isset($request->sekil)) {
			unset($request['_token']);
		 	unset($request['h_yenile']);
		 	unset($request['k_sekil']);
		 	haqqinda::where('id',1)->update($request->All());
		 	haqqinda::where('id',1)->update(['sekil'=>$sekil_yolu]);

		 	return  redirect()->route('haqqinda.edit');
		}else{
			$k_sekil=$request->k_sekil;
			unset($request['k_sekil']);
		}
	 	
	 	unset($request['_token']);
	 	unset($request['h_yenile']);
	 	unset($request['k_sekil']);
	 	haqqinda::where('id',1)->update($request->All());
	 	return  redirect()->route('haqqinda.edit');
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
