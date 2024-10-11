<?php
require_once(__DIR__ . "/app/autoload.php");
require_once(__DIR__ . "/app/router.php");

$path = $_SERVER["REQUEST_URI"];

route($path, $routes);