<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description','detail', 'image','image_2','image_3','image_4','image_5','price','price_2',
    ];
}
