<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Middleware;
use App\Http\Controllers\Requests;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('aaccueil', function () {
    return view('adminempl.aaccueil');
});

Route::get('profile', function () {
    return view('empl.information');
});
Route::get('point', function () {
    return view('empl.point');
});



//________________________________________________________________________________________
Route::get('list', "App\Http\Controllers\EmplController@index");
//Route::get('information/{id}', "App\Http\Controllers\EmplController@info");
Route::get('list/info', "App\Http\Controllers\EmplController@info");
Route::get('list/create', "App\Http\Controllers\EmplController@create");
Route::post('list', "App\Http\Controllers\EmplController@store");
Route::get('list/{id}/edit', "App\Http\Controllers\EmplController@edit");
Route::put('list/{id}', "App\Http\Controllers\EmplController@update");
Route::delete('list/{id}', "App\Http\Controllers\EmplController@destroy");
//________________________________________________________________________________________
Route::get('aconge', "App\Http\Controllers\CongeController@index");
Route::get('conge', "App\Http\Controllers\CongeController@indexx");
Route::get('conge/demande', "App\Http\Controllers\CongeController@create");
Route::post('conge', "App\Http\Controllers\CongeController@store");
Route::get('aconge/{id}/reponse', "App\Http\Controllers\CongeController@edit");
Route::put('aconge/{id}', "App\Http\Controllers\CongeController@update");
//Route::delete('list/{id}', "App\Http\Controllers\EmplController@destroy");
//________________________________________________________________________________________
Route::get('aannonce', "App\Http\Controllers\AnnoController@index");
Route::get('annonce', "App\Http\Controllers\AnnoController@indexx");
Route::get('aannonce/caannonce', "App\Http\Controllers\AnnoController@create");
Route::post('aannonce', "App\Http\Controllers\AnnoController@store");
Route::get('aannonce/{id}/eaannonce', "App\Http\Controllers\AnnoController@edit");
Route::put('aannonce/{id}', "App\Http\Controllers\AnnoController@update");
Route::delete('aannonce/{id}', "App\Http\Controllers\AnnoController@destroy");
//________________________________________________________________________________________
Route::get('areunion', "App\Http\Controllers\ReuinController@index");
Route::get('reunion', "App\Http\Controllers\ReuinController@indexx");
Route::get('areunion/creunion', "App\Http\Controllers\ReuinController@create");
Route::post('areunion', "App\Http\Controllers\ReuinController@store");
Route::get('areunion/{id}/ereunion', "App\Http\Controllers\ReuinController@edit");
Route::put('areunion/{id}', "App\Http\Controllers\ReuinController@update");
Route::delete('areunion/{id}', "App\Http\Controllers\ReuinController@destroy");
//________________________________________________________________________________________
/*Route::get('apoint', "App\Http\Controllers\pointageController@index");
Route::get('point/entre', "App\Http\Controllers\pointageController@create");
Route::post('point/entre', "App\Http\Controllers\pointageController@store");
Route::get('point/{id}/sortie', "App\Http\Controllers\pointageController@edit");
Route::put('point/{id}', "App\Http\Controllers\pointageController@update");
//Route::delete('areunion/{id}', "App\Http\Controllers\ReuinController@destroy");
Route::get('point', "App\Http\Controllers\pointageController@pointage");*/
//________________________________________________________________________________________
Route::get('apoint', "App\Http\Controllers\pointeController@index");
Route::post('rpoint', "App\Http\Controllers\pointeController@getDate");
//________________________________________________________________________________________
//Route::get('/getevent', 'App\Http\Controllers\FullCalendarController@getEvent')->name('getevent');
//Route::post('/createevent','App\Http\Controllers\FullCalendarController@createEvent')->name('createevent');
//Route::post('/deleteevent','App\Http\Controllers\FullCalendarController@deleteEvent')->name('deleteevent');
/*Route::get('accueil', function () {
    return view('empl.accueil');
});*/
Route::get('accueil', "App\Http\Controllers\FullCalendarController@getEvent");
Route::post('createevent', "App\Http\Controllers\FullCalendarController@createEvent");
Route::post('deleteevent', "App\Http\Controllers\FullCalendarController@deleteEvent");