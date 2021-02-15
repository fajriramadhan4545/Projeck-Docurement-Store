@extends('blog.layout')

@section('content')
<div class="center">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-body">
                    <h2 class="py-2">Category</h2>
                    <h4 class="bg-primary text-white">{{ Session::get('message') }}</h4>
                    <table class="table table-bordered table-striped text-center bg-white">
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slog</th>
                            <th>Definisi</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @forelse ($blogs as $blog)
                            <tr class="lead text-dark">
                                <td>-</td>
                                <td>{{ $blog->name }}</td>
                                <td>{{ $blog->slog }}</td>
                                <td>{{ $blog->definisi }}</td>
                                <td>

                                    <a href="/blog/{{ $blog->id  }}" class="btn btn-sm btn-info">Show</a>
                                    <a href="/blog/{{ $blog->id}}/edit" class="btn btn-sm btn-info">Update</a>
                                    <a href="" class="btn btn-sm btn-info">Cart</a>
                                    <form action="/blog/{{ $blog->id}}" method="post" class="mt-2">
                                        <input type="hidden" name="_method" value="delete">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" name="submit" value="delete" class="btn btn-sm btn-danger">
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">Not Data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ url('blog/create') }}" class="btn btn-sm btn-info">Add Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection