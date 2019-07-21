@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit ') }}</div>
			 
				@foreach($partai as $p)
				<form action="/partai/update" method="post">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{ $p->id_partai }}"> <br/>
					@csrf
					<div class="form-group row">
						<label for="nama_partai" class="col-md-3 col-form-label text-md-right">{{ __('Nama Partai') }}</label>
						<div class="col-md-7">
							<input type="text" name="nama_partai" required="required" class="form-control" value="{{ $p->nama_partai }}">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="foto" class="col-md-3 col-form-label text-md-right">{{ __('Foto') }}</label>
						<div class="col-md-7">
							<input type="text" name="foto" required="required" class="form-control" value="{{ $p->foto }}">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="keterangan" class="col-md-3 col-form-label text-md-right">{{ __('Keterangan') }}</label>
						<div class="col-md-7">
							<input type="text" name="keterangan" required="required" class="form-control" value="{{ $p->keterangan }}">
						</div>
					</div>
					
					<div class="form-group row">
                        <div class="col-md-7 offset-md-6">
							<a href="/partai" class="btn btn-primary"> Kembali</a>							
							<input type="submit" value="Simpan Data" class="btn btn-primary">
						</div>
					</div>
				</form>
				@endforeach
		</div>
	</div>
</div>
</div>
</div>
@endsection