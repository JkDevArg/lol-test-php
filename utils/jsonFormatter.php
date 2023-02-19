<?php
    class jsonFormatter {

        public static function jsonDecode($params = array()){
            $opt_values = array();
            foreach ($params as $key => $value) {
                if (strpos($key, 'opt') === 0) {
                    if (!empty($value)) {
                        $opt_values[] = $value;
                    }
                }
            }
            $opt_text = implode('/', $opt_values);
            $parse = $params['url'] . $opt_text . '?page='.$params['page'].'&api_key='.$params['apikey'];
            try {
                $response = file_get_contents($parse);
                $decode = json_decode($response, true);
                return $decode;
            } catch (Exception $e) {
                return 'Se ha producido un error al intentar obtener los datos: ' . $e->getMessage();
            }
        }
    }
?>