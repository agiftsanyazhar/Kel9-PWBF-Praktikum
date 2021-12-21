<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Peran extends Model
{
    use HasFactory;

    protected $table = 'detail__perans';

    protected $guarded = ['id'];

    public function peran()
    {
        return $this->belongsTo(Peran::class, 'id_peran', 'id');
    }

    public function pengurus()
    {
        return $this->belongsTo(Pengurus::class, 'id_pengurus', 'id');
    }

}
