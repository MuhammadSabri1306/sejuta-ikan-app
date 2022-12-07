<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SURAT KETETAPAN RETRIBUSI DAERAH</title>
    <link rel="stylesheet" href="{{ public_path('app-assets/dashboard/css/bootstrap.min.css') }}">
    <style>
        
        .bg {
            background-image: url('http://sejutaikan-bpmpp.info/public/logo.png');
            height: 45%;
            width: 350px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            opacity: 0.3;
            position: relative;
            top: 250px;
            left: 170px;
        }

        .table {
            border-collapse: collapse;
            width: 100%;
            position: normal;
        }
        
        .tr {
            page-break-inside: avoid; 
            page-break-after: auto;
        }
        
        .page_break { page-break-before: always; }

        hr {
        	border-color: #212529;
        }

        header hr {
        	border-top-width: medium;
        }

        .table-desc td {
        	vertical-align: top;
        }

        .table-desc td:first-child {
        	white-space: nowrap;
        }

        .table th {
        	text-align: center;
        }

        .table thead th {
        	font-size: 0.85rem;
        }

        .whitespace-nowrap {
        	white-space: nowrap;
        }

        .text-lunas {
        	color: #fff;
        	font-size: 4rem;
        	font-weight: bold;
        	text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
        }
    </style>
</head>
<body>
	<header>
		<div class="">
			<h4 class="text-center mb-1">SURAT KETETAPAN RETRIBUSI DAERAH<br>PEMAKAIAN KEKAYAAN DAERAH<br>PADA UPT BALAI PENERAPAN MUTU PRODUK PERIKANAN</h4>
			<h5 class="text-center font-weight-bold">DINAS KELAUTAN DAN PERIKANAN PROVINSI SULAWESI SELATAN</h5>
			<hr>
		</div>
	</header>
	<main>
		<div class="">
			<p class="text-center">NO. KDP……………………</p>
			<p>Berdasarkan Peraturan Gubernur Sulawesi Selatan Nomor 34 Tahun 2020 tentang Tarif Retribusi Pemakaian Kekayaan Daerah Pemakaian Laboratorium di Bidang Kelautan dan Perikanan, Pelayanan Laboratorium Pemakaian Alat Untuk Menguji Mutu Hasil Perikanan. Dengan ini diperintahkan kepada :</p>
			<div class="mb-3">
				<table class="table-desc">
					<tr>
						<td>Nama Pemohon</td>
						<td class="pl-4 pr-1">:</td>
						<td>{{ $permohonan->nama }}</td>
					</tr>
					<tr>
						<td>Nama Perusahaan</td>
						<td class="pl-4 pr-1">:</td>
						<td>{{ $permohonan->perusahaan }}</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td class="pl-4 pr-1">:</td>
						<td>{{ $permohonan->alamat }}</td>
					</tr>
					<tr>
						<td>No. Telepon</td>
						<td class="pl-4 pr-1">:</td>
						<td>{{ $permohonan->hp }}</td>
					</tr>
				</table>
			</div>
			<p>Untuk melakukan pembayaran retribusi Pemakaian Barang/Peralatan Serta Bahan Dan Sarana Laboratorium dengan data sebagai berikut :</p>
			<div>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>NO</th>
							<th>NAMA SAMPEL</th>
							<th>PARAMETER UJI</th>
							<th>JUMLAH UJI</th>
							<th>TARIF (Rp) SAMPEL</th>
							<th>BIAYA</th>
						</tr>
					</thead>
					<tbody>
					@php
                        $no = 1;
                        $totalPrice = 0;
                    @endphp
					@foreach($permohonanParameters as $item)
						@if($no === 1)
							<tr>
								<td rowspan="{{ count($permohonanParameters) }}">1</td>
								<td rowspan="{{ count($permohonanParameters) }}">{{ $permohonan->jenis_sampel }}</td>
								<td>{{ $no . '. ' . $item->parameter->parameter }}</td>
								<td>{{ $item->jumlah }}</td>
								<td class="whitespace-nowrap">Rp {{ number_format($item->parameter->harga,0,',','.') }}</td>
								<td class="whitespace-nowrap">Rp {{ number_format($item->parameter->harga * $item->jumlah,0,',','.') }}</td>
							</tr>
						@else
							<tr>
								<td>{{ $no . '. ' . $item->parameter->parameter }}</td>
								<td>{{ $item->jumlah }}</td>
								<td class="whitespace-nowrap">Rp {{ number_format($item->parameter->harga,0,',','.') }}</td>
								<td class="whitespace-nowrap">Rp {{ number_format($item->parameter->harga * $item->jumlah,0,',','.') }}</td>
							</tr>
						@endif
						@php
	                        $no++;
	                        $totalPrice = $totalPrice + ($item->parameter->harga * $item->jumlah);
	                    @endphp
					@endforeach
					</tbody>
					<tfoot>
						<tr>
							<th colspan="5" class="text-right">TOTAL</th>
							<th class="whitespace-nowrap">Rp {{ number_format($totalPrice,0,',','.') }}</th>
						</tr>
					</tfoot>
				</table>
			</div>
			<p>Pembayaran dapat dilakukan melalui RKUD Provinsi Sulawesi Selatan <b>(130-001-000006731-9)</b> atau melalui <b>QRIS</b>.</p>
			<div class="d-flex justify-content-end px-5 mb-5">
				<div>
					<p class="mb-0">Makassar, ………………………. <small>(tgl pembayaran)</small></p>
					<p class="mb-4">Petugas Pemungut</p>
					<p class="mb-4">&nbsp;</p>
					<p class="mb-0">(……………………………………….)</p>
					<p>NIP</p>
				</div>
			</div>
			<hr>
			<p class="mb-0 text-center text-lunas">LUNAS</p>
			<hr>
		</div>
	</main>
</body>
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
</html>