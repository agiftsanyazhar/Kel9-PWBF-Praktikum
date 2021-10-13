<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class santri extends Model
{
    use HasFactory;

    public function kemajuan()
    {
        return $this->hasMany(Kemajuan::class,'id_santri','id');
    }

}

