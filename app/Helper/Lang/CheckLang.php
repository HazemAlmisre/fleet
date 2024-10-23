<?php

use App\Const\Options\Settings;
use App\Const\Options\LanguageOptions;


function checkLangAndSendMessage($message){

    $language = Settings::getLanguage();

    if ($language == LanguageOptions::$language ) {
        return __($message,[] ,$language);
    }
    return __($message,[],"ar");

}
