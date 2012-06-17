<?php

use Elmer\Application;
require 'vendor/autoload.php';

$config = json_decode(file_get_contents('config.json'));
$app = new Application($config);
$app->mount('/', require 'app/plugins.php');
$app->mount('/', require 'app/routes.php');
$app->run();
