<?php

class User
{

    public static $minPassLength = 5; // ako je nesto uvijek isto

    public static function validatePass($password)
    {
        if (strlen($password) >= self::$minPassLength) {
            return true;
        } else {
            return false;
        }
    }

}

//nema potrebe da se initiate class-a
$password = "password";

if (User::validatePass($password)) {
    echo 'good <br>';
} else {
    echo 'bad <br>';
}

echo User::$minPassLength;

?>