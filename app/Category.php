<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];
    protected $table = 'categorys';

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}