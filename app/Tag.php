<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class Tag extends Model
{
    protected $table = "tags";
    
    protected $fillable = ['name'];
    
    public function articles(){
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
    // public function scopeSearch($query, $name){
    //     return $query       =(DB::table('tags')
    //                             ->where('name','LIKE',$name)
                                
    //     );
    // }
   
}
