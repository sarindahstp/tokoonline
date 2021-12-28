@extends('layouts.app')

 @section('content')
 <div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
<div class="card-header">{{ __('Daftar Buku') }}</div>

 <div class="card-body">
 @if (session('status'))
 <div class="alert alert-success" role="alert">
 {{ session('status') }}
 </div>
 @endif

 <table class="table table-responsive table-striped">
 <thead>
 <tr>
 <th>Kode Buku</th>
 <th>Judul</th>
 <th>Tahun Terbit</th>
 <th>Harga</th>
 <th>Keterangan</th>
 </tr>
 </thead>
 <tbody>
 @foreach($customer as $s)
 <tr>
 <td>{{ $s->kode_buku }}</td>
 <td>{{ $s->judul }}</td>
 <td>{{ $s->tahun_terbit }}</td>
 <td>{{ $s->harga}}</td>
 <td>{{ $s->keterangan }}</td>
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