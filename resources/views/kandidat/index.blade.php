@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kandidat ') }}</div>
				
				<br>
				
				<div class="form-group row">
                    <div class="col-md-9 offset-md-9">
						<a href="/kandidat/tambah" class="btn btn-primary">Tambah</a>		
					</div>
				</div>
				<div class="table-responsive">          
					<table class="table">
						<tr>
							<th>No</th>
							<th>Nama Ketua</th>
							<th>Nama Wakil</th>
							<th>Nomor Urut</th>
							<th>Nama Partai</th>
							<th>ID Partai</th>
							<th>Opsi</th>
						</tr>
						@foreach($kandidat as $k)
						<tr>	
							<td>{{ $k->id_kandidat }}</td>
							<td>{{ $k->nama_ketua }}</td>
							<td>{{ $k->nama_wakil }}</td>
							<td>{{ $k->nomor_urut }}</td>
							<td>{{ $k->id_partai }}</td>
							<td>{{ $k->id_partai }}</td>
							<td>
								<a href="/kandidat/edit/{{ $k->id_kandidat }}">Edit</a>
								|
								<a href="/kandidat/hapus/{{ $k->id_kandidat }}">Hapus</a>
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