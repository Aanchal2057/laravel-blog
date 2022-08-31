<?php

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

//     $files = File::files(resource_path("posts"));
//     $posts = collect($files)->map(function ($file){ //collection class allow to chain its method to map properly
//         $document = YamlFrontMatter::parseFile($file);
//         return new Post( //fetch the post objects excerpt
//             $document -> title,
//             $document->date,
//             $document->slug,
//             $document->body()
//         );
//     });


//     return view('posts.post',[
//         'posts' => $posts
//     ]);
// });
// Route::get('/post/{post}', function($slug){
   
//    return view('posts.sub',[
//     'post' => Post::find($slug)
//    ]);
// })->where('post','[A-z_\-]+');


Route::get('/', function () {
    return view('posts.post', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post}', function ($slug) {

    // find a post by its slug and pass it to a view called "post"
    // $post = Post::find($slug);

    return view('posts.sub', [
        'post' => Post::findOrFail($slug)
    ]);
});