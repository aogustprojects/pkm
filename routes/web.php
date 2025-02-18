<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SendEmailController;

Route::get('/', function () {
    return view('beranda', [
        'title' => 'Beranda Puskesmas'
    ]);
});

Route::get('/profil', function () {
    return view('profil', [
        'title' => 'Profil Puskesmas',
        'name' => 'UPTD PUSKESMAS PASIR JATI'
    ]);
});

Route::get('/postingan', function () {
    return view('postingan', [
        'title' => 'Postingan Puskesmas', 
        'postingan' => Post::filter(request(['search', 'category' , 'author']))->latest()->paginate(3)->withQueryString()
    ]);
});

Route::get('/postingan/{post:slug}', function(Post $post){
        
    return view('post', ['title' => 'Single Post', 'post' => $post]);
        
});

Route::get('/author/{user:username}', function(User $user){
    // $postingan = $user->postingan->load('category', 'author');
    return view('postingan', ['title' => count($user->postingan) . ' Postingan Oleh ' . $user->name, 'postingan' => $user->postingan]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    // $postingan = $category->postingan->load('category', 'author');
    return view('postingan', ['title' => 'Postingan di kategori ' . $category->name, 'postingan' => $category->postingan]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        'title' => 'Kontak Puskesmas'
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::post('/send-email', [SendEmailController::class, 'sendWelcomeEmail'])->name('send.email');

Route::get('/dashboard', function(){
    return view('dashboard.index', ['title' => 'Dashboard']);
})->middleware('auth');

Route::get('/dashboard/postingan', [DashboardPostController::class, 'index'])->middleware('auth');
Route::get('/dashboard/postingan/{post:slug}', [DashboardPostController::class, 'show'])->middleware('auth');