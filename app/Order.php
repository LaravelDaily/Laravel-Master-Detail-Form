<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = 'orders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'customer_name',
        'customer_email',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot(['quantity']);
    }
}
