<?php
require('vendor/autoload.php');
require('api/leagueApi.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

//RANKED_SOLO_5x5
/* $status = LeagueApi::challengerLeague(array(
    'server' => 'la2',
    'game' => 'lol',
    'opt' => 'RANKED_SOLO_5x5',
)); */

/* $status = LeagueApi::statusServer(array(
    'server' => 'la2',
    'game' => 'lol',
)); */

$status = LeagueApi::leagueExp(array(
    'server' => 'la2',
    'game' => 'lol',
    'opt1' => 'RANKED_SOLO_5x5',
    'opt2' => 'BRONZE',
    'opt3' => 'I'
));

/* foreach ($status as $s){
    print_r($s['summonerName'] .' <br> ');
} */
print_r(json_encode($status));