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
else if($message == "3001-31"){
       $arrayPostData['messages'][0]['text'] = "UDN001187,(3001-31) บ้านจิก โหนด B - (3031-49) ปั้มวีรกิจ=12 Core= 5.7 km.
UDN001264,(3001-31) บ้านจิก โหนด B - (3033-40) บ้านหนองโอน=Optic 12 Core DW = 12.47 km.";"
    }
else if($message == "3001-32"){
       $arrayPostData['messages'][0]['text'] = "UDN000021,(3001-56) หมู่บ้าน ร่มเย็น 3 - (3001-33) หมู่บ้าน แสนสราญ=Optic 12 Core DW = 1.1 km.
UDN000039,(3001-33) แสนสราญ - (3001-59) หมู่บ้าน เฟิร์สโฮม=Optic 12 Core DW = 1.63 km.";"
    }
else if($message == "3001-33"){
       $arrayPostData['messages'][0]['text'] = "UDN000429,(3023-59) me บ้านจิก - (3001-34) me ศรีพินิจ=12 Core= 4.032 km.
UDN000534,(ME3001-34B) ศรีพินิจB - (3033-156) ลุมพินี3=Optic 12 Core DW = 1.2 km.
UDN001207,(3001-34) ME ศรีพินิจ - (3001-35) ME วัฒนานุวงศ์=12 Core= 3.944 km.";"
    }
else if($message == "3001-34"){
       $arrayPostData['messages'][0]['text'] = "UDN000022,(3023-52) แจ่มนุสรณ์ - (3001-35) วัฒนานุวงศ์=Optic 12 Core DW = 0.878 km.
UDN000371,(3001-35) วัฒนานุวงศ์  - () สำนักงานคณะกรรมการกิจการโทรคมนาคมแห่งชาติ (กทช.)=Optic 12 Core DW = 1.1 km.
UDN001206,(3001-32) ME จงมี - (3001-35) ME วัฒนานุวงศ์=12 Core= 2.75 km.
UDN001207,(3001-34) ME ศรีพินิจ - (3001-35) ME วัฒนานุวงศ์=12 Core= 3.944 km.";"
    }
else if($message == "3001-35"){
        $arrayPostData['messages'][0]['text'] = "UDN000024,(3023-79) หนองเหล็ก 2 - (3001-39) เคหะชุมชนอุดรธานี CAB10 R4=Optic 12 Core DW = 0.845 km.";
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
