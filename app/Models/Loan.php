<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
        'user_id', 'stock_id', 'loan_start', 'loan_end',
    ];

    public function user_id()
    {
        return $this->belongsTo(User::class);
    }

    public function stock_id()
    {
        return $this->belongsTo(Stock::class);
    }

}
