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

Route::get('/', function() {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function() {
    return view('about', [
        "title" => "about",
        "nama" => "Winter",
        "group" => "Aespa",
        "image" => "aespa_gimana.png"
    ]);
});



Route::get('/blog', function() {

    $blog_post= [
        [
            "title" => "Post 1",
            "slug" => "judul-post-pertama",
            "author" => "Candra Irawan",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis consequuntur reiciendis quia dolore esse odio doloribus hic? Vel, alias. Totam fugit dolor, commodi a odio obcaecati repudiandae itaque ad fugiat!"
        ],
        [
            "title" => "Post 2",
            "slug" => "judul-post-kedua",
            "author" => "Bujang Irawan",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis consequuntur reiciendis quia dolore esse odio doloribus hic? Vel, alias. Totam fugit dolor, commodi a odio obcaecati repudiandae itaque ad fugiat!"
        ],
        [
            "title" => "Post 3",
            "slug" => "judul-post-ketiga",
            "author" => "Ade Irawan",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis consequuntur reiciendis quia dolore esse odio doloribus hic? Vel, alias. Totam fugit dolor, commodi a odio obcaecati repudiandae itaque ad fugiat!"
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_post
    ]);
});


//halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_post= [
        [
            "title" => "Post 1",
            "slug" => "judul-post-pertama",
            "author" => "Candra Irawan",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis consequuntur reiciendis quia dolore esse odio doloribus hic? Vel, alias. Totam fugit dolor, commodi a odio obcaecati repudiandae itaque ad fugiat!"
        ],
        [
            "title" => "Post 2",
            "slug" => "judul-post-kedua",
            "author" => "Bujang Irawan",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis consequuntur reiciendis quia dolore esse odio doloribus hic? Vel, alias. Totam fugit dolor, commodi a odio obcaecati repudiandae itaque ad fugiat!"
        ],
        [
            "title" => "Post 3",
            "slug" => "judul-post-ketiga",
            "author" => "Ade Irawan",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis consequuntur reiciendis quia dolore esse odio doloribus hic? Vel, alias. Totam fugit dolor, commodi a odio obcaecati repudiandae itaque ad fugiat!"
        ],
    ];

    $new_post = [];
    foreach ($blog_post as $post ) {
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "single post",
        "post" => $new_post
    ]);
});
