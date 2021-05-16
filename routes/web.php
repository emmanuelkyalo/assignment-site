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

Auth::routes();

Route::post('/save-new-assignment', 'AssignmentController@storeNewAssignment');
Route::middleware(['auth'])->group(function () {
    Route::get('/auth-new-assignment', 'AssignmentController@newAssignmentForm')->name('auth-new-assignment');
    Route::get('/client-dashboard', 'ClientController@dashboard')->name('client-dashboard');
    Route::get('/assignments/{id}', 'ClientController@assignmentDetails')->name('assignment-detail');
    Route::post('/post-new-comment', 'CommentsController@newComment');
    Route::get('/my-dashboard', 'AssignmentController@myDashboard');
    Route::get('/notifications','ClientController@notifications')->name('notifications');
    Route::get('/','ClientController@notifications')->name('notifications');
    Route::get('/open-notification/{id}/{description}','ClientController@openNotification');
    //STRICTLY ADMIN ROUTES
    Route::get('/admin-dashboard', 'AdminController@viewAssignments')->name('admin-dashboard');
    Route::post('/record-payment', 'PaymentController@recordPayment');
    Route::post('/submit-solution','SolutionController@submitSolution');
    Route::post('/markasunpaid','AssignmentController@markAsUnpaid');
    Route::post('/markasincomplete','AssignmentController@markAsIncomplete');
});
Route::group(['middleware' => ['guest']], function () {
    Route::get('/guest-new-assignment', 'AssignmentController@guestNewAssignment');
});
