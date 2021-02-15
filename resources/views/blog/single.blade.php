@extends('blog.layout')

@section('content')
<div class="center">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow p-3 mb-5 bg-info rounded">
                <div class="card">
                    <h5 class="card-header">{{ $blog->name }}</h5>
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Slog : {{ $blog->slog }}</h5>
                        <p class="card-text mb-2">{{ $blog->definisi }}</p>
                        <a href="{{ url('blog') }}" class="btn btn-sm btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection