<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'nim',
        'id_status_mhs',
        'id_jk',
        'nama',
        'id_agama',
        'id_user',
        'email',
        'id_prodi',
        'tanggal_lahir',
        'no_hp',
        'alamat',
        'id_kabupaten',
        'id_provinsi',
        'id_ukt_kategori',
        'nama_ayah',
        'id_pekerjaan_ayah',
        'penghasilan_ayah',
        'slip_gaji_ayah',
        'nama_ibu',
        'id_pekerjaan_ibu',
        'penghasilan_ibu',
        'slip_gaji_ibu'
    ];

    public function jenisKelamin()
    {
        return $this->belongsTo(JenisKelamin::class, 'id_jk', 'id_jk');
    }

    public function statusMahasiswa()
    {
        return $this->belongsTo(StatusMahasiswa::class, 'id_status_mhs', 'id_status_mhs');
    }
}
