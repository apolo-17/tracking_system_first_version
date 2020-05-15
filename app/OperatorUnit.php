<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperatorUnit extends Model
{
    protected $table = 'operator_unit';

    protected $fillable = ['operator_id', 'unit_id'];

    public function operator()
    {
        return $this->belongsTo(Operator::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
