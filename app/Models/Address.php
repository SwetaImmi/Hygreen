<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses';
    protected $fillable = [
        'user_id',
        'firstname',
        'lastname',
        'email',
        'phone',
        'postcode',
        'delivery_address1',
        'address2',
        'city_town',
        'state',
        'country_delivery',
        'billing_firstname',
        'billing_lastname',
        'billing_email',
        'billing_phone',
        'billing_postcode',
        'billing_delivery_address1',
        'billing_address2',
        'billing_city_town',
        'billing_state',
        'billing_country_delivery',
    ];
}
