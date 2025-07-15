<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PoliGigiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\ArsipSuratMasukController;
use App\Http\Controllers\PoliGigiRujukanController;
use App\Http\Controllers\ArsipSuratKeluarController;
use App\Http\Controllers\DashboardPegawaiController;
use App\Http\Controllers\DashboardKegiatanController;
use App\Http\Controllers\DashboardPoliGigiController;
use App\Http\Controllers\DashboardPoliGigiRujukanController;
use App\Http\Controllers\KeluhanController;

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

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

Route::get('/dashboard/postingan/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/postingan', DashboardPostController::class)->middleware('auth');

Route::resource('/poli-gigi', PoliGigiController::class);

Route::resource('/dashboard/poli-gigi', DashboardPoliGigiController::class)->middleware('auth');

Route::resource('/dashboard/arsip_surat_masuk', ArsipSuratMasukController::class)->middleware('auth');

Route::resource('/dashboard/arsip_surat_keluar', ArsipSuratKeluarController::class)->middleware('auth');

Route::post('/update-setting', function (Request $request) {
    $request->validate([
        'max_registrations' => 'required|integer|min:1',
    ]);
    setSetting($request->input('max_registrations'));
    return back()->with('success', 'Max registrations updated!');
})->name('update-setting')->middleware('auth');

Route::post('/toggle-form-status', function (Request $request) {
    $request->validate([
        'is_form_open' => 'required|boolean',
    ]);
    setSetting(null, $request->input('is_form_open'));
    return back()->with('success', 'Form status updated!');
})->name('toggle-form-status')->middleware('auth');

Route::resource('/poli-gigi-rujukan', PoliGigiRujukanController::class)->middleware('auth');

Route::resource('/dashboard/poli-gigi-rujukan', DashboardPoliGigiRujukanController::class)->middleware('auth');

// Assuming this is part of your routes/web.php
Route::get('/dashboard/kegiatan', [DashboardKegiatanController::class, 'index'])->name('dashboard.kegiatan.index');
Route::get('/dashboard/kegiatan/create', [DashboardKegiatanController::class, 'create'])->name('dashboard.kegiatan.create');
Route::post('/dashboard/kegiatan', [DashboardKegiatanController::class, 'store'])->name('dashboard.kegiatan.store');
Route::post('/dashboard/kegiatan/update-goals', [DashboardKegiatanController::class, 'updateGoalsAndTargets'])->name('dashboard.kegiatan.update-goals');

Route::resource('/dashboard/pegawai', DashboardPegawaiController::class)->middleware('auth');

Route::resource('/pegawai', PegawaiController::class);

Route::resource('/dashboard/keluhan', KeluhanController::class)->middleware('auth');

Route::post('/poligigi/toggle-check/{id}', [PoliGigiController::class, 'toggleCheck'])->name('poligigi.toggle-check');


////adwada