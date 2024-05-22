<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable  = [
        'user_id','category_name','category_desc','category_image'
            ];


            public function subcategory()
            {
                return $this->hasMany(SubCategory::class);
            }

            public function product()
            {
                return $this->hasMany(Product::class);
            }

            public function banner()
            {
                return $this->hasMany(Banner::class);
            }

}
