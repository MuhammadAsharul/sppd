@extends('index')
@section('title', 'Edit Data Biaya')
@section('content')
    <div class="row">
        <div class="col-sm-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Edit Data Biaya</h4>
                        </div>
                        <div>
                            <a href="{{ route('spt.index') }}">
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
                        <form class="forms-sample" action="{{ route('spt.update', $spt->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 grid-margin">
                                    <div class="form-group">
                                        <label for="dasar_perintah">Dasar Perintah</label>
                                        <input value="{{ $spt->dasar_perintah }}" type="text" class="form-control" id="dasar_perintah"
                                            name="dasar_perintah" placeholder="Tulis Dasar Perintah">
                                    </div>
                                    <div class="form-group">
                                        <label for="maksud_tugas">Maksud Tugas</label>
                                        <input value="{{ $spt->maksud_tugas }}" type="text" class="form-control" id="maksud_tugas" name="maksud_tugas"
                                            placeholder="Tulis Maksud Tugas">
                                    </div>
                                </div>
                                <div>
                                    <div>Pejabat yang Diperintah</div>
                                    <div id="diperintah-wrapper">
                                        @foreach ($spt->diperintah()->get() as $item)
                                            <div class="form-group">
                                                <label>Pejabat Diperintah {{ $loop->iteration }}</label>
                                                <select class="js-example-basic-multiple w-100" name="diperintah[]"
                                                    id="diperintah">
                                                    <option value="">Pilih Salah Satu</option>
                                                    @foreach ($pegawai->menetapkan as $s)
                                                        <option {{ $s->id === $item->id ? 'selected' : null }}
                                                            value="{{ $s->id }}">{{ $s->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        @endforeach
                                    </div>

                                    <button id="add-diperintah-button " type="button">
                                        Tambah Pejabat
                                    </button>
                                </div>
                                <div class="col-md-6 grid-margin">
                                    <div class="form-group">
                                        <label for="waktu">Waktu</label>
                                        <input type="time" value="{{Carbon\Carbon::now()->format('Y-m-d')."T".Carbon\Carbon::now()->format('H:i')}}" class="form-control" id="waktu" name="waktu"
                                            placeholder="Pilih Waktu Kepergian">
                                    </div>
                                    <div class="form-group">
                                        <label for="hari_tgl">Hari Tanggal</label>
                                        <input type="date" class="form-control" id="hari_tgl" name="hari_tgl"
                                            placeholder="Pilih Tanggal Kepergian">
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat">Tempat</label>
                                        <input type="text" class="form-control" id="tempat" name="tempat"
                                            placeholder="Pilih Tempat">
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_ditetapkan">Tempat Ditetapkan</label>
                                        <input type="text" class="form-control" id="tempat_ditetapkan" name="tempat_ditetapkan"
                                            placeholder="Tulis Tempat Ditetapkan">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_ditetapkan">Tanggal Ditetapkan</label>
                                        <input type="date" class="form-control" id="tgl_ditetapkan" name="tgl_ditetapkan"
                                            placeholder="Tulis Tanggal Ditetapkan">
                                    </div>
                                    <div class="form-group">
                                        <label for="yang_menetapkan">Petugas yang Menetapkan</label>
                                        <select class="js-example-basic-multiple w-100 form-control"
                                            name="yang_menetapkan" id="yang_menetapkan">
                                            <option value="">Pilih Salah Satu</option>
                                            @foreach ($spt as $s)
                                                <option value="{{ $s->id }}">{{ $s->name }}</option>
                                            @endforeach
                                        </select>
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
        const wrapperFields = document.querySelector('#diperintah-wrapper');
        const addPejabatButton = document.querySelector('#add-diperintah-button');
        const pejabats = [];
    
        const template = (position) =>`<div class="form-group">
                <label>Pejabat ${position}</label>
                <select class="js-example-basic-multiple w-100" name="diperintah[]"
                    id="diperintah">
                    '@foreach($spt as $s) <option value="{{ $s->id }}">{{$s->name}}</option> @endforeach
                </select>
            </div>`
    
        addPejabatButton.addEventListener('click', () => {
            const lastChild = wrapperFields.querySelector('.form-group:last-child')
            const currentLength =  wrapperFields.children.length;
            console.log(wrapperFields)
            lastChild.insertAdjacentHTML('afterend', template(currentLength + 1));    
        })
    </script>
</script>

@endsection
