<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name', 'isbn', 'price', 'weight', 'image', 'description',
    ];

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
