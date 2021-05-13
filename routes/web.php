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

Route::view('/', 'pages.home');           //naršyklės lange įvedus svetainės adresą bus matomas vaizdas home, esantis kataloge pages
Route::view('/home', 'pages.home');       //naršyklės lange įvedus svetainės adresą + '/home' (pvz., http://localhost:8000/home) bus matomas vaizdas home
Route::view('/about', 'pages.about');     //naršyklės lange įvedus svetainės adresą + '/about' bus matomas vaizdas about
Route::view('/contacts', 'pages.contacts');
Route::view('/admin', 'admin.dashboard');
Route::get('/games', App\Http\Controllers\GamesController::class);
Route::get('/genres', App\Http\Controllers\GenresController::class);
Route::get('/games/{id}', [App\Http\Controllers\GamesController::class, 'show']);
Route::get('/games/{id}/edit', [App\Http\Controllers\GamesController::class, 'edit']);
Route::post('/games/{id}/', [App\Http\Controllers\GamesController::class, 'store']);
Route::delete('/games/{id}', [App\Http\Controllers\GamesController::class, 'destroy']);
Route::patch('/games/{id}', [App\Http\Controllers\GamesController::class, 'update']);
Route::view('/developers', 'user/developers');




/*
Route::get('/games', App\Http\Controllers\GamesController::class);
Route::get('/genres', App\Http\Controllers\GenresController::class);

Route::view('/admin', 'admin.dashboard');
Route::resource('admin/games', App\Http\Controllers\Admin\GamesController::class);
Route::resource('admin/genres', App\Http\Controllers\Admin\GenresController::class);
Route::resource('admin/users', App\Http\Controllers\Admin\UsersController::class);
Route::resource('admin/roles', App\Http\Controllers\Admin\RolesController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/
Route::get('redirects', App\Http\Controllers\HomeController::class);
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

    Route::resource('admin/games', App\Http\Controllers\Admin\GamesController::class);
    Route::resource('admin/genres', App\Http\Controllers\Admin\GenresController::class);
    Route::resource('admin/users', App\Http\Controllers\Admin\UsersController::class);
    Route::resource('admin/roles', App\Http\Controllers\Admin\RolesController::class);
    Route::resource('admin/reviews', App\Http\Controllers\Admin\ReviewsController::class);
});

Route::group(['middleware' => ['role:admin']], function () {
    Route::resource('admin/roles', App\Http\Controllers\Admin\RolesController::class);
    Route::resource('admin/users', App\Http\Controllers\Admin\UsersController::class);
});
