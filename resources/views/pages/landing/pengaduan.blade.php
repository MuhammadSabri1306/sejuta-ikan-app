@extends('layouts.landing.master')

@section('title','Pengaduan')

@section('content')
    <div class="r-bg-a pt85 pb120">
        <div class="container w-992">
            <div class="row pt80">
                <div class="col-lg-12">
                    <div class="page-headings text-center">
                        <ul class="breadcrus mb20">
                            <li class="bread-non"><a href="{{ route('/') }}">Beranda</a></li>
                            <li>&nbsp;/&nbsp;</li>
                            <li class="bread-active"><a href="#">Pengaduan</a></li>
                        </ul>
                        <h1>Form Pengaduan</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="r-bg-x pb120">
        <div class="container w-992">
            <div class="blog-details">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sol-img mt60"></div>
                        <div class="ree-blog-details">
                            @if(session()->has('success'))
                            <div id="alert-success" class="alert alert-success alert-with-border" style="background-color: rgba(92,146,15,0.5) !important;" role="alert">
                                <i class="fa fa-check"></i> {{ session()->get('success') }}
                            </div>
                            @endif
                            @if(session()->has('error'))
                            <div id="alert-danger" class="alert alert-danger alert-with-border" role="alert">
                                {{ session()->get('error') }}
                            </div>
                            @endif
                            <form action="{{ route('landing.proses-pengaduan') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap <i class="text-danger" style="font-size: 14px;">*</i></label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"  autocomplete="off" autofocus>
                                    @if($errors->has('nama'))
                                    <span class="form-text text-muted text-danger">{{ $errors->first('nama') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="email">Email <i class="text-danger" style="font-size: 14px;">*</i></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"  autocomplete="off">
                                    @if($errors->has('email'))
                                    <span class="form-text text-muted text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="subject">Subject <i class="text-danger" style="font-size: 14px;">*</i></label>
                                    <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject"  autocomplete="off">
                                    @if($errors->has('subject'))
                                    <span class="form-text text-muted text-danger">{{ $errors->first('subject') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="pesan">Pesan <i class="text-danger" style="font-size: 14px;">*</i></label>
                                    <textarea id="pesan" class="form-control @error('pesan') is-invalid @enderror" name="pesan"></textarea>
                                    @if($errors->has('pesan'))
                                    <span class="form-text text-muted text-danger">{{ $errors->first('pesan') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="fu">FU.7.5 <i class="text-danger" style="font-size: 14px;">*</i></label>
                                    <input type="text" class="form-control @error('fu') is-invalid @enderror" name="fu"  autocomplete="off">
                                    @if($errors->has('fu'))
                                    <span class="form-text text-muted text-danger">{{ $errors->first('fu') }}</span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-success"> SIMPAN </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $("#alert-success").fadeTo(2000, 500).slideUp(500, function(){
            $("#alert-success").slideUp(500);
        });

        $("#alert-danger").fadeTo(2000, 500).slideUp(500, function(){
            $("#alert-danger").slideUp(500);
        });
    </script>
@endsection
