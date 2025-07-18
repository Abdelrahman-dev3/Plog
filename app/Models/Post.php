<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'description' , 'created_by'];

    public function user(){
        return $this->belongsTo(User::class,'created_by');
    }
}