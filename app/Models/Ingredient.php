<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = ['store_id', 'name'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function recipes()
    {
        return $this->belongsToMany(Ingredient::class)->withPivot('amount', 'unit');
    }
}
