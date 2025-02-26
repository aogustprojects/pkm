<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PoliGigiController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\DashboardPostController;
use App\Models\PoliGigi;
use App\Http\Controllers\DashboardPoliGigiController;
use Illuminate\Support\Facades\Artisan;

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
        'postingan' => Post::filter(request(['search', 'category' , 'author']))->latest()->paginate(6)->withQueryString()
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

Route::get('/dashboard', function(){ return view('dashboard.index', ['title' => 'Dashboard']);})->middleware('auth');

Route::get('/dashboard/postingan/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/postingan', DashboardPostController::class)->middleware('auth');

Route::resource('/poli-gigi', PoliGigiController::class);

Route::resource('/dashboard/poli-gigi', DashboardPoliGigiController::class)->middleware('auth');

Route::get('/storage-link', function() {
    Artisan::call('storage:link');
    return 'storage:link berhasil dijalankan';
});

Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    return 'config:cache berhasil dijalankan';
});

Route::get('/config-clear', function() {
    Artisan::call('config:clear');
    return 'config:clear berhasil dijalankan';
});

Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'view:clear berhasil dijalankan';
});

Route::get('/view-cache', function() {
    Artisan::call('view:cache');
    return 'view:cache berhasil dijalankan';
});

Route::get('/route-clear', function() {
    Artisan::call('route:clear');
    return 'route:clear berhasil dijalankan';
});

Route::get('/route-cache', function() {
    Artisan::call('route:cache');
    return 'route:cache berhasil dijalankan';
});