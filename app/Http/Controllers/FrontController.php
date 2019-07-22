<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;
use App\meqaleler;
use App\Reyler;
use App\Teacher;
use App\Category;
use App\Courses;
use App\nizamlar;
use App\haqqinda;





class FrontController extends Controller{
  public function index(){

  	$S=slider::where('status',1)->orderBy('sira','DESC')->get();
    $M=meqaleler::where('status',1)->orderBy('id','DESC')->get(); 
    $R=Reyler::where('status',1)->orderBy('id','DESC')->get(); 
    $T=Teacher::where('status',1)->orderBy('id','DESC')->get(); 
    
    $courses = Courses::all();


    foreach ($M as $meqale) {
        $meqale->vaxt = $this->Tarix($meqale->vaxt);
      }


  	return view('front.index',compact('nizamlar'),['S'=>$S, 'M'=>$M,'R'=>$R,'T'=>$T,'C'=>$courses]);
  }



  public function Tarix($x)
	{
		$tarix = explode("-",$x); // 2019-02-12  =  [2019,02,12]
		$aylar =["Yanvar","Fevral","Mart","Aprel","May","İyun","İyul","Avqust","Sentyabr","Oktyabr","Noyabr","Dekabr"];
		return [$tarix[2] , $aylar[$tarix[1]-1] , $tarix[0]]; // [12, 'Fevral' , 2019]
			
	}
  

    public function new_details($id){
         
        if ($new=meqaleler::find($id)){
           return view('front.news_details',compact('new'));

        }else{
           return view('front.404.404');

        }
            
  }
  
    public function new(){
        $M=meqaleler::all();
        foreach ($M as $meqale) {
            $meqale->vaxt = $this->Tarix($meqale->vaxt);
        }
        
        return view('front.news',compact('M'));
    }
  

    public function categories_index(){
       $courses = Courses::all();
        return view('front.courses',compact('courses'));
    }

    public function categories_detail($id){

       if ($detail = Category::findOrFail($id)) {
          return view('front.category_detail',compact('detail'));
    }else{
            return view('front.404.404');

                   }
    } 
  
       


    public function course_detail($id){
     if($course = Courses::findOrFail($id)){
        return view('front.courses_detail',compact('course'));
     }else{
              return view('front.404.404');
               }

      }


      public function contact_index(){
        $contact=nizamlar::findOrFail(1);
         return view('front.contact',compact('contact'));

      }
  }
