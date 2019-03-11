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
use App\Http\Resources\FotoCollection as FotoResource;


Route::get('/', function () {
    return redirect('/fotos');
});

Route::get('/api/foto', function () {
    //return URL::to('/');
    return new FotoResource(App\Foto::with(['user', 'comentarios'])->paginate(3));
});

Route::resource('comentarios', 'ComentarioController');
Route::resource('users', 'UserController')->middleware('roles:admin');
Route::resource('fotos', 'FotoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
