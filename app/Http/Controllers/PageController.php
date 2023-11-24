<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $comics = config('comics');
        return view('home', compact('comics'));
    }
    public function contacts() {
        return view('contacts');
    }
}
