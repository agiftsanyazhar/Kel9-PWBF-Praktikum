<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bab extends Model
{
    use HasFactory;

    protected $table = 'bab';
    protected $guarded = ['id', 'id_buku'];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku', 'id');
    }

    public function detailKemajuan()
    {
        return $this->hasMany(Detail_Kemajuan::class, 'id_bab', 'id');
    }
}
