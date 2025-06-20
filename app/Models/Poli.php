<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    protected $fillable = ['code', 'name'];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
