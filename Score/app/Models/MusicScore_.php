<?php

namespace App\Models;


class MusicScore
{
    private static $placeholder = [
        [
            "title" => "Lagu Pertama",
            "composer" => "Ini Nama",
            "arranger" => "ini nama",
            "lyricist" => "ini nama orang",
        ],
        [
            "title" => "Lagu Kedua",
            "composer" => "Ini Nama",
            "arranger" => "ini nama",
            "lyricist" => "ini nama orang",
        ],
        [
            "title" => "Last Song",
            "composer" => "Ini Nama",
            "arranger" => "ini nama",
            "lyricist" => "ini nama orang",
        ]
    ];

    public static function all(){
        return self::$placeholder;
    }
}
