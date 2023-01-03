@extends('index')
@section('title', 'Data Instansi')
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
                    <h4 class="card-title">Data Instansi</h4>
                </div>
                <div>
                    @guest()
                    @else
                        <a href="">
                            <button type="button" class="btn btn-success btn-md">
                                Ubah Data
                            </button>
                        </a>
                    @endguest
                </div>
            </div>
            <div class="mt-3">
                <form class="forms-sample" action="{{ route('instansi.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group">
                            <label for="nama">Nama Instansi</label>
                            <input type="text" class="form-control" name="name" id="name" value="Dinas Komunikasi dan Informatika" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" value="Jl. Lawu No. 385 B Karanganyar" disabled>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input type="text" class="form-control" name="telepon" id="telepon" value="(0271) 495039" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="text" class="form-control" name="website" id="website" value="www.karanganyarkab.go.id" disabled>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="faks">Faksimile</label>
                                <input type="text" class="form-control" name="faks" id="faks" value="(0271) 495590" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email" value="diskominfo@karanganyarkab.go.id" disabled>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="kodepos">Kode Pos</label>
                                <input type="text" class="form-control" name="kodepos" id="kodepos" value="57712" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="kepala_dinas">Kepala Dinas</label>
                                <input type="text" class="form-control" name="kepala_dinas" id="kepala_dinas" value="Drs. Sujarno, M.Si." disabled>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="kepala_bidang">Kepala Bidang</label>
                                <input type="text" class="form-control" name="kepala_bidang" id="kepala_bidang" value="Drs. Sujarno, M.Si." disabled>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="pejabat_pelaksana">Pejabat Pelaksana</label>
                                <input type="text" class="form-control" name="pejabat_pelaksana" id="pejabat_pelaksana" value="Hartono, S.Sos., M.M." disabled>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="bendahara">Bendahara</label>
                                <input type="text" class="form-control" name="bendahara" id="bendahara" value="Endang Werdiningsih, S.Sos." disabled>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection