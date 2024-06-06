<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'tb_absensi';
    protected $primaryKey = 'id_absensi';

    protected $fillable = [
        'id_pegawai',
        'tanggal_absensi',
        'jam_masuk',
        'jam_pulang',
        'keterangan',
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
