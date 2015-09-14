@extends('templates.default')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <form action="{{ route('upload.gambar.post') }}" class="form-vertical" method="POST" enctype="multipart/form-data">
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="" class="control-label">Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="form-control" value="{{ Request::old('gambar')?: '' }}">
                    @if ($errors->has('email'))
                        <span class="help-block">{{ $errors->first('gambar') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Upload</button>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@stop