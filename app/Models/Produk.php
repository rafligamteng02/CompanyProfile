<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks'; 

    protected $fillable = [
        'name',
        'price',
        'stock',
        'category_id',
        'description',
        'spesification',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
