@extends('templates.default')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3>Tugas</h3>
            <a href="{{ route('tambah.tugas') }}" class="btn btn-primary">Tambah</a>

            <table class="table table-bordered">
                  <tr>
                      <th>Id</th>
                      <th>Tugas</th>
                      <th>Detail</th>
                      <th>Action</th>
                  </tr>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->task_title }}</td>
                        <td>{{ $task->task_detail }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop