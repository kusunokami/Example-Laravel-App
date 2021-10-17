<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScorePiece;

class MusicController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "Home",
            "song" => ScorePiece::all()
        ]);
    }
}
