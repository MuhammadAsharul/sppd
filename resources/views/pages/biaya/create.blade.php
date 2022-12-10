@extends('index')
@section('title', 'Tambah Data Biaya')
@section('content')
    <div class="row">
        <div class="col-sm-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Tambah Data Biaya</h4>
                        </div>
                        <div>
                            <a href="{{ route('biaya.index') }}">
                                <button type="button" class="btn btn-social-icon-text btn-dark">
                                    <i class="mdi mdi-arrow-left"></i>
                                    Kembali
                                </button>
                            </a>
                        </div>
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
                        <form class="forms-sample" action="{{ route('biaya.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 grid-margin">
                                    <div class="form-group">
                                        <label for="kegiatan">Kegiatan</label>
                                        <input type="text" class="form-control" id="kegiatan"
                                            name="kegiatan" placeholder="Tulis Kegiatan">
                                    </div>
                                    <div class="form-group">
                                        <label for="lokasi">Lokasi</label>
                                        <input type="text" class="form-control" id="lokasi" name="lokasi"
                                            placeholder="Tulis Lokasi">
                                    </div>
                                    <div>
                                        <div>Nama Penerima</div>
                                            <div id="namaa-wrapper">
                                                <div class="form-group">
                                                    <label>Nama Penerima 1</label>
                                                    <select class="js-example-basic-multiple w-100" name="namaa[]"
                                                        id="namaa">
                                                        <option value="">Pilih Salah Satu</option>
                                                        @foreach ($biaya as $b)
                                                            <option value="{{ $b->id }}">{{ $b->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        <button id="add-namaa-button" class="btn btn-primary mb-2" type="button">
                                            Tambah Pejabat
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <label for="hari_tgl">Hari Tanggal</label>
                                        <input type="date" class="form-control" id="hari_tgl" name="hari_tgl"
                                            placeholder="Pilih Tanggal Kepergian">
                                    </div>
                                </div>
                                <div class="col-md-6 grid-margin">
                                    <div class="form-group">
                                        <label for="rekening">Rekening</label>
                                        <input type="text" class="form-control" id="rekening"
                                            name="rekening" placeholder="Tulis Nomor Rekening">
                                    </div>
                                    <div class="form-group">
                                        <label for="uang_harian">Uang Harian</label>
                                        <input type="text" class="form-control" id="uang_harian" name="uang_harian"
                                            placeholder="Tulis Nominal Uang Harian">
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="waktu">Waktu</label>
                                        <input type="time" value="{{Carbon\Carbon::now()->format('Y-m-d')."T".Carbon\Carbon::now()->format('H:i')}}" class="form-control" id="waktu" name="waktu"
                                            placeholder="Pilih Waktu Kepergian">
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="uang_transport">Uang Transport</label>
                                        <input type="text" class="form-control" id="uang_transport" name="uang_transport"
                                            placeholder="Pilih Nominal Tang Transport">
                                    </div>
                                    <div class="form-group">
                                        <label for="biaya_transport">Biaya Transport</label>
                                        <input type="text" class="form-control" id="biaya_transport" name="biaya_transport"
                                            placeholder="Tulis Nominal Biaya Transport">
                                    </div>
                                </div>
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>

<script>
    const wrapperFields = document.querySelector('#namaa-wrapper');
    const addBiayaButton = document.querySelector('#add-namaa-button');
    const biayas = [];

    const template = (position) =>`<div class="form-group">
            <label>Biaya ${position}</label>
            <select class="js-example-basic-multiple w-100" name="namaa[]"
                id="namaa">
                '@foreach($biaya as $b) <option value="{{ $b->id }}">{{$b->name}}</option> @endforeach
            </select>
        </div>`

    addBiayaButton.addEventListener('click', () => {
        const lastChild = wrapperFields.querySelector('.form-group:last-child')
        const currentLength =  wrapperFields.children.length;
        console.log(wrapperFields)
        lastChild.insertAdjacentHTML('afterend', template(currentLength + 1));    
    })
</script>

@endsection
