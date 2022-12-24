@extends('index')
@section('title', 'Daftar Data Pegawai')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="card ">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-center">
                <div>
                    <h4 class="card-title">Daftar Data Pegawai</h4>
                </div>
                <div>
                    {{-- @guest()
                    @else
                        <a href="{{ route('pegawai.create') }}">
                            <button type="button" class="btn btn-success btn-md">
                                Tambah Data
                            </button>
                        </a>
                    @endguest --}}
                </div>
            </div>
            <div class="table-responsive mt-3">
                <table class="table table-striped table-bordered" id="pegawai">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Faksimile</th>
                            <th>Website</th>
                            <th>Email</th>
                            <th>Kode Pos</th>
                            <th>Kepala Dinas</th>
                            <th>Pejabat Pelaksana</th>
                            <th>Bendahara</th>
                            @guest()
                            @else
                                <th width=135px>Aksi</th>
                            @endguest
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($instansi as $p)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td>{{ $p->telepon }}</td>
                            <td>{{ $p->faksimile }}</td>
                            <td>{{ $p->website }}</td>
                            <td>{{ $p->email }}</td>
                            <td>{{ $p->kodepos }}</td>
                            <td>{{ $p->kepalaa_dinas->name }} - {{ $p->kepalaa_dinas->nip }}</td>
                            <td>{{ $p->pejabatt_pelaksana->name }} - {{ $p->pejabatt_pelaksana->nip }}</td>
                            <td>{{ $p->bendaharas->name }} - {{ $p->bendaharas->nip }}</td>
                            @guest()
                            @else
                                <td class="text-center flex flex-row">
                                    <a href="{{ route('instansi.edit', $p->id) }}" id="btn-edit-instansi"
                                        data-id="{{ $p->id }}" class="btn btn-warning btn-sm"><i
                                            class="mdi mdi-tooltip-edit"></i></a>
                                    {{-- <form action="{{ route('instansi.destroy', $p->id) }}" method="POST"> --}}
                                    {{-- <a href="{{ route('instansi.show', $p->id) }}" id="btn-show-instansi"
                                            data-id="{{ $p->id }}" class="btn btn-primary btn-sm"><i
                                                class="mdi mdi-printer"></i></a> --}}
                                    {{-- @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger  btn-sm"><i
                                                class="mdi mdi-delete"></i></button> --}}
                                    {{-- <form method="POST" action="{{ route('instansi.destroy', $p->id) }} ">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-sm show_confirm"><i
                                                class="mdi mdi-delete"></i></button>
                                    </form> --}}
                                    {{-- </form> --}}
                                </td>
                            @endguest
                        </tr>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
                {{-- {!! $pegawai->withQueryString()->links('pagination::bootstrap-5') !!} --}}
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
