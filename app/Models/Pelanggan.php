<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = "tb_pelanggan";

    protected $fillable = [
        'pel_nama',
        'pel_ktp',
        'pel_alamat',
        'pel_hp',
        'pel_no',
        'pel_id_gol',
        'pel_seri',
        'pel_aktif',
        'pel_meteran',
        'pel_id_user'
    ];
}
