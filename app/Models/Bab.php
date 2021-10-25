<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bab extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $table = 'bab';
    protected $guarded = ['id', 'id_buku'];
=======
    
    protected $guarded = ['id'];
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku', 'id');
    }

    public function detailKemajuan()
    {
        return $this->hasMany(Detail_Kemajuan::class, 'id_bab', 'id');
    }

}
