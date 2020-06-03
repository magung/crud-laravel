@extends('master')

@section('judul_halaman', 'Data')

@section('body')
	<script type="text/javascript">
		function hapus(index) {
			let nama = $("#nama"+index).html()
			$("#hpsNama").html(nama)
			let id = $("#id"+index).html()
			$("#btnHapus").attr("href", "/hapus/"+id)
		}
    </script>
	
	<a href="/input" class="btn btn-primary">Tambah Data</a><br><br>
	<table class="table table-striped">
		<tr>
			<th scope="col">No</th>
			<th scope="col">Nama</th>
			<th scope="col">Umur</th>
			<th scope="col">Jenis Kelamin</th>
			<th scope="col">Perusahaan</th>
			<th scope="col">Posisi</th>
			<th scope="col">Tanggal Mulai</th>
			<th scope="col">Tanggal Akhir</th>
			<th scope="col">Masa Bekerja</th>
			<th scope="col"></th>
		</tr>
		<?php $no = 1;?>

		@foreach($data as $d)
		<?php
			$mulai   =new DateTime($d->tgl_mulai);
			$akhir   =new DateTime($d->tgl_akhir);
			$masa    =$akhir->diff($mulai);
		?>
		<?php $index = $no;?>
		<tr>
			<th scope="row">{{ $no++}}</th>
			<td id="id{{$index}}" hidden>{{$d->id}}</td>
			<td id="nama{{$index}}">{{ $d->nama }}</td>
			<td>{{ $d->umur }}</td>
			<td>{{ $d->jenis_kelamin }}</td>
			<td>{{ $d->perusahaan }}</td>
			<td>{{ $d->posisi }}</td>
			<td>{{ $d->tgl_mulai }}</td>
			<td>{{ $d->tgl_akhir }}</td>
			<td>{{ $masa->y !== 0 ? $masa->y.' Tahun' : ''}} {{$masa->m !== 0 ? $masa->m.' Bulan': ''}} {{$masa->d !== 0 ? $masa->d.' Hari' : ''}}</td>
			<td>
				<a href="/edit/{{$d->id}}" class="btn btn-warning">Edit</a>
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal" onclick="hapus({{$index}})">
					Hapus
				</button>
			</td>
		</tr>
		@endforeach
	</table>

	<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="hapusModalLabel">Hapus Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Apakah anda yakin ingin hapus <b id="hpsNama"></b>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				<a href="/hapus" class="btn btn-danger" id="btnHapus">Hapus</a> 
			</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection