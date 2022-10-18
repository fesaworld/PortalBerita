<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id'];
    protected $with = ['category'];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
            });

            $query->when($filters['category'] ?? false, function ($query, $category) {
                return $query->whereHas('category', function ($query) use ($category) {
                    $query->where('slug', $category);
                });
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}