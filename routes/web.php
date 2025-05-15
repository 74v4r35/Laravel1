<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('teste', function(){
//     return[
//         'heroi'=> 'Geraldo',
//         'masqueico'=> 'braia'
//     ];
// });

// Route::prefix('user')->group( function(){
//     Route::get('', function(){
//         return 'olá usuário';
//     });
//     Route::get('/{id}', function($id){
//         return "olá usuário ${id}";
//     });
//     Route::get('/{id}/{nome}', function($id,$nome){
//         return "olá usuário ${id} de nome ${nome}";
//     });
// });

Route::get('user/{user}', [\App\Http\Controllers\UserController::class, 'show']);