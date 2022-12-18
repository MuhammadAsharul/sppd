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
                            {{-- <div class="form-group">
                                    <label for="nama_pegawai">Pejabat Pemberi Perintah</label>
                                    <select class="js-example-basic-multiple w-100 form-control" name="nama_pegawai"
                                        id="nama_pegawai">
                                        <option value="">Pilih Salah Satu</option>
                                        @foreach ($biaya as $s)
                                            <option value="{{ $s->id }}">{{ $s->name }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                            <div class="row">
                                <div class="col-md grid-margin">
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        <div>
                                            <label for=pegawaib>Pegawai</label>
                                        </div>
                                        <div>
                                            <button id="add-pegawaib-button" type="button" class="btn btn-success">
                                                <i class="mdi mdi-plus"></i>
                                            </button>
                                            <button id="remove-pegawaib-button" type="button" class="btn btn-danger">
                                                <i class="mdi mdi-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="pegawai-wrapper">
                                        <div class="form-group">
                                            <label>Pegawai 1</label>
                                            <select class="js-example-basic-multiple w-100" name="pegawaib[]"
                                                id="pegawaib">
                                                <option value="">Pilih Salah Satu</option>
                                                @foreach ($biaya as $s)
                                                    <option value="{{ $s->id }}">{{ $s->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
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
                            <div class="form-group">
                                <label for="waktu">Waktu</label>
                                <input type="time"
                                    value="{{ Carbon\Carbon::now()->format('Y-m-d') . 'T' . Carbon\Carbon::now()->format('H:i') }}"
                                    class="form-control" id="waktu" name="waktu" placeholder="Pilih Waktu Kepergian">
                            </div>
                            <div class="row">
                                <div class="col-md grid-margin">
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        <div>
                                        </div>
                                        <div>
                                            <button id="add-harianButton" type="button" class="btn btn-success">
                                                <i class="mdi mdi-plus"></i>
                                            </button>
                                            <button id="remove-harianButton" type="button" class="btn btn-danger">
                                                <i class="mdi mdi-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="harian-wrapper">
                                        <div class="form-group" id="dynamicAddRemove">
                                            <label for="uang_harian">Uang Harian</label>
                                            <input type="text" class="form-control" id="uang_harian"
                                                name="moreFields[0][uang_harian]" placeholder="Tulis Nominal Uang Harian">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md grid-margin">
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        <div>
                                        </div>
                                        <div>
                                            <button id="add-hariantButton" type="button" class="btn btn-success">
                                                <i class="mdi mdi-plus"></i>
                                            </button>
                                            <button id="remove-hariantButton" type="button" class="btn btn-danger">
                                                <i class="mdi mdi-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="hariant-wrapper">
                                        <div class="form-group">
                                            <label for="uang_harian">Uang Transport (Rp)</label>
                                            <input type="text" class="form-control" id="uang_transport"
                                                name="uang_transport" placeholder="Tulis Nominal Uang Transport">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md grid-margin">
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        <div>
                                        </div>
                                        <div>
                                            <button id="add-hariantButton" type="button" class="btn btn-success">
                                                <i class="mdi mdi-plus"></i>
                                            </button>
                                            <button id="remove-hariantButton" type="button" class="btn btn-danger">
                                                <i class="mdi mdi-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="transport-wrapper">
                                        <div class="form-group">
                                            <label for="biaya_harian">Biaya Transport (Rp)</label>
                                            <input type="text" class="form-control" id="biaya_transport"
                                                name="biaya_transport[]" placeholder="Tulis Nominal Biaya Transport">
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
        var i = 0;
        $("#add-hariantButton").click(function() {
            ++i;
            $("#dynamicAddRemove").append('<tr><td><input type="text" name="moreFields[' + i +
                '][title]" placeholder="Enter title" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>'
            );
        });
        $(document).on('click', '.remove-tr', function() {
            $(this).parents('tr').remove();
        });

        /* Dengan Rupiah */
        var uang_transport = document.getElementById('uang_transport');
        uang_transport.addEventListener('keyup', function(e) {
            uang_transport.value = formatRupiah(this.value, 'Rp. ');
        });

        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    </script>
@endsection
