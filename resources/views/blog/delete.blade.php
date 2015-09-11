@extends('templates/default')

@section('content')
    <div class="row">
        <h3>Edit Blog</h3>
        <div class="col-lg-6">
            <form action="{{ route('hapus.blog.delete', $blog->id ) }}" class="form-horizontal" method="POST">
            <input type="hidden" name="_method" value="DELETE">
                <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="" class="control-label">Judul Blog</label>
                    <input type="text" class="form-control" name="title" value="{{ Request::old('title')?: $blog->title }}" readonly="">
                    @if($errors->has('title'))
                        <span class="help-block">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
                    <label for="" class="control-label">Content</label>
                    <textarea name="content" id="" rows="4" class="form-control" readonly="">{{ Request::old('content')?: $blog->content }}</textarea>
                    @if($errors->has('content'))
                        <span class="help-block">{{ $errors->first('content') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('author') ? ' has-error' : '' }}">
                    <label for="" class="control-label">Penulis</label>
                    <input type="text" class="form-control" name="author" value="{{ Request::old('author')?: $blog->author }}" readonly="">
                    @if($errors->has('author'))
                        <span class="help-block">{{ $errors->first('author') }}</span>
                    @endif
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
@stop