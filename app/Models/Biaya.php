<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Pegawai;

class Biaya extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'kegiatan', 'lokasi', 'hari_tgl', 'rekening', 'uang_harian', 'uang_transport', 'biaya_transport'];
    public function namaa()
    {
        return $this->belongsToMany(Pegawai::class, 'id', 'biaya_namas');
    }
    // public function pegawai()
    // {
    //     return $this->belongsToMany(Pegawai::class,);
    // }
}
