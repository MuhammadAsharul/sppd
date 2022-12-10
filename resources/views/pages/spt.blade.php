@extends('index')
@section('title', 'Daftar Data SPT')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-center">
                <div>
                    <h4 class="card-title">Daftar Data SPT</h4>
                </div>
                @guest()
                @else
                    <div>
                        <a href="{{ route('spt.create') }}">
                            <button type="button" class="btn btn-success btn-md">
                                Tambah Data
                            </button>
                        </a>
                    </div>
                @endguest
            </div>
            <div class="table-responsive mt-3">
                <table class="table table-striped table-bordered" id="table_spt">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Dasar Perintah</td>
                            <td>Pegawai yang Diperintah</td>
                            <td>Maksud Tugas</td>
                            <td>Hari, Tanggal</td>
                            <td>Waktu</td>
                            <td>Tempat</td>
                            <td>Tempat Ditetapkan</td>
                            <td>Tanggal Ditetapkan</td>
                            <td>Yang Menetapkan</td>
                            @guest()
                            @else
                                <td>Aksi</td>
                            @endguest
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($spt as $s)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $s->dasar_perintah }}</td>
                                <td>
                                    @foreach ($s->diperintah()->get() as $diperintah)
                                        <div>{{ $loop->iteration }}. {{ $diperintah->name }} - {{ $diperintah->id }}</div>
                                    @endforeach
                                </td>
                                <td>{{ $s->maksud_tugas }}</td>
                                <td>{{ $s->hari_tgl }}</td>
                                <td>{{ $s->waktu }}</td>
                                <td>{{ $s->tempat }}</td>
                                <td>{{ $s->tempat_ditetapkan }}</td>
                                <td>{{ $s->tgl_ditetapkan }}</td>
                                <td>{{ $s->menetapkan->name }}</td>
                                @guest()
                                @else
                                    <td class="text-center flex flex-row">
                                        <form action="{{ route('spt.destroy', $s->id) }}" method="POST">
                                            <a href="{{ route('spt.show', $s->id) }}" id="btn-show-spt"
                                                data-id="{{ $s->id }}" class="btn btn-primary btn-sm"><i
                                                    class="mdi mdi mdi-eye"></i></a>
                                            <a href="{{ route('spt.edit', $s->id) }}" id="btn-edit-spt"
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
                                @endguest
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    @include('sweetalert::alert')
@endsection
