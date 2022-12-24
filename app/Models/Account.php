<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_number',
        'account_type',
        'user_id',
        'balance'
    ];

    protected $appends = ['monthly_apy'];


    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'account_src');
    }

    public function getMonthlyApyAttribute()
    {
        //UCID SVT23
        //Shreya
        $result = 0;

        if ($this->balance < 0)
            return $result;

        $perYearApi = SystemProperties::where('name', $this->account_type)->first();

        if (!$perYearApi)
            return $result;

        $perMonthApy = $perYearApi->value / 12;

        return $this->balance * $perMonthApy /  100;
    }

}
