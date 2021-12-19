<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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
    return view('welcome');
});
Route::get('dashboard',[HomeController::class,'index']);


Route::get('/home',[HomeController::class,'redirect']);

Route::get('/add_madical',[HomeController::class,'add_madical']);

Route::get('/view_mhistory',[HomeController::class,'view_mhistory']);

Route::post('/add_docapp',[HomeController::class,'add_docapp']);

Route::get('/view_mhistory',[HomeController::class,'show']);

Route::get('/update_visit/{id}',[HomeController::class,'update_visite_d_list']);

Route::post('/updatedoctor/{id}',[HomeController::class,'updatedoctor']);

Route::get('/delate/{id}',[HomeController::class,'delate']);




Route::get('/profesional',[HomeController::class,'profesional']);

Route::post('/addpro',[HomeController::class,'addpro']);

Route::get('/view_job_history',[HomeController::class,'allphistory']);

Route::get('/update_p_info/{id}',[HomeController::class,'update_p_info']);

Route::get('/delate_pro/{id}',[HomeController::class,'delate_pro']);

Route::post('/update_pro_info/{id}',[HomeController::class,'update_pro_info']);




// add professional route hear

Route::get('/addeducation',[HomeController::class,'addEducation']);

Route::post('/add_edu',[HomeController::class,'add_edu']);

Route::get('/view_edu',[HomeController::class,'view_edu']);

Route::get('/eduupdata/{id}',[HomeController::class,'eduupdata']);

Route::post('/update_select_edu/{id}',[HomeController::class,'update_select_edu']);

Route::get('/delate_edu/{id}',[HomeController::class,'delate_edu']);









Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
