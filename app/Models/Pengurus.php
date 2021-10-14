<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;
    
    protected $table = 'pengurus';

    public function Kemajuan()
    {
        return $this->hasMany(Kemajuan::class, 'id_pengurus', 'id');
    }

    public function detailPeran()
    {
        return $this->hasMany(Detail_Peran::class, 'id_pengurus', 'id');
    }
}
