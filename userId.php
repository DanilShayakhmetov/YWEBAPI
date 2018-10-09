<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 09.10.18
 * Time: 4:39
 */

//https://api.webmaster.yandex.net/v3/user/

$token = 'AQAAAAAHfsS2AAN6kCrUbvPbOU6Rm8stmyeCvFM';


$additionalHeaders = array(
    'Accept: application/xml',
    'Content-Type: application/xml',
    'Authorization: OAuth '.$token
);

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.webmaster.yandex.net/v3/user/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => $additionalHeaders
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}