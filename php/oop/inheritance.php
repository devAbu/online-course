<?php

class First
{
    private $id = 23;
    protected $name = "abu";

    public function saySomething()
    {
        echo 'Something...';
    }
}

class Second extends First
{
    /* Ako je propery protected moze se samo unutar child klase koristit */
    public function getName()
    {
        echo $this->name;
    }
}

$first = new First;
$second = new Second;

$second->saySomething();
echo $second->name; /* Ne radi jer je protected propery pozvan izvan bilo kakave klase */
echo $second->getName();
