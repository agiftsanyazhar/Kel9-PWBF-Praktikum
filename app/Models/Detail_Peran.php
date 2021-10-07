<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Peran extends Model
{
    protected $table = 'detail_peran';

    public function peran()
    {
        return $this->belongsTo(Peran::class, 'id_peran', 'id');
    }

    public function pengurus()
    {
        return $this->belongsTo(Pengurus::class, 'id_pengurus', 'id');
    }
}
