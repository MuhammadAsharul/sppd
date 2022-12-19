@extends('index')
@section('title', 'Daftar Data Instansi')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-center">
                <div>
                    <h4 class="card-title">Daftar Data Instansi</h4>
                </div>
                <div>
                    @guest()
                    @else
                        <a href="{{ route('instansi.create') }}">
                            <button type="button" class="btn btn-success btn-md">
                                Tambah Data
                            </button>
                        </a>
                    @endguest
                </div>
            </div>
            <div class="mt-3">
                <form class="forms-sample" action="{{ route('instansi.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Instansi</label>
                        <input type="text" class="form-control" name="name" id="name"
                            placeholder="Dinas Komunikasi dan Informatika" disabled>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat"
                            placeholder="Jl. Lawu No. 385 B Karanganyar" disabled>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" class="form-control" name="telepon" id="telepon" placeholder="(0271) 495039"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label for="faks">Faksimile</label>
                        <input type="text" class="form-control" name="faks" id="faks" placeholder="(0271) 495590"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" class="form-control" name="website" id="website"
                            placeholder="www.karanganyarkab.go.id" disabled>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email"
                            placeholder="diskominfo@karanganyarkab.go.id" disabled>
                    </div>
                    <div class="form-group">
                        <label for="kodepos">Kode Pos</label>
                        <input type="text" class="form-control" name="kodepos" id="kodepos" placeholder="57712"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label for="kepala_dinas">Kepala Dinas</label>
                        <select class="js-example-basic-multiple w-100" name="kepala_dinas" id="kepala_dinas">

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pejabat_pelaksana">Pejabat Pelaksana</label>
                        <select class="js-example-basic-multiple w-100" name="pejabat_pelaksana" id="pejabat_pelaksana">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bendahara">Bendahara</label>
                        <select class="js-example-basic-multiple w-100" name="bendahara" id="bendahara">
                        </select>
                    </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
