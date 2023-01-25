<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard
{
    use HasFactory;

    private static $Chat=[
        [
            "id" => "089",
            "contact" => "098878967998",
            "message" => "Content send broadcast",
            "status" => 1
        ],
        [
            "id" => "090",
            "contact" => "09887896333",
            "message" => "Content send broadcast",
            "status" => 3
        ],
        [
            "id" => "091",
            "contact" => "098878967444",
            "message" => "Content send broadcast",
            "status" => 2
        ],
        [
            "id" => "092",
            "contact" => "0988789679565",
            "message" => "Content send broadcast",
            "status" => 1
        ],
    ];

    public static function all(){
        return collect(self::$Chat);
    }

}
