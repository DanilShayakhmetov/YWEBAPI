<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 22.10.18
 * Time: 17:41
 */

$_userAgentList = array(
    "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)",
    "Mozilla/4.0 (compatible;)",
    "Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.9.0.1) Gecko/2008070208",
    "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)",
    "Googlebot/2.1 (+http://www.google.com/bot.html)",
    "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.1)",
    "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7) Gecko/20040801 Firefox/0.9.0",
    "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2.1) Gecko/20040803 Firefox/0.9.1",
    "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7) Gecko/20040821 Firefox/0.9.5",
    "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7) Gecko/20040821 Firefox/0.9.5",
    "Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.9.2.23) Gecko/20110920 Firefox/3.6.23",
    "Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.9.168 Version/11.52",
    "Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.9.168 Version/11.51",
    "Opera/9.80 (Windows NT 5.09; U; ru) Presto/2.9.161 Version/11.50",
    "Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.9.173 Version/11.52",
    "Mozilla/4.8 [en] (Windows NT 5.0; U)",
    "Opera/9.80 (S60; SymbOS; Opera Mobi/499; U; ru) Presto/2.4.18 Version/10.00",
    "Opera/9.60 (J2ME/MIDP; Opera Mini/4.2.14912/812; U; ru) Presto/2.4.15",
    "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)",
//        "Android-x86-1.6-r2 - Mozilla/5.0 (Linux; U; Android 1.6; en-us; eeepc Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1",
//        "Samsung Galaxy S - Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-ru; GT-I9000 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17",
);

//$curl = curl_init();
//
//curl_setopt_array($curl, array(
//    CURLOPT_URL => "https://spb.cian.ru/cat.php?deal_type=sale&engine_version=2&offer_type=flat&p=1&region=2",
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_ENCODING => "",
//    CURLOPT_MAXREDIRS => 10,
//    CURLOPT_TIMEOUT => 30,
//    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//    CURLOPT_CUSTOMREQUEST => "GET",
//    CURLOPT_SSL_VERIFYPEER => 0,
//    CURLOPT_SSL_VERIFYHOST => 0,
//    CURLOPT_FOLLOWLOCATION => true,
//    CURLOPT_COOKIESESSION => true,
//    CURLOPT_USERAGENT => $_userAgentList[0],
//    CURLOPT_HTTPHEADER => array(
//        "cache-control: no-cache",
//        "postman-token: 3dd0b76b-c522-232c-0fbb-2d2056b0be36"
//    ),
//));
//
//
//
//$response = curl_exec($curl);
//$err = curl_error($curl);
//
//curl_close($curl);
//
//if ($err) {
//    echo "cURL Error #:" . $err;
//} else {
//    echo "hello";
//}
//
//
//$dom = new DOMDocument();
//$internalErrors = libxml_use_internal_errors(true);
//@$dom->loadHTML($response);
//$xpath = new DOMXpath($dom);
//
////Получаем количество страниц
//$flatCount =  $xpath->query('/html/body/div[2]/div/div[3]/div[1]');
//if ($flatCount->length == 1) {
//    $flatCount = trim($flatCount->item(0)->nodeValue);
//    $items = explode("\n",$flatCount);
//    $flatCount = preg_replace("/[^0-9]/", '', $flatCount);
//    var_dump($flatCount);
//    $pageCount = (int)($flatCount/25);
//}
//
////Количество страниц
//
////echo $pageCount.'  -- страниц';
//
//
////https://spb.cian.ru/sale/flat/193746965/
//
//
//
//
//
////div[@class='serp-list-container']
//
//
//
////)))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))
//
////)))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))
//
////)))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))
//
//
//
//$curl = curl_init();
//
//
//
//
//curl_setopt_array($curl, array(
//    CURLOPT_URL => "https://spb.cian.ru/cat.php?deal_type=sale&engine_version=2&offer_type=flat&p=3&region=2",
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_ENCODING => "",
//    CURLOPT_MAXREDIRS => 10,
//    CURLOPT_TIMEOUT => 30,
//    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//    CURLOPT_CUSTOMREQUEST => "GET",
//    CURLOPT_SSL_VERIFYPEER => 0,
//    CURLOPT_SSL_VERIFYHOST => 0,
//    CURLOPT_FOLLOWLOCATION => true,
//    CURLOPT_COOKIESESSION => true,
//    CURLOPT_USERAGENT => $_userAgentList[0],
//    CURLOPT_HTTPHEADER => array(
//        "cache-control: no-cache",
//        "postman-token: 3dd0b76b-c522-232c-0fbb-2d2056b0be36"
//    ),
//));
//
//$response = curl_exec($curl);
//$err = curl_error($curl);
//
//curl_close($curl);
//
//
//$regular_expression = "/[\"]cianId[\"]:\d+/";
//
//$apartments = preg_match_all($regular_expression, $response,$apartments_id);
//
//
//
//
//
//
//$id = $apartments_id[0];
//
//$curl = curl_init();
//
//
//
//curl_setopt_array($curl, array(
//    CURLOPT_URL => "https://spb.cian.ru/sale/flat/193746965/",
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_ENCODING => "",
//    CURLOPT_MAXREDIRS => 10,
//    CURLOPT_TIMEOUT => 30,
//    CURLOPT_USERAGENT => $_userAgentList[0],
//    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//    CURLOPT_CUSTOMREQUEST => "GET",
//    CURLOPT_HTTPHEADER => array(
//        "cache-control: no-cache",
//        "postman-token: 3dd0b76b-c522-232c-0fbb-2d2056b0be36"
//    ),
//));
//
//$response = curl_exec($curl);
//$err = curl_error($curl);
//curl_close($curl);
//
//
//if ($err) {
//    echo "cURL Error #:" . $err;
//} else {
//   echo 'hello';
//}
//
//
//$dom = new DOMDocument();
//$internalErrors = libxml_use_internal_errors(true);
//@$dom->loadHTML($response);
//$xpath = new DOMXpath($dom);
//
////Получаем количество страниц
//$flatCount =  $xpath->query('/html/body/div[3]/main/div[2]/div[1]/div[2]/div');
//if ($flatCount->length == 1) {
//    $flatCount = trim($flatCount->item(0)->nodeValue);
////    $items = explode("\n",$flatCount);
////    $flatCount = preg_replace("/[^0-9]/", '', $flatCount);
//    var_dump($flatCount);
////    $pageCount = (int)($flatCount/25);
//}
//
////Количество страниц
//
////echo $pageCount.'  -- страниц';
//




$curl = curl_init();



//curl_setopt_array($curl, array(
//    CURLOPT_URL => "https://spb.cian.ru/sale/flat/193746965/",
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_ENCODING => "",
//    CURLOPT_MAXREDIRS => 10,
//    CURLOPT_TIMEOUT => 30,
//    CURLOPT_USERAGENT => $_userAgentList[0],
//    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//    CURLOPT_CUSTOMREQUEST => "GET",
//    CURLOPT_HTTPHEADER => array(
//        "cache-control: no-cache",
//        "postman-token: 3dd0b76b-c522-232c-0fbb-2d2056b0be36"
//    ),
//));
//
//$response = curl_exec($curl);
//$err = curl_error($curl);
//curl_close($curl);
//
//
//if ($err) {
//    echo "cURL Error #:" . $err;
//} else {
//    echo 'hello';
//}
//
//
//$dom = new DOMDocument();
//$internalErrors = libxml_use_internal_errors(true);
//@$dom->loadHTML($response);
//$xpath = new DOMXpath($dom);
//
////Получаем количество страниц
//$flatCount =  $xpath->query('/html/body/div[3]/main/div[2]/div[1]/section/div/div[1]');
//if ($flatCount->length == 1) {
//    $flatCount = trim($flatCount->item(0)->nodeValue);
////    $items = explode("\n",$flatCount);
////    $flatCount = preg_replace("/[^0-9]/", '', $flatCount);
//    var_dump($flatCount);
////    $pageCount = (int)($flatCount/25);
//}
//


///html/body/div[3]/main/div[3]/div/div[1]/div[1]/div[1]/div/div[1]/div/span/span[1]



$curl = curl_init();



curl_setopt_array($curl, array(
    CURLOPT_URL => "https://spb.cian.ru/sale/flat/193746965/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_USERAGENT => $_userAgentList[0],
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
        "postman-token: 3dd0b76b-c522-232c-0fbb-2d2056b0be36"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);


if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo 'hello';
}


$dom = new DOMDocument();
$internalErrors = libxml_use_internal_errors(true);
@$dom->loadHTML($response);
$xpath = new DOMXpath($dom);

////Получаем количество страниц
//$flatCount =  $xpath->query('/html/body/div[3]/main/div[2]/div[1]/section/div/div[1]');
//if ($flatCount->length == 1) {
//    $flatCount = trim($flatCount->item(0)->nodeValue);
////    $items = explode("\n",$flatCount);
////    $flatCount = preg_replace("/[^0-9]/", '', $flatCount);
//    var_dump($flatCount);
////    $pageCount = (int)($flatCount/25);
//}
//
//
















//Получаем Адрес
$Address =  $xpath->query('//*[@id="frontend-offer-card"]/main/div[2]/div[1]/section/div/div[1]/div[2]/address');
if ($Address->length == 1) {
    $Address = trim($Address->item(0)->nodeValue);
//    $items = explode("\n",$flatCount);
//    $flatCount = preg_replace("/[^0-9]/", '', $flatCount);
    var_dump($Address);
//    $pageCount = (int)($flatCount/25);
}



//*[@id="frontend-offer-card"]/main/div[3]/div/div[1]/div[1]/div[1]/div/div[1]/div/span/span[1]

//Получаем цену
$Price =  $xpath->query('//*[@id="frontend-offer-card"]/main/div[3]/div/div[1]/div[1]/div[1]/div/div[1]/div/span/span[1]');
if ($Price->length == 1) {
    $Price = trim($Price->item(0)->nodeValue);
//    $items = explode("\n",$flatCount);
//    $flatCount = preg_replace("/[^0-9]/", '', $flatCount);
    var_dump($Price);
//    $pageCount = (int)($flatCount/25);
}




//Получаем Телефон

$Phone =  $xpath->query('/html[1]/body[1]/div[3]/main[1]/div[3]/div[1]/div[1]/div[1]/div[1]/div[1]/div[2]/div[1]/div[2]');

if ($Phone->length == 1) {
    $Phone = trim($Phone->item(0)->nodeValue);
//    $items = explode("\n",$flatCount);
//    $flatCount = preg_replace("/[^0-9]/", '', $flatCount);
    var_dump($Phone);
//    $pageCount = (int)($flatCount/25);
}


//div[@class='a10a3f92e9--container--3hvy5']



$Owner =  $xpath->query('//div[@class=\'a10a3f92e9--container--3hvy5\']');

if ($Owner->length == 1) {
    $Owner = trim($Owner->item(0)->nodeValue);
//    $items = explode("\n",$flatCount);
//    $flatCount = preg_replace("/[^0-9]/", '', $flatCount);
    var_dump($Owner);
//    $pageCount = (int)($flatCount/25);
}

//)))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))

//)))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))

//)))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))
