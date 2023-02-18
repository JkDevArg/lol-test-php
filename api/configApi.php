<?php

class ConfigApi {
    public static function getRiotApiKey() {
        return $_ENV['RIOT_API_KEY'];
    }
}

?>