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
   
    [PostController::class,'index']
    )->name('home');  // naming the route 'home'

Route::get('posts/{post:slug}', [PostController::class,'show']);
    

// Route::get('authors/{author:userName}', function (User $author) {

//     return view('posts.index', [
//         'posts' => $author->posts->load(['catagory', 'author']),
//     ]);
// });