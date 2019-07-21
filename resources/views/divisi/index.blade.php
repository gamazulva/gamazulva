@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Divisi ') }}</div>
				
				<br>
				
				<div class="form-group row">
                    <div class="col-md-9 offset-md-10">
						<a href="/divisi/tambah" class="btn btn-primary">Tambah</a>		
					</div>
				</div>
				<div class="table-responsive">          
					<table class="table">
						<tr>
							<th>ID Divisi</th>
							<th>Nama Divisi</th>
							<th>Segmen</th>
							<th>Keterangan</th>
							<th>Opsi</th>
						</tr>
						@foreach($divisi as $d)
						<tr>	
							<td>{{ $d->id_divisi }}</td>
							<td>{{ $d->nama_divisi }}</td>
							<td>{{ $d->segmen }}</td>
							<td>{{ $d->keterangan }}</td>
							<td>
								<a href="/divisi/edit/{{ $d->id_divisi }}">Edit</a>
								|
								<a href="/divisi/hapus/{{ $d->id_divisi }}">Hapus</a>
								
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