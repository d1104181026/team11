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
    public function scopeAllPositions($query)
    { 
        return $query->select('price')->groupBy('price');
    }

    public function scopePosition($query, $pos)
    {
        return $query->where('price', '=', $pos);
    } 
    
    public function scopeAllNationalities($query)
    { 
        return $query->select('nationality')->groupBy('nationality');
    }

    public function scopeNationality($query, $nationality)
    {
        return $query->where('nationality', '=', $nationality);
    }    

    
}
