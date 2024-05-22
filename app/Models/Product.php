<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_id',
        'product_name',
        'product_price',
        'product_details',
        'product_image',
        'product_quantity',
        'product_code',
        'product_brand',
        'product_origin_country',
        'product_packging_quantity',
        'product_barcode',
        'product_msds',
        'sub_category_id'

    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class,'sub_category_id');
    }


    public function Cart()
{
    return $this->hasMany(Cart::class);
}

public function order()
{
    return $this->hasMany(Order::class,'products_id');
}

public function details()
{
    return $this->hasMany(Detail::class);
}

}
