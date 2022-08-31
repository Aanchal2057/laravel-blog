<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'slug' => 'Writer',
        // ]);
        // \App\Models\User::truncate();
        // Category::truncate();
        // \App\Models\Post::truncate();

        // $user =\App\Models\User::factory()->create();
        // $personal=Category::create([
        //     'name'=>'Personal',
        //     'slug'=>'personal'
        // ]);
        // $family=Category::create([
        //     'name'=>'Family',
        //     'slug'=>'family'
        // ]);
        // $work= Category::create([
        //     'name'=>'Work',
        //     'slug'=>'work'
        // ]);
        // \App\Models\Post::create([
        //     'user_id'=>$user->id,
        //     'category_id' => $family->id,
        //     'title'=>'My Family Post',
        //     'slug'=>'my-first-post',
        //     'excerpt'=>'Family time is wow',
        //     "body"=>"a group of soils with similar chemical and physical properties (such as texture, pH, and mineral content) that comprise a category ranking above the series and below the subgroup in soil"
        // ]);
        // \App\Models\Post::create([
        //     'user_id'=>$user->id,
        //     'category_id' => $personal->id,
        //     'title'=>'My Personal Post',
        //     'slug'=>'my-personal-post',
        //     'excerpt'=>'Working time',
        //     "body"=>"a group of soils with similar chemical and physical properties (such as texture, pH, and mineral content) that comprise a category ranking above the series and below the subgroup in soil"
        // ]);
        // \App\Models\Post::create([
        //     'user_id'=>$user->id,
        //     'category_id' => $work->id,
        //     'title'=>'My work Post',
        //     'slug'=>'my-work-post',
        //     'excerpt'=>'Working time',
        //     "body"=>"a group of soils with similar chemical and physical properties (such as texture, pH, and mineral content) that comprise a category ranking above the series and below the subgroup in soil"
        // ]);
        $user =  User::factory()->create([
            'name'=>'Jhone Doe'
        ]);
        \App\Models\Post::factory(5)->create([
            'user_id' =>$user->id
        ]);

        
    }
}
