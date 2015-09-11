@extends('templates.default')

@section('content')
    <div class="row">
        <h3>Blog</h3>
        <a href="{{ route('tambah.blog') }}" class="btn btn-primary">Tambah Blog</a>
        <hr>
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Author</th>
                <th>Actionc</th>
            </tr>
            @foreach($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->content }}</td>
                    <td>{{ $blog->author }}</td>
                    <td>
                        <a href="{{ Route('edit.blog', $blog->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ Route('hapus.blog' , $blog->id )}}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@stop