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
                                <button type="button" class="btn btn-dark">
                                    <i class="mdi mdi-arrow-left"></i>
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
                                <div class="form-group">
                                    <label for="kegiatan">Kegiatan</label>
                                    <input type="text" class="form-control" id="kegiatan" name="kegiatan"
                                        placeholder="Tulis Kegiatan">
                                </div>
                                <div class="form-group">
                                    <label for="nama_pegawai">Pejabat Pemberi Perintah</label>
                                    <select class="js-example-basic-multiple w-100 form-control" name="nama_pegawai"
                                        id="nama_pegawai">
                                        <option value="">Pilih Salah Satu</option>
                                        @foreach ($biaya as $s)
                                            <option value="{{ $s->id }}">{{ $s->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="lokasi">Lokasi</label>
                                    <input type="text" class="form-control" id="lokasi" name="lokasi"
                                        placeholder="Tulis Lokasi">
                                </div>
                                <div class="form-group">
                                    <label for="hari_tgl">Hari Tanggal</label>
                                    <input type="date" class="form-control" id="hari_tgl" name="hari_tgl"
                                        placeholder="Pilih Tanggal Kepergian">
                                </div>
                                <div class="form-group">
                                    <label for="rekening">Rekening</label>
                                    <input type="text" class="form-control" id="rekening" name="rekening"
                                        placeholder="Tulis Nomor Rekening">
                                </div>
                                <!-- <div class="form-group">
                                    <label for="uang_harian">Uang Harian (Rp)</label>
                                    <input type="text" class="form-control" id="uang_harian" name="uang_harian"
                                        placeholder="Tulis Nominal Uang Harian">
                                </div> -->
                                {{-- <div class="form-group">
                                    <label for="waktu">Waktu</label>
                                    <input type="time" value="{{Carbon\Carbon::now()->format('Y-m-d')."T".Carbon\Carbon::now()->format('H:i')}}" class="form-control" id="waktu" name="waktu"
                                        placeholder="Pilih Waktu Kepergian">
                                </div> --}}
                                <!-- <div class="form-group">
                                    <label for="uang_transport">Uang Transport (Rp)</label>
                                    <input type="text" class="form-control" id="uang_transport" name="uang_transport"
                                        placeholder="Tulis Nominal Uang Transport">
                                </div>
                                <div class="form-group">
                                    <label for="biaya_transport">Biaya Transport (Rp)</label>
                                    <input type="text" class="form-control" id="biaya_transport"
                                        name="biaya_transport" placeholder="Tulis Nominal Biaya Transport">
                                </div> -->
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <div>
                                        <label for=pejabatdiperintah>Pejabat yang Diperintah</label>
                                    </div>
                                    <div>
                                        <button id="add-diperintah-button" type="button" class="btn btn-success">
                                            <i class="mdi mdi-plus"></i>
                                        </button>
                                        <button id="remove-diperintah-button" type="button" class="btn btn-danger">
                                            <i class="mdi mdi-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="diperintah-wrapper">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Pejabat Diperintah 1</label>
                                                <select class="js-example-basic-multiple w-100" name="diperintah[]" id="diperintah">
                                                    <option value="option">Pilih Salah Satu</option>
                                                        <option value="option">Nama</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="uang_harian">Uang Harian (Rp) 1</label>
                                                <input type="text" class="form-control" id="uang_harian" name="uang_harian"
                                                    placeholder="Nominal Uang Harian">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="uang_transport">Uang Transport (Rp) 1</label>
                                                <input type="text" class="form-control" id="uang_transport" name="uang_transport"
                                                    placeholder="Nominal Uang Transport">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="biaya_transport">Biaya Transport (Lt) 1</label>
                                                <input type="text" class="form-control" id="biaya_transport"
                                                    name="biaya_transport" placeholder="Jumlah Liter BBM">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary me-2">Tambah</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>

<script>
    const wrapperFields = document.querySelector('#pengikut-wrapper');
    const addDiperintahButton = document.querySelector('#add-diperintah-button');
    const removeDiperintahButton = document.querySelector('#remove-diperintah-button');
    const pengikuts = [];

    const template = (position) =>`<div class="form-group">
            <label>Pengikut ${position}</label>
            <select class="js-example-basic-multiple w-100" name="pengikut[]"
                id="pengikut">
                <option value="opt">pot</option>
            </select>
        </div>`

    addDiperintahButton.addEventListener('click', () => {
        const lastChild = wrapperFields.querySelector('.form-group:last-child')
        const currentLength =  wrapperFields.children.length;
        console.log(wrapperFields)
        lastChild.insertAdjacentHTML('afterend', template(currentLength + 1));    
    })

    removeDiperintahButton.addEventListener('click', () => {
        const lastChild = wrapperFields.querySelector('.form-group:last-child')
        const currentLength =  wrapperFields.children.length;
        console.log(wrapperFields)
        if (currentLength != 1) {
            lastChild.remove(template); 
        }
    })
</script>
@endsection
