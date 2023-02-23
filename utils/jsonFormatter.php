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
            $page = (isset($params['page']) ? '?page='.$params['page'].'&.' : '?');
            $parse = $params['url'] . $opt_text . $page . 'api_key='.$params['apikey'];
            $context = stream_context_create(array(
                'http' => array('ignore_errors' => true),
            ));
            $response = @file_get_contents($parse, false, $context);
            if ($response === false) {
                return [
                    'status' => '400',
                    'msg' => 'Se ha producido un error al intentar obtener los datos: ' . error_get_last()['message']
                ];
            }
            $status = explode(' ', $http_response_header[0])[1];
            if ($status == '404') {
                return [
                    'status' => $status,
                    'msg' => 'No se encontraron datos.'
                ];
            }
            $decode = json_decode($response, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                return [
                    'status' => '405',
                    'msg' => 'Error al decodificar los datos JSON: ' . json_last_error_msg()
                ];
            }
            return $decode;
        }
    }
?>