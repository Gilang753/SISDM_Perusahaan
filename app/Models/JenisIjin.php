<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisIjin extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'tb_jenisijin';
    protected $primaryKey = 'id_jenisijin';

    protected $fillable = [
        'persyaratan',
        'lamaijin',
        'ketentuan',
    ];
}
