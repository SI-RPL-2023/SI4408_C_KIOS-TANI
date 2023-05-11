<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = ["category_name", "foto"];


    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
