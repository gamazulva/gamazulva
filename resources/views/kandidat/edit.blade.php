@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit ') }}</div>
			 
				@foreach($kandidat as $p)
				<form action="/kandidat/update" method="post">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{ $p->id_kandidat }}"> <br/>
					@csrf
					<div class="form-group row">
						<label for="nama_ketua" class="col-md-3 col-form-label text-md-right">{{ __('Nama Ketua') }}</label>
						<div class="col-md-7">
							<input type="text" name="nama_ketua" required="required" class="form-control" value="{{ $p->nama_ketua }}">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="nama_wakil" class="col-md-3 col-form-label text-md-right">{{ __('Nama Wakil') }}</label>
						<div class="col-md-7">
							<input type="text" name="nama_wakil" required="required" class="form-control" value="{{ $p->nama_wakil }}">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="nomor_urut" class="col-md-3 col-form-label text-md-right">{{ __('Nomor Urut') }}</label>
						<div class="col-md-7">
							<input type="text" name="nomor_urut" required="required" class="form-control" value="{{ $p->nomor_urut }}">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="id_partai" class="col-md-3 col-form-label text-md-right">{{ __('Nama Partai') }}</label>
						<div class="col-md-7">
							<input type="text" name="id_partai" required="required" class="form-control" value="{{ $p->id_partai }}">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="id_voting" class="col-md-3 col-form-label text-md-right">{{ __('Nama Partai') }}</label>
						<div class="col-md-7">
							<input type="text" name="id_voting" required="required" class="form-control" value="{{ $p->id_voting }}">
						</div>
					</div>					
					
					<div class="form-group row">
                        <div class="col-md-7 offset-md-6">
							<a href="/kpu" class="btn btn-primary"> Kembali</a>							
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