<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kemajuan extends Model
{
    use HasFactory;
    
    protected $table = 'kemajuan';

    public function santri()
    {
        return $this->belongsTo(Santri::class, 'id_santri', 'id');
    }

    public function pengurus()
    {
        return $this->belongsTo(Pengurus::class, 'id_pengurus', 'id');
    }

    public function detaiKemajuan()
    {
        return $this->hasMany(Detail_Kemajuan::class, 'id_kemajuan', 'id');
    }
}
