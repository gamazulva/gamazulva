@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit ') }}</div>
                <div class="card-body">				
							 
					@foreach($divisi as $p)
					<form action="/divisi/update" method="post">
						{{ csrf_field() }}
						<input type="hidden" name="id" value="{{ $p->id_divisi }}"> <br/>
						@csrf
							<div class="form-group row">
								<label for="nama_divisi" class="col-md-3 col-form-label text-md-right">{{ __('Nama Divisi') }}</label>
								<div class="col-md-7">
									<input type="text" name="nama_divisi" required="required" class="form-control" value="{{ $p->nama_divisi }}">
								</div>
							</div>
							
							<div class="form-group row">
								<label for="segmen" class="col-md-3 col-form-label text-md-right">{{ __('Segmen') }}</label>
								<div class="col-md-7">							
									<input type="text" name="segmen" required="required" class="form-control" value="{{ $p->segmen }}">
								</div>
							</div>
							<div class="form-group row">
								<label for="keterangan" class="col-md-3 col-form-label text-md-right">{{ __('Keterangan') }}</label>
								<div class="col-md-7">														
									<textarea name="keterangan" required="required" class="form-control">
										@foreach ($divisi as $d)
											{{$d->keterangan}}
										@endforeach
									</textarea>
								</div>
							</div>
							
							<div class="form-group row">
								<div class="col-md-7 offset-md-6">
									<a href="/divisi" class="btn btn-primary"> Kembali</a>							
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