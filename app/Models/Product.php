<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "category_id",
        "product_name",
        "unit",
        "price",
        "foto"
    ];

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
