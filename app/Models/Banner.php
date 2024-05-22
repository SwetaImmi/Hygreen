<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_id',
        'sub_categories_id',
        'title',
        'description',
        'image',
    ];
}
