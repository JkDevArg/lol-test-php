<?php

require_once 'riotApi.php';

class LeagueApi extends RiotOfApi{

    public static function statusServer($params = array()) {
        if(isset($params['server']) && isset($params['game'])){
            $url = RiotOfApi::getRiotApi(array(
                'server' => $params['server'],
                'game' => $params['game']
            ));
            //https://la2.api.riotgames.com/lol
            $apikey = RiotOfApi::getApiKey();
            $status = $url . '/status/v4/platform-data?api_key='.$apikey;
            $response = file_get_contents($status);
            $decode = json_decode($response, true);
            return $decode;
        }
    }
}

?>