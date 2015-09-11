@extends('templates/default')

@section('content')
    <h3>Edit Tugas</h3>
    <div class="row">
        <div class="col-lg-6">
            <form action="{{ route('hapus.tugas.post', $task->id) }}" class="form-vertical" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="form-group {{ $errors->has('task_title') ? ' has-error' : '' }}">
                    <label for="" class="control-label">Tugas</label>
                    <input type="text" name="task_title" id="email" class="form-control" value="{{ Request::old('task_title')?: $task->task_title }}" readonly="">
                    @if ($errors->has('task_title'))
                        <span class="help-block">{{ $errors->first('task_title') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('task_detail') ? ' has-error' : '' }}">
                    <label for="" class="control-label">Detail Tugas</label>
                    <textarea name="task_detail" id="" cols="30" rows="3" class="form-control" readonly="">{{ Request::old('task_detail')?: $task->task_detail }}</textarea>
                    @if ($errors->has('task_detail'))
                        <span class="help-block">{{ $errors->first('task_detail') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
@stop