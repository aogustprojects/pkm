<?php

use App\Models\Post;
use Illuminate\Support\Arr;
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

Route::get('/kontak', function () {
    return view('kontak', [
        'title' => 'Halaman Kontak'
    ]);
});
