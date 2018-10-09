<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 09.10.18
 * Time: 3:41
 */


/////////////функции отправки текста//////  вызов внизу страницы
    function sendTextToYandex($text,$user,$host_id,$token) {
        $url = "/v3/user/".$user."/hosts/". $host_id . "/original-texts/";
        ///$text = urlencode($text);
        $data = array('content'=> $text);
        $data_json = json_encode($data);
        $additionalHeaders = array( "Accept: application/json", "Content-type: application/json",
            'Authorization: OAuth '.$token
        );


        $curlOptions = array(CURLOPT_CONNECTTIMEOUT => 30, CURLOPT_POSTFIELDS => $text);
        $response = performYandexWebmasterApiRequest($url,$token, 'POST', $curlOptions, $additionalHeaders,$data_json);
        return $response;
    }



    # Функция непосредственной подготовки на выполнения запроса добавления уникального текста
    function performYandexWebmasterApiRequest($url,$token, $requestType = 'POST', $curlOptions = array(), $additionalHeaders = array(),$text) {
        $headers = array();


        $headers = array_merge($headers, $additionalHeaders);

        $requestOptions = array(
            CURLOPT_URL => 'https://api.webmaster.yandex.net' . $url,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => $text
        );

        $response = getPage($requestOptions);
        return $response;
    }


    function getPage($curlOptions = array()) {

        try {
            $token = 'AQAAAAAHfsS2AAN6kCrUbvPbOU6Rm8stmyeCvFM';
            $headers = array( "Accept: application/json", "Content-type: application/json",
                'Authorization: OAuth '.$token);
            $ch = curl_init();
            curl_setopt_array($ch, $curlOptions);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_PROTOCOLS, CURLPROTO_HTTP | CURLPROTO_HTTPS);
            curl_setopt($ch, CURLOPT_REDIR_PROTOCOLS, CURLPROTO_HTTP | CURLPROTO_HTTPS);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_POST, 1);

            $result = curl_exec($ch);
            $info = curl_getinfo($ch);
            $res =  array('result' => $result, 'info' => $info,'opt' => $curlOptions);

            if (false === $res) {
                throw new Exception(curl_error($ch), curl_errno($ch));

            }
            return $res;
        } catch (Exception $e) {
            trigger_error(sprintf(
                'Curl failed with error #%d: %s',
                $e->getCode(), $e->getMessage()),
                E_USER_ERROR);
        }


    }






$text = 'пробный текс для добавления на оригинальные яндекс тексты
пробный текс для добавления на ...';
$text = strip_tags($text);
$text = html_entity_decode($text);
$text = str_replace('&', '&amp;', $text);
$user_id = '125748406';
$host_id = 'https:www.vipflat.ru:443';
$token = 'AQAAAAAHfsS2AAN6kCrUbvPbOU6Rm8stmyeCvFM';

$response = sendTextToYandex($text,$user_id,$host_id,$token);
var_dump($response);

//$response = sendTextToYandex($text,$user_id,$host_id,$token);
//var_dump($response);
