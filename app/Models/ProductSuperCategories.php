<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductSuperCategories extends Model
{
    use HasFactory;

    protected $table = 'product_super_categories';

    protected $fillable = [
        'name',
        'description',
        'status',
    ];

    public function productCategories()
    {
        return $this->hasMany(ProductCategories::class, 'super_category_id');
    }
}
