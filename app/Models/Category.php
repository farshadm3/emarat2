<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory , Sluggable;

    protected $fillable = [
        'name','parent_id','image','status','icon'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function child()
    {
        return $this->hasMany(Category::class , 'parent_id' , 'id');
    }
    public function children()
    {
        return $this->child()->with('children');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
