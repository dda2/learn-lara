<?php

namespace Mitschool\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use Mitschool\Models\Profil;

class ProfilController extends Controller
{
    public function getProfil()
    {
        return view('profil.index');
    }

    public function postAddImage(Request $request)
    {
        $file = $request->file('image');

        $filename = md5(rand(0,10000000)) .'.'. $request->file('image')->getClientOriginalExtension();

        if ($request->hasFile('image')) {
            Profil::create([
                'filename'  => $filename
            ]);

            Storage::put(
            $filename,
            file_get_contents($request->file('image')->getRealPath())
            );

            return redirect()->back()->with('info' , 'Sukses');
        }

        return redirect()->back()->with('info', 'isi filenya');
    }
}