<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopHeader extends Model
{
    use HasFactory;
    public static $topLeftHeader;

    public static function addTopLeftHeader($request)
    {
        self::$topLeftHeader = new TopHeader();
        self::$topLeftHeader->address = $request->address;
        self::$topLeftHeader->email = $request->email;
        self::$topLeftHeader->save();

    }
}
