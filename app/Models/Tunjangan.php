<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tunjangan extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'tb_tunjangan';
    protected $primaryKey = 'id_tunjangan';

    protected $fillable = [
        'nama_tunjangan',
        'besaran_tunjangan',
    ];

    public function gaji()
    {
        return $this->hasMany(Gaji::class, 'id_tunjangan');
    }
}
