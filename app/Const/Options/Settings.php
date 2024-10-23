<?php
namespace App\Const\Options;


class Settings {

public static function getLanguage() : string {

    if (in_array(request()->header('localization') , LanguageOptions::$language )){
     return request()->header('localization');
    }
    return config('app.locale');
    }

}

