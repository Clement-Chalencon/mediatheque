<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'state', 'department', 'book_id',
    ];

    public function book_id()
    {
        return $this->belongsTo(Book::class);
    }

    public function loan_id()
    {
        return $this->hasOne(Loan::class);
    }
}
