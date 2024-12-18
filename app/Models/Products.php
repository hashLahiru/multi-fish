<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'pro_name',
        'pro_description',
        'unit_price',
        'discount',
        'category_id',
        'img1_url',
        'img2_url',
        'img3_url',
        'status',
    ];


    public function category()
    {
        return $this->belongsTo(ProductCategories::class, 'category_id');
    }
}
