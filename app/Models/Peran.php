<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peran extends Model
{
    use HasFactory;
<<<<<<< HEAD
    
    protected $table = 'peran';
=======

    protected $table = 'perans';
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1
    protected $guarded = ['id'];

    public function peran()
    {
        return $this->hasMany(Peran::class, 'id_peran', 'id');
    }

}
