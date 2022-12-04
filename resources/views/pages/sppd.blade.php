@extends('index')
@section('title', 'Daftar Data SPPD')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-center">
                <div>
                    <h4 class="card-title">Daftar Data SPPD</h4>
                </div>
                <div>
                    <a href="{{ route('sppd.create') }}">
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
                            <td rowspan="2">No</td>
                            <td rowspan="2">Pejabat Pemberi Perintah</td>
                            <td rowspan="2">Pegawai yang Diperintah</td>
                            {{-- <td rowspan="2">Golongan</td>
                            <td rowspan="2">Jabatan</td>
                            <td rowspan="2">Tingkat</td> --}}
                            <td rowspan="2">Maksud Perjalanan Dinas</td>
                            <td rowspan="2">Transportasi</td>
                            <td rowspan="2">Tempat Berangkat</td>
                            <td rowspan="2">Tempat Tujuan</td>
                            <td rowspan="2">Tgl. Pergi</td>
                            <td rowspan="2">Tgl. Kembali</td>
                            <td rowspan="2">Pengikut / NIP</td>
                            <td colspan="2">Pembebanan Anggaran</td>
                            <td rowspan="2">Keterangan</td>
                            <td rowspan="2">Aksi</td>
                        </tr>
                        <tr>
                            <td>Instansi</td>
                            <td>Mata Anggaran</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sppd as $s)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $s->pejabat_pemerintahh->name }}</td>
                                <td>{{ $s->pejabat_diperintahh->name }}</td>
                                <td>{{ $s->maksud_perintah }}</td>
                                <td>{{ $s->transportasi }}</td>
                                <td>{{ $s->tempat_berangkat }}</td>
                                <td>{{ $s->tempat_tujuan }}</td>
                                <td>{{ $s->tgl_pergi }}</td>
                                <td>{{ $s->tgl_kembali }}</td>
                                <td>
                                    @foreach ($s->pengikut()->get() as $pengikut)
                                        <div>{{ $loop->iteration }}. {{ $pengikut->name }} - {{ $pengikut->id }}</div>
                                    @endforeach
                                </td>
                                <td>{{ $s->instansi }}</td>
                                <td>{{ $s->mata_anggaran }}</td>
                                <td>{{ $s->keterangan }}</td>
                                <td class="text-center flex flex-row">
                                    <form action="{{ route('sppd.destroy', $s->id) }}" method="POST">
                                        <a href="{{ route('sppd.show', $s->id) }}" id="btn-show-sppd"
                                            data-id="{{ $s->id }}" class="btn btn-primary btn-sm"><i
                                                class="mdi mdi mdi-eye"></i></a>
                                        <a href="{{ route('sppd.edit', $s->id) }}" id="btn-edit-sppd"
                                            data-id="{{ $s->id }}" class="btn btn-warning btn-sm"><i
                                                class="mdi mdi-tooltip-edit"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger  btn-sm"><i
                                                class="mdi mdi-delete"></i></button>
                                        {{-- <form method="POST" action="{{ route('pegawai.destroy', $p->id) }} ">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-sm show_confirm"><i
                                                class="mdi mdi-delete"></i></button>
                                    </form> --}}
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
