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
"        $arrayPostData['messages'][0]['text'] = ""UDN001187,(3001-31) บ้านจิก โหนด B - (3031-49) ปั้มวีรกิจ=12 Core= 5.7 km.
UDN001264,(3001-31) บ้านจิก โหนด B - (3033-40) บ้านหนองโอน=Optic 12 Core DW = 12.47 km."";"
    }
else if($message == "3001-32"){
"        $arrayPostData['messages'][0]['text'] = ""NKI000001,(3001-32) me จงมี - (3201-63) me หนองสองห้อง=12 Core= 39.82 km.
UDN000013,(3001-32) me จงมี - (3031-38) me รังษิณา=Optic 12 Core DW = 1.03 km.
UDN000091,(ME3001-32) จงมี - (3023-43) ซอยเวียงพิงค์=Optic 12 Core DW = 1.062 km.
UDN000092,(ME3001-32B) จงมี Node B - (3023-44) ซอยพิบูลย์=Optic 12 Core DW = 0.686 km.
UDN000113,(ME3001-32) จงมี - (3023-67) บ้านห้วย=Optic 12 Core DW = 1.867 km.
UDN000114,(ME3001-32B) จงมี Node B - (3023-68) หนองประจักษ์1=Optic 12 Core DW = 1.916 km.
UDN000131,(ME3001-32B) จงมี Node B - (3023-87) โกเมนซิตี้=Optic 12 Core DW = 1.271 km.
UDN000170,(ME3001-32B) จงมี Node B - (3031-71) ไปรษณีย์=Optic 12 Core DW = 1.485 km.
UDN000175,(ME3001-32B) จงมี Node B - (3031-76) ซอยเบญจาง=Optic 12 Core DW = 0.882 km.
UDN000218,(ME3001-32B) จงมี Node B - (3032-59) จันทร์สว่างซอย3=Optic 12 Core DW = 0.729 km.
UDN000421,(3032-36) ชุมสาย อุดรคอนโดเทล - (3001-32) me จงมี=24 Core= 3.225 km.
UDN000428,(3023-59) me บ้านจิก - (3001-32) me จงมี=12 Core= 3.592 km.
UDN000430,(3023-48) me ศรีพินิจ - (3001-32) me จงมี=12 Core= 5.492 km.
UDN001206,(3001-32) ME จงมี - (3001-35) ME วัฒนานุวงศ์=12 Core= 2.75 km."";"
    }
else if($message == "3001-33"){
"        $arrayPostData['messages'][0]['text'] = ""UDN000021,(3001-56) หมู่บ้าน ร่มเย็น 3 - (3001-33) หมู่บ้าน แสนสราญ=Optic 12 Core DW = 1.1 km.
UDN000039,(3001-33) แสนสราญ - (3001-59) หมู่บ้าน เฟิร์สโฮม=Optic 12 Core DW = 1.63 km."";"
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
