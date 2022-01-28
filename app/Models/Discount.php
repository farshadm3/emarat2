<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory , Sluggable;

    protected $fillable = [
        'percent',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'percent'
            ]
        ];
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
