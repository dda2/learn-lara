<?php

namespace Mitschool\Http\Controllers;

use Mitschool\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('blog.index')->with('blogs', $blogs);
    }

    public function getAdd()
    {
        return view('blog.add');
    }

    public function postAdd(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:10',
            'content' => 'required|min:20',
            'author' => 'required|min:5',
        ]);

        Blog::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'author' => $request->input('author'),
        ]);

        return redirect()
            ->route('blog')
            ->with('info', 'Blog berhasil ditambah !');
    }

    public function getEdit($id)
    {
        $blog = Blog::findOrFail($id);

        return view('blog.edit')->with('blog', $blog);
    }

    public function actEdit($id, Request $request)
    {
        $blog = Blog::findOrFail($id);

        $this->validate($request,[
            'title' => 'required|min:10',
            'content' => 'required|min:20',
            'author' => 'required|min:5',
        ]);

        $input = $request->all();

        $blog->fill($input)->save();

        return redirect()
            ->route('blog')
            ->with('info', 'Data blog berhasil di update');
    }

    public function getDelete($id)
    {
        $blog = Blog::findOrFail($id);

        return view('blog.delete')->withBlog($blog);
    }

    public function actDelete($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->destroy($id);

        return redirect()
            ->route('blog')
            ->with('info', 'Data berhasil dihapus');
    }
}