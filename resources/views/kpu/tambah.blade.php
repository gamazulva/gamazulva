@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Divisi ') }}</div>
				
				<br>
				
				<form action="/kpu/store" method="post">
					@csrf
					<div class="form-group row">
						<label for="no_id_kpu" class="col-md-3 col-form-label text-md-right">{{ __('Nama KTP') }}</label>
						<div class="col-md-7">
							<input type="text" name="no_id_kpu" required="required" class="form-control">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="nama" class="col-md-3 col-form-label text-md-right">{{ __('Nama') }}</label>
						<div class="col-md-7">
							<input type="text" name="nama" required="required" class="form-control">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="id_divisi_kpu" class="col-md-3 col-form-label text-md-right">{{ __('ID Divisi') }}</label>
						<div class="col-md-7">
							<input type="text" name="id_divisi_kpu" required="required" class="form-control">
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
							<a href="/kpu" class="btn btn-primary"> Kembali</a>							
							<input type="submit" value="Simpan Data" class="btn btn-primary">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection