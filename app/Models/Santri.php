<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'santri';
=======
    protected $table = 'santris';
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1
    protected $guarded = ['id'];

    public function kemajuan()
    {
        return $this->hasMany(Kemajuan::class,'id_santri','id');
    }

}
