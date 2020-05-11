<?php

/* Final keyword se stavlja kao znak za final version -> ne moze se override */
class Foo
{
    final public function sayHello()
    {
        echo 'Hello from foo';
    }
}
