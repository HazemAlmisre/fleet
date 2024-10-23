<?php
namespace App\Const\Lang\Messages;


class ErrorMessages{

    static public $AccountAlreadyExists = "";
    static public $SomeThingWentWrong = 'some_thing_went_wrong';
    static public $invalidData = 'invalid data';


    static function getKey(string $key){
        return "ErrorMessages." . $key;
    }

}

