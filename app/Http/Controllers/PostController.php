<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        
        // calls Post::all which is one of the function provided by collection
        return view('posts.index', [
    
            // we have to run sql query for every post
            // 'posts' => Post::all()
    
            // we just have to run sql query once to get all the posts
            'posts' => Post::latest()->filter(request(['search','category','author']))->paginate(18)->withQueryString()
            // 'catagories' => Catagory::all()
            // 'currentCategory'=>Category::firstWhere('slug',request('category'))
        ]);
    }

    public function show(Post $post) {

        // find a post by its slug and pass it to a view called "post"
        // $post = Post::find($slug);
    
        return view('posts.show', [
            'posts' => $post
        ]);
    }
    

    // protected function getPost(){

    //     return Post::latest()->filter()->get();

    //     // $posts = Post::latest();

    //     // if (request('search')) {
    //     //     $posts->where('title', 'like', '%'. request('search'). '%')
    //     //     ->orWhere('body','like', '%'.request('search').'%');
    //     // }

    //     // return $posts->get();
    // }
}