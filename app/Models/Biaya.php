<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Pegawai;

class Biaya extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'kegiatan', 'nama_pegawai', 'lokasi', 'hari_tgl', 'rekening', 'uang_harian', 'uang_transport', 'biaya_transport'];
    public function namaa()
    {
        return $this->hasOne(Pegawai::class, 'id', 'nama_pegawai');
    }
}
