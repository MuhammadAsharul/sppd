@extends('index')
@section('title', 'Edit Data SPPD')
@section('content')
    <div class="row">
        <div class="col-sm-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Edit Data SPPD</h4>
                        </div>
                        <div>
                            <a href="{{ route('sppd.index') }}">
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
                        <form class="forms-sample" action="{{ route('sppd.update', $sppd->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 grid-margin">
                                    {{-- <div class="form-group">
                                        <label for="pejabat_pemerintah">Pejabat Pemberi Perintah</label>
                                        <select class="js-example-basic-multiple w-100 form-control"
                                            name="pejabat_pemerintah" id="pejabat_pemerintah">
                                            <option value="{{ $sppd->pemerintah->id }}">{{ $sppd->pemerintah->name }}
                                            </option>
                                            @foreach ($sppd as $s)
                                                <option value="{{ $s->id }}">{{ $s->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="pejabat_diperintah">Pegawai yang Diperintah</label>
                                        <select class="js-example-basic-multiple w-100"name="pejabat_diperintah"
                                            id="pejabat_diperintah">
                                            <option value="">Pilih Salah Satu</option>
                                            @foreach ($sppd as $s)
                                                <option value="{{ $s->id }}">{{ $s->name }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="maksud_perintah">Maksud Perjalanan Dinas</label>
                                        <input value="{{ $sppd->maksud_perintah }}" type="text" class="form-control"
                                            id="maksud_perintah" name="maksud_perintah"
                                            placeholder="Tulis Maksud Perjalanan Dinas">
                                    </div>
                                    <div class="form-group">
                                        <label for="transportasi">Transportasi</label>
                                        <input type="text" class="form-control" id="transportasi" name="transportasi"
                                            placeholder="Tulis Transportasi yang Digunakan">
                                    </div>
                                </div>
                                <div>
                                    <div>Pengikut</div>
                                    <div id="pengikut-wrapper">
                                        @foreach ($sppd->pengikut()->get() as $item)
                                            <div class="form-group">
                                                <label>Pengikut {{ $loop->iteration }}</label>
                                                <select class="js-example-basic-multiple w-100" name="pengikut[]"
                                                    id="pengikut">
                                                    <option value="">Pilih Salah Satu</option>
                                                    @foreach ($pegawai as $s)
                                                        <option {{ $s->id === $item->id ? 'selected' : null }}
                                                            value="{{ $s->id }}">{{ $s->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        @endforeach
                                    </div>

                                    <button id="add-pengikut-button" type="button">
                                        Tambah pengikut
                                    </button>
                                </div>
                                {{-- <div class="form-group">
                                        <label>Pengikut Satu</label>
                                        <select class="js-example-basic-multiple w-100" name="pengikut_satu"
                                            id="pengikut_satu">
                                            <option value="">Pilih Salah Satu</option>
                                            @foreach ($sppd as $s)
                                                <option value="{{ $s->id }}">{{ $s->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pengikut Dua <span style="color: red">*optional</span></label>
                                        <select class="js-example-basic-multiple w-100" name="pengikut_dua"
                                            id="pengikut_dua">
                                            <option value="">Pilih Salah Satu</option>

                                            @foreach ($sppd as $s)
                                                <option value="{{ $s->id }}">{{ $s->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pengikut Tiga <span style="color: red">*optional</span></label>
                                        <select class="js-example-basic-multiple w-100" name="pengikut_tiga"
                                            id="pengikut_tiga">
                                            <option value="">Pilih Salah Satu</option>
                                            @foreach ($sppd as $s)
                                                <option value="{{ $s->id }}">{{ $s->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}
                                <div class="col-md-6 grid-margin">
                                    <div class="form-group">
                                        <label for="tempat_berangkat">Tempat Berangkat</label>
                                        <input type="text" class="form-control" id="tempat_berangkat"
                                            name="tempat_berangkat" placeholder="Tulis Tempat Keberangkatan">
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_tujuan">Tempat Tujuan</label>
                                        <input type="text" class="form-control" id="tempat_tujuan" name="tempat_tujuan"
                                            placeholder="Tulis Tempat Tujuan">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_pergi">Tanggal Pergi</label>
                                        <input type="date" class="form-control" id="tgl_pergi" name="tgl_pergi"
                                            placeholder="Pilih Tanggal Kepergian">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_kembali">Tanggal Kembali</label>
                                        <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali"
                                            placeholder="Pilih Tanggal Kembali">
                                    </div>
                                    <div class="form-group">
                                        <label for="instansi">Instansi</label>
                                        <input type="text" class="form-control" id="instansi" name="instansi"
                                            placeholder="Tulis Instansi">
                                    </div>
                                    <div class="form-group">
                                        <label for="mata_anggaran">Mata Anggaran</label>
                                        <input type="text" class="form-control" id="mata_anggaran" name="mata_anggaran"
                                            placeholder="Tulis Mata Anggaran">
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <input type="text" class="form-control" id="keterangan" name="keterangan"
                                            placeholder="Tulis Keterangan">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary me-2">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<script>
    const wrapperFields = document.querySelector('#pengikut-wrapper');
    const addPengikutButton = document.querySelector('#add-pengikut-button');
    const pengikuts = [];

    const template = (position) =>`<div class="form-group">
            <label>Pengikut ${position}</label>
            <select class="js-example-basic-multiple w-100" name="pengikut[]"
                id="pengikut">
                '@foreach($pegawai as $s) <option value="{{ $s->id }}">{{$s->name}}</option> @endforeach
            </select>
        </div>`

    addPengikutButton.addEventListener('click', () => {
        const lastChild = wrapperFields.querySelector('.form-group:last-child')
        const currentLength =  wrapperFields.children.length;
        console.log(wrapperFields)
        lastChild.insertAdjacentHTML('afterend', template(currentLength + 1));    
    })
</script>

@endsection
