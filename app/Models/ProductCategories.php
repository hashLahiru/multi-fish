<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategories extends Model
{
    use HasFactory;

    protected $table = 'product_categories';

    protected $fillable = [
        'super_category_id',
        'cat_name',
        'img_url',
        'status',
    ];

    public function superCategory()
    {
        return $this->belongsTo(ProductSuperCategories::class, 'super_category_id');
    }

    public function products()
    {
        return $this->hasMany(Products::class, 'category_id');
    }
}
