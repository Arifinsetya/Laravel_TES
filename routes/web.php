<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

use App\Models\Category;
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
    return view('home',[
        "title" =>"home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title"=>"about",
    ]);
});
Route::get('/fitur', function () {
    return view('fitur', [
        "title"=>"fitur",
    ]);
});
Route::get('/daftar', function () {
    return view('daftar', [
        "title"=>"daftar",
    ]);
});
Route::get('/karir', function () {
    return view('karir', [
        "title"=>"karir",
    ]);
});

Route::get('/posts',[PostController::class,'index']);

Route::get('posts/{post:slug}',[PostController::class,'show']);

Route::get('/categories/{category:slug}', function(Category $category){
    return view ('category',[
        'title' =>$category->name,
        'post' =>$category->posts,
        'category'=>$category->name

    ]);
});


