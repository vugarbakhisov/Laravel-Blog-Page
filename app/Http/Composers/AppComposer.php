<?php 
namespace App\Http\Composers;
use Illuminate\Contracts\View\View;
use App\Category;


class AppComposer{

public function compose(View $view){

		$AppCompose=Category::all();
	$view->with('AppCompose',$AppCompose); 


}


}







 ?>
