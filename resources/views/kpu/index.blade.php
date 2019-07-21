@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('KPU ') }}</div>
				
				<br>
				
				<div class="form-group row">
                    <div class="col-md-9 offset-md-9">
						<a href="/kpu/tambah" class="btn btn-primary">Tambah</a>		
					</div>
				</div>
				<div class="table-responsive">          
					<table class="table">
						<tr>
							<th>No KTP</th>
							<th>Nama</th>
							<th>Nama Divisi</th>
							<th>Keterangan</th>
							<th>Opsi</th>
						</tr>
						@foreach($kpu as $k)
						<tr>	
							<td>{{ $k->no_id_kpu }}</td>
							<td>{{ $k->nama }}</td>
							<td>{{ $k->id_divisi_kpu }}</td>
							<td>{{ $k->id_login }}</td>
							<td>
								<a href="/kpu/edit/{{ $k->id_kpu }}">Edit</a>
								|
								<a href="/kpu/hapus/{{ $k->id_kpu }}">Hapus</a>
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