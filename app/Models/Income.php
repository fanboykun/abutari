<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $fillable = ['store_id', 'transaction_id', 'total'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
