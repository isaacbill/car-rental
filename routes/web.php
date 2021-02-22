<?php
use App\Crud;
use Illuminate\Support\Facades\Request;


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
} );

    Route::get ( '/carlisting', function () {
    return view ( 'carlisting' );
} );
Route::get('/about', function () {
    return view('about');
});
Route::get('/carlisting', function () {
    return view('carlisting');
});
Route::get('/contact_us', function () {
    return view('contact_us');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('/admin/users','Admin\UsersController',['except' =>['show','create','store']]);
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('/users','UsersController',['except' =>['show','create','store']]);
});

Route::resource('Crud','crudsController');

Route::get('contact-us', 'ContactController@getContact');
Route::post('contact-us', 'ContactController@saveContact');

Route::resource('booking','bookingController');

Route::any ( '/search', function () {
    $q = request::get ( 'q' );
    $cruds = Crud::where ( 'VehiclesBrand', 'LIKE', '%' . $q . '%' )->orWhere ( 'PricePerDay', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $cruds ) > 0)
        return view ( 'carlisting' )->withDetails ( $cruds )->withQuery ( $q );
    else
        return view ( 'carlisting' )->withMessage ( 'No Details found. Try to search again !' );

});