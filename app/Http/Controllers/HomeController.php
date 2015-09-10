<?php

namespace Mitschool\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}