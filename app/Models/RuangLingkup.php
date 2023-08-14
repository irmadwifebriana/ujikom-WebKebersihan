<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuangLingkup extends Model
{
    use HasFactory;
    protected $table = 'ruang_lingkup';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama_lingkup'];

    public function bagian()
    {
        return $this->hasMany(Bagian::class);
    }
    // public function penugasan(){
    //     return $this->hasOne(Penugasan::class);

    // }
}
