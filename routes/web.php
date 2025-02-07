<?php

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
        'postingan' => [
            [
                'slug' => 'judul-1',
                'title' => 'Judul 1',
                'author' => 'Agus Awaludin',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque iure illo cumque facilis iusto voluptas qui minus incidunt accusamus accusantium alias unde consequuntur quia officiis quasi aut, nemo itaque totam.'
            ],
            [
                'slug' => 'judul-2',
                'title' => 'Judul 2',
                'author' => 'Agus Awaludin',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde inventore ullam nulla labore molestiae, incidunt dignissimos maiores, repudiandae fugiat ducimus facilis nihil dolore animi aut reprehenderit tempore ratione tempora esse aliquam illo sint fuga doloremque ex? Maxime laudantium corrupti quam repellendus quo quis, commodi recusandae impedit blanditiis ab cum nulla? Facilis, dicta a amet dolore quibusdam quidem. Aspernatur officiis totam sequi distinctio praesentium ipsam voluptatum cum, a incidunt odit quis possimus eaque quisquam quasi nesciunt ull m quibusdam quaerat neque cumque pariatur esse illum? Nihil recusandae consequuntur, modi deserunt quaerat minima dolor, fugit quos et commodi dolore, aut excepturi reiciendis vel.'
            ]
        ]
    ]);
});

Route::get('/postingan/{slug}', function($slug){
    $postingan = [
        [
            'slug' => 'judul-1',
            'title' => 'Judul 1',
            'author' => 'Agus Awaludin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque iure illo cumque facilis iusto voluptas qui minus incidunt accusamus accusantium alias unde consequuntur quia officiis quasi aut, nemo itaque totam.'
        ],
        [
            'slug' => 'judul-2',
            'title' => 'Judul 2',
            'author' => 'Agus Awaludin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde inventore ullam nulla labore molestiae, incidunt dignissimos maiores, repudiandae fugiat ducimus facilis nihil dolore animi aut reprehenderit tempore ratione tempora esse aliquam illo sint fuga doloremque ex? Maxime laudantium corrupti quam repellendus quo quis, commodi recusandae impedit blanditiis ab cum nulla? Facilis, dicta a amet dolore quibusdam quidem. Aspernatur officiis totam sequi distinctio praesentium ipsam voluptatum cum, a incidunt odit quis possimus eaque quisquam quasi nesciunt ullam quibusdam quaerat neque cumque pariatur esse illum? Nihil recusandae consequuntur, modi deserunt quaerat minima dolor, fugit quos et commodi dolore, aut excepturi reiciendis vel.'
        ]
        ];

        $post = Arr::first($postingan, function($post) use ($slug) {
            return $post['slug'] == $slug;
        });
        
        
        return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        'title' => 'Halaman Kontak'
    ]);
});
