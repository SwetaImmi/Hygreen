<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable  = [
        'user_id','sub_category_name','sub_category_desc','category_id','sub_category_icon'
            ];


            public function product()
            {
                return $this->hasMany(Product::class);
            }
}
