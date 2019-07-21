@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Kandidat ') }}</div>
				
				<br>
				
				<form action="/kandidat/store" method="post">
					@csrf
					<div class="form-group row">
						<label for="nama_ketua" class="col-md-3 col-form-label text-md-right">{{ __('Nama Ketua') }}</label>
						<div class="col-md-7">
							<input type="text" name="nama_ketua" required="required" class="form-control">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="nama_wakil" class="col-md-3 col-form-label text-md-right">{{ __('Nama Wakil') }}</label>
						<div class="col-md-7">
							<input type="text" name="nama_wakil" required="required" class="form-control">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="nomor_urut" class="col-md-3 col-form-label text-md-right">{{ __('Nomor Urut') }}</label>
						<div class="col-md-7">
							<input type="text" name="nomor_urut" required="required" class="form-control">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="id_partai" class="col-md-3 col-form-label text-md-right">{{ __('ID Partai') }}</label>
						<div class="col-md-7">
							<input type="text" name="id_partai" required="required" class="form-control">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="id_voting" class="col-md-3 col-form-label text-md-right">{{ __('ID Voting') }}</label>
						<div class="col-md-7">
							<input type="text" name="id_voting" required="required" class="form-control">
						</div>
					</div>
					
					<div class="form-group row">
                        <div class="col-md-7 offset-md-6">
							<a href="/kandidat" class="btn btn-primary"> Kembali</a>							
							<input type="submit" value="Simpan Data" class="btn btn-primary">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection