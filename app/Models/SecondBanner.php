<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondBanner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title1', 'title2', 'image', 'link' , 'time' ,'detail',
    ];
}
