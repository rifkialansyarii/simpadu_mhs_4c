<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusMahasiswa extends Model
{
    protected $table = 'status_mahasiswa';
    protected $primaryKey = 'id_status_mhs';
    public $incrementing = false;
    public $timestamps = false;

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'id_status_mhs', 'id_status_mhs');
    }
}
