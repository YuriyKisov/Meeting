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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/dashboard', 'CreatesController@user');

Route::get('/privacy', function () {
    return view('Privacy');
});
Route::get('/about', function () {
    return view('About');
});
Route::get('/contactUs', function () {
    return view('ContactUs');
});
Route::get('/Events', function () {
    return view('Events');
});
//User
Route::get('/update_user', 'CreatesController@updateUser');
Route::post('/edit_user/{id}', 'CreatesController@editUser');
Route::get('/delete_user', 'CreatesController@deleteUser');

//Event

Route::get('/create_event', function (){
    return view('create_event');
});
Route::post('/insert_event', 'CreatesController@insertEvent');
Route::get('/update_event/{id}', 'CreatesController@updateEvent');
Route::post('/edit_event/{id}', 'CreatesController@editEvent');
Route::get('/delete_event/{id}', 'CreatesController@deleteEvent');
Route::post(
/**
 * @param \Illuminate\Http\Request $request
 * @param \Illuminate\Mail\Mailer $mailer
 * @return \Illuminate\Http\RedirectResponse
 */
    '/sendmail', function (\Illuminate\Http\Request $request, \Illuminate\Mail\Mailer $mailer) {
    $mailer->to($request->input('mail'))->send(new \App\Mail\MailClass(
        $request->input('name'),
        $request->input('title'),
        $request->input('message')
    ));
    return redirect()->back();
})->name('sendmail');

Route::resource('users','UsersController');