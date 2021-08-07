<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['store_id','title','slug','thumbnail','content'];


    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
