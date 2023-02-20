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

//STATUS SERVER
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['server_status']) && isset($_POST['server']) && isset($_POST['game'])){
        $status = LeagueApi::statusServer(array(
            'server' => $_POST['server'],
            'game' => $_POST['game'],
        ));
        echo json_encode($status);
    }

    if(isset($_POST['challenger_league']) && isset($_POST['server']) && isset($_POST['game'])){
        $status = LeagueApi::challengerLeague(array(
            'server' => $_POST['server'],
            'game' => $_POST['game'],
            'opt' => $_POST['opt'],
        ));
    }

    if(isset($_POST['league_exp']) && isset($_POST['server']) && isset($_POST['game'])){
        $status = LeagueApi::leagueExp(array(
            'server' => $_POST['server'],
            'game' => $_POST['game'],
            'page' => $_POST['page'],
            'opt1' => $_POST['opt1'],
            'opt2' => $_POST['opt2'],
            'opt3' => $_POST['opt3']
        ));
    }
}