<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $guarded = ['id',];

    public function kemajuan()
    {
        return $this->hasMany(Kemajuan::class,'id_santri','id');
    }

}

