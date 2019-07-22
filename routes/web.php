<?php



Route::get('/', function () {
    return view('front.index');
});



Route::group(['prefix'=>'admin' , 'middleware' => 'auth'],function(){
	Route::get('/','AdminController@get_index')->name('admin.index');
	Route::get('/nizam/edit','AdminController@edit')->name('nizam.edit');
	Route::post('/nizam/edit','AdminController@post')->name('nizam.save');
	Route::get('/haqqinda/edit','AdminController@haqqinda')->name('haqqinda.edit');
	Route::post('/haqqinda/edit','AdminController@haqqinda_post')->name('haqqinda.save');
	Route::get('/slider','SliderController@index')->name('slider');
	Route::get('/slider/insert','SliderController@insert')->name('slider.insert');		
	Route::post('/slider/insert','SliderController@insert_save')->name('slider.save');
	Route::get('/slider/change_status/{id}' , 'SliderController@change_status')->name('slider.change_status');
	Route::get('/slider/edit/{id}' , 'SliderController@slider_edit')->name('slider.edit');
Route::post('/slider/save/{id}' , 'SliderController@slider_edit_save')->name('slider.edit.save');
	Route::get('/slider/delete/{id}' , 'SliderController@delete')->name('slider.delete');
	Route::get('/user/create' , 'AdminController@create_new_user')->name('user.create');
	Route::post('/user/create' , 'AdminController@save_new_user')->name('user.save');
	Route::get('/meqale','Meqalecontroller@meqale_index')->name('meqale');
	Route::get('/meqale/insert','Meqalecontroller@insert')->name('meqale.insert');
	Route::post('/meqale/insert','Meqalecontroller@insert_save')->name('meqale.insert.save');
	Route::get('/meqale/change_status/{id}' , 'MeqaleController@change_status')->name('meqale.change_status');
	Route::get('/meqale/delete/{id}' , 'MeqaleController@delete')->name('meqale.delete');
	Route::get('/meqale/edit/{id}' , 'MeqaleController@edit')->name('meqale.edit');
	Route::post('/meqale/save/{id}' , 'MeqaleController@meqale_edit_save')->name('meqale.edit.save');
	Route::get('/reyler','ReylerController@reyler')->name('reyler');
	Route::get('/reyler/insert','ReylerController@insert')->name('reyler.insert');
	Route::post('/reyler/insert/save','ReylerController@insert_save')->name('reyler.insert.save');
	Route::get('/reyler/edit/{id}','ReylerController@reyler_edit')->name('reyler.edit');
	Route::post('/reyler/save/{id}' , 'ReylerController@reyler_edit_save')->name('reyler.edit.save');
	Route::get('/reyler/change_status/{id}' , 'ReylerController@change_status')->name('reyler.change_status');
	Route::get('/reyler/delete/{id}','ReylerController@delete')->name('delete');
	Route::get('/teacher','TeacherController@teacher')->name('teacher');
	Route::get('/teacher/insert','TeacherController@teacher_insert')->name('teacher.insert');
	Route::post('/teacher/insert/save','TeacherController@insert_save')->name('teacher.insert.save');
	Route::get('/teacher/edit/{id}','TeacherController@teacher_edit')->name('teacher.edit');
	Route::post('/teacher/save/{id}' , 'TeacherController@teacher_edit_save')->name('teacher.edit.save');
	Route::get('/teacher/change_status/{id}' , 'TeacherController@change_status')->name('teacher.change_status');
	Route::get('/teacher/delete/{id}','TeacherController@delete')->name('delete');
	
	Route::get('/courses','CoursesController@courses')->name('courses.index');
	Route::get('/courses/insert','CoursesController@courses_insert')->name('courses.insert');
	Route::post('/courses/insert/save','CoursesController@courses_insert_save')->name('courses.insert.save');
	Route::get('/courses/edit/{id}','CoursesController@courses_edit')->name('courses.edit');
	Route::post('/courses/save/{id}' , 'CoursesController@courses_edit_save')->name('courses.edit.save');
	Route::get('/courses/change_status/{id}' , 'CoursesController@change_status')->name('courses.change_status');

	Route::get('/category','CategoryController@category')->name('category.index');
	Route::get('category/insert','CategoryController@category_insert')->name('category.insert');
	Route::post('category/save','CategoryController@category_save')->name('category.save');
	Route::get('category/delete/{id}','CategoryController@category_delete')->name('category.delete');






});

Route::get('/','FrontController@index')->name('index');
Route::get('/new/details/{id}','FrontController@new_details')->name('new.details');
Route::get('/news','FrontController@new')->name('news');
Route::get('/courses/page','FrontController@courses_index')->name('courses');
Route::get('/categories/' , 'FrontController@categories_index')->name('categories');
Route::get('/categories/{id}' , 'FrontController@categories_detail')->name('categories.detail');
Route::get('/courses/{id}','FrontController@course_detail')->name('course.detail');
Route::get('contact','FrontController@contact_index')->name('contact');



Auth::routes();

//Route::get('/register','HomeController@register')->name('register.admin');

//Route::get('/home', 'HomeController@index')->name('index');

//Route::post('', 'Auth/RegisterController@validator')->name('register');
//Route::post('', 'Auth/RegisterController@create')->name('register');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
