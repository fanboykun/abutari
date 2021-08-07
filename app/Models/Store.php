<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['owner_id','name','instagram','location'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function orders()
    {
        return $this->hasMany(User::class);
    }

    public function incomes()
    {
        return $this->hasMany(Income::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }

    public function kitchens()
    {
        return $this->hasMany(Kitchen::class);
    }

}
