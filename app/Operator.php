<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    protected $casts = [
        'licence_date_expiry' => 'date',
        'born_date' => 'date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
