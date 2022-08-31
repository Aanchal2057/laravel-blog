<?php
namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class post 
{
    //instantiate the data
    public $title;

    public $excerpt;

    public $date;

    public $body;

    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
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

        
        // $files = File::files(resource_path("posts/"));  
        // return array_map(function ($file){
        //     return $file->getContents();
        // }  , $files);


        return cache()-> rememberForever('posts.all', function(){
            return collect(File::files(resource_path("posts/")))
                ->map(
                    function ($file) {
                        return \Spatie\YamlFrontMatter\YamlFrontMatter::parseFile($file);
                    }
                )
    
                ->map(
                    function ($document) {
                        return new Post(
                            $document->title,
                            $document->excerpt,
                            $document->date,
                            $document->body(),
                            $document->slug,
                        );
                    }
                )
                -> sortByDesc('date');
        });
    }
    public static function find($slug){
        // //of all the blog posts,find the onw with a slug that maches the one requested
        // //$posts= static:all();
        // //dd($posts->firstWhere('slug',$slug));//give me the first post where slug=slug
        // //------------------------
        // if(!file_exists($path =resource_path("posts/{$slug}.html"))){
        //     throw new ModelNotFoundException();
        // }
        // return cache()->remember("posts.{$slug}",1200, fn() => file_get_contents($path));

        // //----------------------
        // // $posts = static::all();

        // // return $posts->firstWhere('slug', $slug);


        return static::all()->firstWhere('slug', $slug);
    }

    public static function findOrFail($slug){

        $post =  static::find($slug);
        if(!$post){
            throw new ModelNotFoundException();
        }

        return $post;
    }
}
?>