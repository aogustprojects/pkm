<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('beranda', [
        'title' => 'Halaman Beranda'
    ]);
});

Route::get('/profil', function () {
    return view('profil', [
        'title' => 'Halaman Profil'
    ]);
});

Route::get('/postingan', function () {
    return view('postingan', [
        'title' => 'Halaman Postingan',
        'postingan' => Post::all()
    ]);
});

Route::get('/postingan/{post:slug}', function(Post $post){
        
        return view('post', ['title' => 'Single Post', 'post' => $post]);
        
});

Route::get('/author/{user:username}', function(User $user){
        
    return view('postingan', ['title' => count($user->postingan) . ' Postingan Oleh ' . $user->name, 'postingan' => $user->postingan]);
});

Route::get('/categories/{category:slug}', function(Category $category){
        
    return view('postingan', ['title' => 'Postingan di kategori ' . $category->name, 'postingan' => $category->postingan]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        'title' => 'Halaman Kontak'
    ]);
});
