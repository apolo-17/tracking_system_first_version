<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientUnit extends Model
{
    protected $table = 'client_units';

    protected $fillable = ['client_id', 'unit_id'];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
