<?php
require('vendor/autoload.php');
require('api/leagueApi.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$status = LeagueApi::statusServer(array(
    'server' => 'la2',
    'game' => 'lol'
));

print_r($status);