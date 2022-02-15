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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/the-loai', 'CategoryController@category')->name('category');
Route::get('/quoc-gia', 'CountryController@country')->name('country');
Route::get('/phim', 'MovieController@movie')->name('movie');
Route::get('/xem-phim', 'WatchController@watch')->name('watch');
Route::get('/tap-phim', 'EpisodeController@episode')->name('episode');

/* ---------------------------------------------------------------------------- */
/* Admin */
Route::get('/admin', 'AdminController@home')->name('home');
Route::get('/admin/danh-muc', 'AdminCategoryController@formCreateCategory')->name('admin.pages.category.createCategory');
Route::post('/admin/tao-danh-muc', 'AdminCategoryController@createCategory')->name('createCategory.post');
Route::get('/admin/danh-sach-danh-muc', 'AdminCategoryController@listCategory')->name('admin.pages.category.listCategory');
Route::get('/admin/chinh-sua-danh-muc', 'AdminCategoryController@editCategory')->name('admin.pages.category.editCategory');

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home'); */
