<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category_id',
        'price',
        'discount_price',
        'subcategory_id',
        'description',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);

    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

}
