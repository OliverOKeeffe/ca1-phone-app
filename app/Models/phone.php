<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'model_name',
        'year',
        'battery_life',
        'height',
        'weight',
        'brand_id',
        'phone_image', 
    ];

    // belongsTo was used to the one to many relationship between brands and phones
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    // belongsToMany was used to the the many to many relationship between phones and retailers
    public function retailers(){
        return $this->belongsToMany(Retailer::class);
    }
}