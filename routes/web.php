<?php

use App\Models\Group;
use App\Jobs\UpateGroupData;
use Illuminate\Http\Request;
use App\Jobs\SendEmailToNewUser;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    ['register'=>false]
);
Route::middleware(['auth'])->group(function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('group',App\Http\Controllers\GroupController::class,['only'=>['store','index']]);
Route::get('group/{group}/delete',[App\Http\Controllers\GroupController::class,'destroy'])->name('group.delete');
Route::get('group/{group}/assignpage',[App\Http\Controllers\GroupController::class,'assignpage']);
Route::post('group/assignuser',[App\Http\Controllers\GroupController::class,'assign_group_with_user'])->name('assign.user');

Route::get('score_group',[App\Http\Controllers\GroupController::class,'groupscore']);
Route::get('score_group/{value}',[App\Http\Controllers\GroupController::class,'groupscorebycategory']);


});
Route::post('submission/form',[App\Http\Controllers\GroupController::class,'UpdateGroupForm']);
// Route::get('jobadd',function(){
//     $group=Group::find(6);
//     // dd($group);
//     // dispatch(new PullRespondData($group));
//     // SendEmailToNewUser::dispatch();
//         UpateGroupData::dispatch($group);
//     return 'nice';
// });

