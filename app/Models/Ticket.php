<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['poli_id', 'number', 'status'];

    public function poli()
    {
        return $this->belongsTo(Poli::class);
    }
}
