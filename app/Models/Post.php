<?php

namespace App\Models;
use App\Models\Category;
use App\Models\User;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable=['title','excerpt','body','slug','category_id'];
    // protected $guarded=['id'];//says every thing can be mass assigned except id
    protected $guarded=[];//doesnot allow mass assign

    // public function getRouteKeyName()
    // {
    //     // return parent::getRouteKeyName();//change the auto generated stub
    //     return 'slug';
    // }

    //query scope
    public function scopeFilter($query, array $filters)
    {  // Post::newQuery->filter()

        $query->when(
            $filters['search'] ?? false, //null coalescing operator
            function ($query, $search) {
                $query->where('title', 'like', '%' . $search . '%');
            }
        );
    }
    protected $with=['category','author'];
    public function category(){
        //hasone,hasmany,belongsto,belogstomany
        return $this->belongsTo(Category::class);
        // return $this->belongsTo('App\Category','foreign_key');
    }
    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }

}
