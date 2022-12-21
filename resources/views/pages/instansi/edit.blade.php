@extends('index')
@section('title', 'Edit Data Instansi')
@section('content')
    <div class="row">
        <div class="col-sm-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Edit Data Instansi</h4>
                        </div>
                        {{-- <div>
                            @guest()
                            @else
                                <a href="{{ route('') }}" class="btn btn-success btn-md">
                                    <i class="mdi mdi-tooltip-edit"></i>
                                </a>
                            @endguest
                        </div> --}}
                    </div>
                    <div class="mt-3">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="forms-sample" action="{{ route('instansi.update', $instansi->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">Nama Instansi</label>
                                <input value="{{ $instansi->nama }}" type="text" class="form-control" name="nama"
                                    id="nama" placeholder="Dinas Komunikasi dan Informatika">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input value="{{ $instansi->alamat }}" type="text" class="form-control" name="alamat"
                                    id="alamat" placeholder="Jl. Lawu No. 385 B Karanganyar">
                            </div>
                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input value="{{ $instansi->telepon }}" type="text" class="form-control" name="telepon"
                                    id="telepon" placeholder="(0271) 495039">
                            </div>
                            <div class="form-group">
                                <label for="faks">Faksimile</label>
                                <input value="{{ $instansi->faksimile }}" type="text" class="form-control"
                                    name="faksimile" id="faksimile" placeholder="(0271) 495590">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input value="{{ $instansi->website }}" type="text" class="form-control" name="website"
                                    id="website" placeholder="www.karanganyarkab.go.id">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input value="{{ $instansi->email }}" type="text" class="form-control" name="email"
                                    id="email" placeholder="diskominfo@karanganyarkab.go.id">
                            </div>
                            <div class="form-group">
                                <label for="kodepos">Kode Pos</label>
                                <input value="{{ $instansi->kodepos }}" type="text" class="form-control" name="kodepos"
                                    id="kodepos" placeholder="57712">
                            </div>
                            <div class="form-group">
                                <label for="kepala_dinas">Kepala Dinas</label>
                                <select class="js-example-basic-multiple w-100" name="kepala_dinas" id="kepala_dinas">
                                    <option value="">Pilih Salah Satu</option>
                                    @foreach ($pegawai as $s)
                                        <option {{ $s->id == $instansi->kepala_dinas ? 'selected' : '' }}
                                            value="{{ $s->id }}">{{ $s->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pejabat_pelaksana">Pejabat Pelaksana</label>
                                <select class="js-example-basic-multiple w-100" name="pejabat_pelaksana"
                                    id="pejabat_pelaksana">
                                    <option value="">Pilih Salah Satu</option>
                                    @foreach ($pegawai as $s)
                                        <option {{ $s->id == $instansi->pejabat_pelaksana ? 'selected' : '' }}
                                            value="{{ $s->id }}">{{ $s->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="bendahara">Bendahara</label>
                                <select class="js-example-basic-multiple w-100" name="bendahara" id="bendahara">
                                    <option value="">Pilih Salah Satu</option>
                                    @foreach ($pegawai as $s)
                                        <option {{ $s->id == $instansi->bendahara ? 'selected' : '' }}
                                            value="{{ $s->id }}">{{ $s->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary me-2">Ubah</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
