<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('product_name', 'like', '%' . $search . '%');
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function order()
    {
        return $this->hasMany(Product::class, 'id_product');
    }

    public function getPriceAsNumberAttribute()
    {
        return intval(str_replace('.', '', $this->price));
    }

    public function getDiscountAsNumberAttribute()
    {
        return intval(str_replace('.', '', $this->discount));
    }

    // Accessor untuk mendapatkan total harga setelah diskon
    public function getTotalPriceAttribute()
    {
        return $this->price_as_number - $this->discount_as_number;
    }

}
