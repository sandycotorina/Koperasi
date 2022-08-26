<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saving extends Model
{
    protected $table = 'savings';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function withdrawals()
    {
        return $this->hasMany(Withdrawal::class);
    }
}
