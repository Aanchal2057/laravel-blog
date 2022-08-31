<?php
namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post{
    public static function all(){
        // return File::files(resource_path("posts/"));
         // stores all the files in $files 
        $files = File::files(resource_path("posts/"));

        // returns contents of the files using array_map
        return array_map(function ($files){
            return $files -> getContents();
        }, $files);
    }
    public static function find($slug){
        //  if(!file_exists(  $path = __DIR__ . "/../resources/posts/$slug.html")){
        //    redirect('/');
        base_path();
        if(!file_exists($path = resource_path("posts/$slug.html"))){
        // return  redirect('/');
        throw new ModelNotFoundException;
        }
        return cache()->remember("posts.$slug",1200,fn() =>file_get_contents($path));
            
    }
}