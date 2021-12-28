@extends('layouts.app')

 @section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-8">
         <div class="card">
            <div class="card-header">{{ __('DAFTAR BUKU') }}</div>
            <form class="form" method="get" action="{{ route('search') }}">
                        <div class="form-group w-100 mb-3">
                            <label for="search" class="d-block mr-2">Search</label>
                            <input type="text" name="search" class="form-control w-75 d-inline"
                            id="search" placeholder="Search the name">
                            <button type="submit" class="btn btn-primary mb-1">Search</button>
                        </div>
                    </form>
                    <!-- kode program untuk form search -->
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
            <div class="card-body">
               @if (session('status'))
                    <div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
 @endif
 <a href="/books/create" class="btn btn-primary">Add Buku</a><br><br>
<table class="table table-responsive table-striped">
<thead>
<tr>
<th>Kode Buku</th>
<th>Judul</th>
<th>Tahun Terbit</th>
<th>Keterangan</th>
</tr>
</thead>
<tbody>
@foreach($book as $s)
<tr>
<td>{{ $s->kode_buku }}</td>
<td>{{ $s->judul }}</td>
<td>{{ $s->tahun_terbit }}</td>
<td>{{ $s->keterangan }}</td>
<td>
<form action="/books/{{$s->id}}" method="post">
<a href="/books/{{$s->id}}/edit" class="btn btn-warning">Edit</a>
@csrf
 @method('DELETE')
 <button type="submit" name="delete" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
@endsection