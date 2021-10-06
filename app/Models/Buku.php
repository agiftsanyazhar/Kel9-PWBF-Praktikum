<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';

    public function bab()
    {
        return $this->hasMany(Bab::class, 'id_buku', 'id');
    }
}
