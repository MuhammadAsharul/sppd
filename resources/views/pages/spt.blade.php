@extends('index')
@section('title', 'Daftar Data SPT')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-center">
                <div>
                    <h4 class="card-title">Daftar Data SPPD</h4>
                </div>
                <div>
                    <a href="tambahdatasppd.php">
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
                            <td>No</td>
                            <td>Dasar Perintah</td>
                            <td>Pegawai yang Diperintah</td>
                            <td>Golongan</td>
                            <td>NIP</td>
                            <td>Jabatan</td>
                            <td>Maksud Tugas</td>
                            <td>Hari, Tanggal</td>
                            <td>Waktu</td>
                            <td>Tempat</td>
                            <td>Tempat Ditetapkan</td>
                            <td>Tanggal Ditetapkan</td>
                            <td>Yang Menetapkan</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Perintah Plt. Kepala Dinas Komunikasi dan Informatika Kabupaten Karanganyar</td>
                            <td>
                                <p>Hartono, S.Sos, M.M</p>
                                <p>Suparno</p>
                                <p>Yahya Fathoni Amri</p>
                            </td>
                            <td>
                                <p>Pembina / IV a</p>
                                <p>Pengatur Tingkat I / II d</p>
                                <p>-</p>
                            </td>
                            <td>
                                <p>19691015 199003 1 007</p>
                                <p>19731103 199803 1 012</p>
                                <p>-</p>
                            </td>
                            <td>
                                <p>Kepala Bidang Tata Kelola Informatika</p>
                                <p>Analis Sistem Informasi dan Diseminasi Hukum Pada Seksi Persandian dan Keamanan Jaringan
                                </p>
                                <p>Network Analyst</p>
                            </td>
                            <td>Sarasehan dan Renungan Ulang Janji Hari Pramuka ke-61 Tahun</td>
                            <td>Sabtu, 13 Agustus 2022</td>
                            <td>19.30 WIB s.d. selesai</td>
                            <td>Pendopo Tri Manunggal, Malanggaten, Kebakkramat</td>
                            <td>Karanganyar</td>
                            <td>13 Agustus 2022</td>
                            <td>Drs. SUJARNO, M.Si.</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-md btn-primary">
                                        <i class="mdi mdi-printer"></i>
                                    </button>
                                    <button type="button" class="btn btn-md btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#modaleditspt">
                                        <i class="mdi mdi-tooltip-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-md btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modalhapusspt">
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
