<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\BookmarkController;

use App\Http\Controllers\SingleRecipeController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;


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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);

// Route::get('/', function () {
//     return view('home', ["judulPage" => "home"]);
// });

Route::get('/home', function () {
    return view('home', ["judulPage" => "home"]);
});

Route::get('/about', function () {
    return view('about', [
        "nama1" => "Alvin Tolopan Armando Sibuea",
        "nama2" => "Dan Teman Temannya",
        "gambar" => "CookingDash",
        "judulPage" => "about"
    ]);
});

//halaman resep
Route::get('/recipes', [PostController::class, 'index']);
//halaman single resep
Route::get('recipes/{slug}', [PostController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


//Routing Resep
Route::get('/resep/index', [ResepController::class, 'index'])->name('resep');
Route::post('/resep/create', [ResepController::class, 'store']);
Route::get('/resep/tampil', [ResepController::class, 'getDataResep'])->name('resep.tampil');
Route::get('/resep/detail/{id}', [ResepController::class, 'detailResep'])->name('detail.resep');
Route::get('/resep/delete/{id}', [ResepController::class, 'deleteResep'])->name('delete.resep');
Route::post('/resep/update/{id}', [ResepController::class, 'updateResep'])->name('update.resep');

Route::get('/bookmark/tampil', [BookmarkController::class, 'getDataBookmark'])->name('bookmark.tampil');
Route::post('/bookmark/resep/{id}', [BookmarkController::class, 'store'])->name('bookmark.store');
Route::get('/bookmark/delete/{id}', [BookmarkController::class, 'deleteBookmark'])->name('bookmark.delete');

Route::post('/komentar/create', [KomentarController::class, 'createKomentar']);
Route::get('/komentar/delete/{id}', [KomentarController::class, 'deleteKomentar'])->name('komentar.delete');



Route::get('/authors/{author:username}', function(User $reseps){
    return view('resep', [
        'judulPage' => "Post By Author : $author->name",
        'tampil' => $author->resep
    ]);
});



Route::get('/resep/{slug}', [SingleRecipeController::class, 'show']);
  