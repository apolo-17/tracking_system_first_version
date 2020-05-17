<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperatorUnit extends Model
{
    protected $table = 'operator_unit';

    protected $fillable = ['operator_id', 'unit_id', 'confirmed'];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function operator()
    {
        return $this->belongsTo(Operator::class);
    }
}
