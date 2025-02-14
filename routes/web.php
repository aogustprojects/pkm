<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Mail\welcomeEmail;
use function Pest\Laravel\get;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;
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
    // $postingan = Post::with(['author', 'category'])->latest()->get();
    $postingan = Post::latest()->get();
    return view('postingan', [
        'title' => 'Postingan Puskesmas',
        'postingan' => $postingan
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


Route::post('/send-email', [SendEmailController::class, 'sendWelcomeEmail'])->name('send.email');
