@extends('templates.default')

@section('content')
    <div class="row">
        <h3>Tambah Blog</h3>
        <div class="col-lg-6">
            <form action="{{ route('tambah.blog.post') }}" class="form-horizontal" method="POST">
                <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="" class="control-label">Judul Blog</label>
                    <input type="text" class="form-control" name="title" value="{{ Request::old('title') }}">
                    @if($errors->has('title'))
                        <span class="help-block">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
                    <label for="" class="control-label">Content</label>
                    <textarea name="content" id="" rows="4" class="form-control">{{ Request::old('content') }}</textarea>
                    @if($errors->has('content'))
                        <span class="help-block">{{ $errors->first('content') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('author') ? ' has-error' : '' }}">
                    <label for="" class="control-label">Penulis</label>
                    <input type="text" class="form-control" name="author" value="{{ Request::old('author') }}">
                    @if($errors->has('author'))
                        <span class="help-block">{{ $errors->first('author') }}</span>
                    @endif
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Tambah</button>
                </div>
            </form>
        </div>
    </div>
@stop