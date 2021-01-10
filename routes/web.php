<?php
use Illuminate\Http\RedirectResponse;
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
Auth::routes();
Route::get('/shoppingdetails',function(){return view('pages.shoppingdetails');})->name('shoppingdetails'); 
Route::get('/about','PagesController@about');
Route::get('/index','PagesController@index');
Route::get('/login','PagesController@login');
Route::get('/about1','PagesController@about1');
Route::get('/menu','PagesController@menu');
Route::get('/menu1',function(){return view('pages.menu1');})->name('menu1'); 
Route::resource('posts','PostsController');
Route::get('/','PagesController@index');
//Route::get('/','PagesController@login_back');
//Route::get('/','PagesController@admin');
//Route::post('/loginback','PostsController@store');

Route::post('/pages/loginback',['uses'=>'LoginController@login','as'=>'pages.loginback']);
Route::post('/pages/delete',['uses'=>'DeleteController@delete','as'=>'pages.delete']);
//Route::get('/pages/edit',['uses'=>'EditController@edit','as'=>'pages.edit']);
Route::get('/edit/{id}', function ($id) {return redirect()->route('editone',['id'=>$id]);})->name('edit');
Route::post('/pages/contactback',['uses'=>'ContactController@contactback','as'=>'pages.contactback']);
Route::post('/pages/contactback1',['uses'=>'ContactController1@contactback1','as'=>'pages.contactback1']);
Route::post('/pages/insertnewback',['uses'=>'InsertController@insertnewback','as'=>'pages.insertnewback']);
Route::post('/pages/updateback',['uses'=>'UpdateController@updateback','as'=>'pages.updateback']);
Route::post('/pages/signupback',['uses'=>'SignupController@signup','as'=>'pages.signupback']);
Route::post('/pages/cart',['uses'=>'Cartcontroller@carts','as'=>'pages.cart']);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login',function(){return view('pages.login');})->name('login');
Route::get('/editone',function(){return view('pages.editone');})->name('editone'); 
Route::get('/admin',function(){return view('pages.admin');})->name('admin');
Route::get('/index',function(){return view('pages.index');})->name('index'); 
Route::get('/insertnew',function(){return view('pages.insertnew');})->name('insertnew'); 
Route::get('/logout',function(){Session::flush();
    return redirect()->route('index');})->name('logout'); 
Route::get('/contact',function(){return view('pages.contact');})->name('contact'); 
Route::get('/contact1',function(){return view('pages.contact1');})->name('contact1'); 