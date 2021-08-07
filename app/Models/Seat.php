<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $fillable = ['store_id','number', 'is_empty'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
