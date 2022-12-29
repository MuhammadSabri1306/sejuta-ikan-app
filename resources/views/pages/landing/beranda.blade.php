@extends('layouts.landing.master')

@section('title', 'Beranda')

@section('content')
    <section class="home-hero slide-hero">
        <div class="hero-owl owl-carousel">
            <div class="slide owlbg11">
                <img src="{{ asset('app-assets/landing-new/images/new_banner/hero1.webp') }}" class="img-fluid">
            </div>
            <div class="slide owlbg11">
                <img src="{{ asset('app-assets/landing-new/images/new_banner/hero2.webp') }}" class="img-fluid">
            </div>
        </div>
    </section>

    <section class="r-bg-i sec-pad digi-service" style="padding-top: 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="sec-heading text-center pera-block">
                        <h2>Layanan</h2>
                    </div>
                </div>
            </div>
            <div class="row mt30">
                {{-- start --}}
                <div class="col-md-3">
                    <a href="{{ route('register') }}">
                        <img src="{{ asset('registrasi.png') }}" class="rounded float-left" alt="gambar-layanan"
                            style="width: 100%;">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('landing.pantau-permohonan') }}">
                        <img src="{{ asset('pantau-status-permohonan.png') }}" class="rounded float-left"
                            alt="gambar-layanan" style="width: 100%;">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('landing.alur-permohonan') }}">
                        <img src="{{ asset('alur-permohonan.png') }}" class="rounded float-left" alt="gambar-layanan"
                            style="width: 100%;">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="https://api.whatsapp.com/send?phone=+6281244962783&text=Assalamualaikum">
                        <img src="{{ asset('customer-service.png') }}" class="rounded float-left" alt="gambar-layanan"
                            style="width: 100%;">
                    </a>
                </div>
                {{-- end --}}
            </div>
        </div>
    </section>

    <section class="r-bg-i sec-pad" style="padding-top: 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="sec-heading text-center pera-block">
                        <h2>Informasi</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center mt30">
                <div class="col-10 col-md-6 col-lg-4">
                    <img src="{{ asset('app-assets/landing-new/images/QRCode_UPT_BPMPP.png') }}" alt="Payment" class="img-fluid" style="border: 4px solid #fff; background-color: #fff;" data-aos="fade-in"
                        data-aos-delay="400">
                </div>
                <div class="col-md-6 p-5">
                    <h5>Cara pembayaran Retribusi Pemakaian Barang / Peralatan Serta Bahan dan Sarana Laboratorium UPT. BPMPP (Biaya Pengujian) melalui :</h5><br>
                    <ol>
                        <li class="mb-3">Rekening Bank Sulselbar Nomor: 13000167319 atas nama Kas Umum Daerah Provinsi Sulawesi Selatan.</li>
                        <li>Quick Response Code Indonesian Standar (QRIS) Bank Sulselbar.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="r-bg-x sec-pad">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="sec-heading text-center pera-block">
                        <h2>Parameter Tersedia</h2>
                    </div>
                </div>
            </div>
            <div class="table-responsive mt30">
            @if ($parameters->count() >= 1)
                <table id="data_side" class="table table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jenis Pengujian</th>
                            <th scope="col">Parameter</th>
                            <th scope="col">Harga</th>
                        </tr>
                    </thead>
                </table>
            @else
                <table class="table table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jenis Pengujian</th>
                            <th scope="col">Parameter</th>
                            <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3" class="text-center"><i class="text-danger">no data</i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            @endif
            </div>
        </div>
    </section>

    <section class="r-bg-a sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-8 vcenter">
                    <div class="heading-hz-btn">
                        <h2>Galeri</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-4 vcenter">
                    {{-- <div class="link-sol-header">
                        <a href="#" class="ree-card-link">Lihat Semua <i class="fas fa-arrow-right fa-btn"></i></a>
                    </div> --}}
                </div>
            </div>
            <div class="row mt60">
                <div class="col-lg-12">
                    <div class="full-work-block  owl-carousel">
                        {{-- <div class="fwb-main-x fwb-a">
                            <div class="work-thumbnails">
                                <a href="#">
                                    <img src="{{ asset('app-assets/landing/assets/images/slide4.jpg') }}" alt="portfolio reevan" class="img-fluid">
                                </a>
                            </div>
                        </div> --}}
                        <div class="fwb-main-x fwb-a">
                            <div class="work-thumbnails">
                                <a href="#">
                                    <img src="{{ asset('app-assets/landing/assets/images/slide1.jpg') }}"
                                        alt="portfolio reevan" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="fwb-main-x fwb-a">
                            <div class="work-thumbnails">
                                <a href="#">
                                    <img src="{{ asset('app-assets/landing/assets/images/slide2.jpg') }}"
                                        alt="portfolio reevan" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="fwb-main-x fwb-a">
                            <div class="work-thumbnails">
                                <a href="#">
                                    <img src="{{ asset('app-assets/landing/assets/images/slide3.jpg') }}"
                                        alt="portfolio reevan" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="r-bg-a sec-pad">
        <div class="container">
            <div class="heading-hz-btn">
                <h2 class="mb-5">Prosedur Pelayanan</h2>
            </div>
            <div class="owl-carousel owl-theme sop-carousel">
                <div class="item">
                    <div class="card bg-white">
                        <div class="card-body">
                            <p><b class="border border-danger text-danger px-2 py-1 rounded-circle">1</b></p>
                            <img src="{{ asset('app-assets/prosedur/permohonan.svg') }}" alt="">
                            <h4 class="text-center">Permohonan</h4>
                            <p class="text-center small px-4 mt-2">Hubungi Whatsapp 0812 4496 2783, atau kunjungi website sejutaikan-bpmpp.info</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card bg-white">
                        <div class="card-body">
                            <p><b class="border border-danger text-danger px-2 py-1 rounded-circle">2</b></p>
                            <img src="{{ asset('app-assets/prosedur/verifikasi.svg') }}" alt="">
                            <h4 class="text-center">Verifikasi</h4>
                            <p class="text-center small px-4 mt-2">dan kaji ulang permohonan uji sampel</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card bg-white">
                        <div class="card-body">
                            <p><b class="border border-danger text-danger px-2 py-1 rounded-circle">3</b></p>
                            <img src="{{ asset('app-assets/prosedur/pembayaran.svg') }}" alt="">
                            <h4 class="text-center">Pembayaran Retribusi</h4>
                            <p class="text-center small px-4 mt-2">Kirim bukti pembayaran anda ke 0812 4496 2783 (Whatsapp) atau upload di website sejutaikan-bpmpp.info</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card bg-white">
                        <div class="card-body">
                            <p><b class="border border-danger text-danger px-2 py-1 rounded-circle">4</b></p>
                            <img src="{{ asset('app-assets/prosedur/penjemputan.svg') }}" alt="">
                            <h4 class="text-center">Penjemputan Sampel</h4>
                            <p class="text-center small px-4 mt-2">Tunggu kedatangan petugas kami di rumah anda</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card bg-white">
                        <div class="card-body">
                            <p><b class="border border-danger text-danger px-2 py-1 rounded-circle">5</b></p>
                            <img src="{{ asset('app-assets/prosedur/pengujian.svg') }}" alt="">
                            <h4 class="text-center">Pengujian</h4>
                            <p class="text-center small px-4 mt-2">Sampel akan diuji sesuai parameter dalam permohonan</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <h4 class="mt-4 mb-2">Jenis Pengujian</h4>
                    <div class="card bg-primary mb-2">
                        <div class="card-body d-block">
                            <p class="text-white"><b>Organoleptik</b><br>
                            <small>(1 hari)</small></p>
                        </div>
                    </div>
                    <div class="card bg-success mb-2">
                        <div class="card-body d-block">
                            <p class="text-white"><b>Mikrobiologi</b><br>
                            <small>(6 hari)</small></p>
                        </div>
                    </div>
                    <div class="card bg-danger">
                        <div class="card-body d-block">
                            <p class="text-white"><b>Kimia</b><br>
                            <small>(6 hari)</small></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card bg-white">
                        <div class="card-body">
                            <p><b class="border border-danger text-danger px-2 py-1 rounded-circle">6</b></p>
                            <img src="{{ asset('app-assets/prosedur/sertifikat.svg') }}" alt="">
                            <h4 class="text-center">Penerbitan Sertifikat</h4>
                            <p class="text-center small px-4 mt-2">Sertifikat hasil ujia akan dikirim ke rumah anda segera setelah hasilnya keluar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="r-bg-x zup sec-pad">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="sol-img m-mt30">
                        <img src="{{ asset('app-assets/landing-new/images/others/team-business.jpg') }}" alt="survei"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="pera-block ml50">
                        <h2><span class="ree-tt">Survei Kepuasan Masyarakat</span></h2>
                        <p>Pemerintah berupaya meningkatkan kualitas pelayanan masyarakat demi tercapainya harapan dan
                            tuntutan publik sesuai Keputusan Menteri Pendayagunaan Aparatur Negara Nomor 14 Tahun 2017
                            tentang Pedoman Umum Penyusunan Survei Kepuasan Masyarakat Unit Penyelenggara Pelayanan Publik.
                            Mengacu pada hal tersebut, maka Tim Survei dan Pengolah Data Survei Kepuasan Masyarakat (SKM)
                            UPT BPMPP telah melakukan pengukuran Survei Kepuasaan Masyarakat terhadap pelayanan Pengujian
                            Hasil Perikanan</p>
                        <a href="{{ route('landing.survei') }}" class="btn btn-block btn-danger mt-3"> Mulai Survei</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script src="{{ asset('app-assets/dashboard/files/bower_components/datatables.net/js/jquery.dataTables.min.js') }}">
    </script>
    <script
        src="{{ asset('app-assets/dashboard/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}">
    </script>
    <script src="{{ asset('app-assets/dashboard/files/assets/pages/data-table/js/jszip.min.js') }}"></script>
    <script src="{{ asset('app-assets/dashboard/files/assets/pages/data-table/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('app-assets/dashboard/files/assets/pages/data-table/js/vfs_fonts.js') }}"></script>
    <script
        src="{{ asset('app-assets/dashboard/files/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}">
    </script>
    <script
        src="{{ asset('app-assets/dashboard/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}">
    </script>
    <script
        src="{{ asset('app-assets/dashboard/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}">
    </script>
    <script
        src="{{ asset('app-assets/dashboard/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
    </script>
    <script
        src="{{ asset('app-assets/dashboard/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
    </script>

    <script>
        $(function() {
            $('#data_side').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('landing.datatable-parameter') }}",
            });
        });
    </script>
<script type="text/javascript">

</script>
@endsection
