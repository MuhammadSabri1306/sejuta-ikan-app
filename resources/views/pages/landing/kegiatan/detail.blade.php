@extends('layouts.landing.master')

@section('title',$kegiatan->judul)

@section('content')
    <div class="r-bg-a pt85 pb120">
        <div class="container w-992">
            <div class="row pt80">
                <div class="col-lg-12">
                    <div class="page-headings text-center">
                        <ul class="breadcrus mb20">
                            <li class="bread-non"><a href="{{ route('/') }}">Beranda</a></li>
                            <li>&nbsp;/&nbsp;</li>
                            <li class="bread-active"><a href="#">Kegiatan</a></li>
                        </ul>
                        <h1>Daftar Kegiatan</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="main-blog-content">
        {{-- <div class="sec-shape">
            <span class="shape shape1"><img src="{{ asset('app-assets/landing/assets/images/shape1.png') }}" alt="Shape"></span>
            <span class="shape shape2"><img src="{{ asset('app-assets/landing/assets/images/shape2.png') }}" alt="Shape"></span>
            <span class="shape shape3"><img src="{{ asset('app-assets/landing/assets/images/shape2.png') }}" alt="Shape"></span>
            <span class="shape shape4"><img src="{{ asset('app-assets/landing/assets/images/shape1.png') }}" alt="Shape"></span>
            <span class="shape shape5"><img src="{{ asset('app-assets/landing/assets/images/shape3.png') }}" alt="Shape"></span>
            <span class="shape shape6"><img src="{{ asset('app-assets/landing/assets/images/shape4.png') }}" alt="Shape"></span>
            <span class="shape shape7"><img src="{{ asset('app-assets/landing/assets/images/shape1.png') }}" alt="Shape"></span>
            <span class="shape shape8"><img src="{{ asset('app-assets/landing/assets/images/shape2.png') }}" alt="Shape"></span>
            <span class="shape shape9"><img src="{{ asset('app-assets/landing/assets/images/shape2.png') }}" alt="Shape"></span>
            <span class="shape shape10"><img src="{{ asset('app-assets/landing/assets/images/shape1.png') }}" alt="Shape"></span>
            <span class="shape shape11"><img src="{{ asset('app-assets/landing/assets/images/shape3.png') }}" alt="Shape"></span>
            <span class="shape shape12"><img src="{{ asset('app-assets/landing/assets/images/shape4.png') }}" alt="Shape"></span>
            <span class="shape shape13"><img src="{{ asset('app-assets/landing/assets/images/shape1.png') }}" alt="Shape"></span>
            <span class="shape shape14"><img src="{{ asset('app-assets/landing/assets/images/shape2.png') }}" alt="Shape"></span>
            <span class="shape shape15"><img src="{{ asset('app-assets/landing/assets/images/shape2.png') }}" alt="Shape"></span>
            <span class="shape shape16"><img src="{{ asset('app-assets/landing/assets/images/shape1.png') }}" alt="Shape"></span>
            <span class="shape shape17"><img src="{{ asset('app-assets/landing/assets/images/shape3.png') }}" alt="Shape"></span>
            <span class="shape shape18"><img src="{{ asset('app-assets/landing/assets/images/shape4.png') }}" alt="Shape"></span>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow right-animation" data-wow-delay="0.2s">
                    <div class="blog-page-content blog-details">
                        <div class="page-blog-post blog-post-detail">
                            <div class="blog-img back-img mb-4" style="min-height: 50vh; background-repeat: no-repeat; background-position: center; background-size: cover; background-image: url({{ asset('storage/berita/'.$kegiatan->foto) }})">
                            </div>
                            <h3 class="h3-title">{{ $kegiatan->judul }}</h3>
                            <p class="d-flex justify-content-end align-items-center mb-5">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <small><b> {{ date('d M Y',strtotime($kegiatan->created_at)) }} / Admin</b></small>
                            </p>
                            <div class="page-blog-text mb-5">
                                {!! $kegiatan->isi !!}
                            </div>
                        @if ($kegiatan->url_video)
                            <div class="mb-5">
                                <iframe style="width: 100%!important; max-height: 100%!important; aspect-ratio: 16/9!important;" src="https://www.youtube.com/embed/{{ $youtubeId }}" title="{{ $kegiatan->judul }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow left-animation" data-wow-delay="0.2s">
                    <div class="blog-sidebar wow left-animation" data-wow-delay="0.2s">
                        <div class="recent-post">
                            <h3 class="sidebar-title">Berita Terbaru</h3>

                            @foreach($kegiatanList as $item)
                                <div class="recent-post-box">
                                    <div class="recent-post-img back-img" style="background-image:url({{ asset('storage/berita/'.$item->foto) }})"></div>
                                    <div class="recent-post-text">
                                        <h6><a href="{{ route('landing.detail.kegiatan',['slug' => $item->slug_judul]) }}">{{ $item->judul }}</a></h6>
                                        <p><small><i class="fa fa-calendar" aria-hidden="true"></i><b> {{ date('d M Y',strtotime($item->created_at)) }}</b></small></p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
