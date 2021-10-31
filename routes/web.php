<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    if (auth()->user()) 
    {
         return redirect(route('home'));
    }
           return redirect(route('login'));    
});

Auth::routes(
    // ['register'=>false]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('group',App\Http\Controllers\GroupController::class);
Route::get('group/{group}/assignpage',[App\Http\Controllers\GroupController::class,'assignpage']);
Route::post('group/assignuser',[App\Http\Controllers\GroupController::class,'assign_group_with_user'])->name('assign.user');
Route::get('nice',function(Request $request){return response()->json($request->all());});
Route::post('submission/form',[App\Http\Controllers\GroupController::class,'UpdateGroupForm']);

Route::get('inilah',function(){
    $response = Http::withToken('5nyoyXQWvYnZWSBHwumKaHPLavmXqUeFPw3813HcasHF')->get('https://api.typeform.com/forms/TO6Gc4DB/responses?included_response_ids=a0cihg7s9udk3jyy8fa0cihgbw9bv2ct');
    dd($response->json());

});