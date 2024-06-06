<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'tb_pegawai';
    protected $primaryKey = 'id_pegawai';
    public $timestamps = false;
    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'usia',
        'alamat',
        'jenis_kelamin',
        'status',
    ];

    public function pengguna()
    {
        return $this->hasMany(Pengguna::class, 'id_pegawai');
    }
    
    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'id_pegawai');
    }
    
    public function pengajuanIjin()
    {
        return $this->hasMany(PengajuanIjin::class, 'id_pegawai');
    }

    public function pengembanganDiri()
    {
        return $this->hasMany(PengembanganDiri::class, 'id_pegawai');
    }

    public function pendidikan()
    {
        return $this->hasMany(Pendidikan::class, 'id_pegawai');
    }

    public function gaji()
    {
        return $this->hasMany(Gaji::class, 'id_pegawai');
    }
}
