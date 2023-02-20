<?php
require('vendor/autoload.php');
require('api/leagueApi.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.1 403 Forbidden');
    header('Location: 403.html');
    exit;
}


//RANKED_SOLO_5x5
/* $status = LeagueApi::challengerLeague(array(
    'server' => 'la2',
    'game' => 'lol',
    'opt' => 'RANKED_SOLO_5x5',
)); */

//STATUS SERVER
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['server_status']) && isset($_POST['server']) && isset($_POST['game'])){
        $status = LeagueApi::statusServer(array(
            'server' => $_POST['server'],
            'game' => $_POST['game'],
        ));
        echo json_encode($status);
    }
}
/* $status = LeagueApi::leagueExp(array(
    'server' => 'la2',
    'game' => 'lol',
    'page' => '1',
    'opt1' => 'RANKED_SOLO_5x5',
    'opt2' => 'BRONZE',
    'opt3' => 'I'
)); */

/* foreach ($status as $s){
    print_r($s['summonerName'] .' <br> ');
} */
