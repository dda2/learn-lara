@extends('templates.default')

@section('content')
    <div class="row">
        <h3>Blog</h3>

        <a href="{{ route('tambah.blog') }}" class="btn btn-primary">Tambah Blog</a>

        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Author</th>
            </tr>
            @foreach($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->content }}</td>
                    <td>{{ $blog->author }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@stop