<?php

class First
{
    protected $ID = 23;
    protected $name = "abu";

    public function saySomething($word)
    {
        echo $word;
    }
}

class Second extends First
{
    public function getName()
    {
        echo $this->name;
    }
}

$Second = new Second;

echo $Second->getName();
$Second->saySomething("Hello World");

?>