<?php

require('utils/jsonFormatter.php');
require_once 'riotApi.php';

class LeagueApi extends RiotOfApi{
    public static function statusServer($params = array()) {
        if(isset($params['server']) && isset($params['game'])){
            $url = RiotOfApi::getRiotApi(array(
                'server' => $params['server'],
                'game' => $params['game']
            ));
            $apikey = RiotOfApi::getApiKey();
            $urlUnified = $url . '/status/v4/platform-data';
            $jsonResp = jsonFormatter::jsonDecode(array(
                'url' => $urlUnified,
                'apikey' => $apikey,
            ));
            return $jsonResp;
        }
    }

    public static function challengerLeague($params = array()){
        if(isset($params['server']) && isset($params['game']) && isset($params['opt'])){
            $url = RiotOfApi::getRiotApi(array(
                'server' => $params['server'],
                'game' => $params['game']
            ));
            $apikey = RiotOfApi::getApiKey();
            $urlUnified = $url . '/league/v4/challengerleagues/by-queue/';
            $jsonResp = jsonFormatter::jsonDecode(array(
                'url' => $urlUnified,
                'opt' => $params['opt'],
                'apikey' => $apikey,
            ));
            return $jsonResp;
        }
    }

    public static function leagueExp($params = array()){
        if(isset($params['server']) && isset($params['game'])){
            $url = RiotOfApi::getRiotApi(array(
                'server' => $params['server'],
                'game' => $params['game']
            ));
            $apikey = RiotOfApi::getApiKey();
            $urlUnified = $url . '/league-exp/v4/entries/';
            $jsonResp = jsonFormatter::jsonDecode(array(
                'url' => $urlUnified,
                'page' => $params['page'],
                'opt1' => $params['opt1'],
                'opt2' => $params['opt2'],
                'opt3' => $params['opt3'],
                'apikey' => $apikey
            ));
            return $jsonResp;
        }
    }
}

?>