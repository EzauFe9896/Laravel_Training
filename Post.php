<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;

    protected $dates=['delete_at'];
    
    // protected $table ='post';

   // protected $primarykey = 'post_id';

   protected $fillable=[
       'title',
       'content'
    ];
}
