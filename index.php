<?php
require('vendor/autoload.php');
require('api/leagueApi.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

//RANKED_SOLO_5x5
$status = LeagueApi::challengerLeague(array(
    'server' => 'la2',
    'game' => 'lol',
    'opt' => 'RANKED_SOLO_5x5',
));

/* $status = LeagueApi::statusServer(array(
    'server' => 'la2',
    'game' => 'lol',
)); */

print_r($status);