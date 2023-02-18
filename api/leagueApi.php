<?php

require_once 'riotApi.php';

class LeagueApi extends RiotOfApi{

    public static function statusServer($params = array()) {
        if(isset($params['server']) && isset($params['game'])){
            $url = RiotOfApi::getRiotApi(array(
                'server' => $params['server'],
                'game' => $params['game']
            ));
            $apikey = RiotOfApi::getApiKey();
            $status = $url . '/status/v4/platform-data?api_key='.$apikey;
            $response = file_get_contents($status);
            $decode = json_decode($response, true);
            return $decode;
        }
    }

    public static function challengerLeague($params = array()){
        if(isset($params['server']) && isset($params['game']) && isset($params['opt'])){
            $url = RiotOfApi::getRiotApi(array(
                'server' => $params['server'],
                'game' => $params['game']
            ));
            $apikey = RiotOfApi::getApiKey();
            $challenger = $url . '/league/v4/challengerleagues/by-queue/'.$params['opt'].'?api_key='.$apikey;
            $response = file_get_contents($challenger);
            $decode = json_decode($response, true);
            return $decode;
        }
    }
}

?>