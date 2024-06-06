<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'tb_pendidikan';
    protected $primaryKey = 'id_pendidikan';

    protected $fillable = [
        'id_pegawai',
        'id_pengembangan',
        'jenjangPendidikan',
        'institusiPendidikan',
        'jurusan',
        'tanggal_kelulusan',
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    public function pengembanganDiri()
    {
        return $this->belongsTo(PengembanganDiri::class, 'id_pengembangan');
    }
}
