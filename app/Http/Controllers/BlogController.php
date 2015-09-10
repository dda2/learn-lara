<?php

namespace Dda\Http\Controllers;

use Dda\Models\Blog;
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
}