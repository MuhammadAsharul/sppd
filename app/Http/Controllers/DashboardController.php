<?php

namespace App\Http\Controllers;

use App\Models\Sppd;
use App\Models\Pegawai;
use App\Models\Spt;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::count();
        $sppd = Sppd::count();
        $spt = Spt::count();
        return view('pages.dashboard', ['pegawai' => $pegawai, 'spt' => $spt, 'sppd' => $sppd]);
    }
}
