@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Data Buku') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<form action="/books" method="post" enctype="multipart/form-data">
 @csrf
 <div class="form-group">
 <label for="kode_buku">Kode Buku</label>
 <input type="text" class="form-control"
required="required" name="kode_buku"></br>
 </div>
 <div class="form-group">
 <label for="photo">Photo</label>
 <input type="file" class="form-control" required="required" 
name="photo"></br>
<div>
 <div class="form-group">
 <label for="judul">Judul</label>
 <input type="text" class="form-control"
required="required" name="judul"></br>
 </div>
 <div class="form-group">
 <label for="tahun_terbit">Tahun Terbit</label>
 <input type="text" class="form-control"
required="required" name="tahun_terbit"></br>
 </div>
 <div class="form-group">
 <label for="keterangan">Keterangan</label>
 <input type="text" class="form-control"
required="required" name="keterangan"></br>
 </div>
 <button type="submit" name="add" class="btn btn-primary
float-right">Add Buku</button>
</form>
            </div>
        </div>
    </div>
</div>
@endsection