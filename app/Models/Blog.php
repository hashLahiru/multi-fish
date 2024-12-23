<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'category_id',
        'blog_url',
        'content',
        'blog_img_url',
        'header_img_url',
        'thumb_img_url',
        'author',
        'published_at',
        'status',
    ];

    protected $dates = [
        'published_at',
        'created_at',
        'updated_at',
    ];

    public function category(){
        return $this->belongsTo(BlogCategory::class);
    }
}
