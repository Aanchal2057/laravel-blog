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

// Route::get('/', function () {
//     // return view('posts');
//     // return Hello world!; //return string
// });


// Route::get('post', function () {
//     return view('post',[
//        // 'post'=>'<h1>Hello World</h1>' //$post
//         'post' =>file_get_contents($filename)
//     ]);
// });

//store blog post as html file
// Route::get('posts/{post}', function ($slug) {
//     // $post =file_get_contents[__DIR__. '/../resources/posts/my-first-post.html'];
//     // return view('post',[
//     //     'post' => $post
//     // ]);
//     // $post = file_get_contents[__DIR__. "/../resources/posts/{$slug}.html"];
//     // return view('post',[
//     //     'post'=>$post
//     //]);
//     $path=__DIR__."/..resources/posts/{$slug}.html";
//     if(!file_exists($path)){
//         // dd('file doesnot exits');
//         // abort(404);
//         return redirect('/');
//     }
//     $post=file_get_contents($path);
//     return view('post',[
//         'post'=>$post
//     ]);
   
// });

//Route wildcard constraints
// Route::get('posts/{post}',function($slug){
// $path=__DIR__ . "/../resources/posts/{$slug}.html";
// ddd($path);
// if(! file_exists($path)){
//     return redirect('/');
// }
// $post=file_get_contents($path);
// return view('post',[
//     'post' => $post
// ]);
// })->where('post','[A-z]_-+');//whereAlpha,whereAlphaNumeric,whereNumner(post)

//use caching 
// Route::get('posts/{post}',function($slug){
//     $path = _DIR_ ."/../resources/posts/{$slug}.html";
//     ddd($path);
//     if(! file_exists($path)){
//         return redirect('/');
//     }
//     $post= cache()->remember("posts.{$slug}",5,function() use($path){
//         var_dump('file_get_contents');   
//         return file_get_contents($path);
//     });
    
//     return view('post',[
//         'post' => $post
//     ]);
//     })->where('post','[A-z]_-+');


// //use the filesystem class to read a directory
//  Route::get('posts/{post}',function($slug){
//   //find  a post by its slug and pass it to a view called "post"
// //   $post =Post::find($slug);
// //   return view('post',[
// //     'post'=>$post
   
//    return View('post',[
//     'post' => Post::find($slug)
//   ]);
//  })->where('post','[A-z_\-]+');

// Route::get('/',function(){
//     return Post::find('my-first-post');
//     return view('posts');
// });
// Route::get('/',function(){
//     return view('posts',[
//         'posts'=>Post::all()
//     ]);
// });
// Route::get('posts/{post}',function($slug){
//     return view('post',[
//         'post'=>Post::find($slug)
//     ]);
// })->where('post','[A-z\-]+');


// Route::get('/', function () {
//     return view('post');
// });


// basic routings and views
Route::get('/', function () {

    // using collection to store data

    // using foreach 

    // $posts = [];

    // foreach ($files as $file){
    //     $document = YamlFrontMatter::parseFile($file);

    //     $posts[] = new Post(
    //         $document->title,
    //         $document->excerpt,
    //         $document->date,
    //         $document->body(),
    //         $document->slug,
    //     );
    // }


    // $object = YamlFrontMatter::parseFile(
    //     resource_path('posts/my-first-post.html')
    // );

    // ddd($object -> title);

    // return Post::find('my-first-post');

    // calls Post::all
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post}', function ($slug) {

    // find a post by its slug and pass it to a view called "post"
    // $post = Post::find($slug);

    return view('post', [
        'post' => Post::find($slug)
    ]);
})->where('post', '[A-z_/-]+'); //constraints
