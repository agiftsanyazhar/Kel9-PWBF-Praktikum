<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peran extends Model
{
    protected $table = 'peran';

    public function peran()
    {
        return $this->hasMany(Peran::class, 'id_peran', 'id');
    }
}
