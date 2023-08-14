<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penugasan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'penugasan';
    protected $fillable = ['id', 'id_bagian', 'nama_petugas'];

    public function bagian()
    {
        return $this->belongsTo(Bagian::class, 'id_bagian');
    }
}
