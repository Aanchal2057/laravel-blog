<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
use Spatie\YamlFrontMatter\YamlFrontMatter;



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


// Route::get('/', function () {
//     return view('posts.post', [
//         'posts' => Post::all()
//     ]);
// });

// Route::get('posts/{post}', function ($id) {
//          return view('posts.sub', [
//         'post' => Post::findOrFail($id)
//     ]);
// });

//Route model binding
// Route::get('posts/{post}', function (Post $post) {// check variable name match the wildcard name
//     return view('posts.sub', [
//    'post' => $post
// ]);
// });

Route::get('/', function () {
    return view('posts.post', [
        'posts' => Post::Latest('published_at')->with('category','author')->get()
    ]);
});



Route::get('posts/{post:slug}', function (Post $post) {// give the post where matches the slug provide
    return view('posts.sub', [
   'post' => $post
]);
});

Route::get('categories/{category:slug}',function(Category $category){
  return view('posts.post',[
   'posts' =>$category->post   //->load('categories','author')
  ]);
});

Route::get('author/{author:username}',function(\App\Models\User $author){
    // dd($author);
    return view('posts.post',[
     'posts' =>$author->posts    //->load('categories','author')
    ]);
  });