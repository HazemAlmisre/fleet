<?php
namespace App\Const\Messages;


class SuccessLnagKey{

    static public $AccountCreated = 'account_created';

    static function getKey(string $key){
        return "SuccessMessages." . $key;
    }
}
