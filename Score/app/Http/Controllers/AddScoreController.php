<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\ScorePiece;



class AddScoreController extends Controller
{
    public function addScore()
    {
        return view('addScore',[
            "title" => "Add a Score"
        ]);
    }

    public function storeScore(Request $request)
    {
        DB::table('score_pieces')->insert([
            'title'=>$request->sTitle,
            'composer'=>$request->sComposer,
            'arranger'=>$request->sArranger,
            'lyricist'=>$request->sLyricist,
        ]);
        return redirect('/');
    }
}
