<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
<<<<<<< HEAD
    
    protected $table = 'buku';
=======

>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1
    protected $guarded = ['id'];

    public function bab()
    {
        return $this->hasMany(Bab::class, 'id_buku', 'id');
    }

}
