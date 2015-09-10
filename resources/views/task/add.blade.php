@extends('templates/default')

@section('content')
    <h3>Tambah Tugas</h3>
    <div class="row">
        <div class="col-lg-6">
            <form action="{{ route('tambah.tugas.post') }}" class="form-vertical" method="POST">
                <div class="form-group {{ $errors->has('task_title') ? ' has-error' : '' }}">
                    <label for="" class="control-label">Tugas</label>
                    <input type="text" name="task_title" id="email" class="form-control" value="{{ Request::old('task_title')?: '' }}">
                    @if ($errors->has('task_title'))
                        <span class="help-block">{{ $errors->first('task_title') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('task_detail') ? ' has-error' : '' }}">
                    <label for="" class="control-label">Detail Tugas</label>
                    <textarea name="task_detail" id="" cols="30" rows="3" class="form-control">{{ Request::old('task_title')?: '' }}</textarea>
                    @if ($errors->has('task_detail'))
                        <span class="help-block">{{ $errors->first('task_detail') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Tambah</button>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@stop