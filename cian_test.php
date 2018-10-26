<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 26.10.18
 * Time: 0:02
 */

//
//$string = 'Общая34,79 м²Жилая20,8 м²Кухня4,7 м²Этаж2 из 18Срок сдачи3 кв. 2021';
//
//
////Общая площадь
//preg_match("/Общая\d+.\d+/u", $string,$totalAreaArr);
//preg_match("/\d+.\d+/u", $totalAreaArr[0],$totalArea);
//var_dump($totalArea);
//
//
//
////Жилая площадь
//preg_match("/Жилая\d+.\d+/u", $string,$liveAreaArr);
//preg_match("/\d+.\d+/u", $liveAreaArr[0],$liveArea);
//var_dump($liveArea);
//
//
////Площадь кухни
//preg_match("/Кухня\d+.\d+/u", $string,$kitchenAreaArr);
//preg_match("/\d+.\d+/u", $kitchenAreaArr[0],$kitchenArea);
//var_dump($kitchenArea);
//
//
////Этаж
//preg_match("/Этаж\d+ из \d+/u", $string,$levelArr);
//preg_match("/\d+ из \d+/u", $levelArr[0],$level);
//var_dump($level);


$sec_str = '2-комн. квартира, 34,79 м²в ЖК «Golden City (Голден Сити)», VII квартал, 7 корпус, сдача в 3 кв. 2021Санкт-Петербург, р-н Василеостровский, Морской, ул. ЧелюскинаНа картеПриморская, 10 мин. на транспортеВ избранноеДобавлено в избранноеВойдите, для просмотра избранного с любого устройстваВойтиЗарегистрироватьсяСкачать в PDFСкачать в .docxПожаловаться';


//Этаж
preg_match("/\d+-комн/u", $sec_str,$roomsArr);
preg_match("/\d+/u", $roomsArr[0],$rooms);
var_dump($rooms);
