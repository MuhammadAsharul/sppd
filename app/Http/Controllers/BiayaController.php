<?php

namespace App\Http\Controllers;

use App\Models\Biaya;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class BiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biaya = Biaya::all();
        return view('pages.biaya', compact('biaya'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $biaya = Pegawai::with('nama')->get();
        // dd($biaya);
        return view('pages.biaya.create', ['biaya' => $biaya]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kegiatan' => 'required',
            'nama_pegawai' => 'required',
            'lokasi' => 'required',
            'hari_tgl' => 'required',
            'rekening' => 'required',
            'uang_harian' => 'required',
            'uang_transport' => 'required',
            'biaya_transport' => 'required',
        ]);

        // dd($request->all());
        $biaya = Biaya::updateOrCreate([
            'kegiatan' => $request->kegiatan,
            'nama_pegawai' => $request->nama_pegawai,
            'lokasi' => $request->lokasi,
            'hari_tgl' => $request->hari_tgl,
            'rekening' => $request->rekening,
            'uang_harian' => $request->uang_harian,
            'uang_transport' => $request->uang_transport,
            'biaya_transport' => $request->biaya_transport,
        ]);
        return redirect()->route('biaya.index')
            ->with('toast_success', 'Data Biaya Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Biaya  $biaya
     * @return \Illuminate\Http\Response
     */
    public function show(Biaya $biaya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Biaya  $biaya
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biaya = Biaya::findOrFail($id);
        $pegawai = Pegawai::with('nama')->get();
        return view('pages.biaya.edit', ['biaya' => $biaya, 'pegawai' => $pegawai]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Biaya  $biaya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biaya $biaya)
    {
        $biaya->update($request->all());
        return redirect()->route('biaya.index')
            ->with('toast_success', 'Data Biaya Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biaya  $biaya
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biaya = Biaya::find($id);
        $biaya->delete();

        return redirect()->route('biaya.index')
            ->with('toast_success', 'Data Biaya Berhasil Dihapus');
    }
}
