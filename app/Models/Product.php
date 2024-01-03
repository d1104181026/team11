<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'discount',
        'tid',
        'inventory'
    ];

    public function stores()

    {
        return $this->belongsTo('App\Models\Store','tid','id');
    }

    public function scopeSenior($query)
    {
        
        return $query->where('price', '>', 10)->orderBy('price', 'asc');
    }
    public function scopeAllDiscounts($query)
    { 
        return $query->select('discount')->groupBy('discount');
    }

    public function scopeDiscount($query, $discount)
    {
        return $query->where('discount', '=', $discount);
    } 
    

    
}
