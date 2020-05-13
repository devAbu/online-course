<?php

session_start();

require './config.php';

require './classes/Bootstrap.php';
require './classes/Controller.php';
require './classes/Model.php';
require './models/home.php';
require './models/share.php';
require './models/user.php';

require './controllers/home.php';
require './controllers/share.php';
require './controllers/user.php';

require './classes/Message.php';


$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();

if ($controller) {
    $controller->executeAction();
}
