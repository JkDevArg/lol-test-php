<?php
class ConfigApi {
    public static function getRiotApiKey() {
        return $_ENV['RIOT_API_KEY'];
    }

    public static function getServers(){
        $getServers = [
            'BR1' => 'BR1',
            'EUN1' => 'EUN1',
            'EUW1' => 'EUW1',
            'JP1' => 'JP1',
            'KR' => 'KR',
            'LA1' => 'LA1',
            'LA2' => 'LA2',
            'NA1' => 'NA1',
            'OC1' => 'OC1',
            'PH2' => 'PH2',
            'RU' => 'RU',
            'SG2' => 'SG2',
            'TH2' => 'TH2',
            'TR1' => 'TR1',
            'TW2' => 'TW2',
            'VN2' => 'VN2'
        ];
        return $getServers;
    }

    public static function getTypeGame(){
        $getTypeGame = [
            'RANKED_SOLO_5X5' => 'RANKED_SOLO_5x5',
            'RANKED_FLEX_SR' => 'RANKED_FLEX_SR',
            'RANKED_FLEX_TT' => 'RANKED_FLEX_TT'
        ];
        return $getTypeGame;
    }
}

?>