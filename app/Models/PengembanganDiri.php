<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengembanganDiri extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'tb_pengembangandiri';
    protected $primaryKey = 'id_pengembangan';

    protected $fillable = [
        'id_pegawai',
        'jenis_pelatihan',
        'tanggal_pelaksana',
        'sertifikat',
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
