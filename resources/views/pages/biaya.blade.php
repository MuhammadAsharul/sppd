@extends('index')
@section('title', 'Daftar Data Biaya')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-center">
                <div>
                    <h4 class="card-title">Daftar Data Biaya</h4>
                </div>
                <div>
                    <a href="{{ route('biaya.create') }}">
                        <button type="button" class="btn btn-success btn-md">
                            Tambah Data
                        </button>
                    </a>
                </div>
            </div>
            <div class="table-responsive mt-3">
                <table class="table table-striped table-bordered" id="table_sppd">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kegiatan</th>
                            <th>Lokasi</th>
                            <th>Tanggal</th>
                            <th>Kode Rekening</th>
                            <th>Nama / NIP</th>
                            <th>Jabatan / Pangkat / Gol. Eselon</th>
                            <th>Uang Harian</th>
                            <th>Uang Transport</th>
                            <th>Biaya Transport</th>
                            <th>Penerimaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sarasehan dan Renungan Ulang Janji Hari Pramuka ke-61 Tahun 2022</td>
                            <td>Pendopo Tri Manunggal, Malanggaten, Kebakkramat</td>
                            <td>13 Agustus 2022</td>
                            <td>2.16.03.2.02.06.5.1.02.04.01.0003</td>
                            <td>
                                <p>Hartono, S.Sos., M.M / 19691015 199003 1 007</p>
                                <p>Suparno / 19731103 199803 1 012</p>
                                <p>Yahya Fathoni Amri, S.Kom</p>
                            </td>
                            <td>
                                <p>Kepala Bidang Tata Kelola Informatika Dinas Kominfo Kab. Karanganyar / Pembina / IV a</p>
                                <p>Analis Sistem Informasi dan Diseminasi Hukum Pada Seksi Persandian dan Keamanan Jaringan
                                    Dinas Kominfo Kab. Karanganyar / Pengatur Tingkat I / II d</p>
                                <p>Network Analyst Dinas Kominfo Kab. Karanganyar / -</p>
                            </td>
                            <td>
                                <p>-</p>
                                <p>-</p>
                                <p>-</p>
                            </td>
                            <td>
                                <p>Rp80.000</p>
                                <p>Ro60.000</p>
                                <p>Rp50.000</p>
                            </td>
                            <td>
                                <p>8 Lt x Rp12.500 = Rp100.000</p>
                                <p>-</p>
                                <p>-</p>
                            </td>
                            <td>
                                <p>Rp180.000</p>
                                <p>Rp60.000</p>
                                <p>Rp50.000</p>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-md btn-primary">
                                        <i class="mdi mdi-printer"></i>
                                    </button>
                                    <button type="button" class="btn btn-md btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#modaledituang">
                                        <i class="mdi mdi-tooltip-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-md btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modalhapusuang">
                                        <i class="mdi mdi-delete"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
