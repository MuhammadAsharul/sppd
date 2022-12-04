@extends('index')
@section('title', 'Dashboard')
@section('content')

    <div class="row flex-grow">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card bg-primary card-rounded">
                <div class="card-body pb-3">

                    <div class="row">
                        <div class="col">
                            <h4 class="card-title card-title-dash text-white mb-4">Data SPPD</h4>
                            <p class="text-light mb-1">Jumlah Data SPPD</p>
                            <h2 class="text-light">666</h2>
                        </div>
                        <div class="col align-self-center">
                            <a href="datasppd.php">
                                <button type="button" class="btn btn-outline-dark btn-icon-text">
                                    <i class="ti-file btn-icon-prepend"></i>
                                    Lihat
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card bg-danger card-rounded">
                <div class="card-body pb-3">
                    <div class="row">
                        <div class="col">
                            <h4 class="card-title card-title-dash text-white mb-4">Data SPT</h4>
                            <p class="text-light mb-1">Jumlah Data SPT</p>
                            <h2 class="text-light">420</h2>
                        </div>
                        <div class="col align-self-center">
                            <a href="dataspt.php">
                                <button type="button" class="btn btn-outline-dark btn-icon-text">
                                    <i class="ti-file btn-icon-prepend"></i>
                                    Lihat
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row flex-grow">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card bg-success card-rounded">
                <div class="card-body pb-3">
                    <div class="row">
                        <div class="col">
                            <h4 class="card-title card-title-dash text-white mb-4">Data Penerimaan Uang
                            </h4>
                            <p class="text-light mb-1">Jumlah Data Penerimaan Uang</p>
                            <h2 class="text-light">888</h2>
                        </div>
                        <div class="col align-self-center">
                            <a href="datauang.php">
                                <button type="button" class="btn btn-outline-dark btn-icon-text">
                                    <i class="ti-file btn-icon-prepend"></i>
                                    Lihat
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card bg-warning card-rounded">
                <div class="card-body pb-3">
                    <div class="row">
                        <div class="col">
                            <h4 class="card-title card-title-dash text-dark mb-4">Data Pegawai</h4>
                            <p class="status-summary-ight-white mb-1">Jumlah Data Pegawai</p>
                            <h2 class="text-dark">555</h2>
                        </div>
                        <div class="col align-self-center">
                            <a href="datapegawai.php">
                                <button type="button" class="btn btn-outline-dark btn-icon-text">
                                    <i class="ti-file btn-icon-prepend"></i>
                                    Lihat
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection