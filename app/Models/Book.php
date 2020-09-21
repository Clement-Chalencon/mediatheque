<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name', 'price', 'quantity', 'weight', 'active', 'quantity_alert', 'image', 'description',
    ];
}
