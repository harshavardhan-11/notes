<?php

const BASE_PATH = __DIR__.'/../';

require BASE_PATH.'Core/functions.php';
//require base_path('Database.php');

spl_autoload_register(function ($class) {
    require base_path( "Core/{$class}.php");
});
require base_path('Core/router.php');

$config = require 'Core/config.php';

