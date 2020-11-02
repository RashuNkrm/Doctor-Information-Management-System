<?php
Auth::routes();

Route::group(['namespace' => 'Admin' , 'prefix' => 'admin'],function()
{
	Route::get('/','DashboardController@index')->name('dashboard');

	Route::resource('product-category','ProductCategoryController'); //
	Route::get('/product_categories','ProductCategoryController@index')->name('admin.product-category');


	Route::resource('products','ProductController'); //
	Route::get('/products','ProductController@index')->name('admin.products');


});

Route::group(['namespace' => 'Admin1' , 'prefix' => 'admin1','middleware' => ['auth:web']],function()
{
	Route::get('/','DashController@index')->name('dash');
	Route::resource('department','DepartmentController'); //
	Route::get('/department','DepartmentController@index')->name('admin1.department');

	Route::resource('doctor','DoctorController'); //
	Route::get('/doctor','DoctorController@index')->name('admin1.doctor');

	Route::resource('schedule','ScheduleController'); //
	Route::get('/schedule','ScheduleController@index')->name('admin1.schedule');


});



Route::get('/','HomeController@index')->name('home');
Route::get('/about','HomeController@about')->name('about');
Route::get('/products','HomeController@productListing')->name('products');
