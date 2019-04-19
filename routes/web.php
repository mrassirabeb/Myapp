<?php
use Illuminate\Support\Facades\Input;
 
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
Route::get ( '/callback/{service}', 'SocialAuthController@callback' );
Route::get ( '/redirect/{service}', 'SocialAuthController@redirect' );
Route::post('/upload-profile','ProfileController@UploadProfilePic');
Route::get('/images-cropper','ProfileController@index');
Route::resource('photos', 'OffreuserController');
Route::get('/postuler/{id}', 'OffresController@postuler')->middleware('auth');
Route::get('/postulerstage/{id}', 'OffresController@postulerstage')->middleware('auth');
Route::get('/offre_dispo', 'SearchController@index');
Route::get('/live_search/action', 'SearchController@action')->name('live_search.action');

Route::get('/stages_dispo', 'LiveSearch@index');
Route::get('/live_searchh/action', 'LiveSearch@action')->name('live_searche.action');

Route::get('/', function () {
    return view('index1');
});
Route::get('/library-assets','OffreuserController@index');
Route::get('/stages_library','OffreuserController@index1');

Route::get('/pdf-viewer', function () {
    return view('pdf-viewer');
});


Route::get('/pdf-viewer', 'CvController@index');
Route::get('/indexutilisateur', function () {
    return view('indexutilisateur');
});

Route::get('/emplois', function () {
    return view('emplois');
});
Route::get('/basic-form-element','CvController@index1');

Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/base', function () {
    return view('base');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/professor-profile', function () {
    return view('professor-profile');
});
Route::get('/all-professors', function () {
    return view('all-professors');
});
Route::get('/add-professor', function () {
    return view('add-professor');
});

Route::get('/details_offre', function () {
    return view('details_offre');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('offre/{id}', 'OptimaController@show');
Route::get('stage/{id}', 'OptimaController@showstage');
Route::resource('cvs','CvController');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');
Route::resource('offres','OffresController')->middleware('is_admin');
Route::resource('stages','StageController')->middleware('is_admin');
Route::get('/ajouter-stage', function () {
    return view('ajouter-stage');
});