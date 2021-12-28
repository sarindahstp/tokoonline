@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('VIEW DATA BUKU') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-header">{{ $book->kode_buku }}</div>
                        <div class="card-body">
                            <img height="100px" src="{{ asset('storage/'.$book->photo) }}" />
                        </div>
                        <div class="card-body">
                            Kode_Buku : {{ $book->kode_buku }} <br>
                            Judul : {{ $book->judul }} <br>
                            Tahun_Terbit : {{ $book->tahun_terbit }} <br>
                            Keterangan : {{ $book->keterangan }} <br>
                            Created at : {{ $book->created_at }} <br>
                            Updated at : {{ $book->updated_at }} <br>
                        </div>
                    </div>
                        <a href="/books" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection