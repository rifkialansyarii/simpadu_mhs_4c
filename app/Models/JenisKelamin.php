<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisKelamin extends Model
{
    protected $table = 'jenis_kelamin';
    protected $primaryKey = 'id_jk';
    public $incrementing = false;
    public $timestamps = false;

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'id_jk', 'id_jk');
    }
}
