@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Divisi ') }}</div>
				<br>
					<form action="/divisi/store" method="post">
                        @csrf
						<div class="form-group row">
							<label for="nama_divisi" class="col-md-3 col-form-label text-md-right">{{ __('Nama Divisi') }}</label>
							<div class="col-md-7">
								<input type="text" name="nama_divisi" required="required" class="form-control">
							</div>
						</div>
						
						<div class="form-group row">
							<label for="segmen" class="col-md-3 col-form-label text-md-right">{{ __('Segmen') }}</label>
							<div class="col-md-7">							
								<input type="text" name="segmen" required="required" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<label for="keterangan" class="col-md-3 col-form-label text-md-right">{{ __('Keterangan') }}</label>
							<div class="col-md-7">														
								<textarea name="keterangan" required="required" class="form-control"></textarea>
							</div>
						</div>
						
						<div class="form-group row">
                            <div class="col-md-7 offset-md-6">
								<a href="/divisi" class="btn btn-primary"> Kembali</a>							
								<input type="submit" value="Simpan Data" class="btn btn-primary">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection