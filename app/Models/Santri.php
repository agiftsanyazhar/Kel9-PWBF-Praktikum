<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class santri extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_santri',
        'gender',
        'tgl_lhr',
        'kota_lhr',
        'nama_ortu'
    ];

    public function kemajuan()
    {
        return $this->hasMany(Kemajuan::class,'id_santri','id');
    }

}

