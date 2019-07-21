@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Partai ') }}</div>
				
				<br>
				
				<div class="form-group row">
                    <div class="col-md-9 offset-md-9">
						<a href="/partai/tambah" class="btn btn-primary">Tambah</a>		
					</div>
				</div>
				<div class="table-responsive">          
					<table class="table">
						<tr>
							<th>No</th>
							<th>Nama Partai</th>
							<th>Keterangan</th>
							<th>Opsi</th>
						</tr>
						@foreach($partai as $k)
						<tr>	
							<td>{{ $k->id_partai }}</td>
							<td>{{ $k->nama_partai }}</td>
							<td>{{ $k->keterangan }}</td>
							<td>
								<a href="/partai/edit/{{ $k->id_partai}}">Edit</a>
								|
								<a href="/partai/hapus/{{ $k->id_partai }}">Hapus</a>
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