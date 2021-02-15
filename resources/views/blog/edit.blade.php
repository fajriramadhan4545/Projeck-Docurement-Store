@extends('blog.layout')

@section('content')
<div class="center">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body bg-light">

                    <h2 class="py-2">Form Edit Data :</h2>
                    <form action="/blog/{{$blog->id}}" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" value="{{$blog->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slog</label>
                            <input type="number" name="slog" value="{{$blog->slog}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter slog">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Definition</label>
                            <textarea class="form-control" name="definisi" id="exampleFormControlTextarea1" rows="3">{{$blog->definisi}}</textarea>
                        </div>
                        <input type="hidden" name="_method" value="put">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" name="submit" value="edit" class="btn btn-sm btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection