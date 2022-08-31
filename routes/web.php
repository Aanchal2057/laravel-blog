<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
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
//     return 'Hello World!';  //returning string
//     // return['foo'=>'bar'];
// });
// Route::get('post',function(){
//      return view('post',[
//         // 'post' =>'<h1>Hello world</h1>'//access $post
        
//      ]);
// });


//hard coded for my-first-post
// Route::get('post',function(){
//     return view('post',[
//         'post' => file_get_contents(__DIR__ .'/../resources/posts/my-first-post.html')
//     ]);
// });

//wildcard
// Route::get('posts/{post}',function($slug){
//      return $slug;
//         // $post = file_get_contents(__DIR__ .'/../resources/posts/my-first-post.html');
//         // return view('post',[
//         //    'post' =>$post
//         // ]);
// });

//use of slug for each post
// Route::get('posts/{post}',function($slug){
//     $post = file_get_contents(__DIR__ . "/../resources/posts/$slug.html");
//         return view('post',[
//            'post' =>$post
//         ]);
// });

//dd and ddd
//  Route::get('posts/{post}',function($slug){
//       $path = __DIR__ . "/../resources/posts/$slug.html";
//       if(!file_exists($path)){
//         ddd('file doesnot exsist');
//         //abort(404);
//          //redirect('/');
//       }
//         $post=file_get_contents($path);
//           return view('post',[
//              'post' =>$post
//           ]);
//   });


//Route whildcard constraints
// Route::get('posts/{post}',function($slug){
//         $path = __DIR__ . "/../resources/posts/$slug.html";
//         if(!file_exists($path)){
//            redirect('/');
//         }
//           $post=file_get_contents($path);
//             return view('post',[
//                'post' =>$post
//             ]);
//      })->where('post','[A-z_-]+'); //where numeric,alphanumeric,number


//caching->avoid expensive operation
// Route::get('posts/{post}',function($slug){
//         // $path = __DIR__ . "/../resources/posts/$slug.html";
//         // if(!file_exists($path)){
//         //    redirect('/');
//         // }
//         // $post = cache()->remember("posts.$slug",5, function() use($path){
//         //   var_dump('file_get_contents');
//         //   return file_get_contents($path);
//         // });
//         //     return view('post',[
//         //        'post' =>$post
//         //     ]);

//         //find a post by its slug and pass it to a view called "post"
//         $post= Post::find($slug);
//         return view('post',
//         ['post'=>$post
//       ]);
//      })->where('post','[A-z_-]+');

//fetch all post
// Route::get('/', function () {
//   return view('posts',[
//     'posts' => Post::all()
//   ]);
// });

// Route::get('/', function () {
//     $posts = Post::all();

//     // ddd($posts[0]);
//     return view('posts',[
//       'posts' =>$posts
//     ]);
//   });


Route::get('/',function(){
  return view('posts',[
   'posts' => Post::all()
  ]);

});


Route::get('posts/{post}',function($slug){
  return view('post',[
    'post' =>Post::find($slug)
  ]);
  
})->where('post','[A-z_-]+');