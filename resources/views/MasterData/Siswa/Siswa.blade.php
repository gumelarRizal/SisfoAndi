@extends('Layouts.MainLayout')
@section('Content')
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Data Siswa</h3>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="">NIS</label>
					<input type="text" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="">Nama Siswa</label>
					<input type="text" name="" id="" class="form-control">
				</div>
			</div>
		</div>
		<div class="float-left">
			<a href="#" class="btn btn-success btn-sm modal-show" data-toggle="modal" data-target="#modal-default" title="Tambah Data Siswa"><i class="fas fa-plus"></i> Add</a>
		</div>
		<div class="float-right">
			<button class="btn btn-info btn-sm"><i class="fas fa-search" id="search"></i> Search</button>
			<button class="btn btn-default btn-sm"><i class="fas fa-cycle"></i> Clear</button>
		</div>
		
	</div>

	<hr>
	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>NIS</th>
					<th>Nama Siswa</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Jenis Kelamin</th>
					<th>No Telfon</th>
					<th style="text-align: center">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($Siswa as $item)
				<tr>
					<td> {{$item->NIS}} </td>
					<td> {{$item->nama_siswa}} </td>
					<td> {{$item->tempat_lahir}} </td>
					<td> {{$item->tanggal_lahir}} </td>
					@if ($item->jenis_kelamin == "L")
						<td> Laki - laki </td>
					@else
						<td> Perempuan </td>
					@endif
					<td> {{$item->no_telp}} </td>
					<td align="center">
						<a class="btn bg-danger btn-sm">
							<i class="fas fa-trash"></i> 
						</a>
						<a class="btn bg-warning btn-sm">
							<i class="fas fa-edit"></i> 
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
			<tfoot>
				<tr>
					<th>NIS</th>
					<th>Nama Siswa</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Jenis Kelamin</th>
					<th>No Telfon</th>
					<th style="text-align: center">Aksi</th>
				</tr>
			</tfoot>
		</table>
	</div>
<!-- /.card-body -->
</div>
<div class="modalSiswa">
	@include('MasterData.Siswa.ModalSis')
</div>
@push('scripts')
	<script>
		$(document).ready(function(){
			$('#example1').dataTable();
		})


</script>
@endpush
@endsection