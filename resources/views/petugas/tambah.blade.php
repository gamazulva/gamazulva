@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Petugas ') }}</div>
				
				<br>
				
				<form action="/petugas/store" method="post">
					@csrf
					<div class="form-group row">
						<label for="no_petugas" class="col-md-3 col-form-label text-md-right">{{ __('No Petugas') }}</label>
						<div class="col-md-7">
							<input type="text" name="no_petugas" required="required" class="form-control">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="no_ktp" class="col-md-3 col-form-label text-md-right">{{ __('No KTP') }}</label>
						<div class="col-md-7">
							<input type="text" name="no_ktp" required="required" class="form-control">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="id_divisi_petugas" class="col-md-3 col-form-label text-md-right">{{ __('ID Divisi Petugas') }}</label>
						<div class="col-md-7">
							<input type="text" name="id_divisi_petugas" required="required" class="form-control">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="id_tps" class="col-md-3 col-form-label text-md-right">{{ __('ID TPS') }}</label>
						<div class="col-md-7">
							<input type="text" name="id_tps" required="required" class="form-control">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="id_login" class="col-md-3 col-form-label text-md-right">{{ __('ID Login') }}</label>
						<div class="col-md-7">
							<input type="text" name="id_login" required="required" class="form-control">
						</div>
					</div>
					
					<div class="form-group row">
                        <div class="col-md-7 offset-md-6">
							<a href="/petugas" class="btn btn-primary"> Kembali</a>							
							<input type="submit" value="Simpan Data" class="btn btn-primary">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection