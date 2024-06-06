<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    protected $table = 'tb_pengguna';
    public $timestamps = false;
    protected $primaryKey = 'id_pengguna';
    protected $fillable = [
        'id_pegawai', 
        'username', 
        'password'
    ];

    // Relasi dengan model Pegawai
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

}
