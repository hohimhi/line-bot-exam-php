ini_set('memory_limit', '8192M'); ﻿<?php
    $accessToken = "cTnKGPoV5We1pHUXDXJpRQGySzdPehWnp1DYJQwueVzwtOXONHFaKAs185kcpWV8T1Jivxv5xKrfWcGRyf9b1ARnLBYlMa4vuqntDdt4HC6pbgJgQ9XqzP52zyXefNnWbkdb0PJ1d7U2td3+qXivxwdB04t89/1O/w1cDnyilFU=";//copy Channel access token ตอนที่ตั้งค่ามาใส่
   $content = file_get_contents('php://input');
    $arrayJson = json_decode($content, true);
header("Status: 2000");
ini_set('memory_limit', '-1');

    $arrayHeader = array();
    $arrayHeader[] = "Content-Type: application/json";
    $arrayHeader[] = "Authorization: Bearer {$accessToken}";
    $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
    $arrayPostData['messages'][0]['type'] = "text";
    $message = $arrayJson['events'][0]['message']['text'];
#ตัวอย่าง Message Type "Text"
    if($message == "สวัสดี"){
        $arrayPostData['messages'][0]['text'] = "QQ";
       }
else if($message == "3809-65"){
$arrayPostData['messages'][0]['text'] = "BUN000373,(3809-65) นาแสง2 - (3809-62) คำไชยวาน=Optic 12 Core DW = 2.7 km.
BUN000374,(3809-47) นาแสง - (3809-65) นาแสง2=Optic 12 Core DW = 1.1 km.;"
    }


else if($message == "0"){
        $arrayPostData['messages'][0]['text'] = "0;
    }

replyMsg($arrayHeader,$arrayPostData);
function replyMsg($arrayHeader,$arrayPostData){
        $strUrl = "https://api.line.me/v2/bot/message/reply";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$strUrl);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);    
        curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($arrayPostData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close ($ch);
    }
   exit;
?>
