<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bagian extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'bagian';
    protected $fillable = ['id', 'id_ruanglingkup', 'nama'];

    public function ruanglingkup()
    {
        return $this->belongsTo(RuangLingkup::class, 'id_ruanglingkup');
    }

    public function penugasan()
    {
        return $this->hasMany(Penugasan::class);
    }
}
