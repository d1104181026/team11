<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'web'
    ];

    public function products()

    {
        return $this->belongsTo('App\Models\Store','tid');
    }

    public function delete()
    {
        $this->products()->delete();
        return parent::delete();
    }       

    public function scopeZone($query, $zone)
    {
        
        return $query->where('zone', '=', $zone);
    }

}
