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

Route::get('/', function () {return view('auth.login');});



//....................Main Page of navbar...............

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog', 'HomeController@showblog')->name('blog');

Route::get('/about-us','HomeController@about_us')->name('about-us');

//...................Inside the main page.....................
Route::get('/event-details/{id}','HomeController@showEventDetails')->name('event.details');


Route::post('/booking','EventBookingController@userEventBook')->name('event-booking');


Auth::routes();


// ------------Admin route----------------------------------
Route::prefix('admin')->group(function(){

Route::get('/', 'Backend\AdminLoginController@showLoginForm')->name('admin.login');

Route::get('/login','Backend\AdminLoginController@showLoginForm')->name('admin.login');

	Route::post('/login', 'Backend\AdminLoginController@login')->name('admin.login.submit');

	Route::get('/logout', 'Backend\AdminLoginController@logout')->name('admin.logout');

    Route::get('/dashboard', 'Backend\DashboardController@index')->name('admin.dashboard');

    Route::get('/add-event', 'Backend\EventController@showEventPostForm')->name('admin.add-event');

	Route::post('/add-event', 'Backend\EventController@showEventPostForm')->name('admin.add-event.submit');

    Route::get('/show-events', 'Backend\EventController@showEventList')->name('admin.show-events');
  
    Route::get('/edit-event/{id}', 'Backend\EventController@EditEventPost')->name('admin.edit-event');

    Route::post('/edit-event/{id}', 'Backend\EventController@EditEventPost')->name('admin.update-event');

    Route::get('/delete-event/{id}', 'Backend\EventController@deleteEvent')->name('admin.delete-event');
    
  //...........................For Blog .............................. 
    Route::get('/add-blog', 'Backend\BlogController@addBlog')->name('admin.add-blog');

    Route::post('/add-blog', 'Backend\BlogController@addBlog')->name('admin.add-blog.submit');
  
    Route::get('/show-blog', 'Backend\BlogController@showBlog')->name('admin.show-blog');  

    Route::get('/edit-blog/{id}', 'Backend\BlogController@editBlog')->name('admin.edit-blog');

    Route::post('/edit-blog/{id}', 'Backend\BlogController@editBlog')->name('admin.edit-blog.submit');
   
    Route::get('/delete-blog/{id}', 'Backend\BlogController@deleteBlog')->name('admin.delete-blog');   


//............................Booking Manage........................
    Route::get('/booking-list','Backend\ManageBookingController@showBookingList')->name('admin.booking-list');

    Route::get('/approved-booking/{id}', 'Backend\ManageBookingController@showBookingList')->name('admin.approved-booking');

    Route::get('/delete-booking/{id}', 'Backend\ManageBookingController@deleteBooking')->name('admin.delete-booking');

});