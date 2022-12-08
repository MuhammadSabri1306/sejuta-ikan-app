<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SURAT KETETAPAN RETRIBUSI DAERAH</title>
    <style>

        .table {
            border-collapse: collapse;
            width: 100%;
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

        .table th:not(.text-end) {
        	text-align: center;
        }

        .table th, .table td {
        	padding: 4px;
        }

        .whitespace-nowrap {
        	white-space: nowrap;
        }

        body, p, table, h1, h2, h3, h4, h5, h6 {
        	font-family: Arial, Helvetica, sans-serif;
        }

        p, table {
        	font-size: 12px;
        }

        h1, h2, h3, h4, h5, h6 {
        	margin: 0;
        }

        .text-center {
        	text-align: center;
        }

        .text-end {
        	text-align: right;
        }

        .paraf {
        	margin-left: 650px;
        }
    </style>
</head>
<body>
	<header>
		<div class="">
			<h4 class="text-center">SURAT KETETAPAN RETRIBUSI DAERAH<br>PEMAKAIAN KEKAYAAN DAERAH<br>PADA UPT BALAI PENERAPAN MUTU PRODUK PERIKANAN</h4>
			<h5 class="text-center"><b>DINAS KELAUTAN DAN PERIKANAN PROVINSI SULAWESI SELATAN</b></h5>
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
				<table class="table" border="1">
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
								<td class="text-center" rowspan="{{ count($permohonanParameters) }}">1</td>
								<td class="text-center" rowspan="{{ count($permohonanParameters) }}">{{ $permohonan->jenis_sampel }}</td>
								<td>{{ $no . '. ' . $item->parameter->parameter }}</td>
								<td class="text-center">{{ $item->jumlah }}</td>
								<td class="whitespace-nowrap text-end">Rp {{ number_format($item->parameter->harga,0,',','.') }}</td>
								<td class="whitespace-nowrap text-end">Rp {{ number_format($item->parameter->harga * $item->jumlah,0,',','.') }}</td>
							</tr>
						@else
							<tr>
								<td>{{ $no . '. ' . $item->parameter->parameter }}</td>
								<td class="text-center">{{ $item->jumlah }}</td>
								<td class="whitespace-nowrap text-end">Rp {{ number_format($item->parameter->harga,0,',','.') }}</td>
								<td class="whitespace-nowrap text-end">Rp {{ number_format($item->parameter->harga * $item->jumlah,0,',','.') }}</td>
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
							<th colspan="5" class="text-end">TOTAL</th>
							<th class="whitespace-nowrap text-end">Rp {{ number_format($totalPrice,0,',','.') }}</th>
						</tr>
					</tfoot>
				</table>
			</div>
			<p>Pembayaran dapat dilakukan melalui RKUD Provinsi Sulawesi Selatan <b>(130-001-000006731-9)</b> atau melalui <b>QRIS</b>.</p>
			<p class="paraf" style="margin-bottom: 40px;">Makassar, ………………………. <small>(tgl pembayaran)</small><br>Petugas Pemungut</p>
			<p class="paraf" style="margin-bottom: 20px;">(……………………………………….)<br>NIP</p>
			<div>
				<p class="text-center"><img src="{{ public_path('pmt.png') }}" style="width: 400px;"></p>
			</div>
		</div>
	</main>
</body>
</html>