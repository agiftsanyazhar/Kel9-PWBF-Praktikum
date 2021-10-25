<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;
<<<<<<< HEAD
    
    protected $table = 'pengurus';
=======

    protected $table = 'penguruses';
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1
    protected $guarded = ['id'];

    public function Kemajuan()
    {
        return $this->hasMany(Kemajuan::class, 'id_pengurus', 'id');
    }

    public function detailPeran()
    {
        return $this->hasMany(Detail_Peran::class, 'id_pengurus', 'id');
    }

}
