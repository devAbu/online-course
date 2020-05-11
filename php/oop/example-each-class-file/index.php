<?php

/* include './foo.php';
include './bar.php'; */

/* Laksi nacin za include - pogotovo kad imamo vise */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$foo = new Foo;
$bar = new Bar;

$foo->sayHello();
echo '<br>';
$bar->sayHello();
