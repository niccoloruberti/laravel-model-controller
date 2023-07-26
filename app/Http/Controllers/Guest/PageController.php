<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index() {

        $comics = Comic::all();

        return view('home', compact('comics'));
    }

    public function show($id) {

        $comic = Comic::find($id);

        return view('comics.show', compact('comic'));
    }
}
