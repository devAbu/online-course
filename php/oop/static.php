<?php

class User
{
    public $userName;
    /* Static -> ako se ne mijenja vrijednost property ili metoda */
    /* Static property -> no instantiate */
    public static $minPassLen = 5;

    public static function validatePassword($password)
    {
        /* Umjesto $this koristi se self:: */
        if (strlen($password) >= self::$minPassLen) {
            return true;
        } else {
            return false;
        }
    }
}
/* Posto je klasa static (zbog static propery il metoda) nema instantiate*/
$password = "juhuu";

if (User::validatePassword($password)) {
    echo 'dobar';
} else {
    echo 'los';
}

echo User::$minPassLen;
