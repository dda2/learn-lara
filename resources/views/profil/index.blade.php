@extends('templates.default')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <form action="{{ route('profil.image.post') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="" class="control-label">Image</label>
                    <input type="file" name="image" id="" class="form-control">
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Upload</button>
                </div>
            </form>
        </div>
    </div>
@stop