<?php
use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

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


// basic routings and views
Route::get('/', 

    // if (request('search')) {
    //     $posts->where('title', 'like', '%'. request('search'). '%')
    //     ->orWhere('body','like', '%'.request('search').'%');
    // }

    // // calls Post::all which is one of the function provided by collection
    // return view('posts', [

    //     // we have to run sql query for every post
    //     // 'posts' => Post::all()

    //     // we just have to run sql query once to get all the posts
    //     'posts' => $posts->get(),
    //     'catagories' => Catagory::all()
    // ]);
    // }

    [PostController::class,'index']
    )->name('home');  // naming the route 'home'

Route::get('posts/{post:slug}', [PostController::class,'show']
    
//     function (Post $post) {

//     // find a post by its slug and pass it to a view called "post"
//     // $post = Post::find($slug);

//     return view('post', [
//         'post' => $post
//     ]);
// }
);
// ->where('post', '[A-z_/-]+'); 
//constraints


Route::get('catagories/{catagory:slug}', function (Catagory $catagory) {

    // find a post by its slug and pass it to a view called "post"
    // $post = Post::find($slug);

    return view('posts.post', [
        'posts' => $catagory->posts->load(['catagory', 'author']),
        'currentCatagory' => $catagory,
        'catagories' => Catagory::all()
    ]);
})->name('catagory');  // naming the route catagory

Route::get('authors/{author:userName}', function (User $author) {

    return view('posts.post', [
        'posts' => $author->posts->load(['catagory', 'author']),
        'catagories' => Catagory::all()
    ]);
});
