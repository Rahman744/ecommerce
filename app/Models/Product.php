<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory; // ← добавь это
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'category_id',
        'image',
        'is_top',
        'is_sale'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
