@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Petugas ') }}</div>
				
				<br>
				
				<div class="form-group row">
                    <div class="col-md-9 offset-md-9">
						<a href="/petugas/tambah" class="btn btn-primary">Tambah</a>		
					</div>
				</div>
				<div class="table-responsive">          
					<table class="table">
						<tr>
							<th>No Petugas</th>
							<th>Nama</th>
							<th>Nama Divisi</th>
							<th>Nama TPS</th>
							<th>Opsi</th>
						</tr>
						@foreach($petugas as $k)
						<tr>	
							<td>{{ $k->no_petugas }}</td>
							<td>{{ $k->no_ktp }}</td>
							<td>{{ $k->id_divisi_petugas }}</td>
							<td>{{ $k->id_tps }}</td>
							<td>
								<a href="/petugas/edit/{{ $k->id_petugas }}">Edit</a>
								|
								<a href="/petugas/hapus/{{ $k->id_petugas }}">Hapus</a>
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection