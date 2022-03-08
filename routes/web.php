<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('hello', function () {
//     return view('hello');
// });
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\admincontroller;
use App\site;

Auth::routes();
Route::get('/','checkcontroller@check');
Route::get('home', 'HomeController@index')->name('home');
// for frontend
Route::get('frontend',function(){
    $is_fetched=false;
    if(!$is_fetched){
        $data=site::find(1);
        session::put('sitesetting',$data);
        $is_fetched=true;
    }

    // dd(session::get('sitesetting'));
    return view('frontend.layouts.master');
});


// for dashboard
Route::get('dashboard','dashboardcontroller@show')->name('dashboard');

// for manage product
Route::get('addproduct','productcontroller@show');
Route::post('saveproduct','productcontroller@addproduct')->name('product.save');
Route::get('editproduct/{id}','productcontroller@editproduct')->name('product.edit');
Route::post('updateproduct/{id}','productcontroller@updateproduct')->name('product.update');
Route::get('deleteproduct/{id}','productcontroller@deleteproduct')->name('product.delete');
Route::get('showproduct','productcontroller@showproduct')->name('showproduct');

// for admin login
Route::get('adminlogin','admincontroller@login')->name('admin.login');
Route::post('adminsubmit','admincontroller@submit')->name('admin.submit');
// for manage brand
Route::get('brandcreate','brandcontroller@create')->name('brand.create');
Route::post('brandedit','brandcontroller@submit')->name('brand.add');
Route::get('brandshow','brandcontroller@show')->name('brandshow');
Route::get('branddelete/{id}','brandcontroller@delete')->name('brand.delete');
Route::get('brandedit/{id}','brandcontroller@edit')->name('brand.edit');
Route::post('brandupdate/{id}','brandcontroller@update')->name('brand.update');

// for  product show on customerpage
Route::get('productshow','productcontroller@adshowproduct')->name('fr.productshow');

// for header topic page
Route::view('about','frontend.topic.about')->name('fr.about');
Route::view('contact','frontend.topic.contact')->name('fr.contact');
Route::view('store','frontend.topic.store')->name('fr.store');
Route::view('description','frontend.topic.description')->name('fr.description');

// for site setting
Route::get('session','sitecontroller@session')->name('site.session');
Route::get('sitesetting','sitecontroller@show')->name('site.create');
Route::post('sitesave','sitecontroller@savedata')->name('site.save');

// for contact page
Route::post('contactsave','contactcontroller@save')->name('contact.save');
Route::get('contactshow','contactcontroller@show')->name('contact.show');
// for change password
Route::get('changepassword','passwordcontroller@show')->name('password.show');
Route::post('checkpassword','passwordcontroller@check')->name('password.check');


