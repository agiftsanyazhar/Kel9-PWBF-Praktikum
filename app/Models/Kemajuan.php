<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kemajuan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function santri()
    {
        return $this->belongsTo(Santri::class, 'id_santri');
    }

    public function pengurus()
    {
        return $this->belongsTo(Pengurus::class, 'id_pengurus');
    }

    public function detailKemajuan()
    {
        return $this->hasMany(Detail_Kemajuan::class, 'id_kemajuan');
    }

}