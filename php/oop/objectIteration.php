<?php

class People
{
    public $person1 = "abu";
    public $person2 = "combe";
    public $person3 = "kum";

    protected $person4 = "armany";
    private $person5 = "dizda";

    /* public function iterateObject()
    {
        foreach ($this as $key => $value) {
            print "$key => $value ";
            echo "<br>";
        }
    } */
}

$people = new People;

foreach ($people as $key => $value) {
    print "$key => $value ";
    echo "<br>";
}

/* $people->iterateObject(); */
