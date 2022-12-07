@extends('layouts.dashboard.master')

@section('title','Master Parameter')

@section('style')
    <script type="text/javascript" src="{{ asset('app-assets/dashboard/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Master Parameter</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <form method="POST" action="{{ route('admin.parameter.store') }}" enctype="multipart/form-data">
                            @csrf
                            @php
                                $jps = App\Models\Jp::all();
                            @endphp
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Jenis Pengujian <i class="text-danger" style="font-size: 16px;">*</i></label>
                                <select class="form-control @error('jenis_pengujian') is-invalid @enderror" id="exampleFormControlSelect1" name="jenis_pengujian">
                                    <option value="" disabled selected hidden>Pilih...</option>
                                    @foreach($jps as $jp)
                                        <option value="{{ $jp->id }}">{{ $jp->jenis_permohonan }}</option>
                                    @endforeach
                                </select>
                                @error('jenis_pengujian')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="parameter">Parameter <i class="text-danger" style="font-size: 16px;">*</i></label>
                                <input type="text" class="form-control @error('parameter') is-invalid @enderror" name="parameter" id="exampleInputText1" placeholder="Parameter" value="{{ old('parameter') }}" autofocus>
                                @error('parameter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nomor">Nomor </label>
                                <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="nomor" id="exampleInputText1" placeholder="Nomor" value="{{ old('nomor') }}" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga </label>
                                <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" id="tanpa-rupiah" value="{{ old('harga') }}" autocomplete="off">
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var tanpa_rupiah = document.getElementById('tanpa-rupiah');
        tanpa_rupiah.addEventListener('keyup', function(e)
        {
            tanpa_rupiah.value = formatRupiah(this.value);
        });

        function formatRupiah(angka, prefix){
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    </script>
@endsection

