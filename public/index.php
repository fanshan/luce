<?php

use Dotenv\Dotenv;
use Luce\Application;

$autoloader = require '../vendor/autoload.php';

chdir(dirname(__DIR__));

(new Dotenv('.'))->load();

$app = new Application($autoloader);

$app->setEnv(getenv('APPLICATION_ENV') ?: 'production');

$app->run();
