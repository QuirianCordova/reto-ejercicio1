<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();
$app->get('/retoibm/sumar/:sumando01/:sumando02', function ($sumando01,$sumando02) {
    echo "{ \"resultado\" : ".( $sumando01 + $sumando02 )." }";
});
$app->run();

?>