<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class comments extends Model
{
    use HasFactory,SoftDeletes;
    // Selected Name Table
    protected $table = 'comments';
    protected $guarded = [];

       // Relations To users
       public function users(){
        return $this->belongsTo(User::class, 'users_id');
    }

    // Relations To comments
    public function comments()
    {
        return $this->belongsTo(comments::class, 'comments_id');
    }
}
