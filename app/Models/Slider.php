<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    private static $slider, $uploadedImage,$imageName,$imageDirectory,$imageUrl;


    public static function uploadImage($request,$slider = null)
    {
        self::$uploadedImage = $request->file('image');
        if(self::$uploadedImage)
        {
            if ($slider)
            {
                if (file_exists($slider->image))
                {
                    unlink($slider->image);
                }
            }
            self::$imageName = self::$uploadedImage->getClientOriginalName();
            self::$imageDirectory = 'admin/assets/images/uploaded-files/';
            self::$uploadedImage->move(self::$imageDirectory,self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        }else{
            if ($slider){
                self::$imageUrl = $slider->image;
            }else{
                self::$imageUrl = null;
            }

        }

        return self::$imageUrl;
    }
    public static function createSlider($request)
    {
        self::$slider = new Slider();
        self::$slider->title = $request->title;
        self::$slider->image = self::uploadImage($request);
        self::$slider->save();
    }
}
