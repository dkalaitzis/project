<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    // what props can be set via mass assignment
    protected $fillable = [
    	'car_name',
        'car_brand',
        'car_description',
        'car_price',
        'cover_img'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

}











