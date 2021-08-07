<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['store_id', 'total_item', 'total_price', 'is_active'];

    protected $touches = ['products'];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity', 'amount_price');
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
