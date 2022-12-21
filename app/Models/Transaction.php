<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_src',
        'account_dest',
        'balance_change',
        'transaction_type',
        'memo',
        'expected_total',
    ];
}
