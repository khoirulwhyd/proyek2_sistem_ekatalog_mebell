<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id'; 
    protected $guarded = [];
    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function order_product()
    {
        return $this->belongsTo(Order_Product::class);
    }
}
