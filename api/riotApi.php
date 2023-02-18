<?php
require_once 'configApi.php';

class RiotOfApi extends ConfigApi{

    public static function getApiKey(){
        return ConfigApi::getRiotApiKey();
    }

    //https://la2.api.riotgames.com/lol/status/v4/platform-data?api_key=
    public static function getRiotApi($params = array()){
        if(isset($params['server']) && isset($params['game'])){
            $url = 'https://'.$params['server'].'.api.riotgames.com/'.$params['game'];
            return $url;
        }
    }
}

?>