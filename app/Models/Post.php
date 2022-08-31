<?php
namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class post 
{
    //instantiate the data
    public $title;
    public $date;
    public $slug;
    public $body;

    public function __construct($title , $date , $slug , $body )
    {
        $this->title= $title;
        $this->date= $date;
        $this->slug= $slug;
        $this->body= $body;

    }

    public static function all(){
        // return collect(File::files(resource_path("posts/")))
        //     ->map(
        //         function ($file) {
        //             return YamlFrontMatter::parseFile($file);
        //         }
        //     )

        //     ->map(
        //         function ($document) {
        //             return new Post(
        //                 $document->title,
        //                 $document->excerpt,
        //                 $document->date,
        //                 $document->body(),
        //                 $document->slug,
        //             );
        //             ->sortedByDesc('date');
        //         }
        //    );

        
        $files = File::files(resource_path("posts/"));  
        return array_map(function ($file){
            return $file->getContents();
        }  , $files);
    }
    public static function find($slug){
        //of all the blog posts,find the onw with a slug that maches the one requested
        //$posts= static:all();
        //dd($posts->firstWhere('slug',$slug));//give me the first post where slug=slug
        //------------------------
        if(!file_exists($path =resource_path("posts/{$slug}.html"))){
            throw new ModelNotFoundException();
        }
        return cache()->remember("posts.{$slug}",1200, fn() => file_get_contents($path));

        //----------------------
        // $posts = static::all();

        // return $posts->firstWhere('slug', $slug);
    }
}
?>