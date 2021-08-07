<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['store_id', 'name', 'description', 'scheduled_at', 'ended_at'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
