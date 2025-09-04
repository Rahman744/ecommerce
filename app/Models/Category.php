<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'image', 'is_top', 'is_sale', 'top_category'];
    
    protected $casts = [
        'is_top' => 'boolean',
        'is_sale' => 'boolean',
        'top_category' => 'boolean',
    ];
    
}
