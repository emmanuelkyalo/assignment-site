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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/save-new-assignment','AssignmentController@storeNewAssignment');
Route::middleware(['auth'])->group(function () {
    //After Login the routes are accept by the loginUsers...
    Route::get('/auth-new-assignment','AssignmentController@newAssignmentForm');

    Route::get('/client-dashboard','ClientController@dashboard');
    Route::get('/assignments/{id}','ClientController@assignmentDetails')->name('assignment-detail');
    Route::post('/post-new-comment','CommentsController@newComment');


    //STRICTLY ADMIN ROUTES
    Route::get('/admin-dashboard','AdminController@viewAssignments');
    });


    Route::group(['middleware' => ['guest']], function () {
        Route::get('/guest-new-assignment','AssignmentController@guestNewAssignment');
    });
