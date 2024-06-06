<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'tb_gaji';
    protected $primaryKey = 'id_gaji';

    protected $fillable = [
        'id_pegawai',
        'id_tunjangan',
        'tanggal_gaji',
        'gaji_pokok',
        'gaji_lembur',
        'gaji_total',
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    public function tunjangan()
    {
        return $this->belongsTo(Tunjangan::class, 'id_tunjangan');
    }
}
