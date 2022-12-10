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
        return view('pages.dashboard', ['pegawai' => $pegawai]);
    }
}
