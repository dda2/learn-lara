<?php

namespace Mitschool\Http\Controllers;

use Storage;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function getIndex()
    {
        return view('upload.gambar');
    }

    public function postImage(Request $request)
    {
        $file = $request->file('gambar');

        $filename = $request->file('gambar')->getClientOriginalName();

        if($request->hasFile('gambar'))
        {
            Storage::put($filename,
            file_get_contents($request->file('gambar')->getRealPath()));
            return redirect()->back()->with('info', 'sukses');
        }

        return redirect()->back()->with('info', 'Isi file');
    }
}