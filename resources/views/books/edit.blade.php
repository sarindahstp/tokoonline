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
<form action="/books/{{$book->id}}" method="post" enctype="multipart/form-data">
 {{csrf_field()}}
 @method('PUT')
 <input type="hidden" name="id" value="{{$book->id}}"></br>
 <div class="form-group">
 <label for="kode_buku">Kode Buku</label>
 <input type="text" class="form-control" 
required="required" name="kode_buku" value="{{$book->kode_buku}}"></br>
 </div>
 <div class="form-group">
                        <label for="photo">Feature Image</label>
                        <input type="file" class="form-control" required="required" 
                        name="photo" value="{{$book->photo}}"></br>
                        <img width="150px" src="{{asset('storage/'.$book->photo)}}">
                        </div>
 <div class="form-group">
 <label for="judul">Judul</label>
 <input type="text" class="form-control" 
required="required" name="judul" value="{{$book->judul}}"></br>
 </div>
 <div class="form-group">
 <label for="tahun_terbit">Tahun Terbit</label>
 <input type="text" class="form-control" 
required="required" name="tahun_terbit" value="{{$book->tahun_terbit}}"></br>
 </div>
 <div class="form-group">
 <label for="keterangan">Keterangan</label>
 <input type="text" class="form-control" 
required="required" name="keterangan" value="{{$book->keterangan}}"></br>
 </div>
 <button type="submit" name="edit" class="btn btn-primary 
float-right">Save Changes</button>
</form>
</div>
        </div>
    </div>
</div>
</div>
@endsection