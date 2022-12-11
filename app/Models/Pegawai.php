<?php

namespace App\Models;

use App\Models\Sppd;
use App\Models\Spt;
use App\Models\Biaya;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
    use HasFactory;
    // public $incrementing = false;
    protected $fillable = ['id', 'name', 'jabatan', 'pangkat', 'golongan'];

    /**
     * Get all of the comments for the Pegawai
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */


    public function pemerintahpd()
    {
        return $this->hasMany(Sppd::class, 'pejabat_pemerintah');
    }
    public function diperintahpd()
    {
        return $this->hasMany(Sppd::class, 'pejabat_diperintah');
    }
    public function nama()
    {
        return $this->hasMany(Biaya::class, 'nama_pegawai');
    }

    public function menetapkanpt()
    {
        return $this->hasMany(Spt::class, 'yang_menetapkan');
    }
}
