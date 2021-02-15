@extends('blog.layout')

@section('content')
<div class="center">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body bg-light">

                    <h2 class="py-2">Form Tambah Data :</h2>
                    <form action="/blog" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                            <small id="emailHelp" class="form-text text-muted bg-danger">
                                <p class="text-white lead">{{ ($errors->has('name')) ? $errors->first('name') : "" }}</p>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slog</label>
                            <input type="number" name="slog" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter slog">
                            <small id="emailHelp" class="form-text text-muted bg-danger">
                                <p class="text-white lead">{{ ($errors->has('slog')) ? $errors->first('slog') : "" }}</p>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Definition</label>
                            <textarea class="form-control" name="definisi" id="exampleFormControlTextarea1" rows="3"></textarea>
                            <small id="emailHelp" class="form-text text-muted bg-danger">
                                <p class="text-white lead">{{ ($errors->has('definisi')) ? $errors->first('definisi') : "" }}</p>
                            </small>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" name="submit" class="btn btn-sm btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection