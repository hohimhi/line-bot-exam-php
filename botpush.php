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
    if($message == "3001-31"){
        $arrayPostData['messages'][0]['text'] = "UDN001187,(3001-31) บ้านจิก โหนด B - (3031-49) ปั้มวีรกิจ
UDN001264,(3001-31) บ้านจิก โหนด B - (3033-40) บ้านหนองโอน";
       }
else if($message == "BUN000001"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000001";
    }
else if($message == "BUN000002"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000002";
    }
else if($message == "BUN000003"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000003";
    }
else if($message == "BUN000004"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000004";
    }
else if($message == "BUN000005"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000005";
    }
else if($message == "BUN000006"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000006";
    }
else if($message == "BUN000007"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000007";
    }
else if($message == "BUN000008"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000008";
    }
else if($message == "BUN000010"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000010";
    }
else if($message == "BUN000011"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000011";
    }
else if($message == "BUN000012"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000012";
    }
else if($message == "BUN000013"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000013";
    }
else if($message == "BUN000014"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000014";
    }
else if($message == "BUN000015"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000015";
    }
else if($message == "BUN000016"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000016";
    }
else if($message == "BUN000017"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000017";
    }
else if($message == "BUN000018"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000018";
    }
else if($message == "BUN000019"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000019";
    }
else if($message == "BUN000020"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000020";
    }
else if($message == "BUN000021"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000021";
    }
else if($message == "BUN000022"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000022";
    }
else if($message == "BUN000023"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000023";
    }
else if($message == "BUN000024"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000024";
    }
else if($message == "BUN000025"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000025";
    }
else if($message == "BUN000026"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000026";
    }
else if($message == "BUN000027"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000027";
    }
else if($message == "BUN000028"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000028";
    }
else if($message == "BUN000029"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000029";
    }
else if($message == "BUN000030"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000030";
    }
else if($message == "BUN000031"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000031";
    }
else if($message == "BUN000032"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000032";
    }
else if($message == "BUN000033"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000033";
    }
else if($message == "BUN000034"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000034";
    }
else if($message == "BUN000035"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000035";
    }
else if($message == "BUN000036"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000036";
    }
else if($message == "BUN000037"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000037";
    }
else if($message == "BUN000038"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000038";
    }
else if($message == "BUN000039"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000039";
    }
else if($message == "BUN000040"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000040";
    }
else if($message == "BUN000041"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000041";
    }
else if($message == "BUN000042"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000042";
    }
else if($message == "BUN000043"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000043";
    }
else if($message == "BUN000044"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000044";
    }
else if($message == "BUN000045"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000045";
    }
else if($message == "BUN000046"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000046";
    }
else if($message == "BUN000047"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000047";
    }
else if($message == "BUN000048"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000048";
    }
else if($message == "BUN000049"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000049";
    }
else if($message == "BUN000050"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000050";
    }
else if($message == "BUN000051"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000051";
    }
else if($message == "BUN000052"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000052";
    }
else if($message == "BUN000053"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000053";
    }
else if($message == "BUN000054"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000054";
    }
else if($message == "BUN000055"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000055";
    }
else if($message == "BUN000056"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000056";
    }
else if($message == "BUN000057"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000057";
    }
else if($message == "BUN000058"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000058";
    }
else if($message == "BUN000059"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000059";
    }
else if($message == "BUN000060"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000060";
    }
else if($message == "BUN000061"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000061";
    }
else if($message == "BUN000062"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000062";
    }
else if($message == "BUN000065"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000065";
    }
else if($message == "BUN000066"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000066";
    }
else if($message == "BUN000067"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000067";
    }
else if($message == "BUN000068"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000068";
    }
else if($message == "BUN000069"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000069";
    }
else if($message == "BUN000070"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000070";
    }
else if($message == "BUN000071"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000071";
    }
else if($message == "BUN000072"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000072";
    }
else if($message == "BUN000073"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000073";
    }
else if($message == "BUN000074"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000074";
    }
else if($message == "BUN000075"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000075";
    }
else if($message == "BUN000076"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000076";
    }
else if($message == "BUN000077"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000077";
    }
else if($message == "BUN000078"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000078";
    }
else if($message == "BUN000079"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000079";
    }
else if($message == "BUN000080"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000080";
    }
else if($message == "BUN000081"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000081";
    }
else if($message == "BUN000082"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000082";
    }
else if($message == "BUN000083"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000083";
    }
else if($message == "BUN000084"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000084";
    }
else if($message == "BUN000085"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000085";
    }
else if($message == "BUN000086"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000086";
    }
else if($message == "BUN000087"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000087";
    }
else if($message == "BUN000088"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000088";
    }
else if($message == "BUN000089"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000089";
    }
else if($message == "BUN000090"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000090";
    }
else if($message == "BUN000091"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000091";
    }
else if($message == "BUN000092"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000092";
    }
else if($message == "BUN000093"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000093";
    }
else if($message == "BUN000094"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000094";
    }
else if($message == "BUN000095"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000095";
    }
else if($message == "BUN000096"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000096";
    }
else if($message == "BUN000097"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000097";
    }
else if($message == "BUN000098"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000098";
    }
else if($message == "BUN000099"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000099";
    }
else if($message == "BUN000100"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000100";
    }
else if($message == "BUN000101"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000101";
    }
else if($message == "BUN000102"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000102";
    }
else if($message == "BUN000104"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000104";
    }
else if($message == "BUN000105"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000105";
    }
else if($message == "BUN000106"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000106";
    }
else if($message == "BUN000107"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000107";
    }
else if($message == "BUN000108"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000108";
    }
else if($message == "BUN000109"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000109";
    }
else if($message == "BUN000110"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000110";
    }
else if($message == "BUN000111"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000111";
    }
else if($message == "BUN000112"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000112";
    }
else if($message == "BUN000113"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000113";
    }
else if($message == "BUN000114"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000114";
    }
else if($message == "BUN000115"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000115";
    }
else if($message == "BUN000116"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000116";
    }
else if($message == "BUN000117"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000117";
    }
else if($message == "BUN000118"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000118";
    }
else if($message == "BUN000119"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000119";
    }
else if($message == "BUN000120"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000120";
    }
else if($message == "BUN000121"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000121";
    }
else if($message == "BUN000122"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000122";
    }
else if($message == "BUN000123"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000123";
    }
else if($message == "BUN000124"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000124";
    }
else if($message == "BUN000125"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000125";
    }
else if($message == "BUN000126"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000126";
    }
else if($message == "BUN000127"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000127";
    }
else if($message == "BUN000128"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000128";
    }
else if($message == "BUN000129"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000129";
    }
else if($message == "BUN000130"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000130";
    }
else if($message == "BUN000131"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000131";
    }
else if($message == "BUN000132"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000132";
    }
else if($message == "BUN000133"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000133";
    }
else if($message == "BUN000134"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000134";
    }
else if($message == "BUN000135"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000135";
    }
else if($message == "BUN000136"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000136";
    }
else if($message == "BUN000137"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000137";
    }
else if($message == "BUN000138"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000138";
    }
else if($message == "BUN000139"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000139";
    }
else if($message == "BUN000140"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000140";
    }
else if($message == "BUN000141"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000141";
    }
else if($message == "BUN000142"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000142";
    }
else if($message == "BUN000143"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000143";
    }
else if($message == "BUN000144"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000144";
    }
else if($message == "BUN000145"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000145";
    }
else if($message == "BUN000146"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000146";
    }
else if($message == "BUN000147"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000147";
    }
else if($message == "BUN000148"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000148";
    }
else if($message == "BUN000149"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000149";
    }
else if($message == "BUN000150"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000150";
    }
else if($message == "BUN000151"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000151";
    }
else if($message == "BUN000152"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000152";
    }
else if($message == "BUN000153"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000153";
    }
else if($message == "BUN000154"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000154";
    }
else if($message == "BUN000155"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000155";
    }
else if($message == "BUN000156"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000156";
    }
else if($message == "BUN000157"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000157";
    }
else if($message == "BUN000158"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000158";
    }
else if($message == "BUN000159"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000159";
    }
else if($message == "BUN000160"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000160";
    }
else if($message == "BUN000161"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000161";
    }
else if($message == "BUN000162"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000162";
    }
else if($message == "BUN000163"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000163";
    }
else if($message == "BUN000164"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000164";
    }
else if($message == "BUN000165"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000165";
    }
else if($message == "BUN000166"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000166";
    }
else if($message == "BUN000167"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000167";
    }
else if($message == "BUN000168"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000168";
    }
else if($message == "BUN000169"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000169";
    }
else if($message == "BUN000170"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000170";
    }
else if($message == "BUN000171"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000171";
    }
else if($message == "BUN000172"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000172";
    }
else if($message == "BUN000173"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000173";
    }
else if($message == "BUN000174"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000174";
    }
else if($message == "BUN000175"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000175";
    }
else if($message == "BUN000176"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000176";
    }
else if($message == "BUN000177"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000177";
    }
else if($message == "BUN000178"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000178";
    }
else if($message == "BUN000179"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000179";
    }
else if($message == "BUN000180"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000180";
    }
else if($message == "BUN000181"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000181";
    }
else if($message == "BUN000182"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000182";
    }
else if($message == "BUN000183"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000183";
    }
else if($message == "BUN000184"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000184";
    }
else if($message == "BUN000185"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000185";
    }
else if($message == "BUN000186"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000186";
    }
else if($message == "BUN000187"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000187";
    }
else if($message == "BUN000188"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000188";
    }
else if($message == "BUN000189"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000189";
    }
else if($message == "BUN000190"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000190";
    }
else if($message == "BUN000191"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000191";
    }
else if($message == "BUN000192"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000192";
    }
else if($message == "BUN000193"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000193";
    }
else if($message == "BUN000194"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000194";
    }
else if($message == "BUN000195"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000195";
    }
else if($message == "BUN000196"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000196";
    }
else if($message == "BUN000197"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000197";
    }
else if($message == "BUN000198"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000198";
    }
else if($message == "BUN000199"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000199";
    }
else if($message == "BUN000200"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000200";
    }
else if($message == "BUN000201"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000201";
    }
else if($message == "BUN000202"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000202";
    }
else if($message == "BUN000203"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000203";
    }
else if($message == "BUN000204"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000204";
    }
else if($message == "BUN000205"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000205";
    }
else if($message == "BUN000206"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000206";
    }
else if($message == "BUN000207"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000207";
    }
else if($message == "BUN000208"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000208";
    }
else if($message == "BUN000209"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000209";
    }
else if($message == "BUN000210"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000210";
    }
else if($message == "BUN000211"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000211";
    }
else if($message == "BUN000212"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000212";
    }
else if($message == "BUN000213"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000213";
    }
else if($message == "BUN000214"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000214";
    }
else if($message == "BUN000215"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000215";
    }
else if($message == "BUN000216"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000216";
    }
else if($message == "BUN000217"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000217";
    }
else if($message == "BUN000218"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000218";
    }
else if($message == "BUN000219"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000219";
    }
else if($message == "BUN000220"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000220";
    }
else if($message == "BUN000221"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000221";
    }
else if($message == "BUN000222"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000222";
    }
else if($message == "BUN000223"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000223";
    }
else if($message == "BUN000224"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000224";
    }
else if($message == "BUN000225"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000225";
    }
else if($message == "BUN000226"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000226";
    }
else if($message == "BUN000227"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000227";
    }
else if($message == "BUN000228"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000228";
    }
else if($message == "BUN000229"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000229";
    }
else if($message == "BUN000230"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000230";
    }
else if($message == "BUN000231"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000231";
    }
else if($message == "BUN000232"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000232";
    }
else if($message == "BUN000233"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000233";
    }
else if($message == "BUN000234"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000234";
    }
else if($message == "BUN000235"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000235";
    }
else if($message == "BUN000236"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000236";
    }
else if($message == "BUN000237"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000237";
    }
else if($message == "BUN000238"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000238";
    }
else if($message == "BUN000239"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000239";
    }
else if($message == "BUN000240"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000240";
    }
else if($message == "BUN000241"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000241";
    }
else if($message == "BUN000242"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000242";
    }
else if($message == "BUN000243"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000243";
    }
else if($message == "BUN000244"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000244";
    }
else if($message == "BUN000245"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000245";
    }
else if($message == "BUN000246"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000246";
    }
else if($message == "BUN000247"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000247";
    }
else if($message == "BUN000248"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000248";
    }
else if($message == "BUN000249"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000249";
    }
else if($message == "BUN000250"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000250";
    }
else if($message == "BUN000251"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000251";
    }
else if($message == "BUN000252"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000252";
    }
else if($message == "BUN000253"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000253";
    }
else if($message == "BUN000254"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000254";
    }
else if($message == "BUN000255"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000255";
    }
else if($message == "BUN000256"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000256";
    }
else if($message == "BUN000257"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000257";
    }
else if($message == "BUN000258"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000258";
    }
else if($message == "BUN000260"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000260";
    }
else if($message == "BUN000261"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000261";
    }
else if($message == "BUN000262"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000262";
    }
else if($message == "BUN000263"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000263";
    }
else if($message == "BUN000264"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000264";
    }
else if($message == "BUN000265"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000265";
    }
else if($message == "BUN000266"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000266";
    }
else if($message == "BUN000267"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000267";
    }
else if($message == "BUN000268"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000268";
    }
else if($message == "BUN000269"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000269";
    }
else if($message == "BUN000270"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000270";
    }
else if($message == "BUN000271"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000271";
    }
else if($message == "BUN000272"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000272";
    }
else if($message == "BUN000273"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000273";
    }
else if($message == "BUN000274"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000274";
    }
else if($message == "BUN000275"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000275";
    }
else if($message == "BUN000276"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000276";
    }
else if($message == "BUN000277"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000277";
    }
else if($message == "BUN000278"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000278";
    }
else if($message == "BUN000279"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000279";
    }
else if($message == "BUN000280"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000280";
    }
else if($message == "BUN000281"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000281";
    }
else if($message == "BUN000282"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000282";
    }
else if($message == "BUN000283"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000283";
    }
else if($message == "BUN000284"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000284";
    }
else if($message == "BUN000285"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000285";
    }
else if($message == "BUN000286"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000286";
    }
else if($message == "BUN000287"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000287";
    }
else if($message == "BUN000288"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000288";
    }
else if($message == "BUN000289"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000289";
    }
else if($message == "BUN000290"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000290";
    }
else if($message == "BUN000291"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000291";
    }
else if($message == "BUN000292"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000292";
    }
else if($message == "BUN000293"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000293";
    }
else if($message == "BUN000294"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000294";
    }
else if($message == "BUN000295"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000295";
    }
else if($message == "BUN000296"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000296";
    }
else if($message == "BUN000297"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000297";
    }
else if($message == "BUN000298"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000298";
    }
else if($message == "BUN000299"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000299";
    }
else if($message == "BUN000300"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000300";
    }
else if($message == "BUN000301"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000301";
    }
else if($message == "BUN000302"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000302";
    }
else if($message == "BUN000303"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000303";
    }
else if($message == "BUN000304"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000304";
    }
else if($message == "BUN000305"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000305";
    }
else if($message == "BUN000306"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000306";
    }
else if($message == "BUN000307"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000307";
    }
else if($message == "BUN000308"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000308";
    }
else if($message == "BUN000309"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000309";
    }
else if($message == "BUN000310"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000310";
    }
else if($message == "BUN000311"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000311";
    }
else if($message == "BUN000312"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000312";
    }
else if($message == "BUN000313"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000313";
    }
else if($message == "BUN000314"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000314";
    }
else if($message == "BUN000315"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000315";
    }
else if($message == "BUN000316"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000316";
    }
else if($message == "BUN000317"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000317";
    }
else if($message == "BUN000318"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000318";
    }
else if($message == "BUN000319"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000319";
    }
else if($message == "BUN000320"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000320";
    }
else if($message == "BUN000321"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000321";
    }
else if($message == "BUN000322"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000322";
    }
else if($message == "BUN000323"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000323";
    }
else if($message == "BUN000324"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000324";
    }
else if($message == "BUN000325"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000325";
    }
else if($message == "BUN000326"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000326";
    }
else if($message == "BUN000327"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000327";
    }
else if($message == "BUN000328"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000328";
    }
else if($message == "BUN000329"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000329";
    }
else if($message == "BUN000330"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000330";
    }
else if($message == "BUN000331"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000331";
    }
else if($message == "BUN000332"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000332";
    }
else if($message == "BUN000333"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000333";
    }
else if($message == "BUN000334"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000334";
    }
else if($message == "BUN000335"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000335";
    }
else if($message == "BUN000336"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000336";
    }
else if($message == "BUN000337"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000337";
    }
else if($message == "BUN000338"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000338";
    }
else if($message == "BUN000339"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000339";
    }
else if($message == "BUN000340"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000340";
    }
else if($message == "BUN000341"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000341";
    }
else if($message == "BUN000342"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000342";
    }
else if($message == "BUN000343"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000343";
    }
else if($message == "BUN000344"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000344";
    }
else if($message == "BUN000345"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000345";
    }
else if($message == "BUN000346"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000346";
    }
else if($message == "BUN000347"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000347";
    }
else if($message == "BUN000348"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000348";
    }
else if($message == "BUN000349"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000349";
    }
else if($message == "BUN000350"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000350";
    }
else if($message == "BUN000351"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000351";
    }
else if($message == "BUN000352"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000352";
    }
else if($message == "BUN000353"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000353";
    }
else if($message == "BUN000354"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000354";
    }
else if($message == "BUN000355"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000355";
    }
else if($message == "BUN000356"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000356";
    }
else if($message == "BUN000357"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000357";
    }
else if($message == "BUN000358"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000358";
    }
else if($message == "BUN000359"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000359";
    }
else if($message == "BUN000360"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000360";
    }
else if($message == "BUN000361"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000361";
    }
else if($message == "BUN000362"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000362";
    }
else if($message == "BUN000363"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000363";
    }
else if($message == "BUN000364"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000364";
    }
else if($message == "BUN000365"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000365";
    }
else if($message == "BUN000366"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000366";
    }
else if($message == "BUN000367"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000367";
    }
else if($message == "BUN000368"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000368";
    }
else if($message == "BUN000369"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000369";
    }
else if($message == "BUN000370"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000370";
    }
else if($message == "BUN000371"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000371";
    }
else if($message == "BUN000372"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000372";
    }
else if($message == "BUN000373"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000373";
    }
else if($message == "BUN000374"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000374";
    }
else if($message == "LEI000001"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000001";
    }
else if($message == "LEI000002"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000002";
    }
else if($message == "LEI000003"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000003";
    }
else if($message == "LEI000004"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000004";
    }
else if($message == "LEI000005"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000005";
    }
else if($message == "LEI000006"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000006";
    }
else if($message == "LEI000007"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000007";
    }
else if($message == "LEI000008"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000008";
    }
else if($message == "LEI000009"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000009";
    }
else if($message == "LEI000010"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000010";
    }
else if($message == "LEI000011"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000011";
    }
else if($message == "LEI000012"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000012";
    }
else if($message == "LEI000013"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000013";
    }
else if($message == "LEI000014"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000014";
    }
else if($message == "LEI000015"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000015";
    }
else if($message == "LEI000016"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000016";
    }
else if($message == "LEI000017"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000017";
    }
else if($message == "LEI000018"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000018";
    }
else if($message == "LEI000019"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000019";
    }
else if($message == "LEI000020"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000020";
    }
else if($message == "LEI000021"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000021";
    }
else if($message == "LEI000022"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000022";
    }
else if($message == "LEI000023"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000023";
    }
else if($message == "LEI000024"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000024";
    }
else if($message == "LEI000025"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000025";
    }
else if($message == "LEI000026"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000026";
    }
else if($message == "LEI000027"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000027";
    }
else if($message == "LEI000028"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000028";
    }
else if($message == "LEI000029"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000029";
    }
else if($message == "LEI000030"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000030";
    }
else if($message == "LEI000031"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000031";
    }
else if($message == "LEI000032"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000032";
    }
else if($message == "LEI000033"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000033";
    }
else if($message == "LEI000034"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000034";
    }
else if($message == "LEI000035"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000035";
    }
else if($message == "LEI000036"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000036";
    }
else if($message == "LEI000037"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000037";
    }
else if($message == "LEI000038"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000038";
    }
else if($message == "LEI000039"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000039";
    }
else if($message == "LEI000040"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000040";
    }
else if($message == "LEI000041"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000041";
    }
else if($message == "LEI000042"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000042";
    }
else if($message == "LEI000043"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000043";
    }
else if($message == "LEI000044"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000044";
    }
else if($message == "LEI000045"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000045";
    }
else if($message == "LEI000046"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000046";
    }
else if($message == "LEI000047"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000047";
    }
else if($message == "LEI000048"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000048";
    }
else if($message == "LEI000049"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000049";
    }
else if($message == "LEI000050"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000050";
    }
else if($message == "LEI000051"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000051";
    }
else if($message == "LEI000052"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000052";
    }
else if($message == "LEI000053"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000053";
    }
else if($message == "LEI000054"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000054";
    }
else if($message == "LEI000055"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000055";
    }
else if($message == "LEI000056"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000056";
    }
else if($message == "LEI000057"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000057";
    }
else if($message == "LEI000058"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000058";
    }
else if($message == "LEI000059"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000059";
    }
else if($message == "LEI000060"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000060";
    }
else if($message == "LEI000061"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000061";
    }
else if($message == "LEI000062"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000062";
    }
else if($message == "LEI000063"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000063";
    }
else if($message == "LEI000064"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000064";
    }
else if($message == "LEI000065"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000065";
    }
else if($message == "LEI000066"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000066";
    }
else if($message == "LEI000067"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000067";
    }
else if($message == "LEI000068"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000068";
    }
else if($message == "LEI000069"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000069";
    }
else if($message == "LEI000070"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000070";
    }
else if($message == "LEI000071"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000071";
    }
else if($message == "LEI000072"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000072";
    }
else if($message == "LEI000085"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000085";
    }
else if($message == "LEI000086"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000086";
    }
else if($message == "LEI000087"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000087";
    }
else if($message == "LEI000088"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000088";
    }
else if($message == "LEI000089"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000089";
    }
else if($message == "LEI000090"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000090";
    }
else if($message == "LEI000091"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000091";
    }
else if($message == "LEI000092"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000092";
    }
else if($message == "LEI000093"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000093";
    }
else if($message == "LEI000094"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000094";
    }
else if($message == "LEI000095"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000095";
    }
else if($message == "LEI000096"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000096";
    }
else if($message == "LEI000097"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000097";
    }
else if($message == "LEI000098"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000098";
    }
else if($message == "LEI000103"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000103";
    }
else if($message == "LEI000104"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000104";
    }
else if($message == "LEI000105"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000105";
    }
else if($message == "LEI000106"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000106";
    }
else if($message == "LEI000107"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000107";
    }
else if($message == "LEI000108"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000108";
    }
else if($message == "LEI000109"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000109";
    }
else if($message == "LEI000110"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000110";
    }
else if($message == "LEI000111"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000111";
    }
else if($message == "LEI000112"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000112";
    }
else if($message == "LEI000113"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000113";
    }
else if($message == "LEI000114"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000114";
    }
else if($message == "LEI000115"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000115";
    }
else if($message == "LEI000116"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000116";
    }
else if($message == "LEI000117"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000117";
    }
else if($message == "LEI000118"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000118";
    }
else if($message == "LEI000119"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000119";
    }
else if($message == "LEI000120"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000120";
    }
else if($message == "LEI000121"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000121";
    }
else if($message == "LEI000122"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000122";
    }
else if($message == "LEI000123"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000123";
    }
else if($message == "LEI000124"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000124";
    }
else if($message == "LEI000125"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000125";
    }
else if($message == "LEI000126"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000126";
    }
else if($message == "LEI000127"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000127";
    }
else if($message == "LEI000128"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000128";
    }
else if($message == "LEI000129"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000129";
    }
else if($message == "LEI000130"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000130";
    }
else if($message == "LEI000131"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000131";
    }
else if($message == "LEI000132"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000132";
    }
else if($message == "LEI000133"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000133";
    }
else if($message == "LEI000134"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000134";
    }
else if($message == "LEI000135"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000135";
    }
else if($message == "LEI000136"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000136";
    }
else if($message == "LEI000137"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000137";
    }
else if($message == "LEI000138"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000138";
    }
else if($message == "LEI000139"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000139";
    }
else if($message == "LEI000140"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000140";
    }
else if($message == "LEI000141"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000141";
    }
else if($message == "LEI000142"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000142";
    }
else if($message == "LEI000143"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000143";
    }
else if($message == "LEI000144"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000144";
    }
else if($message == "LEI000145"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000145";
    }
else if($message == "LEI000146"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000146";
    }
else if($message == "LEI000147"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000147";
    }
else if($message == "LEI000148"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000148";
    }
else if($message == "LEI000149"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000149";
    }
else if($message == "LEI000150"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000150";
    }
else if($message == "LEI000151"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000151";
    }
else if($message == "LEI000152"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000152";
    }
else if($message == "LEI000153"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000153";
    }
else if($message == "LEI000154"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000154";
    }
else if($message == "LEI000155"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000155";
    }
else if($message == "LEI000156"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000156";
    }
else if($message == "LEI000157"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000157";
    }
else if($message == "LEI000158"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000158";
    }
else if($message == "LEI000159"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000159";
    }
else if($message == "LEI000162"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000162";
    }
else if($message == "LEI000163"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000163";
    }
else if($message == "LEI000164"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000164";
    }
else if($message == "LEI000165"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000165";
    }
else if($message == "LEI000166"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000166";
    }
else if($message == "LEI000167"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000167";
    }
else if($message == "LEI000168"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000168";
    }
else if($message == "LEI000169"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000169";
    }
else if($message == "LEI000170"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000170";
    }
else if($message == "LEI000171"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000171";
    }
else if($message == "LEI000172"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000172";
    }
else if($message == "LEI000173"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000173";
    }
else if($message == "LEI000174"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000174";
    }
else if($message == "LEI000175"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000175";
    }
else if($message == "LEI000176"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000176";
    }
else if($message == "LEI000177"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000177";
    }
else if($message == "LEI000178"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000178";
    }
else if($message == "LEI000179"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000179";
    }
else if($message == "LEI000180"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000180";
    }
else if($message == "LEI000181"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000181";
    }
else if($message == "LEI000182"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000182";
    }
else if($message == "LEI000183"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000183";
    }
else if($message == "LEI000184"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000184";
    }
else if($message == "LEI000185"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000185";
    }
else if($message == "LEI000186"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000186";
    }
else if($message == "LEI000187"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000187";
    }
else if($message == "LEI000188"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000188";
    }
else if($message == "LEI000189"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000189";
    }
else if($message == "LEI000190"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000190";
    }
else if($message == "LEI000191"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000191";
    }
else if($message == "LEI000192"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000192";
    }
else if($message == "LEI000193"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000193";
    }
else if($message == "LEI000194"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000194";
    }
else if($message == "LEI000195"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000195";
    }
else if($message == "LEI000196"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000196";
    }
else if($message == "LEI000197"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000197";
    }
else if($message == "LEI000198"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000198";
    }
else if($message == "LEI000199"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000199";
    }
else if($message == "LEI000200"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000200";
    }
else if($message == "LEI000201"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000201";
    }
else if($message == "LEI000202"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000202";
    }
else if($message == "LEI000203"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000203";
    }
else if($message == "LEI000204"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000204";
    }
else if($message == "LEI000205"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000205";
    }
else if($message == "LEI000206"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000206";
    }
else if($message == "LEI000207"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000207";
    }
else if($message == "LEI000208"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000208";
    }
else if($message == "LEI000209"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000209";
    }
else if($message == "LEI000210"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000210";
    }
else if($message == "LEI000211"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000211";
    }
else if($message == "LEI000212"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000212";
    }
else if($message == "LEI000213"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000213";
    }
else if($message == "LEI000214"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000214";
    }
else if($message == "LEI000215"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000215";
    }
else if($message == "LEI000216"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000216";
    }
else if($message == "LEI000217"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000217";
    }
else if($message == "LEI000218"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000218";
    }
else if($message == "LEI000219"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000219";
    }
else if($message == "LEI000220"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000220";
    }
else if($message == "LEI000221"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000221";
    }
else if($message == "LEI000222"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000222";
    }
else if($message == "LEI000223"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000223";
    }
else if($message == "LEI000224"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000224";
    }
else if($message == "LEI000225"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000225";
    }
else if($message == "LEI000226"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000226";
    }
else if($message == "LEI000227"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000227";
    }
else if($message == "LEI000228"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000228";
    }
else if($message == "LEI000229"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000229";
    }
else if($message == "LEI000230"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000230";
    }
else if($message == "LEI000231"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000231";
    }
else if($message == "LEI000232"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000232";
    }
else if($message == "LEI000233"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000233";
    }
else if($message == "LEI000234"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000234";
    }
else if($message == "LEI000235"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000235";
    }
else if($message == "LEI000236"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000236";
    }
else if($message == "LEI000237"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000237";
    }
else if($message == "LEI000238"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000238";
    }
else if($message == "LEI000239"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000239";
    }
else if($message == "LEI000240"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000240";
    }
else if($message == "LEI000242"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000242";
    }
else if($message == "LEI000243"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000243";
    }
else if($message == "LEI000244"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000244";
    }
else if($message == "LEI000245"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000245";
    }
else if($message == "LEI000246"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000246";
    }
else if($message == "LEI000247"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000247";
    }
else if($message == "LEI000248"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000248";
    }
else if($message == "LEI000249"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000249";
    }
else if($message == "LEI000250"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000250";
    }
else if($message == "LEI000251"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000251";
    }
else if($message == "LEI000252"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000252";
    }
else if($message == "LEI000253"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000253";
    }
else if($message == "LEI000254"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000254";
    }
else if($message == "LEI000255"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000255";
    }
else if($message == "LEI000256"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000256";
    }
else if($message == "LEI000257"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000257";
    }
else if($message == "LEI000258"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000258";
    }
else if($message == "LEI000259"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000259";
    }
else if($message == "LEI000260"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000260";
    }
else if($message == "LEI000261"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000261";
    }
else if($message == "LEI000262"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000262";
    }
else if($message == "LEI000263"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000263";
    }
else if($message == "LEI000264"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000264";
    }
else if($message == "LEI000265"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000265";
    }
else if($message == "LEI000266"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000266";
    }
else if($message == "LEI000267"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000267";
    }
else if($message == "LEI000268"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000268";
    }
else if($message == "LEI000269"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000269";
    }
else if($message == "LEI000270"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000270";
    }
else if($message == "LEI000271"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000271";
    }
else if($message == "LEI000272"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000272";
    }
else if($message == "LEI000273"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000273";
    }
else if($message == "LEI000274"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000274";
    }
else if($message == "LEI000275"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000275";
    }
else if($message == "LEI000276"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000276";
    }
else if($message == "LEI000277"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000277";
    }
else if($message == "LEI000278"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000278";
    }
else if($message == "LEI000280"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000280";
    }
else if($message == "LEI000281"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000281";
    }
else if($message == "LEI000282"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000282";
    }
else if($message == "LEI000283"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000283";
    }
else if($message == "LEI000291"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000291";
    }
else if($message == "LEI000292"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000292";
    }
else if($message == "LEI000293"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000293";
    }
else if($message == "LEI000294"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000294";
    }
else if($message == "LEI000295"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000295";
    }
else if($message == "LEI000296"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000296";
    }
else if($message == "LEI000297"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000297";
    }
else if($message == "LEI000298"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000298";
    }
else if($message == "LEI000300"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000300";
    }
else if($message == "LEI000302"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000302";
    }
else if($message == "LEI000303"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000303";
    }
else if($message == "LEI000304"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000304";
    }
else if($message == "LEI000305"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000305";
    }
else if($message == "LEI000306"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000306";
    }
else if($message == "LEI000307"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000307";
    }
else if($message == "LEI000308"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000308";
    }
else if($message == "LEI000309"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000309";
    }
else if($message == "LEI000310"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000310";
    }
else if($message == "LEI000311"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000311";
    }
else if($message == "LEI000312"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000312";
    }
else if($message == "LEI000313"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000313";
    }
else if($message == "LEI000314"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000314";
    }
else if($message == "LEI000315"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000315";
    }
else if($message == "LEI000316"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000316";
    }
else if($message == "LEI000317"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000317";
    }
else if($message == "LEI000318"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000318";
    }
else if($message == "LEI000319"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000319";
    }
else if($message == "LEI000320"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000320";
    }
else if($message == "LEI000321"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000321";
    }
else if($message == "LEI000322"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000322";
    }
else if($message == "LEI000323"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000323";
    }
else if($message == "LEI000324"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000324";
    }
else if($message == "LEI000325"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000325";
    }
else if($message == "LEI000326"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000326";
    }
else if($message == "LEI000327"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000327";
    }
else if($message == "LEI000328"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000328";
    }
else if($message == "LEI000329"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000329";
    }
else if($message == "LEI000330"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000330";
    }
else if($message == "LEI000331"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000331";
    }
else if($message == "LEI000332"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000332";
    }
else if($message == "LEI000333"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000333";
    }
else if($message == "LEI000334"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000334";
    }
else if($message == "LEI000335"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000335";
    }
else if($message == "LEI000336"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000336";
    }
else if($message == "LEI000337"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000337";
    }
else if($message == "LEI000338"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000338";
    }
else if($message == "LEI000339"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000339";
    }
else if($message == "LEI000340"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000340";
    }
else if($message == "LEI000341"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000341";
    }
else if($message == "LEI000342"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000342";
    }
else if($message == "LEI000343"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000343";
    }
else if($message == "LEI000344"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000344";
    }
else if($message == "LEI000345"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000345";
    }
else if($message == "LEI000346"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000346";
    }
else if($message == "LEI000347"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000347";
    }
else if($message == "LEI000348"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000348";
    }
else if($message == "LEI000349"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000349";
    }
else if($message == "LEI000350"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000350";
    }
else if($message == "LEI000351"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000351";
    }
else if($message == "LEI000352"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000352";
    }
else if($message == "LEI000353"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000353";
    }
else if($message == "LEI000354"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000354";
    }
else if($message == "LEI000355"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000355";
    }
else if($message == "LEI000356"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000356";
    }
else if($message == "LEI000357"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000357";
    }
else if($message == "LEI000359"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000359";
    }
else if($message == "LEI000360"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000360";
    }
else if($message == "LEI000361"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000361";
    }
else if($message == "LEI000362"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000362";
    }
else if($message == "LEI000363"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000363";
    }
else if($message == "LEI000364"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000364";
    }
else if($message == "LEI000365"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000365";
    }
else if($message == "LEI000366"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000366";
    }
else if($message == "LEI000367"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000367";
    }
else if($message == "LEI000368"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000368";
    }
else if($message == "LEI000369"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000369";
    }
else if($message == "LEI000370"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000370";
    }
else if($message == "LEI000371"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000371";
    }
else if($message == "LEI000372"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000372";
    }
else if($message == "LEI000373"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000373";
    }
else if($message == "LEI000374"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000374";
    }
else if($message == "LEI000375"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000375";
    }
else if($message == "LEI000376"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000376";
    }
else if($message == "LEI000377"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000377";
    }
else if($message == "LEI000378"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000378";
    }
else if($message == "LEI000379"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000379";
    }
else if($message == "LEI000380"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000380";
    }
else if($message == "LEI000381"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000381";
    }
else if($message == "LEI000382"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000382";
    }
else if($message == "LEI000383"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000383";
    }
else if($message == "LEI000384"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000384";
    }
else if($message == "LEI000385"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000385";
    }
else if($message == "LEI000386"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000386";
    }
else if($message == "LEI000387"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000387";
    }
else if($message == "LEI000388"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000388";
    }
else if($message == "LEI000389"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000389";
    }
else if($message == "LEI000390"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000390";
    }
else if($message == "LEI000391"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000391";
    }
else if($message == "LEI000392"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000392";
    }
else if($message == "LEI000393"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000393";
    }
else if($message == "LEI000394"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000394";
    }
else if($message == "LEI000395"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000395";
    }
else if($message == "LEI000396"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000396";
    }
else if($message == "LEI000397"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000397";
    }
else if($message == "LEI000398"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000398";
    }
else if($message == "LEI000399"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000399";
    }
else if($message == "LEI000400"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000400";
    }
else if($message == "LEI000403"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000403";
    }
else if($message == "LEI000404"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000404";
    }
else if($message == "LEI000407"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000407";
    }
else if($message == "LEI000409"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000409";
    }
else if($message == "LEI000410"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000410";
    }
else if($message == "LEI000411"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000411";
    }
else if($message == "LEI000412"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000412";
    }
else if($message == "LEI000413"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000413";
    }
else if($message == "LEI000414"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000414";
    }
else if($message == "LEI000415"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000415";
    }
else if($message == "LEI000416"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000416";
    }
else if($message == "LEI000417"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000417";
    }
else if($message == "LEI000418"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000418";
    }
else if($message == "LEI000419"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000419";
    }
else if($message == "LEI000420"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000420";
    }
else if($message == "LEI000421"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000421";
    }
else if($message == "LEI000422"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000422";
    }
else if($message == "LEI000423"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000423";
    }
else if($message == "LEI000424"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000424";
    }
else if($message == "LEI000425"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000425";
    }
else if($message == "LEI000426"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000426";
    }
else if($message == "LEI000427"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000427";
    }
else if($message == "LEI000428"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000428";
    }
else if($message == "LEI000429"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000429";
    }
else if($message == "LEI000430"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000430";
    }
else if($message == "LEI000431"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000431";
    }
else if($message == "LEI000432"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000432";
    }
else if($message == "LEI000433"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000433";
    }
else if($message == "LEI000434"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000434";
    }
else if($message == "LEI000435"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000435";
    }
else if($message == "LEI000436"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000436";
    }
else if($message == "LEI000437"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000437";
    }
else if($message == "LEI000438"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000438";
    }
else if($message == "LEI000439"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000439";
    }
else if($message == "LEI000440"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000440";
    }
else if($message == "LEI000441"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000441";
    }
else if($message == "LEI000442"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000442";
    }
else if($message == "LEI000443"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000443";
    }
else if($message == "LEI000444"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000444";
    }
else if($message == "LEI000445"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000445";
    }
else if($message == "LEI000446"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000446";
    }
else if($message == "LEI000447"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000447";
    }
else if($message == "LEI000448"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000448";
    }
else if($message == "LEI000449"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000449";
    }
else if($message == "LEI000450"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000450";
    }
else if($message == "LEI000451"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000451";
    }
else if($message == "LEI000452"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000452";
    }
else if($message == "LEI000453"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000453";
    }
else if($message == "LEI000454"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000454";
    }
else if($message == "LEI000455"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000455";
    }
else if($message == "LEI000456"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000456";
    }
else if($message == "LEI000457"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000457";
    }
else if($message == "LEI000458"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000458";
    }
else if($message == "LEI000459"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000459";
    }
else if($message == "LEI000460"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000460";
    }
else if($message == "LEI000461"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000461";
    }
else if($message == "LEI000462"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000462";
    }
else if($message == "LEI000463"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000463";
    }
else if($message == "LEI000464"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000464";
    }
else if($message == "LEI000465"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000465";
    }
else if($message == "LEI000466"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000466";
    }
else if($message == "LEI000467"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000467";
    }
else if($message == "LEI000468"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000468";
    }
else if($message == "LEI000469"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000469";
    }
else if($message == "LEI000470"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000470";
    }
else if($message == "LEI000471"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000471";
    }
else if($message == "LEI000472"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000472";
    }
else if($message == "LEI000473"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000473";
    }
else if($message == "LEI000474"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000474";
    }
else if($message == "LEI000475"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000475";
    }
else if($message == "LEI000476"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000476";
    }
else if($message == "LEI000477"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000477";
    }
else if($message == "LEI000478"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000478";
    }
else if($message == "LEI000479"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000479";
    }
else if($message == "LEI000480"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000480";
    }
else if($message == "LEI000481"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000481";
    }
else if($message == "LEI000482"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000482";
    }
else if($message == "LEI000483"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000483";
    }
else if($message == "LEI000484"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000484";
    }
else if($message == "LEI000485"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000485";
    }
else if($message == "LEI000486"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000486";
    }
else if($message == "LEI000487"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000487";
    }
else if($message == "LEI000488"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000488";
    }
else if($message == "LEI000489"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000489";
    }
else if($message == "LEI000490"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000490";
    }
else if($message == "LEI000491"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000491";
    }
else if($message == "LEI000492"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000492";
    }
else if($message == "LEI000493"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000493";
    }
else if($message == "LEI000494"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000494";
    }
else if($message == "LEI000495"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000495";
    }
else if($message == "LEI000496"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000496";
    }
else if($message == "LEI000497"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000497";
    }
else if($message == "LEI000498"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000498";
    }
else if($message == "LEI000499"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000499";
    }
else if($message == "LEI000500"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000500";
    }
else if($message == "LEI000501"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000501";
    }
else if($message == "LEI000502"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000502";
    }
else if($message == "LEI000503"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000503";
    }
else if($message == "LEI000504"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000504";
    }
else if($message == "LEI000505"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000505";
    }
else if($message == "LEI000506"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000506";
    }
else if($message == "LEI000507"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000507";
    }
else if($message == "LEI000508"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000508";
    }
else if($message == "LEI000509"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000509";
    }
else if($message == "LEI000510"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000510";
    }
else if($message == "LEI000511"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000511";
    }
else if($message == "LEI000512"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000512";
    }
else if($message == "LEI000513"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000513";
    }
else if($message == "LEI000514"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000514";
    }
else if($message == "LEI000515"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000515";
    }
else if($message == "LEI000516"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000516";
    }
else if($message == "LEI000517"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000517";
    }
else if($message == "LEI000518"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000518";
    }
else if($message == "LEI000519"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000519";
    }
else if($message == "LEI000520"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000520";
    }
else if($message == "LEI000521"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000521";
    }
else if($message == "LEI000522"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000522";
    }
else if($message == "LEI000523"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000523";
    }
else if($message == "LEI000524"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000524";
    }
else if($message == "LEI000525"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000525";
    }
else if($message == "LEI000526"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000526";
    }
else if($message == "LEI000527"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000527";
    }
else if($message == "LEI000528"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000528";
    }
else if($message == "LEI000529"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000529";
    }
else if($message == "LEI000530"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000530";
    }
else if($message == "LEI000531"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000531";
    }
else if($message == "LEI000532"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000532";
    }
else if($message == "LEI000533"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000533";
    }
else if($message == "LEI000534"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000534";
    }
else if($message == "LEI000535"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000535";
    }
else if($message == "LEI000536"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000536";
    }
else if($message == "LEI000537"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000537";
    }
else if($message == "LEI000538"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000538";
    }
else if($message == "LEI000539"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000539";
    }
else if($message == "LEI000540"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000540";
    }
else if($message == "LEI000541"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000541";
    }
else if($message == "LEI000542"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000542";
    }
else if($message == "LEI000543"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000543";
    }
else if($message == "LEI000544"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000544";
    }
else if($message == "LEI000545"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000545";
    }
else if($message == "LEI000546"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000546";
    }
else if($message == "LEI000547"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000547";
    }
else if($message == "LEI000548"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000548";
    }
else if($message == "LEI000549"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000549";
    }
else if($message == "LEI000550"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000550";
    }
else if($message == "LEI000551"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000551";
    }
else if($message == "LEI000552"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000552";
    }
else if($message == "LEI000553"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000553";
    }
else if($message == "LEI000554"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000554";
    }
else if($message == "LEI000555"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000555";
    }
else if($message == "LEI000556"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000556";
    }
else if($message == "LEI000557"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000557";
    }
else if($message == "LEI000558"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000558";
    }
else if($message == "LEI000559"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000559";
    }
else if($message == "LEI000560"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000560";
    }
else if($message == "LEI000561"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000561";
    }
else if($message == "LEI000562"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000562";
    }
else if($message == "LEI000563"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000563";
    }
else if($message == "LEI000564"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000564";
    }
else if($message == "LEI000565"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000565";
    }
else if($message == "LEI000566"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000566";
    }
else if($message == "LEI000567"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000567";
    }
else if($message == "LEI000568"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000568";
    }
else if($message == "LEI000569"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000569";
    }
else if($message == "LEI000570"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000570";
    }
else if($message == "LEI000571"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000571";
    }
else if($message == "LEI000572"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000572";
    }
else if($message == "LEI000573"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000573";
    }
else if($message == "LEI000574"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000574";
    }
else if($message == "LEI000575"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000575";
    }
else if($message == "LEI000576"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000576";
    }
else if($message == "LEI000577"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000577";
    }
else if($message == "LEI000578"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000578";
    }
else if($message == "LEI000579"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000579";
    }
else if($message == "LEI000580"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000580";
    }
else if($message == "LEI000581"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000581";
    }
else if($message == "LEI000582"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000582";
    }
else if($message == "LEI000583"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000583";
    }
else if($message == "LEI000586"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000586";
    }
else if($message == "LEI000587"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000587";
    }
else if($message == "LEI000588"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000588";
    }
else if($message == "LEI000589"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000589";
    }
else if($message == "LEI000590"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000590";
    }
else if($message == "LEI000591"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000591";
    }
else if($message == "LEI000592"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000592";
    }
else if($message == "LEI000593"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000593";
    }
else if($message == "LEI000594"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000594";
    }
else if($message == "LEI000595"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000595";
    }
else if($message == "LEI000596"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000596";
    }
else if($message == "LEI000597"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000597";
    }
else if($message == "LEI000598"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000598";
    }
else if($message == "LEI000599"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000599";
    }
else if($message == "LEI000600"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000600";
    }
else if($message == "LEI000601"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000601";
    }
else if($message == "LEI000602"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000602";
    }
else if($message == "LEI000603"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000603";
    }
else if($message == "LEI000604"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000604";
    }
else if($message == "LEI000606"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000606";
    }
else if($message == "LEI000607"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000607";
    }
else if($message == "LEI000608"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000608";
    }
else if($message == "LEI000609"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000609";
    }
else if($message == "LEI000610"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000610";
    }
else if($message == "LEI000611"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000611";
    }
else if($message == "LEI000612"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000612";
    }
else if($message == "LEI000613"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000613";
    }
else if($message == "LEI000614"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000614";
    }
else if($message == "LEI000615"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000615";
    }
else if($message == "LEI000616"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000616";
    }
else if($message == "LEI000617"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000617";
    }
else if($message == "LEI000618"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000618";
    }
else if($message == "LEI000619"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000619";
    }
else if($message == "LEI000620"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000620";
    }
else if($message == "LEI000621"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000621";
    }
else if($message == "LEI000622"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000622";
    }
else if($message == "LEI000623"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000623";
    }
else if($message == "LEI000624"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000624";
    }
else if($message == "LEI000625"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000625";
    }
else if($message == "LEI000626"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000626";
    }
else if($message == "LEI000627"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000627";
    }
else if($message == "LEI000628"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000628";
    }
else if($message == "LEI000629"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000629";
    }
else if($message == "LEI000630"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000630";
    }
else if($message == "LEI000631"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000631";
    }
else if($message == "LEI000632"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000632";
    }
else if($message == "LEI000633"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000633";
    }
else if($message == "LEI000634"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000634";
    }
else if($message == "LEI000635"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000635";
    }
else if($message == "LEI000636"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000636";
    }
else if($message == "LEI000637"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000637";
    }
else if($message == "LEI000638"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000638";
    }
else if($message == "LEI000639"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000639";
    }
else if($message == "LEI000640"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000640";
    }
else if($message == "LEI000641"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000641";
    }
else if($message == "LEI000642"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000642";
    }
else if($message == "LEI000643"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000643";
    }
else if($message == "LEI000644"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000644";
    }
else if($message == "LEI000645"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000645";
    }
else if($message == "LEI000646"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000646";
    }
else if($message == "LEI000647"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000647";
    }
else if($message == "LEI000648"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000648";
    }
else if($message == "LEI000649"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000649";
    }
else if($message == "LEI000650"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000650";
    }
else if($message == "LEI000651"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000651";
    }
else if($message == "LEI000652"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000652";
    }
else if($message == "LEI000653"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000653";
    }
else if($message == "LEI000654"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000654";
    }
else if($message == "LEI000655"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000655";
    }
else if($message == "LEI000656"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000656";
    }
else if($message == "LEI000657"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000657";
    }
else if($message == "LEI000658"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000658";
    }
else if($message == "LEI000659"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000659";
    }
else if($message == "LEI000660"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000660";
    }
else if($message == "LEI000661"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000661";
    }
else if($message == "LEI000662"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000662";
    }
else if($message == "LEI000663"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000663";
    }
else if($message == "LEI000664"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000664";
    }
else if($message == "LEI000665"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000665";
    }
else if($message == "LEI000666"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000666";
    }
else if($message == "LEI000667"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000667";
    }
else if($message == "LEI000668"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000668";
    }
else if($message == "LEI000669"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000669";
    }
else if($message == "LEI000670"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000670";
    }
else if($message == "LEI000671"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000671";
    }
else if($message == "LEI000672"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000672";
    }
else if($message == "LEI000673"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000673";
    }
else if($message == "LEI000674"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000674";
    }
else if($message == "LEI000675"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=LEI000675";
    }
else if($message == "NKI000001"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000001";
    }
else if($message == "NKI000002"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000002";
    }
else if($message == "NKI000003"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000003";
    }
else if($message == "NKI000004"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000004";
    }
else if($message == "NKI000005"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000005";
    }
else if($message == "NKI000006"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000006";
    }
else if($message == "NKI000007"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000007";
    }
else if($message == "NKI000008"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000008";
    }
else if($message == "NKI000009"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000009";
    }
else if($message == "NKI000010"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000010";
    }
else if($message == "NKI000011"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000011";
    }
else if($message == "NKI000012"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000012";
    }
else if($message == "NKI000013"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000013";
    }
else if($message == "NKI000014"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000014";
    }
else if($message == "NKI000015"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000015";
    }
else if($message == "NKI000016"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000016";
    }
else if($message == "NKI000017"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000017";
    }
else if($message == "NKI000018"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000018";
    }
else if($message == "NKI000019"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000019";
    }
else if($message == "NKI000020"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000020";
    }
else if($message == "NKI000021"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000021";
    }
else if($message == "NKI000022"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000022";
    }
else if($message == "NKI000023"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000023";
    }
else if($message == "NKI000024"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000024";
    }
else if($message == "NKI000025"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000025";
    }
else if($message == "NKI000026"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000026";
    }
else if($message == "NKI000027"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000027";
    }
else if($message == "NKI000028"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000028";
    }
else if($message == "NKI000029"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000029";
    }
else if($message == "NKI000030"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000030";
    }
else if($message == "NKI000031"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000031";
    }
else if($message == "NKI000032"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000032";
    }
else if($message == "NKI000033"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000033";
    }
else if($message == "NKI000034"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000034";
    }
else if($message == "NKI000035"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000035";
    }
else if($message == "NKI000036"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000036";
    }
else if($message == "NKI000037"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000037";
    }
else if($message == "NKI000038"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000038";
    }
else if($message == "NKI000039"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000039";
    }
else if($message == "NKI000040"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000040";
    }
else if($message == "NKI000041"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000041";
    }
else if($message == "NKI000042"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000042";
    }
else if($message == "NKI000044"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000044";
    }
else if($message == "NKI000045"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000045";
    }
else if($message == "NKI000046"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000046";
    }
else if($message == "NKI000047"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000047";
    }
else if($message == "NKI000048"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000048";
    }
else if($message == "NKI000049"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000049";
    }
else if($message == "NKI000050"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000050";
    }
else if($message == "NKI000051"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000051";
    }
else if($message == "NKI000052"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000052";
    }
else if($message == "NKI000053"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000053";
    }
else if($message == "NKI000054"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000054";
    }
else if($message == "NKI000055"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000055";
    }
else if($message == "NKI000056"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000056";
    }
else if($message == "NKI000057"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000057";
    }
else if($message == "NKI000058"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000058";
    }
else if($message == "NKI000059"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000059";
    }
else if($message == "NKI000060"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000060";
    }
else if($message == "NKI000061"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000061";
    }
else if($message == "NKI000062"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000062";
    }
else if($message == "NKI000063"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000063";
    }
else if($message == "NKI000064"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000064";
    }
else if($message == "NKI000065"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000065";
    }
else if($message == "NKI000066"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000066";
    }
else if($message == "NKI000067"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000067";
    }
else if($message == "NKI000068"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000068";
    }
else if($message == "NKI000069"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000069";
    }
else if($message == "NKI000070"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000070";
    }
else if($message == "NKI000073"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000073";
    }
else if($message == "NKI000081"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000081";
    }
else if($message == "NKI000082"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000082";
    }
else if($message == "NKI000083"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000083";
    }
else if($message == "NKI000084"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000084";
    }
else if($message == "NKI000085"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000085";
    }
else if($message == "NKI000086"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000086";
    }
else if($message == "NKI000087"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000087";
    }
else if($message == "NKI000088"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000088";
    }
else if($message == "NKI000089"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000089";
    }
else if($message == "NKI000090"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000090";
    }
else if($message == "NKI000091"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000091";
    }
else if($message == "NKI000092"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000092";
    }
else if($message == "NKI000093"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000093";
    }
else if($message == "NKI000094"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000094";
    }
else if($message == "NKI000095"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000095";
    }
else if($message == "NKI000096"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000096";
    }
else if($message == "NKI000097"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000097";
    }
else if($message == "NKI000098"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000098";
    }
else if($message == "NKI000099"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000099";
    }
else if($message == "NKI000100"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000100";
    }
else if($message == "NKI000101"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000101";
    }
else if($message == "NKI000102"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000102";
    }
else if($message == "NKI000103"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000103";
    }
else if($message == "NKI000104"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000104";
    }
else if($message == "NKI000105"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000105";
    }
else if($message == "NKI000106"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000106";
    }
else if($message == "NKI000107"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000107";
    }
else if($message == "NKI000108"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000108";
    }
else if($message == "NKI000109"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000109";
    }
else if($message == "NKI000110"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000110";
    }
else if($message == "NKI000111"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000111";
    }
else if($message == "NKI000112"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000112";
    }
else if($message == "NKI000113"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000113";
    }
else if($message == "NKI000114"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000114";
    }
else if($message == "NKI000115"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000115";
    }
else if($message == "NKI000116"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000116";
    }
else if($message == "NKI000117"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000117";
    }
else if($message == "NKI000118"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000118";
    }
else if($message == "NKI000119"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000119";
    }
else if($message == "NKI000120"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000120";
    }
else if($message == "NKI000121"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000121";
    }
else if($message == "NKI000122"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000122";
    }
else if($message == "NKI000123"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000123";
    }
else if($message == "NKI000124"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000124";
    }
else if($message == "NKI000125"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000125";
    }
else if($message == "NKI000126"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000126";
    }
else if($message == "NKI000127"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000127";
    }
else if($message == "NKI000128"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000128";
    }
else if($message == "NKI000129"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000129";
    }
else if($message == "NKI000130"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000130";
    }
else if($message == "NKI000131"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000131";
    }
else if($message == "NKI000132"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000132";
    }
else if($message == "NKI000133"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000133";
    }
else if($message == "NKI000134"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000134";
    }
else if($message == "NKI000135"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000135";
    }
else if($message == "NKI000136"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000136";
    }
else if($message == "NKI000137"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000137";
    }
else if($message == "NKI000138"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000138";
    }
else if($message == "NKI000139"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000139";
    }
else if($message == "NKI000140"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000140";
    }
else if($message == "NKI000142"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000142";
    }
else if($message == "NKI000143"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000143";
    }
else if($message == "NKI000144"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000144";
    }
else if($message == "NKI000145"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000145";
    }
else if($message == "NKI000146"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000146";
    }
else if($message == "NKI000147"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000147";
    }
else if($message == "NKI000148"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000148";
    }
else if($message == "NKI000149"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000149";
    }
else if($message == "NKI000150"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000150";
    }
else if($message == "NKI000151"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000151";
    }
else if($message == "NKI000152"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000152";
    }
else if($message == "NKI000153"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000153";
    }
else if($message == "NKI000154"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000154";
    }
else if($message == "NKI000155"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000155";
    }
else if($message == "NKI000156"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000156";
    }
else if($message == "NKI000157"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000157";
    }
else if($message == "NKI000158"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000158";
    }
else if($message == "NKI000159"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000159";
    }
else if($message == "NKI000160"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000160";
    }
else if($message == "NKI000161"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000161";
    }
else if($message == "NKI000162"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000162";
    }
else if($message == "NKI000163"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000163";
    }
else if($message == "NKI000164"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000164";
    }
else if($message == "NKI000165"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000165";
    }
else if($message == "NKI000166"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000166";
    }
else if($message == "NKI000167"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000167";
    }
else if($message == "NKI000168"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000168";
    }
else if($message == "NKI000169"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000169";
    }
else if($message == "NKI000170"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000170";
    }
else if($message == "NKI000171"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000171";
    }
else if($message == "NKI000172"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000172";
    }
else if($message == "NKI000173"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000173";
    }
else if($message == "NKI000174"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000174";
    }
else if($message == "NKI000175"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000175";
    }
else if($message == "NKI000176"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000176";
    }
else if($message == "NKI000177"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000177";
    }
else if($message == "NKI000178"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000178";
    }
else if($message == "NKI000179"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000179";
    }
else if($message == "NKI000180"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000180";
    }
else if($message == "NKI000181"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000181";
    }
else if($message == "NKI000182"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000182";
    }
else if($message == "NKI000183"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000183";
    }
else if($message == "NKI000184"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000184";
    }
else if($message == "NKI000185"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000185";
    }
else if($message == "NKI000186"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000186";
    }
else if($message == "NKI000187"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000187";
    }
else if($message == "NKI000188"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000188";
    }
else if($message == "NKI000189"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000189";
    }
else if($message == "NKI000190"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000190";
    }
else if($message == "NKI000192"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000192";
    }
else if($message == "NKI000193"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000193";
    }
else if($message == "NKI000194"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000194";
    }
else if($message == "NKI000195"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000195";
    }
else if($message == "NKI000196"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000196";
    }
else if($message == "NKI000197"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000197";
    }
else if($message == "NKI000198"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000198";
    }
else if($message == "NKI000199"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000199";
    }
else if($message == "NKI000200"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000200";
    }
else if($message == "NKI000201"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000201";
    }
else if($message == "NKI000202"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000202";
    }
else if($message == "NKI000203"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000203";
    }
else if($message == "NKI000204"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000204";
    }
else if($message == "NKI000205"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000205";
    }
else if($message == "NKI000206"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000206";
    }
else if($message == "NKI000207"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000207";
    }
else if($message == "NKI000208"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000208";
    }
else if($message == "NKI000209"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000209";
    }
else if($message == "NKI000210"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000210";
    }
else if($message == "NKI000211"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000211";
    }
else if($message == "NKI000212"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000212";
    }
else if($message == "NKI000213"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000213";
    }
else if($message == "NKI000214"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000214";
    }
else if($message == "NKI000215"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000215";
    }
else if($message == "NKI000216"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000216";
    }
else if($message == "NKI000217"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000217";
    }
else if($message == "NKI000218"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000218";
    }
else if($message == "NKI000219"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000219";
    }
else if($message == "NKI000220"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000220";
    }
else if($message == "NKI000221"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000221";
    }
else if($message == "NKI000222"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000222";
    }
else if($message == "NKI000223"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000223";
    }
else if($message == "NKI000224"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000224";
    }
else if($message == "NKI000225"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000225";
    }
else if($message == "NKI000226"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000226";
    }
else if($message == "NKI000227"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000227";
    }
else if($message == "NKI000228"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000228";
    }
else if($message == "NKI000229"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000229";
    }
else if($message == "NKI000230"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000230";
    }
else if($message == "NKI000231"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000231";
    }
else if($message == "NKI000232"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000232";
    }
else if($message == "NKI000233"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000233";
    }
else if($message == "NKI000234"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000234";
    }
else if($message == "NKI000235"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000235";
    }
else if($message == "NKI000236"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000236";
    }
else if($message == "NKI000237"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000237";
    }
else if($message == "NKI000238"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000238";
    }
else if($message == "NKI000239"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000239";
    }
else if($message == "NKI000240"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000240";
    }
else if($message == "NKI000241"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000241";
    }
else if($message == "NKI000242"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000242";
    }
else if($message == "NKI000243"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000243";
    }
else if($message == "NKI000244"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000244";
    }
else if($message == "NKI000245"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000245";
    }
else if($message == "NKI000246"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000246";
    }
else if($message == "NKI000247"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000247";
    }
else if($message == "NKI000248"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000248";
    }
else if($message == "NKI000249"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000249";
    }
else if($message == "NKI000250"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000250";
    }
else if($message == "NKI000251"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000251";
    }
else if($message == "NKI000252"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000252";
    }
else if($message == "NKI000253"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000253";
    }
else if($message == "NKI000254"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000254";
    }
else if($message == "NKI000255"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000255";
    }
else if($message == "NKI000256"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000256";
    }
else if($message == "NKI000257"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000257";
    }
else if($message == "NKI000258"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000258";
    }
else if($message == "NKI000259"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000259";
    }
else if($message == "NKI000260"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000260";
    }
else if($message == "NKI000261"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000261";
    }
else if($message == "NKI000262"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000262";
    }
else if($message == "NKI000263"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000263";
    }
else if($message == "NKI000264"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000264";
    }
else if($message == "NKI000265"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000265";
    }
else if($message == "NKI000267"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000267";
    }
else if($message == "NKI000268"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000268";
    }
else if($message == "NKI000269"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000269";
    }
else if($message == "NKI000270"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000270";
    }
else if($message == "NKI000271"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000271";
    }
else if($message == "NKI000272"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000272";
    }
else if($message == "NKI000273"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000273";
    }
else if($message == "NKI000274"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000274";
    }
else if($message == "NKI000275"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000275";
    }
else if($message == "NKI000276"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000276";
    }
else if($message == "NKI000277"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000277";
    }
else if($message == "NKI000278"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000278";
    }
else if($message == "NKI000279"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000279";
    }
else if($message == "NKI000280"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000280";
    }
else if($message == "NKI000281"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000281";
    }
else if($message == "NKI000282"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000282";
    }
else if($message == "NKI000283"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000283";
    }
else if($message == "NKI000284"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000284";
    }
else if($message == "NKI000285"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000285";
    }
else if($message == "NKI000286"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000286";
    }
else if($message == "NKI000287"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000287";
    }
else if($message == "NKI000288"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000288";
    }
else if($message == "NKI000289"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000289";
    }
else if($message == "NKI000290"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000290";
    }
else if($message == "NKI000291"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000291";
    }
else if($message == "NKI000292"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000292";
    }
else if($message == "NKI000293"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000293";
    }
else if($message == "NKI000294"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000294";
    }
else if($message == "NKI000295"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000295";
    }
else if($message == "NKI000296"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000296";
    }
else if($message == "NKI000297"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000297";
    }
else if($message == "NKI000298"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000298";
    }
else if($message == "NKI000299"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000299";
    }
else if($message == "NKI000300"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000300";
    }
else if($message == "NKI000301"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000301";
    }
else if($message == "NKI000302"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000302";
    }
else if($message == "NKI000303"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000303";
    }
else if($message == "NKI000304"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000304";
    }
else if($message == "NKI000305"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000305";
    }
else if($message == "NKI000306"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000306";
    }
else if($message == "NKI000307"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000307";
    }
else if($message == "NKI000308"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000308";
    }
else if($message == "NKI000309"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000309";
    }
else if($message == "NKI000310"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000310";
    }
else if($message == "NKI000311"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000311";
    }
else if($message == "NKI000312"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000312";
    }
else if($message == "NKI000313"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000313";
    }
else if($message == "NKI000314"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000314";
    }
else if($message == "NKI000315"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000315";
    }
else if($message == "NKI000316"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000316";
    }
else if($message == "NKI000317"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000317";
    }
else if($message == "NKI000318"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000318";
    }
else if($message == "NKI000319"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000319";
    }
else if($message == "NKI000321"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000321";
    }
else if($message == "NKI000322"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000322";
    }
else if($message == "NKI000326"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000326";
    }
else if($message == "NKI000327"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000327";
    }
else if($message == "NKI000328"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000328";
    }
else if($message == "NKI000330"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000330";
    }
else if($message == "NKI000331"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000331";
    }
else if($message == "NKI000332"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000332";
    }
else if($message == "NKI000333"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000333";
    }
else if($message == "NKI000334"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000334";
    }
else if($message == "NKI000335"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000335";
    }
else if($message == "NKI000336"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000336";
    }
else if($message == "NKI000337"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000337";
    }
else if($message == "NKI000338"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000338";
    }
else if($message == "NKI000339"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000339";
    }
else if($message == "NKI000340"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000340";
    }
else if($message == "NKI000341"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000341";
    }
else if($message == "NKI000343"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000343";
    }
else if($message == "NKI000344"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000344";
    }
else if($message == "NKI000346"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000346";
    }
else if($message == "NKI000347"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000347";
    }
else if($message == "NKI000348"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000348";
    }
else if($message == "NKI000349"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000349";
    }
else if($message == "NKI000350"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000350";
    }
else if($message == "NKI000351"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000351";
    }
else if($message == "NKI000352"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000352";
    }
else if($message == "NKI000353"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000353";
    }
else if($message == "NKI000354"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000354";
    }
else if($message == "NKI000356"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000356";
    }
else if($message == "NKI000359"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000359";
    }
else if($message == "NKI000360"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000360";
    }
else if($message == "NKI000362"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000362";
    }
else if($message == "NKI000363"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000363";
    }
else if($message == "NKI000364"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000364";
    }
else if($message == "NKI000365"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000365";
    }
else if($message == "NKI000367"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000367";
    }
else if($message == "NKI000368"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000368";
    }
else if($message == "NKI000369"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000369";
    }
else if($message == "NKI000370"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000370";
    }
else if($message == "NKI000371"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000371";
    }
else if($message == "NKI000373"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000373";
    }
else if($message == "NKI000374"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000374";
    }
else if($message == "NKI000376"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000376";
    }
else if($message == "NKI000379"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000379";
    }
else if($message == "NKI000380"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000380";
    }
else if($message == "NKI000381"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000381";
    }
else if($message == "NKI000382"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000382";
    }
else if($message == "NKI000383"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000383";
    }
else if($message == "NKI000384"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000384";
    }
else if($message == "NKI000385"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000385";
    }
else if($message == "NKI000386"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000386";
    }
else if($message == "NKI000387"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000387";
    }
else if($message == "NKI000388"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000388";
    }
else if($message == "NKI000389"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000389";
    }
else if($message == "NKI000390"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000390";
    }
else if($message == "NKI000391"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000391";
    }
else if($message == "NKI000392"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000392";
    }
else if($message == "NKI000393"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000393";
    }
else if($message == "NKI000394"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000394";
    }
else if($message == "NKI000395"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000395";
    }
else if($message == "NKI000396"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000396";
    }
else if($message == "NKI000397"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000397";
    }
else if($message == "NKI000398"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000398";
    }
else if($message == "NKI000399"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000399";
    }
else if($message == "NKI000400"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000400";
    }
else if($message == "NKI000401"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000401";
    }
else if($message == "NKI000402"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000402";
    }
else if($message == "NKI000403"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000403";
    }
else if($message == "NKI000404"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000404";
    }
else if($message == "NKI000405"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000405";
    }
else if($message == "NKI000406"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000406";
    }
else if($message == "NKI000407"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000407";
    }
else if($message == "NKI000408"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000408";
    }
else if($message == "NKI000409"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000409";
    }
else if($message == "NKI000411"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000411";
    }
else if($message == "NKI000412"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000412";
    }
else if($message == "NKI000413"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000413";
    }
else if($message == "NKI000414"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000414";
    }
else if($message == "NKI000415"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000415";
    }
else if($message == "NKI000416"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000416";
    }
else if($message == "NKI000418"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000418";
    }
else if($message == "NKI000421"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000421";
    }
else if($message == "NKI000422"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000422";
    }
else if($message == "NKI000423"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000423";
    }
else if($message == "NKI000424"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000424";
    }
else if($message == "NKI000425"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000425";
    }
else if($message == "NKI000426"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000426";
    }
else if($message == "NKI000427"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000427";
    }
else if($message == "NKI000428"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000428";
    }
else if($message == "NKI000429"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000429";
    }
else if($message == "NKI000430"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000430";
    }
else if($message == "NKI000431"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000431";
    }
else if($message == "NKI000432"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000432";
    }
else if($message == "NKI000433"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000433";
    }
else if($message == "NKI000434"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000434";
    }
else if($message == "NKI000435"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000435";
    }
else if($message == "NKI000436"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000436";
    }
else if($message == "NKI000437"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000437";
    }
else if($message == "NKI000438"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000438";
    }
else if($message == "NKI000439"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000439";
    }
else if($message == "NKI000440"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000440";
    }
else if($message == "NKI000441"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000441";
    }
else if($message == "NKI000442"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000442";
    }
else if($message == "NKI000443"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000443";
    }
else if($message == "NKI000444"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000444";
    }
else if($message == "NKI000445"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000445";
    }
else if($message == "NKI000446"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000446";
    }
else if($message == "NKI000447"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000447";
    }
else if($message == "NKI000448"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000448";
    }
else if($message == "NKI000449"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000449";
    }
else if($message == "NKI000450"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000450";
    }
else if($message == "NKI000451"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000451";
    }
else if($message == "NKI000452"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000452";
    }
else if($message == "NKI000453"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000453";
    }
else if($message == "NKI000454"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000454";
    }
else if($message == "NKI000455"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000455";
    }
else if($message == "NKI000456"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000456";
    }
else if($message == "NKI000457"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000457";
    }
else if($message == "NKI000458"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000458";
    }
else if($message == "NKI000459"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000459";
    }
else if($message == "NKI000460"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000460";
    }
else if($message == "NKI000461"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000461";
    }
else if($message == "NKI000462"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000462";
    }
else if($message == "NKI000463"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000463";
    }
else if($message == "NKI000464"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000464";
    }
else if($message == "NKI000465"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000465";
    }
else if($message == "NKI000466"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000466";
    }
else if($message == "NKI000467"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000467";
    }
else if($message == "NKI000468"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000468";
    }
else if($message == "NKI000469"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000469";
    }
else if($message == "NKI000470"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000470";
    }
else if($message == "NKI000471"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000471";
    }
else if($message == "NKI000472"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000472";
    }
else if($message == "NKI000473"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000473";
    }
else if($message == "NKI000474"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000474";
    }
else if($message == "NKI000475"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000475";
    }
else if($message == "NKI000476"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000476";
    }
else if($message == "NKI000477"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000477";
    }
else if($message == "NKI000478"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000478";
    }
else if($message == "NKI000479"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000479";
    }
else if($message == "NKI000480"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000480";
    }
else if($message == "NKI000481"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000481";
    }
else if($message == "NKI000482"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000482";
    }
else if($message == "NKI000483"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000483";
    }
else if($message == "NKI000484"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000484";
    }
else if($message == "NKI000485"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000485";
    }
else if($message == "NKI000486"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000486";
    }
else if($message == "NKI000487"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000487";
    }
else if($message == "NKI000488"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000488";
    }
else if($message == "NKI000489"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000489";
    }
else if($message == "NKI000490"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000490";
    }
else if($message == "NKI000491"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000491";
    }
else if($message == "NKI000492"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000492";
    }
else if($message == "NKI000493"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000493";
    }
else if($message == "NKI000494"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000494";
    }
else if($message == "NKI000495"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000495";
    }
else if($message == "NKI000496"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000496";
    }
else if($message == "NKI000497"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000497";
    }
else if($message == "NKI000498"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000498";
    }
else if($message == "NKI000499"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000499";
    }
else if($message == "NKI000500"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000500";
    }
else if($message == "NKI000501"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000501";
    }
else if($message == "NKI000502"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000502";
    }
else if($message == "NKI000503"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000503";
    }
else if($message == "NKI000504"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000504";
    }
else if($message == "NKI000505"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000505";
    }
else if($message == "NKI000506"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000506";
    }
else if($message == "NKI000507"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000507";
    }
else if($message == "NKI000508"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000508";
    }
else if($message == "NKI000509"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000509";
    }
else if($message == "NKI000510"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000510";
    }
else if($message == "NKI000511"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000511";
    }
else if($message == "NKI000512"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000512";
    }
else if($message == "NKI000513"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000513";
    }
else if($message == "NKI000514"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000514";
    }
else if($message == "NKI000515"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000515";
    }
else if($message == "NKI000516"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000516";
    }
else if($message == "NKI000517"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000517";
    }
else if($message == "NKI000518"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000518";
    }
else if($message == "NKI000519"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000519";
    }
else if($message == "NKI000520"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000520";
    }
else if($message == "NKI000521"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000521";
    }
else if($message == "NKI000522"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000522";
    }
else if($message == "NKI000523"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000523";
    }
else if($message == "NKI000524"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000524";
    }
else if($message == "NKI000525"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000525";
    }
else if($message == "NKI000526"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000526";
    }
else if($message == "NKI000527"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000527";
    }
else if($message == "NKI000528"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000528";
    }
else if($message == "NKI000529"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000529";
    }
else if($message == "NKI000530"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000530";
    }
else if($message == "NKI000531"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000531";
    }
else if($message == "NKI000532"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000532";
    }
else if($message == "NKI000533"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000533";
    }
else if($message == "NKI000534"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000534";
    }
else if($message == "NKI000535"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000535";
    }
else if($message == "NKI000536"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000536";
    }
else if($message == "NKI000537"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000537";
    }
else if($message == "NKI000538"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000538";
    }
else if($message == "NKI000539"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000539";
    }
else if($message == "NKI000540"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000540";
    }
else if($message == "NKI000541"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000541";
    }
else if($message == "NKI000542"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000542";
    }
else if($message == "NKI000543"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000543";
    }
else if($message == "NKI000544"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000544";
    }
else if($message == "NKI000545"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000545";
    }
else if($message == "NKI000546"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000546";
    }
else if($message == "NKI000547"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000547";
    }
else if($message == "NKI000548"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000548";
    }
else if($message == "NKI000549"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000549";
    }
else if($message == "NKI000550"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000550";
    }
else if($message == "NKI000551"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000551";
    }
else if($message == "NKI000552"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000552";
    }
else if($message == "NKI000553"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000553";
    }
else if($message == "NKI000554"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000554";
    }
else if($message == "NKI000555"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000555";
    }
else if($message == "NKI000556"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000556";
    }
else if($message == "NKI000557"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000557";
    }
else if($message == "NLP000001"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000001";
    }
else if($message == "NLP000002"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000002";
    }
else if($message == "NLP000003"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000003";
    }
else if($message == "NLP000004"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000004";
    }
else if($message == "NLP000005"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000005";
    }
else if($message == "NLP000006"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000006";
    }
else if($message == "NLP000007"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000007";
    }
else if($message == "NLP000008"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000008";
    }
else if($message == "NLP000009"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000009";
    }
else if($message == "NLP000010"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000010";
    }
else if($message == "NLP000011"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000011";
    }
else if($message == "NLP000012"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000012";
    }
else if($message == "NLP000013"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000013";
    }
else if($message == "NLP000014"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000014";
    }
else if($message == "NLP000015"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000015";
    }
else if($message == "NLP000016"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000016";
    }
else if($message == "NLP000017"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000017";
    }
else if($message == "NLP000018"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000018";
    }
else if($message == "NLP000019"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000019";
    }
else if($message == "NLP000020"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000020";
    }
else if($message == "NLP000021"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000021";
    }
else if($message == "NLP000022"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000022";
    }
else if($message == "NLP000023"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000023";
    }
else if($message == "NLP000024"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000024";
    }
else if($message == "NLP000025"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000025";
    }
else if($message == "NLP000026"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000026";
    }
else if($message == "NLP000027"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000027";
    }
else if($message == "NLP000028"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000028";
    }
else if($message == "NLP000029"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000029";
    }
else if($message == "NLP000030"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000030";
    }
else if($message == "NLP000031"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000031";
    }
else if($message == "NLP000032"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000032";
    }
else if($message == "NLP000033"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000033";
    }
else if($message == "NLP000034"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000034";
    }
else if($message == "NLP000035"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000035";
    }
else if($message == "NLP000036"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000036";
    }
else if($message == "NLP000037"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000037";
    }
else if($message == "NLP000038"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000038";
    }
else if($message == "NLP000039"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000039";
    }
else if($message == "NLP000040"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000040";
    }
else if($message == "NLP000041"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000041";
    }
else if($message == "NLP000042"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000042";
    }
else if($message == "NLP000043"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000043";
    }
else if($message == "NLP000044"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000044";
    }
else if($message == "NLP000045"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000045";
    }
else if($message == "NLP000046"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000046";
    }
else if($message == "NLP000047"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000047";
    }
else if($message == "NLP000048"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000048";
    }
else if($message == "NLP000049"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000049";
    }
else if($message == "NLP000050"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000050";
    }
else if($message == "NLP000051"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000051";
    }
else if($message == "NLP000052"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000052";
    }
else if($message == "NLP000053"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000053";
    }
else if($message == "NLP000285"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000285";
    }
else if($message == "NLP000286"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000286";
    }
else if($message == "NLP000287"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000287";
    }
else if($message == "NLP000288"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000288";
    }
else if($message == "NLP000289"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000289";
    }
else if($message == "NLP000290"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000290";
    }
else if($message == "NLP000291"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000291";
    }
else if($message == "NLP000292"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000292";
    }
else if($message == "NLP000293"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000293";
    }
else if($message == "NLP000294"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000294";
    }
else if($message == "NLP000295"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000295";
    }
else if($message == "NLP000296"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000296";
    }
else if($message == "NLP000297"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000297";
    }
else if($message == "NLP000298"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000298";
    }
else if($message == "NLP000299"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000299";
    }
else if($message == "NLP000300"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000300";
    }
else if($message == "NLP000301"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000301";
    }
else if($message == "NLP000302"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000302";
    }
else if($message == "NLP000303"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000303";
    }
else if($message == "NLP000304"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000304";
    }
else if($message == "NLP000305"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000305";
    }
else if($message == "NLP000306"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000306";
    }
else if($message == "NLP000307"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000307";
    }
else if($message == "NLP000308"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000308";
    }
else if($message == "NLP000309"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000309";
    }
else if($message == "NLP000310"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000310";
    }
else if($message == "NLP000311"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000311";
    }
else if($message == "NLP000312"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000312";
    }
else if($message == "NLP000313"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000313";
    }
else if($message == "NLP000314"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000314";
    }
else if($message == "NLP000315"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000315";
    }
else if($message == "NLP000316"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000316";
    }
else if($message == "NLP000317"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000317";
    }
else if($message == "NLP000318"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000318";
    }
else if($message == "NLP000319"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000319";
    }
else if($message == "NLP000320"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000320";
    }
else if($message == "NLP000321"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000321";
    }
else if($message == "NLP000322"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000322";
    }
else if($message == "NLP000323"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000323";
    }
else if($message == "NLP000324"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000324";
    }
else if($message == "NLP000325"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000325";
    }
else if($message == "NLP000326"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000326";
    }
else if($message == "NLP000327"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000327";
    }
else if($message == "NLP000328"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000328";
    }
else if($message == "NLP000329"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000329";
    }
else if($message == "NLP000330"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000330";
    }
else if($message == "NLP000331"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000331";
    }
else if($message == "NLP000332"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000332";
    }
else if($message == "NLP000333"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000333";
    }
else if($message == "NLP000334"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000334";
    }
else if($message == "NLP000335"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000335";
    }
else if($message == "NLP000336"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000336";
    }
else if($message == "NLP000337"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000337";
    }
else if($message == "NLP000338"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000338";
    }
else if($message == "NLP000339"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000339";
    }
else if($message == "NLP000340"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000340";
    }
else if($message == "NLP000341"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000341";
    }
else if($message == "NLP000342"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000342";
    }
else if($message == "NLP000343"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000343";
    }
else if($message == "NLP000344"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000344";
    }
else if($message == "NLP000345"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000345";
    }
else if($message == "NLP000346"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000346";
    }
else if($message == "NLP000347"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000347";
    }
else if($message == "NLP000348"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000348";
    }
else if($message == "NLP000349"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000349";
    }
else if($message == "NLP000350"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000350";
    }
else if($message == "NLP000351"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000351";
    }
else if($message == "NLP000352"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000352";
    }
else if($message == "NLP000353"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000353";
    }
else if($message == "NLP000354"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000354";
    }
else if($message == "NLP000355"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000355";
    }
else if($message == "NLP000356"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000356";
    }
else if($message == "NLP000357"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000357";
    }
else if($message == "NLP000358"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000358";
    }
else if($message == "NLP000359"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000359";
    }
else if($message == "NLP000360"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000360";
    }
else if($message == "NLP000361"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000361";
    }
else if($message == "NLP000362"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000362";
    }
else if($message == "NLP000363"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000363";
    }
else if($message == "NLP000364"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000364";
    }
else if($message == "NLP000365"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000365";
    }
else if($message == "NLP000366"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000366";
    }
else if($message == "NLP000367"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000367";
    }
else if($message == "NLP000368"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000368";
    }
else if($message == "NLP000369"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000369";
    }
else if($message == "NLP000370"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000370";
    }
else if($message == "NLP000371"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000371";
    }
else if($message == "NLP000372"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000372";
    }
else if($message == "NLP000373"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000373";
    }
else if($message == "NLP000374"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000374";
    }
else if($message == "NLP000375"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000375";
    }
else if($message == "NLP000376"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000376";
    }
else if($message == "NLP000377"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000377";
    }
else if($message == "NLP000378"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000378";
    }
else if($message == "NLP000379"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000379";
    }
else if($message == "NLP000380"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000380";
    }
else if($message == "NLP000381"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000381";
    }
else if($message == "NLP000382"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000382";
    }
else if($message == "NLP000383"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000383";
    }
else if($message == "NLP000384"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000384";
    }
else if($message == "NLP000385"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000385";
    }
else if($message == "NLP000386"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000386";
    }
else if($message == "NLP000387"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000387";
    }
else if($message == "NLP000388"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000388";
    }
else if($message == "NLP000389"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000389";
    }
else if($message == "NLP000390"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000390";
    }
else if($message == "NLP000391"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000391";
    }
else if($message == "NLP000392"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000392";
    }
else if($message == "NLP000393"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000393";
    }
else if($message == "NLP000394"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000394";
    }
else if($message == "NLP000395"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000395";
    }
else if($message == "NLP000396"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000396";
    }
else if($message == "NLP000397"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000397";
    }
else if($message == "NLP000398"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000398";
    }
else if($message == "NLP000399"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000399";
    }
else if($message == "NLP000400"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000400";
    }
else if($message == "NLP000401"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000401";
    }
else if($message == "NLP000402"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000402";
    }
else if($message == "NLP000403"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000403";
    }
else if($message == "NLP000404"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000404";
    }
else if($message == "NLP000405"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000405";
    }
else if($message == "NLP000406"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000406";
    }
else if($message == "NLP000407"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000407";
    }
else if($message == "NLP000408"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000408";
    }
else if($message == "NLP000409"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000409";
    }
else if($message == "NLP000410"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000410";
    }
else if($message == "NLP000411"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000411";
    }
else if($message == "NLP000412"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000412";
    }
else if($message == "NLP000413"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000413";
    }
else if($message == "NLP000414"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000414";
    }
else if($message == "NLP000415"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000415";
    }
else if($message == "NLP000416"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000416";
    }
else if($message == "NLP000417"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000417";
    }
else if($message == "NLP000418"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000418";
    }
else if($message == "NLP000419"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000419";
    }
else if($message == "NLP000420"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000420";
    }
else if($message == "NLP000421"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000421";
    }
else if($message == "NLP000422"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000422";
    }
else if($message == "NLP000423"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000423";
    }
else if($message == "NLP000424"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000424";
    }
else if($message == "NLP000425"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000425";
    }
else if($message == "NLP000426"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000426";
    }
else if($message == "NLP000427"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000427";
    }
else if($message == "NLP000428"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000428";
    }
else if($message == "NLP000429"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000429";
    }
else if($message == "NLP000430"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000430";
    }
else if($message == "NLP000431"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000431";
    }
else if($message == "NLP000432"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000432";
    }
else if($message == "NLP000433"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000433";
    }
else if($message == "NLP000434"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000434";
    }
else if($message == "NLP000435"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000435";
    }
else if($message == "NLP000436"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000436";
    }
else if($message == "NLP000437"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000437";
    }
else if($message == "NLP000438"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000438";
    }
else if($message == "NLP000439"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000439";
    }
else if($message == "NLP000440"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000440";
    }
else if($message == "NLP000441"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000441";
    }
else if($message == "NLP000442"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000442";
    }
else if($message == "NLP000443"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000443";
    }
else if($message == "NLP000444"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000444";
    }
else if($message == "NLP000445"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000445";
    }
else if($message == "NLP000446"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000446";
    }
else if($message == "NLP000447"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000447";
    }
else if($message == "NLP000448"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000448";
    }
else if($message == "NLP000449"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000449";
    }
else if($message == "NLP000450"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000450";
    }
else if($message == "NLP000451"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000451";
    }
else if($message == "NLP000452"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000452";
    }
else if($message == "NLP000453"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000453";
    }
else if($message == "NLP000454"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000454";
    }
else if($message == "NLP000455"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000455";
    }
else if($message == "NLP000456"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000456";
    }
else if($message == "NLP000457"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000457";
    }
else if($message == "NLP000458"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000458";
    }
else if($message == "NLP000459"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000459";
    }
else if($message == "NLP000460"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000460";
    }
else if($message == "NLP000461"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000461";
    }
else if($message == "NLP000462"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000462";
    }
else if($message == "NLP000463"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000463";
    }
else if($message == "NLP000464"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000464";
    }
else if($message == "NLP000465"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000465";
    }
else if($message == "NLP000466"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000466";
    }
else if($message == "NLP000467"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000467";
    }
else if($message == "NLP000468"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000468";
    }
else if($message == "NLP000469"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000469";
    }
else if($message == "NPL000054"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000054";
    }
else if($message == "NPL000055"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000055";
    }
else if($message == "NPL000056"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000056";
    }
else if($message == "NPL000057"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000057";
    }
else if($message == "NPL000058"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000058";
    }
else if($message == "NPL000059"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000059";
    }
else if($message == "NPL000060"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000060";
    }
else if($message == "NPL000061"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000061";
    }
else if($message == "NPL000063"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000063";
    }
else if($message == "NPL000064"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000064";
    }
else if($message == "NPL000065"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000065";
    }
else if($message == "NPL000066"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000066";
    }
else if($message == "NPL000068"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000068";
    }
else if($message == "NPL000069"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000069";
    }
else if($message == "NPL000070"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000070";
    }
else if($message == "NPL000071"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000071";
    }
else if($message == "NPL000073"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000073";
    }
else if($message == "NPL000074"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000074";
    }
else if($message == "NPL000075"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000075";
    }
else if($message == "NPL000076"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000076";
    }
else if($message == "NPL000077"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000077";
    }
else if($message == "NPL000078"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000078";
    }
else if($message == "NPL000079"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000079";
    }
else if($message == "NPL000080"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000080";
    }
else if($message == "NPL000081"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000081";
    }
else if($message == "NPL000082"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000082";
    }
else if($message == "NPL000083"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000083";
    }
else if($message == "NPL000084"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000084";
    }
else if($message == "NPL000085"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000085";
    }
else if($message == "NPL000091"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000091";
    }
else if($message == "NPL000093"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000093";
    }
else if($message == "NPL000095"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000095";
    }
else if($message == "NPL000097"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000097";
    }
else if($message == "NPL000098"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000098";
    }
else if($message == "NPL000099"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000099";
    }
else if($message == "NPL000101"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000101";
    }
else if($message == "NPL000102"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000102";
    }
else if($message == "NPL000103"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000103";
    }
else if($message == "NPL000104"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000104";
    }
else if($message == "NPL000106"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000106";
    }
else if($message == "NPL000107"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000107";
    }
else if($message == "NPL000108"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000108";
    }
else if($message == "NPL000109"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000109";
    }
else if($message == "NPL000110"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000110";
    }
else if($message == "NPL000111"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000111";
    }
else if($message == "NPL000112"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000112";
    }
else if($message == "NPL000116"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000116";
    }
else if($message == "NPL000117"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000117";
    }
else if($message == "NPL000118"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000118";
    }
else if($message == "NPL000119"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000119";
    }
else if($message == "NPL000120"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000120";
    }
else if($message == "NPL000121"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000121";
    }
else if($message == "NPL000125"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000125";
    }
else if($message == "NPL000126"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000126";
    }
else if($message == "NPL000127"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000127";
    }
else if($message == "NPL000128"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000128";
    }
else if($message == "NPL000129"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000129";
    }
else if($message == "NPL000130"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000130";
    }
else if($message == "NPL000131"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000131";
    }
else if($message == "NPL000132"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000132";
    }
else if($message == "NPL000133"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000133";
    }
else if($message == "NPL000134"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000134";
    }
else if($message == "NPL000135"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000135";
    }
else if($message == "NPL000136"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000136";
    }
else if($message == "NPL000137"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000137";
    }
else if($message == "NPL000138"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000138";
    }
else if($message == "NPL000139"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000139";
    }
else if($message == "NPL000140"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000140";
    }
else if($message == "NPL000141"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000141";
    }
else if($message == "NPL000142"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000142";
    }
else if($message == "NPL000143"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000143";
    }
else if($message == "NPL000144"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000144";
    }
else if($message == "NPL000145"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000145";
    }
else if($message == "NPL000146"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000146";
    }
else if($message == "NPL000147"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000147";
    }
else if($message == "NPL000148"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000148";
    }
else if($message == "NPL000149"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000149";
    }
else if($message == "NPL000150"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000150";
    }
else if($message == "NPL000151"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000151";
    }
else if($message == "NPL000155"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000155";
    }
else if($message == "NPL000156"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000156";
    }
else if($message == "NPL000157"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000157";
    }
else if($message == "NPL000158"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000158";
    }
else if($message == "NPL000159"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000159";
    }
else if($message == "NPL000160"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000160";
    }
else if($message == "NPL000161"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000161";
    }
else if($message == "NPL000162"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000162";
    }
else if($message == "NPL000163"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000163";
    }
else if($message == "NPL000164"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000164";
    }
else if($message == "NPL000165"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000165";
    }
else if($message == "NPL000166"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000166";
    }
else if($message == "NPL000167"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000167";
    }
else if($message == "NPL000168"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000168";
    }
else if($message == "NPL000169"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000169";
    }
else if($message == "NPL000170"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000170";
    }
else if($message == "NPL000171"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000171";
    }
else if($message == "NPL000180"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000180";
    }
else if($message == "NPL000181"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000181";
    }
else if($message == "NPL000182"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000182";
    }
else if($message == "NPL000183"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000183";
    }
else if($message == "NPL000184"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000184";
    }
else if($message == "NPL000185"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000185";
    }
else if($message == "NPL000186"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000186";
    }
else if($message == "NPL000187"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000187";
    }
else if($message == "NPL000188"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000188";
    }
else if($message == "NPL000189"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000189";
    }
else if($message == "NPL000190"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000190";
    }
else if($message == "NPL000191"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000191";
    }
else if($message == "NPL000192"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000192";
    }
else if($message == "NPL000193"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000193";
    }
else if($message == "NPL000194"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000194";
    }
else if($message == "NPL000195"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000195";
    }
else if($message == "NPL000196"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000196";
    }
else if($message == "NPL000197"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000197";
    }
else if($message == "NPL000198"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000198";
    }
else if($message == "NPL000199"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000199";
    }
else if($message == "NPL000200"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000200";
    }
else if($message == "NPL000201"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000201";
    }
else if($message == "NPL000202"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000202";
    }
else if($message == "NPL000203"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000203";
    }
else if($message == "NPL000204"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000204";
    }
else if($message == "NPL000205"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000205";
    }
else if($message == "NPL000206"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000206";
    }
else if($message == "NPL000207"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000207";
    }
else if($message == "NPL000208"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000208";
    }
else if($message == "NPL000209"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000209";
    }
else if($message == "NPL000210"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000210";
    }
else if($message == "NPL000211"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000211";
    }
else if($message == "NPL000212"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000212";
    }
else if($message == "NPL000213"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000213";
    }
else if($message == "NPL000214"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000214";
    }
else if($message == "NPL000215"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000215";
    }
else if($message == "NPL000216"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000216";
    }
else if($message == "NPL000217"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000217";
    }
else if($message == "NPL000218"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000218";
    }
else if($message == "NPL000219"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000219";
    }
else if($message == "NPL000220"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000220";
    }
else if($message == "NPL000221"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000221";
    }
else if($message == "NPL000222"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000222";
    }
else if($message == "NPL000223"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000223";
    }
else if($message == "NPL000224"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000224";
    }
else if($message == "NPL000225"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000225";
    }
else if($message == "NPL000226"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000226";
    }
else if($message == "NPL000227"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000227";
    }
else if($message == "NPL000228"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000228";
    }
else if($message == "NPL000229"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000229";
    }
else if($message == "NPL000230"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000230";
    }
else if($message == "NPL000231"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000231";
    }
else if($message == "NPL000237"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000237";
    }
else if($message == "NPL000238"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000238";
    }
else if($message == "NPL000239"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000239";
    }
else if($message == "NPL000240"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000240";
    }
else if($message == "NPL000241"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000241";
    }
else if($message == "NPL000242"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000242";
    }
else if($message == "NPL000243"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000243";
    }
else if($message == "NPL000244"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000244";
    }
else if($message == "NPL000245"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000245";
    }
else if($message == "NPL000246"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000246";
    }
else if($message == "NPL000247"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000247";
    }
else if($message == "NPL000248"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000248";
    }
else if($message == "NPL000249"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000249";
    }
else if($message == "NPL000250"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000250";
    }
else if($message == "NPL000251"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000251";
    }
else if($message == "NPL000252"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000252";
    }
else if($message == "NPL000253"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000253";
    }
else if($message == "NPL000254"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000254";
    }
else if($message == "NPL000255"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000255";
    }
else if($message == "NPL000256"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000256";
    }
else if($message == "NPL000258"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000258";
    }
else if($message == "NPL000259"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000259";
    }
else if($message == "NPL000267"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000267";
    }
else if($message == "NPL000268"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000268";
    }
else if($message == "NPL000269"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000269";
    }
else if($message == "NPL000270"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000270";
    }
else if($message == "NPL000271"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000271";
    }
else if($message == "NPL000272"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000272";
    }
else if($message == "NPL000273"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000273";
    }
else if($message == "NPL000275"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000275";
    }
else if($message == "NPL000276"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000276";
    }
else if($message == "NPL000277"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000277";
    }
else if($message == "NPL000279"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000279";
    }
else if($message == "NPL000280"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000280";
    }
else if($message == "NPL000282"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000282";
    }
else if($message == "NPL000283"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000283";
    }
else if($message == "NPL000284"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000284";
    }
else if($message == "UDN000001"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000001";
    }
else if($message == "UDN000002"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000002";
    }
else if($message == "UDN000003"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000003";
    }
else if($message == "UDN000004"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000004";
    }
else if($message == "UDN000005"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000005";
    }
else if($message == "UDN000006"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000006";
    }
else if($message == "UDN000007"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000007";
    }
else if($message == "UDN000008"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000008";
    }
else if($message == "UDN000009"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000009";
    }
else if($message == "UDN000010"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000010";
    }
else if($message == "UDN000011"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000011";
    }
else if($message == "UDN000012"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000012";
    }
else if($message == "UDN000013"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000013";
    }
else if($message == "UDN000014"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000014";
    }
else if($message == "UDN000015"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000015";
    }
else if($message == "UDN000016"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000016";
    }
else if($message == "UDN000017"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000017";
    }
else if($message == "UDN000018"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000018";
    }
else if($message == "UDN000019"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000019";
    }
else if($message == "UDN000020"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000020";
    }
else if($message == "UDN000021"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000021";
    }
else if($message == "UDN000022"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000022";
    }
else if($message == "UDN000024"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000024";
    }
else if($message == "UDN000025"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000025";
    }
else if($message == "UDN000026"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000026";
    }
else if($message == "UDN000027"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000027";
    }
else if($message == "UDN000028"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000028";
    }
else if($message == "UDN000029"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000029";
    }
else if($message == "UDN000030"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000030";
    }
else if($message == "UDN000031"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000031";
    }
else if($message == "UDN000032"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000032";
    }
else if($message == "UDN000033"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000033";
    }
else if($message == "UDN000034"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000034";
    }
else if($message == "UDN000035"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000035";
    }
else if($message == "UDN000036"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000036";
    }
else if($message == "UDN000037"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000037";
    }
else if($message == "UDN000038"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000038";
    }
else if($message == "UDN000039"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000039";
    }
else if($message == "UDN000040"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000040";
    }
else if($message == "UDN000041"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000041";
    }
else if($message == "UDN000042"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000042";
    }
else if($message == "UDN000043"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000043";
    }
else if($message == "UDN000044"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000044";
    }
else if($message == "UDN000045"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000045";
    }
else if($message == "UDN000046"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000046";
    }
else if($message == "UDN000047"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000047";
    }
else if($message == "UDN000048"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000048";
    }
else if($message == "UDN000049"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000049";
    }
else if($message == "UDN000051"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000051";
    }
else if($message == "UDN000052"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000052";
    }
else if($message == "UDN000053"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000053";
    }
else if($message == "UDN000054"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000054";
    }
else if($message == "UDN000055"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000055";
    }
else if($message == "UDN000056"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000056";
    }
else if($message == "UDN000057"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000057";
    }
else if($message == "UDN000058"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000058";
    }
else if($message == "UDN000059"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000059";
    }
else if($message == "UDN000060"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000060";
    }
else if($message == "UDN000061"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000061";
    }
else if($message == "UDN000062"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000062";
    }
else if($message == "UDN000063"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000063";
    }
else if($message == "UDN000064"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000064";
    }
else if($message == "UDN000065"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000065";
    }
else if($message == "UDN000066"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000066";
    }
else if($message == "UDN000067"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000067";
    }
else if($message == "UDN000068"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000068";
    }
else if($message == "UDN000069"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000069";
    }
else if($message == "UDN000070"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000070";
    }
else if($message == "UDN000071"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000071";
    }
else if($message == "UDN000072"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000072";
    }
else if($message == "UDN000073"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000073";
    }
else if($message == "UDN000074"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000074";
    }
else if($message == "UDN000075"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000075";
    }
else if($message == "UDN000076"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000076";
    }
else if($message == "UDN000077"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000077";
    }
else if($message == "UDN000078"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000078";
    }
else if($message == "UDN000079"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000079";
    }
else if($message == "UDN000080"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000080";
    }
else if($message == "UDN000081"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000081";
    }
else if($message == "UDN000082"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000082";
    }
else if($message == "UDN000083"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000083";
    }
else if($message == "UDN000084"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000084";
    }
else if($message == "UDN000085"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000085";
    }
else if($message == "UDN000086"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000086";
    }
else if($message == "UDN000087"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000087";
    }
else if($message == "UDN000088"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000088";
    }
else if($message == "UDN000089"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000089";
    }
else if($message == "UDN000090"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000090";
    }
else if($message == "UDN000091"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000091";
    }
else if($message == "UDN000092"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000092";
    }
else if($message == "UDN000093"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000093";
    }
else if($message == "UDN000094"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000094";
    }
else if($message == "UDN000096"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000096";
    }
else if($message == "UDN000097"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000097";
    }
else if($message == "UDN000098"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000098";
    }
else if($message == "UDN000099"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000099";
    }
else if($message == "UDN000100"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000100";
    }
else if($message == "UDN000101"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000101";
    }
else if($message == "UDN000102"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000102";
    }
else if($message == "UDN000103"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000103";
    }
else if($message == "UDN000104"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000104";
    }
else if($message == "UDN000106"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000106";
    }
else if($message == "UDN000107"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000107";
    }
else if($message == "UDN000108"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000108";
    }
else if($message == "UDN000109"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000109";
    }
else if($message == "UDN000110"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000110";
    }
else if($message == "UDN000112"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000112";
    }
else if($message == "UDN000113"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000113";
    }
else if($message == "UDN000114"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000114";
    }
else if($message == "UDN000115"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000115";
    }
else if($message == "UDN000116"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000116";
    }
else if($message == "UDN000117"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000117";
    }
else if($message == "UDN000118"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000118";
    }
else if($message == "UDN000119"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000119";
    }
else if($message == "UDN000120"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000120";
    }
else if($message == "UDN000121"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000121";
    }
else if($message == "UDN000122"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000122";
    }
else if($message == "UDN000123"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000123";
    }
else if($message == "UDN000124"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000124";
    }
else if($message == "UDN000125"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000125";
    }
else if($message == "UDN000127"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000127";
    }
else if($message == "UDN000128"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000128";
    }
else if($message == "UDN000129"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000129";
    }
else if($message == "UDN000130"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000130";
    }
else if($message == "UDN000131"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000131";
    }
else if($message == "UDN000133"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000133";
    }
else if($message == "UDN000134"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000134";
    }
else if($message == "UDN000135"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000135";
    }
else if($message == "UDN000136"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000136";
    }
else if($message == "UDN000137"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000137";
    }
else if($message == "UDN000138"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000138";
    }
else if($message == "UDN000139"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000139";
    }
else if($message == "UDN000141"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000141";
    }
else if($message == "UDN000142"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000142";
    }
else if($message == "UDN000143"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000143";
    }
else if($message == "UDN000144"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000144";
    }
else if($message == "UDN000145"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000145";
    }
else if($message == "UDN000146"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000146";
    }
else if($message == "UDN000147"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000147";
    }
else if($message == "UDN000148"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000148";
    }
else if($message == "UDN000149"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000149";
    }
else if($message == "UDN000150"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000150";
    }
else if($message == "UDN000151"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000151";
    }
else if($message == "UDN000152"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000152";
    }
else if($message == "UDN000153"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000153";
    }
else if($message == "UDN000154"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000154";
    }
else if($message == "UDN000155"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000155";
    }
else if($message == "UDN000156"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000156";
    }
else if($message == "UDN000157"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000157";
    }
else if($message == "UDN000159"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000159";
    }
else if($message == "UDN000160"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000160";
    }
else if($message == "UDN000161"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000161";
    }
else if($message == "UDN000163"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000163";
    }
else if($message == "UDN000164"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000164";
    }
else if($message == "UDN000165"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000165";
    }
else if($message == "UDN000166"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000166";
    }
else if($message == "UDN000167"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000167";
    }
else if($message == "UDN000168"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000168";
    }
else if($message == "UDN000169"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000169";
    }
else if($message == "UDN000170"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000170";
    }
else if($message == "UDN000171"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000171";
    }
else if($message == "UDN000172"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000172";
    }
else if($message == "UDN000173"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000173";
    }
else if($message == "UDN000174"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000174";
    }
else if($message == "UDN000175"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000175";
    }
else if($message == "UDN000176"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000176";
    }
else if($message == "UDN000177"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000177";
    }
else if($message == "UDN000178"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000178";
    }
else if($message == "UDN000179"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000179";
    }
else if($message == "UDN000180"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000180";
    }
else if($message == "UDN000181"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000181";
    }
else if($message == "UDN000182"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000182";
    }
else if($message == "UDN000183"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000183";
    }
else if($message == "UDN000184"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000184";
    }
else if($message == "UDN000185"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000185";
    }
else if($message == "UDN000186"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000186";
    }
else if($message == "UDN000187"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000187";
    }
else if($message == "UDN000188"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000188";
    }
else if($message == "UDN000189"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000189";
    }
else if($message == "UDN000190"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000190";
    }
else if($message == "UDN000191"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000191";
    }
else if($message == "UDN000192"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000192";
    }
else if($message == "UDN000193"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000193";
    }
else if($message == "UDN000194"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000194";
    }
else if($message == "UDN000195"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000195";
    }
else if($message == "UDN000196"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000196";
    }
else if($message == "UDN000197"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000197";
    }
else if($message == "UDN000198"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000198";
    }
else if($message == "UDN000199"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000199";
    }
else if($message == "UDN000200"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000200";
    }
else if($message == "UDN000202"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000202";
    }
else if($message == "UDN000203"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000203";
    }
else if($message == "UDN000204"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000204";
    }
else if($message == "UDN000205"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000205";
    }
else if($message == "UDN000206"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000206";
    }
else if($message == "UDN000207"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000207";
    }
else if($message == "UDN000208"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000208";
    }
else if($message == "UDN000209"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000209";
    }
else if($message == "UDN000210"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000210";
    }
else if($message == "UDN000211"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000211";
    }
else if($message == "UDN000212"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000212";
    }
else if($message == "UDN000213"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000213";
    }
else if($message == "UDN000214"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000214";
    }
else if($message == "UDN000215"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000215";
    }
else if($message == "UDN000216"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000216";
    }
else if($message == "UDN000217"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000217";
    }
else if($message == "UDN000218"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000218";
    }
else if($message == "UDN000219"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000219";
    }
else if($message == "UDN000220"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000220";
    }
else if($message == "UDN000221"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000221";
    }
else if($message == "UDN000222"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000222";
    }
else if($message == "UDN000223"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000223";
    }
else if($message == "UDN000224"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000224";
    }
else if($message == "UDN000225"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000225";
    }
else if($message == "UDN000226"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000226";
    }
else if($message == "UDN000227"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000227";
    }
else if($message == "UDN000228"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000228";
    }
else if($message == "UDN000229"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000229";
    }
else if($message == "UDN000230"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000230";
    }
else if($message == "UDN000231"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000231";
    }
else if($message == "UDN000232"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000232";
    }
else if($message == "UDN000233"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000233";
    }
else if($message == "UDN000234"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000234";
    }
else if($message == "UDN000235"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000235";
    }
else if($message == "UDN000236"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000236";
    }
else if($message == "UDN000237"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000237";
    }
else if($message == "UDN000238"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000238";
    }
else if($message == "UDN000239"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000239";
    }
else if($message == "UDN000240"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000240";
    }
else if($message == "UDN000241"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000241";
    }
else if($message == "UDN000242"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000242";
    }
else if($message == "UDN000243"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000243";
    }
else if($message == "UDN000244"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000244";
    }
else if($message == "UDN000245"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000245";
    }
else if($message == "UDN000246"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000246";
    }
else if($message == "UDN000247"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000247";
    }
else if($message == "UDN000248"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000248";
    }
else if($message == "UDN000249"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000249";
    }
else if($message == "UDN000250"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000250";
    }
else if($message == "UDN000251"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000251";
    }
else if($message == "UDN000252"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000252";
    }
else if($message == "UDN000253"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000253";
    }
else if($message == "UDN000254"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000254";
    }
else if($message == "UDN000255"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000255";
    }
else if($message == "UDN000256"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000256";
    }
else if($message == "UDN000257"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000257";
    }
else if($message == "UDN000258"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000258";
    }
else if($message == "UDN000259"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000259";
    }
else if($message == "UDN000260"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000260";
    }
else if($message == "UDN000261"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000261";
    }
else if($message == "UDN000262"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000262";
    }
else if($message == "UDN000263"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000263";
    }
else if($message == "UDN000264"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000264";
    }
else if($message == "UDN000265"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000265";
    }
else if($message == "UDN000266"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000266";
    }
else if($message == "UDN000267"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000267";
    }
else if($message == "UDN000268"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000268";
    }
else if($message == "UDN000269"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000269";
    }
else if($message == "UDN000270"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000270";
    }
else if($message == "UDN000271"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000271";
    }
else if($message == "UDN000272"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000272";
    }
else if($message == "UDN000273"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000273";
    }
else if($message == "UDN000274"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000274";
    }
else if($message == "UDN000275"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000275";
    }
else if($message == "UDN000276"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000276";
    }
else if($message == "UDN000277"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000277";
    }
else if($message == "UDN000278"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000278";
    }
else if($message == "UDN000279"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000279";
    }
else if($message == "UDN000280"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000280";
    }
else if($message == "UDN000281"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000281";
    }
else if($message == "UDN000282"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000282";
    }
else if($message == "UDN000283"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000283";
    }
else if($message == "UDN000284"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000284";
    }
else if($message == "UDN000285"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000285";
    }
else if($message == "UDN000286"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000286";
    }
else if($message == "UDN000287"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000287";
    }
else if($message == "UDN000288"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000288";
    }
else if($message == "UDN000289"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000289";
    }
else if($message == "UDN000290"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000290";
    }
else if($message == "UDN000291"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000291";
    }
else if($message == "UDN000365"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000365";
    }
else if($message == "UDN000366"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000366";
    }
else if($message == "UDN000367"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000367";
    }
else if($message == "UDN000368"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000368";
    }
else if($message == "UDN000369"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000369";
    }
else if($message == "UDN000370"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000370";
    }
else if($message == "UDN000371"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000371";
    }
else if($message == "UDN000372"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000372";
    }
else if($message == "UDN000373"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000373";
    }
else if($message == "UDN000374"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000374";
    }
else if($message == "UDN000375"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000375";
    }
else if($message == "UDN000376"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000376";
    }
else if($message == "UDN000377"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000377";
    }
else if($message == "UDN000378"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000378";
    }
else if($message == "UDN000379"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000379";
    }
else if($message == "UDN000380"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000380";
    }
else if($message == "UDN000381"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000381";
    }
else if($message == "UDN000382"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000382";
    }
else if($message == "UDN000383"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000383";
    }
else if($message == "UDN000384"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000384";
    }
else if($message == "UDN000385"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000385";
    }
else if($message == "UDN000386"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000386";
    }
else if($message == "UDN000387"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000387";
    }
else if($message == "UDN000388"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000388";
    }
else if($message == "UDN000389"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000389";
    }
else if($message == "UDN000390"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000390";
    }
else if($message == "UDN000391"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000391";
    }
else if($message == "UDN000392"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000392";
    }
else if($message == "UDN000393"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000393";
    }
else if($message == "UDN000394"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000394";
    }
else if($message == "UDN000395"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000395";
    }
else if($message == "UDN000396"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000396";
    }
else if($message == "UDN000397"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000397";
    }
else if($message == "UDN000398"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000398";
    }
else if($message == "UDN000399"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000399";
    }
else if($message == "UDN000400"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000400";
    }
else if($message == "UDN000401"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000401";
    }
else if($message == "UDN000402"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000402";
    }
else if($message == "UDN000403"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000403";
    }
else if($message == "UDN000404"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000404";
    }
else if($message == "UDN000405"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000405";
    }
else if($message == "UDN000406"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000406";
    }
else if($message == "UDN000407"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000407";
    }
else if($message == "UDN000408"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000408";
    }
else if($message == "UDN000409"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000409";
    }
else if($message == "UDN000410"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000410";
    }
else if($message == "UDN000411"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000411";
    }
else if($message == "UDN000412"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000412";
    }
else if($message == "UDN000413"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000413";
    }
else if($message == "UDN000414"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000414";
    }
else if($message == "UDN000415"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000415";
    }
else if($message == "UDN000416"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000416";
    }
else if($message == "UDN000417"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000417";
    }
else if($message == "UDN000418"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000418";
    }
else if($message == "UDN000419"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000419";
    }
else if($message == "UDN000420"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000420";
    }
else if($message == "UDN000421"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000421";
    }
else if($message == "UDN000422"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000422";
    }
else if($message == "UDN000423"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000423";
    }
else if($message == "UDN000424"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000424";
    }
else if($message == "UDN000425"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000425";
    }
else if($message == "UDN000426"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000426";
    }
else if($message == "UDN000427"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000427";
    }
else if($message == "UDN000428"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000428";
    }
else if($message == "UDN000429"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000429";
    }
else if($message == "UDN000430"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000430";
    }
else if($message == "UDN000431"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000431";
    }
else if($message == "UDN000432"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000432";
    }
else if($message == "UDN000433"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000433";
    }
else if($message == "UDN000434"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000434";
    }
else if($message == "UDN000435"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000435";
    }
else if($message == "UDN000436"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000436";
    }
else if($message == "UDN000437"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000437";
    }
else if($message == "UDN000438"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000438";
    }
else if($message == "UDN000439"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000439";
    }
else if($message == "UDN000440"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000440";
    }
else if($message == "UDN000441"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000441";
    }
else if($message == "UDN000442"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000442";
    }
else if($message == "UDN000443"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000443";
    }
else if($message == "UDN000444"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000444";
    }
else if($message == "UDN000445"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000445";
    }
else if($message == "UDN000446"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000446";
    }
else if($message == "UDN000447"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000447";
    }
else if($message == "UDN000448"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000448";
    }
else if($message == "UDN000449"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000449";
    }
else if($message == "UDN000450"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000450";
    }
else if($message == "UDN000453"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000453";
    }
else if($message == "UDN000454"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000454";
    }
else if($message == "UDN000455"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000455";
    }
else if($message == "UDN000456"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000456";
    }
else if($message == "UDN000457"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000457";
    }
else if($message == "UDN000458"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000458";
    }
else if($message == "UDN000459"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000459";
    }
else if($message == "UDN000460"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000460";
    }
else if($message == "UDN000461"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000461";
    }
else if($message == "UDN000462"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000462";
    }
else if($message == "UDN000463"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000463";
    }
else if($message == "UDN000464"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000464";
    }
else if($message == "UDN000465"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000465";
    }
else if($message == "UDN000466"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000466";
    }
else if($message == "UDN000467"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000467";
    }
else if($message == "UDN000468"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000468";
    }
else if($message == "UDN000469"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000469";
    }
else if($message == "UDN000470"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000470";
    }
else if($message == "UDN000471"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000471";
    }
else if($message == "UDN000472"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000472";
    }
else if($message == "UDN000473"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000473";
    }
else if($message == "UDN000474"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000474";
    }
else if($message == "UDN000475"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000475";
    }
else if($message == "UDN000476"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000476";
    }
else if($message == "UDN000477"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000477";
    }
else if($message == "UDN000478"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000478";
    }
else if($message == "UDN000479"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000479";
    }
else if($message == "UDN000480"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000480";
    }
else if($message == "UDN000481"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000481";
    }
else if($message == "UDN000482"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000482";
    }
else if($message == "UDN000483"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000483";
    }
else if($message == "UDN000484"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000484";
    }
else if($message == "UDN000485"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000485";
    }
else if($message == "UDN000486"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000486";
    }
else if($message == "UDN000487"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000487";
    }
else if($message == "UDN000488"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000488";
    }
else if($message == "UDN000489"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000489";
    }
else if($message == "UDN000490"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000490";
    }
else if($message == "UDN000491"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000491";
    }
else if($message == "UDN000492"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000492";
    }
else if($message == "UDN000493"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000493";
    }
else if($message == "UDN000494"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000494";
    }
else if($message == "UDN000495"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000495";
    }
else if($message == "UDN000496"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000496";
    }
else if($message == "UDN000497"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000497";
    }
else if($message == "UDN000498"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000498";
    }
else if($message == "UDN000499"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000499";
    }
else if($message == "UDN000500"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000500";
    }
else if($message == "UDN000501"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000501";
    }
else if($message == "UDN000502"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000502";
    }
else if($message == "UDN000503"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000503";
    }
else if($message == "UDN000504"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000504";
    }
else if($message == "UDN000505"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000505";
    }
else if($message == "UDN000506"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000506";
    }
else if($message == "UDN000507"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000507";
    }
else if($message == "UDN000508"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000508";
    }
else if($message == "UDN000509"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000509";
    }
else if($message == "UDN000510"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000510";
    }
else if($message == "UDN000511"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000511";
    }
else if($message == "UDN000512"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000512";
    }
else if($message == "UDN000513"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000513";
    }
else if($message == "UDN000514"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000514";
    }
else if($message == "UDN000515"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000515";
    }
else if($message == "UDN000516"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000516";
    }
else if($message == "UDN000517"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000517";
    }
else if($message == "UDN000518"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000518";
    }
else if($message == "UDN000519"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000519";
    }
else if($message == "UDN000520"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000520";
    }
else if($message == "UDN000521"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000521";
    }
else if($message == "UDN000522"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000522";
    }
else if($message == "UDN000523"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000523";
    }
else if($message == "UDN000524"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000524";
    }
else if($message == "UDN000525"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000525";
    }
else if($message == "UDN000526"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000526";
    }
else if($message == "UDN000527"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000527";
    }
else if($message == "UDN000528"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000528";
    }
else if($message == "UDN000529"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000529";
    }
else if($message == "UDN000530"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000530";
    }
else if($message == "UDN000531"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000531";
    }
else if($message == "UDN000532"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000532";
    }
else if($message == "UDN000533"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000533";
    }
else if($message == "UDN000534"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000534";
    }
else if($message == "UDN000535"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000535";
    }
else if($message == "UDN000536"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000536";
    }
else if($message == "UDN000537"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000537";
    }
else if($message == "UDN000538"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000538";
    }
else if($message == "UDN000539"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000539";
    }
else if($message == "UDN000540"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000540";
    }
else if($message == "UDN000541"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000541";
    }
else if($message == "UDN000542"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000542";
    }
else if($message == "UDN000543"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000543";
    }
else if($message == "UDN000544"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000544";
    }
else if($message == "UDN000545"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000545";
    }
else if($message == "UDN000546"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000546";
    }
else if($message == "UDN000547"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000547";
    }
else if($message == "UDN000548"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000548";
    }
else if($message == "UDN000549"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000549";
    }
else if($message == "UDN000550"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000550";
    }
else if($message == "UDN000551"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000551";
    }
else if($message == "UDN000552"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000552";
    }
else if($message == "UDN000553"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000553";
    }
else if($message == "UDN000555"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000555";
    }
else if($message == "UDN000556"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000556";
    }
else if($message == "UDN000557"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000557";
    }
else if($message == "UDN000558"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000558";
    }
else if($message == "UDN000559"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000559";
    }
else if($message == "UDN000560"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000560";
    }
else if($message == "UDN000561"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000561";
    }
else if($message == "UDN000562"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000562";
    }
else if($message == "UDN000563"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000563";
    }
else if($message == "UDN000564"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000564";
    }
else if($message == "UDN000565"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000565";
    }
else if($message == "UDN000566"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000566";
    }
else if($message == "UDN000567"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000567";
    }
else if($message == "UDN000568"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000568";
    }
else if($message == "UDN000569"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000569";
    }
else if($message == "UDN000570"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000570";
    }
else if($message == "UDN000572"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000572";
    }
else if($message == "UDN000573"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000573";
    }
else if($message == "UDN000574"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000574";
    }
else if($message == "UDN000575"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000575";
    }
else if($message == "UDN000576"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000576";
    }
else if($message == "UDN000577"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000577";
    }
else if($message == "UDN000578"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000578";
    }
else if($message == "UDN000579"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000579";
    }
else if($message == "UDN000580"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000580";
    }
else if($message == "UDN000581"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000581";
    }
else if($message == "UDN000582"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000582";
    }
else if($message == "UDN000583"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000583";
    }
else if($message == "UDN000584"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000584";
    }
else if($message == "UDN000585"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000585";
    }
else if($message == "UDN000586"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000586";
    }
else if($message == "UDN000587"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000587";
    }
else if($message == "UDN000588"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000588";
    }
else if($message == "UDN000589"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000589";
    }
else if($message == "UDN000593"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000593";
    }
else if($message == "UDN000602"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000602";
    }
else if($message == "UDN000609"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000609";
    }
else if($message == "UDN000610"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000610";
    }
else if($message == "UDN000611"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000611";
    }
else if($message == "UDN000612"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000612";
    }
else if($message == "UDN000613"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000613";
    }
else if($message == "UDN000614"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000614";
    }
else if($message == "UDN000615"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000615";
    }
else if($message == "UDN000616"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000616";
    }
else if($message == "UDN000617"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000617";
    }
else if($message == "UDN000618"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000618";
    }
else if($message == "UDN000619"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000619";
    }
else if($message == "UDN000620"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000620";
    }
else if($message == "UDN000621"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000621";
    }
else if($message == "UDN000622"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000622";
    }
else if($message == "UDN000623"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000623";
    }
else if($message == "UDN000624"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000624";
    }
else if($message == "UDN000625"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000625";
    }
else if($message == "UDN000626"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000626";
    }
else if($message == "UDN000627"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000627";
    }
else if($message == "UDN000628"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000628";
    }
else if($message == "UDN000629"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000629";
    }
else if($message == "UDN000630"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000630";
    }
else if($message == "UDN000631"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000631";
    }
else if($message == "UDN000632"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000632";
    }
else if($message == "UDN000633"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000633";
    }
else if($message == "UDN000634"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000634";
    }
else if($message == "UDN000635"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000635";
    }
else if($message == "UDN000636"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000636";
    }
else if($message == "UDN000637"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000637";
    }
else if($message == "UDN000638"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000638";
    }
else if($message == "UDN000639"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000639";
    }
else if($message == "UDN000640"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000640";
    }
else if($message == "UDN000641"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000641";
    }
else if($message == "UDN000642"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000642";
    }
else if($message == "UDN000643"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000643";
    }
else if($message == "UDN000647"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000647";
    }
else if($message == "UDN000649"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000649";
    }
else if($message == "UDN000650"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000650";
    }
else if($message == "UDN000651"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000651";
    }
else if($message == "UDN000652"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000652";
    }
else if($message == "UDN000653"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000653";
    }
else if($message == "UDN000654"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000654";
    }
else if($message == "UDN000655"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000655";
    }
else if($message == "UDN000656"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000656";
    }
else if($message == "UDN000657"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000657";
    }
else if($message == "UDN000658"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000658";
    }
else if($message == "UDN000659"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000659";
    }
else if($message == "UDN000661"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000661";
    }
else if($message == "UDN000662"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000662";
    }
else if($message == "UDN000663"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000663";
    }
else if($message == "UDN000664"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000664";
    }
else if($message == "UDN000667"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000667";
    }
else if($message == "UDN000668"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000668";
    }
else if($message == "UDN000673"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000673";
    }
else if($message == "UDN000679"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000679";
    }
else if($message == "UDN000683"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000683";
    }
else if($message == "UDN000684"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000684";
    }
else if($message == "UDN000685"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000685";
    }
else if($message == "UDN000686"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000686";
    }
else if($message == "UDN000687"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000687";
    }
else if($message == "UDN000688"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000688";
    }
else if($message == "UDN000689"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000689";
    }
else if($message == "UDN000691"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000691";
    }
else if($message == "UDN000693"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000693";
    }
else if($message == "UDN000694"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000694";
    }
else if($message == "UDN000695"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000695";
    }
else if($message == "UDN000705"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000705";
    }
else if($message == "UDN000708"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000708";
    }
else if($message == "UDN000710"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000710";
    }
else if($message == "UDN000711"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000711";
    }
else if($message == "UDN000712"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000712";
    }
else if($message == "UDN000713"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000713";
    }
else if($message == "UDN000716"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000716";
    }
else if($message == "UDN000717"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000717";
    }
else if($message == "UDN000719"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000719";
    }
else if($message == "UDN000720"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000720";
    }
else if($message == "UDN000721"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000721";
    }
else if($message == "UDN000722"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000722";
    }
else if($message == "UDN000723"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000723";
    }
else if($message == "UDN000724"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000724";
    }
else if($message == "UDN000725"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000725";
    }
else if($message == "UDN000727"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000727";
    }
else if($message == "UDN000728"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000728";
    }
else if($message == "UDN000729"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000729";
    }
else if($message == "UDN000732"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000732";
    }
else if($message == "UDN000733"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000733";
    }
else if($message == "UDN000734"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000734";
    }
else if($message == "UDN000735"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000735";
    }
else if($message == "UDN000743"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000743";
    }
else if($message == "UDN000744"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000744";
    }
else if($message == "UDN000745"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000745";
    }
else if($message == "UDN000746"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000746";
    }
else if($message == "UDN000747"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000747";
    }
else if($message == "UDN000748"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000748";
    }
else if($message == "UDN000749"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000749";
    }
else if($message == "UDN000750"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000750";
    }
else if($message == "UDN000751"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000751";
    }
else if($message == "UDN000752"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000752";
    }
else if($message == "UDN000753"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000753";
    }
else if($message == "UDN000754"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000754";
    }
else if($message == "UDN000756"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000756";
    }
else if($message == "UDN000757"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000757";
    }
else if($message == "UDN000758"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000758";
    }
else if($message == "UDN000759"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000759";
    }
else if($message == "UDN000761"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000761";
    }
else if($message == "UDN000763"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000763";
    }
else if($message == "UDN000764"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000764";
    }
else if($message == "UDN000765"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000765";
    }
else if($message == "UDN000766"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000766";
    }
else if($message == "UDN000767"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000767";
    }
else if($message == "UDN000768"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000768";
    }
else if($message == "UDN000769"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000769";
    }
else if($message == "UDN000770"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000770";
    }
else if($message == "UDN000771"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000771";
    }
else if($message == "UDN000772"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000772";
    }
else if($message == "UDN000773"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000773";
    }
else if($message == "UDN000774"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000774";
    }
else if($message == "UDN000775"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000775";
    }
else if($message == "UDN000776"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000776";
    }
else if($message == "UDN000777"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000777";
    }
else if($message == "UDN000778"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000778";
    }
else if($message == "UDN000779"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000779";
    }
else if($message == "UDN000780"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000780";
    }
else if($message == "UDN000781"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000781";
    }
else if($message == "UDN000782"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000782";
    }
else if($message == "UDN000783"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000783";
    }
else if($message == "UDN000785"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000785";
    }
else if($message == "UDN000787"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000787";
    }
else if($message == "UDN000790"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000790";
    }
else if($message == "UDN000791"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000791";
    }
else if($message == "UDN000793"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000793";
    }
else if($message == "UDN000795"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000795";
    }
else if($message == "UDN000796"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000796";
    }
else if($message == "UDN000797"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000797";
    }
else if($message == "UDN000798"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000798";
    }
else if($message == "UDN000799"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000799";
    }
else if($message == "UDN000800"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000800";
    }
else if($message == "UDN000801"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000801";
    }
else if($message == "UDN000804"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000804";
    }
else if($message == "UDN000806"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000806";
    }
else if($message == "UDN000807"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000807";
    }
else if($message == "UDN000808"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000808";
    }
else if($message == "UDN000809"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000809";
    }
else if($message == "UDN000813"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000813";
    }
else if($message == "UDN000814"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000814";
    }
else if($message == "UDN000816"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000816";
    }
else if($message == "UDN000817"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000817";
    }
else if($message == "UDN000818"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000818";
    }
else if($message == "UDN000819"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000819";
    }
else if($message == "UDN000821"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000821";
    }
else if($message == "UDN000822"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000822";
    }
else if($message == "UDN000823"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000823";
    }
else if($message == "UDN000824"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000824";
    }
else if($message == "UDN000825"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000825";
    }
else if($message == "UDN000829"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000829";
    }
else if($message == "UDN000833"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000833";
    }
else if($message == "UDN000834"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000834";
    }
else if($message == "UDN000836"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000836";
    }
else if($message == "UDN000837"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000837";
    }
else if($message == "UDN000840"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000840";
    }
else if($message == "UDN000843"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000843";
    }
else if($message == "UDN000846"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000846";
    }
else if($message == "UDN000847"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000847";
    }
else if($message == "UDN000848"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000848";
    }
else if($message == "UDN000849"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000849";
    }
else if($message == "UDN000851"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000851";
    }
else if($message == "UDN000855"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000855";
    }
else if($message == "UDN000856"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000856";
    }
else if($message == "UDN000857"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000857";
    }
else if($message == "UDN000858"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000858";
    }
else if($message == "UDN000861"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000861";
    }
else if($message == "UDN000862"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000862";
    }
else if($message == "UDN000863"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000863";
    }
else if($message == "UDN000864"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000864";
    }
else if($message == "UDN000866"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000866";
    }
else if($message == "UDN000867"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000867";
    }
else if($message == "UDN000868"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000868";
    }
else if($message == "UDN000869"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000869";
    }
else if($message == "UDN000870"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000870";
    }
else if($message == "UDN000876"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000876";
    }
else if($message == "UDN000877"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000877";
    }
else if($message == "UDN000878"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000878";
    }
else if($message == "UDN000879"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000879";
    }
else if($message == "UDN000882"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000882";
    }
else if($message == "UDN000885"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000885";
    }
else if($message == "UDN000889"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000889";
    }
else if($message == "UDN000892"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000892";
    }
else if($message == "UDN000894"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000894";
    }
else if($message == "UDN000896"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000896";
    }
else if($message == "UDN000897"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000897";
    }
else if($message == "UDN000898"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000898";
    }
else if($message == "UDN000899"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000899";
    }
else if($message == "UDN000900"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000900";
    }
else if($message == "UDN000901"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000901";
    }
else if($message == "UDN000903"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000903";
    }
else if($message == "UDN000907"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000907";
    }
else if($message == "UDN000909"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000909";
    }
else if($message == "UDN000912"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000912";
    }
else if($message == "UDN000913"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000913";
    }
else if($message == "UDN000918"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000918";
    }
else if($message == "UDN000923"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000923";
    }
else if($message == "UDN000924"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000924";
    }
else if($message == "UDN000925"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000925";
    }
else if($message == "UDN000926"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000926";
    }
else if($message == "UDN000927"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000927";
    }
else if($message == "UDN000928"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000928";
    }
else if($message == "UDN000929"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000929";
    }
else if($message == "UDN000930"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000930";
    }
else if($message == "UDN000931"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000931";
    }
else if($message == "UDN000932"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000932";
    }
else if($message == "UDN000933"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000933";
    }
else if($message == "UDN000934"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000934";
    }
else if($message == "UDN000935"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000935";
    }
else if($message == "UDN000936"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000936";
    }
else if($message == "UDN000937"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000937";
    }
else if($message == "UDN000940"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000940";
    }
else if($message == "UDN000941"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000941";
    }
else if($message == "UDN000943"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000943";
    }
else if($message == "UDN000944"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000944";
    }
else if($message == "UDN000945"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000945";
    }
else if($message == "UDN000947"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000947";
    }
else if($message == "UDN000949"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000949";
    }
else if($message == "UDN000950"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000950";
    }
else if($message == "UDN000951"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000951";
    }
else if($message == "UDN000953"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000953";
    }
else if($message == "UDN000954"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000954";
    }
else if($message == "UDN000955"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000955";
    }
else if($message == "UDN000956"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000956";
    }
else if($message == "UDN000957"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000957";
    }
else if($message == "UDN000958"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000958";
    }
else if($message == "UDN000959"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000959";
    }
else if($message == "UDN000964"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000964";
    }
else if($message == "UDN000965"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000965";
    }
else if($message == "UDN000966"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000966";
    }
else if($message == "UDN000968"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000968";
    }
else if($message == "UDN000969"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000969";
    }
else if($message == "UDN000970"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000970";
    }
else if($message == "UDN000972"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000972";
    }
else if($message == "UDN000973"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000973";
    }
else if($message == "UDN000974"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000974";
    }
else if($message == "UDN000975"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000975";
    }
else if($message == "UDN000977"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000977";
    }
else if($message == "UDN000978"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000978";
    }
else if($message == "UDN000981"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000981";
    }
else if($message == "UDN000985"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000985";
    }
else if($message == "UDN000988"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000988";
    }
else if($message == "UDN000989"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000989";
    }
else if($message == "UDN000990"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000990";
    }
else if($message == "UDN000991"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000991";
    }
else if($message == "UDN000992"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000992";
    }
else if($message == "UDN000993"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000993";
    }
else if($message == "UDN000994"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000994";
    }
else if($message == "UDN000995"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000995";
    }
else if($message == "UDN000996"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000996";
    }
else if($message == "UDN000997"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000997";
    }
else if($message == "UDN000998"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000998";
    }
else if($message == "UDN001000"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001000";
    }
else if($message == "UDN001001"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001001";
    }
else if($message == "UDN001002"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001002";
    }
else if($message == "UDN001003"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001003";
    }
else if($message == "UDN001004"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001004";
    }
else if($message == "UDN001005"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001005";
    }
else if($message == "UDN001011"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001011";
    }
else if($message == "UDN001012"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001012";
    }
else if($message == "UDN001014"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001014";
    }
else if($message == "UDN001017"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001017";
    }
else if($message == "UDN001022"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001022";
    }
else if($message == "UDN001023"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001023";
    }
else if($message == "UDN001024"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001024";
    }
else if($message == "UDN001025"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001025";
    }
else if($message == "UDN001026"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001026";
    }
else if($message == "UDN001027"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001027";
    }
else if($message == "UDN001028"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001028";
    }
else if($message == "UDN001030"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001030";
    }
else if($message == "UDN001031"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001031";
    }
else if($message == "UDN001032"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001032";
    }
else if($message == "UDN001033"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001033";
    }
else if($message == "UDN001034"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001034";
    }
else if($message == "UDN001035"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001035";
    }
else if($message == "UDN001036"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001036";
    }
else if($message == "UDN001037"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001037";
    }
else if($message == "UDN001038"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001038";
    }
else if($message == "UDN001039"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001039";
    }
else if($message == "UDN001040"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001040";
    }
else if($message == "UDN001041"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001041";
    }
else if($message == "UDN001042"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001042";
    }
else if($message == "UDN001043"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001043";
    }
else if($message == "UDN001044"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001044";
    }
else if($message == "UDN001045"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001045";
    }
else if($message == "UDN001046"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001046";
    }
else if($message == "UDN001047"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001047";
    }
else if($message == "UDN001048"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001048";
    }
else if($message == "UDN001049"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001049";
    }
else if($message == "UDN001050"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001050";
    }
else if($message == "UDN001051"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001051";
    }
else if($message == "UDN001052"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001052";
    }
else if($message == "UDN001053"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001053";
    }
else if($message == "UDN001054"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001054";
    }
else if($message == "UDN001055"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001055";
    }
else if($message == "UDN001056"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001056";
    }
else if($message == "UDN001057"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001057";
    }
else if($message == "UDN001058"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001058";
    }
else if($message == "UDN001059"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001059";
    }
else if($message == "UDN001060"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001060";
    }
else if($message == "UDN001061"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001061";
    }
else if($message == "UDN001065"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001065";
    }
else if($message == "UDN001067"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001067";
    }
else if($message == "UDN001068"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001068";
    }
else if($message == "UDN001070"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001070";
    }
else if($message == "UDN001071"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001071";
    }
else if($message == "UDN001072"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001072";
    }
else if($message == "UDN001073"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001073";
    }
else if($message == "UDN001074"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001074";
    }
else if($message == "UDN001075"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001075";
    }
else if($message == "UDN001076"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001076";
    }
else if($message == "UDN001077"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001077";
    }
else if($message == "UDN001078"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001078";
    }
else if($message == "UDN001079"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001079";
    }
else if($message == "UDN001080"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001080";
    }
else if($message == "UDN001081"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001081";
    }
else if($message == "UDN001082"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001082";
    }
else if($message == "UDN001083"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001083";
    }
else if($message == "UDN001084"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001084";
    }
else if($message == "UDN001085"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001085";
    }
else if($message == "UDN001086"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001086";
    }
else if($message == "UDN001087"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001087";
    }
else if($message == "UDN001088"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001088";
    }
else if($message == "UDN001089"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001089";
    }
else if($message == "UDN001090"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001090";
    }
else if($message == "UDN001091"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001091";
    }
else if($message == "UDN001092"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001092";
    }
else if($message == "UDN001093"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001093";
    }
else if($message == "UDN001094"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001094";
    }
else if($message == "UDN001095"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001095";
    }
else if($message == "UDN001096"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001096";
    }
else if($message == "UDN001097"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001097";
    }
else if($message == "UDN001098"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001098";
    }
else if($message == "UDN001099"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001099";
    }
else if($message == "UDN001100"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001100";
    }
else if($message == "UDN001101"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001101";
    }
else if($message == "UDN001102"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001102";
    }
else if($message == "UDN001103"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001103";
    }
else if($message == "UDN001104"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001104";
    }
else if($message == "UDN001105"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001105";
    }
else if($message == "UDN001106"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001106";
    }
else if($message == "UDN001107"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001107";
    }
else if($message == "UDN001108"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001108";
    }
else if($message == "UDN001109"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001109";
    }
else if($message == "UDN001110"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001110";
    }
else if($message == "UDN001111"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001111";
    }
else if($message == "UDN001112"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001112";
    }
else if($message == "UDN001113"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001113";
    }
else if($message == "UDN001114"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001114";
    }
else if($message == "UDN001115"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001115";
    }
else if($message == "UDN001116"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001116";
    }
else if($message == "UDN001117"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001117";
    }
else if($message == "UDN001118"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001118";
    }
else if($message == "UDN001119"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001119";
    }
else if($message == "UDN001120"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001120";
    }
else if($message == "UDN001121"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001121";
    }
else if($message == "UDN001122"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001122";
    }
else if($message == "UDN001123"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001123";
    }
else if($message == "UDN001124"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001124";
    }
else if($message == "UDN001125"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001125";
    }
else if($message == "UDN001126"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001126";
    }
else if($message == "UDN001127"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001127";
    }
else if($message == "UDN001128"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001128";
    }
else if($message == "UDN001129"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001129";
    }
else if($message == "UDN001130"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001130";
    }
else if($message == "UDN001131"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001131";
    }
else if($message == "UDN001132"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001132";
    }
else if($message == "UDN001133"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001133";
    }
else if($message == "UDN001134"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001134";
    }
else if($message == "UDN001135"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001135";
    }
else if($message == "UDN001136"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001136";
    }
else if($message == "UDN001137"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001137";
    }
else if($message == "UDN001138"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001138";
    }
else if($message == "UDN001139"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001139";
    }
else if($message == "UDN001142"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001142";
    }
else if($message == "UDN001143"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001143";
    }
else if($message == "UDN001144"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001144";
    }
else if($message == "UDN001145"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001145";
    }
else if($message == "UDN001146"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001146";
    }
else if($message == "UDN001147"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001147";
    }
else if($message == "UDN001148"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001148";
    }
else if($message == "UDN001149"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001149";
    }
else if($message == "UDN001150"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001150";
    }
else if($message == "UDN001151"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001151";
    }
else if($message == "UDN001152"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001152";
    }
else if($message == "UDN001153"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001153";
    }
else if($message == "UDN001154"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001154";
    }
else if($message == "UDN001155"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001155";
    }
else if($message == "UDN001156"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001156";
    }
else if($message == "UDN001157"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001157";
    }
else if($message == "UDN001158"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001158";
    }
else if($message == "UDN001159"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001159";
    }
else if($message == "UDN001160"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001160";
    }
else if($message == "UDN001161"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001161";
    }
else if($message == "UDN001162"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001162";
    }
else if($message == "UDN001163"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001163";
    }
else if($message == "UDN001164"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001164";
    }
else if($message == "UDN001165"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001165";
    }
else if($message == "UDN001166"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001166";
    }
else if($message == "UDN001167"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001167";
    }
else if($message == "UDN001168"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001168";
    }
else if($message == "UDN001169"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001169";
    }
else if($message == "UDN001170"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001170";
    }
else if($message == "UDN001171"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001171";
    }
else if($message == "UDN001172"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001172";
    }
else if($message == "UDN001173"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001173";
    }
else if($message == "UDN001174"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001174";
    }
else if($message == "UDN001175"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001175";
    }
else if($message == "UDN001176"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001176";
    }
else if($message == "UDN001177"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001177";
    }
else if($message == "UDN001178"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001178";
    }
else if($message == "UDN001179"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001179";
    }
else if($message == "UDN001180"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001180";
    }
else if($message == "UDN001181"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001181";
    }
else if($message == "UDN001182"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001182";
    }
else if($message == "UDN001183"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001183";
    }
else if($message == "UDN001184"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001184";
    }
else if($message == "UDN001185"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001185";
    }
else if($message == "UDN001186"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001186";
    }
else if($message == "UDN001187"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001187";
    }
else if($message == "UDN001188"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001188";
    }
else if($message == "UDN001189"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001189";
    }
else if($message == "UDN001190"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001190";
    }
else if($message == "UDN001191"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001191";
    }
else if($message == "UDN001192"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001192";
    }
else if($message == "UDN001193"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001193";
    }
else if($message == "UDN001194"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001194";
    }
else if($message == "UDN001195"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001195";
    }
else if($message == "UDN001196"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001196";
    }
else if($message == "UDN001197"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001197";
    }
else if($message == "UDN001198"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001198";
    }
else if($message == "UDN001199"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001199";
    }
else if($message == "UDN001200"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001200";
    }
else if($message == "UDN001201"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001201";
    }
else if($message == "UDN001203"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001203";
    }
else if($message == "UDN001204"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001204";
    }
else if($message == "UDN001205"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001205";
    }
else if($message == "UDN001206"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001206";
    }
else if($message == "UDN001207"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001207";
    }
else if($message == "UDN001208"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001208";
    }
else if($message == "UDN001209"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001209";
    }
else if($message == "UDN001210"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001210";
    }
else if($message == "UDN001211"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001211";
    }
else if($message == "UDN001212"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001212";
    }
else if($message == "UDN001213"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001213";
    }
else if($message == "UDN001214"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001214";
    }
else if($message == "UDN001215"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001215";
    }
else if($message == "UDN001216"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001216";
    }
else if($message == "UDN001217"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001217";
    }
else if($message == "UDN001219"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001219";
    }
else if($message == "UDN001220"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001220";
    }
else if($message == "UDN001221"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001221";
    }
else if($message == "UDN001222"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001222";
    }
else if($message == "UDN001223"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001223";
    }
else if($message == "UDN001224"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001224";
    }
else if($message == "UDN001225"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001225";
    }
else if($message == "UDN001226"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001226";
    }
else if($message == "UDN001227"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001227";
    }
else if($message == "UDN001228"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001228";
    }
else if($message == "UDN001229"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001229";
    }
else if($message == "UDN001230"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001230";
    }
else if($message == "UDN001231"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001231";
    }
else if($message == "UDN001232"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001232";
    }
else if($message == "UDN001233"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001233";
    }
else if($message == "UDN001234"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001234";
    }
else if($message == "UDN001235"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001235";
    }
else if($message == "UDN001236"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001236";
    }
else if($message == "UDN001237"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001237";
    }
else if($message == "UDN001238"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001238";
    }
else if($message == "UDN001239"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001239";
    }
else if($message == "UDN001240"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001240";
    }
else if($message == "UDN001241"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001241";
    }
else if($message == "UDN001242"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001242";
    }
else if($message == "UDN001243"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001243";
    }
else if($message == "UDN001244"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001244";
    }
else if($message == "UDN001245"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001245";
    }
else if($message == "UDN001246"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001246";
    }
else if($message == "UDN001247"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001247";
    }
else if($message == "UDN001248"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001248";
    }
else if($message == "UDN001249"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001249";
    }
else if($message == "UDN001250"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001250";
    }
else if($message == "UDN001251"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001251";
    }
else if($message == "UDN001252"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001252";
    }
else if($message == "UDN001253"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001253";
    }
else if($message == "UDN001254"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001254";
    }
else if($message == "UDN001255"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001255";
    }
else if($message == "UDN001256"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001256";
    }
else if($message == "UDN001257"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001257";
    }
else if($message == "UDN001258"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001258";
    }
else if($message == "UDN001259"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001259";
    }
else if($message == "UDN001260"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001260";
    }
else if($message == "UDN001261"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001261";
    }
else if($message == "UDN001262"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001262";
    }
else if($message == "UDN001263"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001263";
    }
else if($message == "UDN001264"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001264";
    }
else if($message == "UDN001265"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001265";
    }
else if($message == "UDN001266"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001266";
    }
else if($message == "UDN001268"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001268";
    }
else if($message == "UDN001269"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001269";
    }
else if($message == "UDN001270"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001270";
    }
else if($message == "UDN001271"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001271";
    }
else if($message == "UDN001272"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001272";
    }
else if($message == "UDN001273"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001273";
    }
else if($message == "UDN001274"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001274";
    }
else if($message == "UDN001275"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001275";
    }
else if($message == "UDN001276"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001276";
    }
else if($message == "UDN001277"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001277";
    }
else if($message == "UDN001278"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001278";
    }
else if($message == "UDN001279"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001279";
    }
else if($message == "UDN001280"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001280";
    }
else if($message == "UDN001281"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001281";
    }
else if($message == "UDN001282"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001282";
    }
else if($message == "UDN001283"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001283";
    }
else if($message == "UDN001284"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001284";
    }
else if($message == "UDN001285"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001285";
    }
else if($message == "UDN001286"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001286";
    }
else if($message == "UDN001287"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001287";
    }
else if($message == "UDN001288"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001288";
    }
else if($message == "UDN001289"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001289";
    }
else if($message == "UDN001290"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001290";
    }
else if($message == "UDN001291"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001291";
    }
else if($message == "UDN001292"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001292";
    }
else if($message == "UDN001293"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001293";
    }
else if($message == "UDN001294"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001294";
    }
else if($message == "UDN001295"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001295";
    }
else if($message == "UDN001296"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001296";
    }
else if($message == "UDN001297"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001297";
    }
else if($message == "UDN001298"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001298";
    }
else if($message == "UDN001299"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001299";
    }
else if($message == "UDN001300"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001300";
    }
else if($message == "UDN001301"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001301";
    }
else if($message == "UDN001302"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001302";
    }
else if($message == "UDN001303"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001303";
    }
else if($message == "UDN001304"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001304";
    }
else if($message == "UDN001305"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001305";
    }
else if($message == "UDN001306"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001306";
    }
else if($message == "UDN001307"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001307";
    }
else if($message == "UDN001308"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001308";
    }
else if($message == "UDN001309"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001309";
    }
else if($message == "UDN001310"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001310";
    }
else if($message == "UDN001311"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001311";
    }
else if($message == "UDN001313"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001313";
    }
else if($message == "UDN001314"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001314";
    }
else if($message == "UDN001315"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001315";
    }
else if($message == "UDN001316"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001316";
    }
else if($message == "UDN001317"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001317";
    }
else if($message == "UDN001318"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001318";
    }
else if($message == "UDN001319"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001319";
    }
else if($message == "UDN001320"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001320";
    }
else if($message == "UDN001321"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001321";
    }
else if($message == "UDN001322"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001322";
    }
else if($message == "UDN001323"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001323";
    }
else if($message == "UDN001324"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001324";
    }
else if($message == "UDN001325"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001325";
    }
else if($message == "UDN001326"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001326";
    }
else if($message == "UDN001327"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001327";
    }
else if($message == "UDN001328"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001328";
    }
else if($message == "UDN001329"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001329";
    }
else if($message == "UDN001330"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001330";
    }
else if($message == "UDN001331"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001331";
    }
else if($message == "UDN001332"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001332";
    }
else if($message == "UDN001333"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001333";
    }
else if($message == "UDN001334"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001334";
    }
else if($message == "UDN001335"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001335";
    }
else if($message == "UDN001336"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001336";
    }
else if($message == "UDN001337"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001337";
    }
else if($message == "UDN001338"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001338";
    }
else if($message == "UDN001339"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001339";
    }
else if($message == "UDN001340"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001340";
    }
else if($message == "UDN001341"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001341";
    }
else if($message == "UDN001342"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001342";
    }
else if($message == "UDN001345"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001345";
    }
else if($message == "UDN001346"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001346";
    }
else if($message == "UDN001347"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001347";
    }
else if($message == "UDN001348"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001348";
    }
else if($message == "UDN001349"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001349";
    }
else if($message == "UDN001350"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001350";
    }
else if($message == "UDN001351"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001351";
    }
else if($message == "UDN001352"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001352";
    }
else if($message == "UDN001353"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001353";
    }
else if($message == "UDN001354"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001354";
    }
else if($message == "UDN001355"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001355";
    }
else if($message == "UDN001356"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001356";
    }
else if($message == "UDN001357"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001357";
    }
else if($message == "UDN001360"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001360";
    }
else if($message == "UDN001361"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001361";
    }
else if($message == "UDN001362"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001362";
    }
else if($message == "UDN001363"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001363";
    }
else if($message == "UDN001364"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001364";
    }
else if($message == "UDN001365"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001365";
    }
else if($message == "UDN001366"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001366";
    }
else if($message == "UDN001367"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001367";
    }
else if($message == "UDN001368"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001368";
    }
else if($message == "UDN001369"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001369";
    }
else if($message == "UDN001370"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001370";
    }
else if($message == "UDN001371"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001371";
    }
else if($message == "UDN001372"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001372";
    }
else if($message == "UDN001373"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001373";
    }
else if($message == "UDN001374"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001374";
    }
else if($message == "UDN001375"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001375";
    }
else if($message == "UDN001376"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001376";
    }
else if($message == "UDN001377"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001377";
    }
else if($message == "UDN001378"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001378";
    }
else if($message == "UDN001379"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001379";
    }
else if($message == "UDN001380"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001380";
    }
else if($message == "UDN001381"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001381";
    }
else if($message == "UDN001382"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001382";
    }
else if($message == "UDN001383"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001383";
    }
else if($message == "UDN001384"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001384";
    }
else if($message == "UDN001385"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001385";
    }
else if($message == "UDN001386"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001386";
    }
else if($message == "UDN001387"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001387";
    }
else if($message == "UDN001388"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001388";
    }
else if($message == "UDN001389"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001389";
    }
else if($message == "UDN001390"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001390";
    }
else if($message == "UDN001391"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001391";
    }
else if($message == "UDN001392"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001392";
    }
else if($message == "UDN001394"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001394";
    }
else if($message == "UDN001395"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001395";
    }
else if($message == "UDN001396"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001396";
    }
else if($message == "UDN001397"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001397";
    }
else if($message == "UDN001398"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001398";
    }
else if($message == "UDN001399"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001399";
    }
else if($message == "UDN001400"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001400";
    }
else if($message == "UDN001401"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001401";
    }
else if($message == "UDN001402"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001402";
    }
else if($message == "UDN001403"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001403";
    }
else if($message == "UDN001404"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001404";
    }
else if($message == "UDN001405"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001405";
    }
else if($message == "UDN001406"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001406";
    }
else if($message == "UDN001407"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001407";
    }
else if($message == "UDN001408"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001408";
    }
else if($message == "UDN001409"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001409";
    }
else if($message == "UDN001410"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001410";
    }
else if($message == "UDN001411"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001411";
    }
else if($message == "UDN001412"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001412";
    }
else if($message == "UDN001413"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001413";
    }
else if($message == "UDN001414"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001414";
    }
else if($message == "UDN001418"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001418";
    }
else if($message == "UDN001419"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001419";
    }
else if($message == "UDN001420"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001420";
    }
else if($message == "UDN001421"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001421";
    }
else if($message == "UDN001422"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001422";
    }
else if($message == "UDN001423"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001423";
    }
else if($message == "UDN001424"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001424";
    }
else if($message == "UDN001425"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001425";
    }
else if($message == "UDN001426"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001426";
    }
else if($message == "UDN001427"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001427";
    }
else if($message == "UDN001428"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001428";
    }
else if($message == "UDN001429"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001429";
    }
else if($message == "UDN001430"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001430";
    }
else if($message == "UDN001431"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001431";
    }
else if($message == "UDN001432"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001432";
    }
else if($message == "UDN001433"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001433";
    }
else if($message == "UDN001434"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001434";
    }
else if($message == "UDN001435"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001435";
    }
else if($message == "UDN001436"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001436";
    }
else if($message == "UDN001437"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001437";
    }
else if($message == "UDN001438"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001438";
    }
else if($message == "UDN001439"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001439";
    }
else if($message == "UDN001440"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001440";
    }
else if($message == "UDN001441"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001441";
    }
else if($message == "UDN001442"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001442";
    }
else if($message == "UDN001443"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001443";
    }
else if($message == "UDN001444"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001444";
    }
else if($message == "UDN001445"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001445";
    }
else if($message == "UDN001446"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001446";
    }
else if($message == "UDN001447"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001447";
    }
else if($message == "UDN001448"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001448";
    }
else if($message == "UDN001449"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001449";
    }
else if($message == "UDN001450"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001450";
    }
else if($message == "UDN001453"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001453";
    }
else if($message == "UDN001454"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001454";
    }
else if($message == "UDN001455"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001455";
    }
else if($message == "UDN001456"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001456";
    }
else if($message == "UDN001457"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001457";
    }
else if($message == "UDN001458"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001458";
    }
else if($message == "UDN001459"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001459";
    }
else if($message == "UDN001460"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001460";
    }
else if($message == "UDN001461"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001461";
    }
else if($message == "UDN001462"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001462";
    }
else if($message == "UDN001463"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001463";
    }
else if($message == "UDN001464"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001464";
    }
else if($message == "UDN001465"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001465";
    }
else if($message == "UDN001466"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001466";
    }
else if($message == "UDN001467"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001467";
    }
else if($message == "UDN001472"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001472";
    }
else if($message == "UDN001473"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001473";
    }
else if($message == "UDN001474"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001474";
    }
else if($message == "UDN001475"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001475";
    }
else if($message == "UDN001476"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001476";
    }
else if($message == "UDN001477"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001477";
    }
else if($message == "UDN001478"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001478";
    }
else if($message == "UDN001479"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001479";
    }
else if($message == "UDN001480"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001480";
    }
else if($message == "UDN001481"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001481";
    }
else if($message == "UDN001482"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001482";
    }
else if($message == "UDN001483"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001483";
    }
else if($message == "UDN001484"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001484";
    }
else if($message == "UDN001485"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001485";
    }
else if($message == "UDN001486"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001486";
    }
else if($message == "UDN001487"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001487";
    }
else if($message == "UDN001488"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001488";
    }
else if($message == "UDN001489"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001489";
    }
else if($message == "UDN001490"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001490";
    }
else if($message == "UDN001492"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001492";
    }
else if($message == "UDN001493"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001493";
    }
else if($message == "UDN001494"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001494";
    }
else if($message == "UDN001495"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001495";
    }
else if($message == "UDN001496"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001496";
    }
else if($message == "UDN001498"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001498";
    }
else if($message == "UDN001502"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001502";
    }
else if($message == "UDN001509"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001509";
    }
else if($message == "UDN001510"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001510";
    }
else if($message == "UDN001511"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001511";
    }
else if($message == "UDN001512"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001512";
    }
else if($message == "UDN001513"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001513";
    }
else if($message == "UDN001514"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001514";
    }
else if($message == "UDN001515"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001515";
    }
else if($message == "UDN001516"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001516";
    }
else if($message == "UDN001517"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001517";
    }
else if($message == "UDN001518"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001518";
    }
else if($message == "UDN001519"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001519";
    }
else if($message == "UDN001520"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001520";
    }
else if($message == "UDN001521"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001521";
    }
else if($message == "UDN001522"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001522";
    }
else if($message == "UDN001523"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001523";
    }
else if($message == "UDN001524"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001524";
    }
else if($message == "UDN001525"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001525";
    }
else if($message == "UDN001526"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001526";
    }
else if($message == "UDN001527"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001527";
    }
else if($message == "UDN001528"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001528";
    }
else if($message == "UDN001529"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001529";
    }
else if($message == "UDN001530"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001530";
    }
else if($message == "UDN001531"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001531";
    }
else if($message == "UDN001532"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001532";
    }
else if($message == "UDN001533"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001533";
    }
else if($message == "UDN001534"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001534";
    }
else if($message == "UDN001535"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001535";
    }
else if($message == "UDN001536"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001536";
    }
else if($message == "UDN001537"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001537";
    }
else if($message == "UDN001538"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001538";
    }
else if($message == "UDN001539"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001539";
    }
else if($message == "UDN001540"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001540";
    }
else if($message == "UDN001541"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001541";
    }
else if($message == "UDN001542"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001542";
    }
else if($message == "UDN001543"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001543";
    }
else if($message == "UDN001544"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001544";
    }
else if($message == "UDN001545"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001545";
    }
else if($message == "UDN001546"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001546";
    }
else if($message == "UDN001547"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001547";
    }
else if($message == "UDN001548"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001548";
    }
else if($message == "UDN001549"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001549";
    }
else if($message == "UDN001550"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001550";
    }
else if($message == "UDN001551"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001551";
    }
else if($message == "UDN001552"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001552";
    }
else if($message == "UDN001553"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001553";
    }
else if($message == "UDN001554"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001554";
    }
else if($message == "UDN001555"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001555";
    }
else if($message == "UDN001556"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001556";
    }
else if($message == "UDN001557"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001557";
    }
else if($message == "UDN001558"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001558";
    }
else if($message == "UDN001559"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001559";
    }
else if($message == "UDN001560"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001560";
    }
else if($message == "UDN001561"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001561";
    }
else if($message == "UDN001562"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001562";
    }
else if($message == "UDN001563"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001563";
    }
else if($message == "UDN001564"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001564";
    }
else if($message == "UDN001565"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001565";
    }
else if($message == "UDN001566"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001566";
    }
else if($message == "UDN001567"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001567";
    }
else if($message == "UDN001568"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001568";
    }
else if($message == "UDN001570"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001570";
    }
else if($message == "UDN001573"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001573";
    }
else if($message == "UDN001574"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001574";
    }
else if($message == "UDN001575"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001575";
    }
else if($message == "UDN001576"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001576";
    }
else if($message == "UDN001577"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001577";
    }
else if($message == "UDN001578"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001578";
    }
else if($message == "UDN001580"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001580";
    }
else if($message == "UDN001581"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001581";
    }
else if($message == "UDN001582"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001582";
    }
else if($message == "UDN001583"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001583";
    }
else if($message == "UDN001584"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001584";
    }
else if($message == "UDN001585"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001585";
    }
else if($message == "UDN001586"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001586";
    }
else if($message == "UDN001587"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001587";
    }
else if($message == "UDN001588"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001588";
    }
else if($message == "UDN001589"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001589";
    }
else if($message == "UDN001590"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001590";
    }
else if($message == "UDN001591"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001591";
    }
else if($message == "UDN001592"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001592";
    }
else if($message == "UDN001593"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001593";
    }
else if($message == "UDN001594"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001594";
    }
else if($message == "UDN001595"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001595";
    }
else if($message == "UDN001596"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001596";
    }
else if($message == "UDN001597"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001597";
    }
else if($message == "UDN001598"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001598";
    }
else if($message == "UDN001599"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001599";
    }
else if($message == "UDN001600"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001600";
    }
else if($message == "UDN001601"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001601";
    }
else if($message == "UDN001602"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001602";
    }
else if($message == "UDN001603"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001603";
    }
else if($message == "UDN001604"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001604";
    }
else if($message == "UDN001605"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001605";
    }
else if($message == "UDN001606"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001606";
    }
else if($message == "UDN001607"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001607";
    }
else if($message == "UDN001608"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001608";
    }
else if($message == "UDN001609"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001609";
    }
else if($message == "UDN001610"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001610";
    }
else if($message == "UDN001611"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001611";
    }
else if($message == "UDN001612"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001612";
    }
else if($message == "UDN001613"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001613";
    }
else if($message == "UDN001614"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001614";
    }
else if($message == "UDN001615"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001615";
    }
else if($message == "UDN001616"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001616";
    }
else if($message == "UDN001617"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001617";
    }
else if($message == "UDN001618"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001618";
    }
else if($message == "UDN001619"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001619";
    }
else if($message == "UDN001620"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001620";
    }
else if($message == "UDN001621"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001621";
    }
else if($message == "UDN001622"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001622";
    }
else if($message == "UDN001623"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001623";
    }
else if($message == "UDN001624"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001624";
    }
else if($message == "UDN001625"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001625";
    }
else if($message == "UDN001626"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001626";
    }
else if($message == "UDN001627"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001627";
    }
else if($message == "UDN001629"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001629";
    }
else if($message == "UDN001630"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001630";
    }
else if($message == "UDN001631"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001631";
    }
else if($message == "UDN001632"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001632";
    }
else if($message == "UDN001633"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001633";
    }
else if($message == "UDN001634"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001634";
    }
else if($message == "UDN001635"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001635";
    }
else if($message == "UDN001636"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001636";
    }
else if($message == "UDN001637"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001637";
    }
else if($message == "UDN001638"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001638";
    }
else if($message == "UDN001639"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001639";
    }
else if($message == "UDN001640"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001640";
    }
else if($message == "UDN001641"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001641";
    }
else if($message == "UDN001642"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001642";
    }
else if($message == "UDN001643"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001643";
    }
else if($message == "UDN001644"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001644";
    }
else if($message == "UDN001645"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001645";
    }
else if($message == "UDN001646"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001646";
    }
else if($message == "UDN001647"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001647";
    }
else if($message == "UDN001648"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001648";
    }
else if($message == "UDN001649"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001649";
    }
else if($message == "UDN001650"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001650";
    }
else if($message == "UDN001651"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001651";
    }
else if($message == "UDN001652"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001652";
    }
else if($message == "UDN001653"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001653";
    }
else if($message == "UDN001654"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001654";
    }
else if($message == "UDN001655"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001655";
    }
else if($message == "UDN001656"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001656";
    }
else if($message == "UDN001657"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001657";
    }
else if($message == "UDN001658"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001658";
    }
else if($message == "UDN001659"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001659";
    }
else if($message == "UDN001660"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001660";
    }
else if($message == "UDN001661"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001661";
    }
else if($message == "UDN001662"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001662";
    }
else if($message == "UDN001663"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001663";
    }
else if($message == "UDN001664"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001664";
    }
else if($message == "UDN001665"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001665";
    }
else if($message == "UDN001666"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001666";
    }
else if($message == "UDN001667"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001667";
    }
else if($message == "UDN001668"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001668";
    }
else if($message == "UDN001669"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001669";
    }
else if($message == "UDN001670"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001670";
    }
else if($message == "UDN001671"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001671";
    }
else if($message == "UDN001672"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001672";
    }
else if($message == "UDN001673"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001673";
    }
else if($message == "UDN001674"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001674";
    }
else if($message == "UDN001675"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001675";
    }
else if($message == "UDN001676"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001676";
    }
else if($message == "UDN001677"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001677";
    }
else if($message == "UDN001678"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001678";
    }
else if($message == "UDN001679"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001679";
    }
else if($message == "UDN001680"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001680";
    }
else if($message == "UDN001681"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001681";
    }
else if($message == "UDN001682"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001682";
    }
else if($message == "UDN001683"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001683";
    }
else if($message == "UDN001684"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001684";
    }
else if($message == "UDN001685"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001685";
    }
else if($message == "UDN001686"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001686";
    }
else if($message == "UDN001687"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001687";
    }
else if($message == "UDN001688"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001688";
    }
else if($message == "UDN001689"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001689";
    }
else if($message == "UDN001690"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001690";
    }
else if($message == "UDN001691"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001691";
    }
else if($message == "UDN001692"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001692";
    }
else if($message == "UDN001693"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001693";
    }
else if($message == "UDN001694"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001694";
    }
else if($message == "UDN001695"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001695";
    }
else if($message == "UDN001696"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001696";
    }
else if($message == "UDN001697"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001697";
    }
else if($message == "UDN001698"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001698";
    }
else if($message == "UDN001699"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001699";
    }
else if($message == "UDN001700"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001700";
    }
else if($message == "UDN001701"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001701";
    }
else if($message == "UDN001702"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001702";
    }
else if($message == "UDN001703"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001703";
    }
else if($message == "UDN001704"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001704";
    }
else if($message == "UDN001705"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001705";
    }
else if($message == "UDN001706"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001706";
    }
else if($message == "UDN001707"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001707";
    }
else if($message == "UDN001708"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001708";
    }
else if($message == "UDN001709"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001709";
    }
else if($message == "UDN001710"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001710";
    }
else if($message == "UDN001711"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001711";
    }
else if($message == "UDN001712"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001712";
    }
else if($message == "UDN001713"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001713";
    }
else if($message == "UDN001714"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001714";
    }
else if($message == "UDN001715"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001715";
    }
else if($message == "UDN001716"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001716";
    }
else if($message == "UDN001717"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001717";
    }
else if($message == "UDN001718"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001718";
    }
else if($message == "UDN001719"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001719";
    }
else if($message == "UDN001720"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001720";
    }
else if($message == "UDN001721"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001721";
    }
else if($message == "UDN001722"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001722";
    }
else if($message == "UDN001723"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001723";
    }
else if($message == "UDN001724"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001724";
    }
else if($message == "UDN001725"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001725";
    }
else if($message == "UDN001726"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001726";
    }
else if($message == "UDN001727"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001727";
    }
else if($message == "UDN001728"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001728";
    }
else if($message == "UDN001729"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001729";
    }
else if($message == "UDN001730"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001730";
    }
else if($message == "UDN001731"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001731";
    }
else if($message == "UDN001732"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001732";
    }
else if($message == "UDN001733"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001733";
    }
else if($message == "UDN001734"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001734";
    }
else if($message == "UDN001735"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001735";
    }
else if($message == "UDN001736"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001736";
    }
else if($message == "UDN001737"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001737";
    }
else if($message == "UDN001738"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001738";
    }
else if($message == "UDN001739"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001739";
    }
else if($message == "UDN001740"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001740";
    }
else if($message == "UDN001741"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001741";
    }
else if($message == "UDN001742"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001742";
    }
else if($message == "UDN001743"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001743";
    }
else if($message == "UDN001744"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001744";
    }
else if($message == "UDN001745"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001745";
    }
else if($message == "UDN001746"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001746";
    }
else if($message == "UDN001747"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001747";
    }
else if($message == "UDN001748"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001748";
    }
else if($message == "UDN001749"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001749";
    }
else if($message == "UDN001750"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001750";
    }
else if($message == "UDN001751"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001751";
    }
else if($message == "UDN001752"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001752";
    }
else if($message == "UDN001753"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001753";
    }
else if($message == "UDN001754"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001754";
    }
else if($message == "UDN001755"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001755";
    }
else if($message == "UDN001756"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001756";
    }
else if($message == "UDN001757"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001757";
    }
else if($message == "UDN001758"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001758";
    }
else if($message == "UDN001759"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001759";
    }
else if($message == "UDN001760"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001760";
    }
else if($message == "UDN001761"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001761";
    }
else if($message == "UDN001762"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001762";
    }
else if($message == "UDN001763"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001763";
    }
else if($message == "UDN001764"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001764";
    }
else if($message == "UDN001765"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001765";
    }
else if($message == "UDN001766"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001766";
    }
else if($message == "UDN001767"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001767";
    }
else if($message == "UDN001768"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001768";
    }
else if($message == "UDN001769"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001769";
    }
else if($message == "UDN001770"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001770";
    }
else if($message == "UDN001771"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001771";
    }
else if($message == "UDN001772"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001772";
    }
else if($message == "UDN001773"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001773";
    }
else if($message == "UDN001774"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001774";
    }
else if($message == "UDN001775"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001775";
    }
else if($message == "UDN001776"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001776";
    }
else if($message == "UDN001777"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001777";
    }
else if($message == "UDN001778"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001778";
    }
else if($message == "UDN001779"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001779";
    }
else if($message == "UDN001780"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001780";
    }
else if($message == "UDN001781"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001781";
    }
else if($message == "UDN001782"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001782";
    }
else if($message == "UDN001783"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001783";
    }
else if($message == "UDN001784"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001784";
    }
else if($message == "UDN001785"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001785";
    }
else if($message == "UDN001786"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001786";
    }
else if($message == "UDN001787"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001787";
    }
else if($message == "UDN001788"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001788";
    }
else if($message == "UDN001789"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001789";
    }
else if($message == "UDN001790"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001790";
    }
else if($message == "UDN001791"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001791";
    }
else if($message == "UDN001792"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001792";
    }
else if($message == "UDN001793"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001793";
    }
else if($message == "UDN001794"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001794";
    }
else if($message == "UDN001795"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001795";
    }
else if($message == "UDN001796"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001796";
    }
else if($message == "UDN001797"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001797";
    }
else if($message == "UDN001798"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001798";
    }
else if($message == "UDN001799"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001799";
    }
else if($message == "UDN001800"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001800";
    }
else if($message == "UDN001801"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001801";
    }
else if($message == "UDN001802"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001802";
    }
else if($message == "UDN001803"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001803";
    }
else if($message == "UDN001804"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001804";
    }
else if($message == "UDN001805"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001805";
    }
else if($message == "UDN001806"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001806";
    }
else if($message == "UDN001807"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001807";
    }
else if($message == "UDN001808"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001808";
    }
else if($message == "UDN001809"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001809";
    }
else if($message == "UDN001810"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001810";
    }
else if($message == "UDN001811"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001811";
    }
else if($message == "UDN001812"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001812";
    }
else if($message == "UDN001813"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001813";
    }
else if($message == "UDN001814"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001814";
    }
else if($message == "UDN001815"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001815";
    }
else if($message == "UDN001816"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001816";
    }
else if($message == "UDN001817"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001817";
    }
else if($message == "UDN001818"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001818";
    }
else if($message == "UDN001820"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001820";
    }
else if($message == "UDN001821"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001821";
    }
else if($message == "UDN001822"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001822";
    }
else if($message == "UDN001823"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001823";
    }
else if($message == "UDN001824"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001824";
    }
else if($message == "UDN001825"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001825";
    }
else if($message == "UDN001826"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001826";
    }
else if($message == "UDN001827"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001827";
    }
else if($message == "UDN001828"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001828";
    }
else if($message == "UDN001829"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001829";
    }
else if($message == "UDN001830"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001830";
    }
else if($message == "UDN001831"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001831";
    }
else if($message == "UDN001832"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001832";
    }
else if($message == "UDN001833"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001833";
    }
else if($message == "UDN001834"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001834";
    }
else if($message == "UDN001835"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001835";
    }
else if($message == "UDN001836"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001836";
    }
else if($message == "UDN001837"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001837";
    }
else if($message == "UDN001838"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001838";
    }
else if($message == "UDN001839"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001839";
    }
else if($message == "UDN001840"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001840";
    }
else if($message == "UDN001841"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001841";
    }
else if($message == "UDN001842"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001842";
    }
else if($message == "UDN001843"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001843";
    }
else if($message == "UDN001844"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001844";
    }
else if($message == "UDN001845"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001845";
    }
else if($message == "UDN001846"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001846";
    }
else if($message == "UDN001847"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001847";
    }
else if($message == "UDN001848"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001848";
    }
else if($message == "UDN001849"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001849";
    }
else if($message == "UDN001850"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001850";
    }
else if($message == "UDN001851"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001851";
    }
else if($message == "UDN001852"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001852";
    }
else if($message == "UDN001853"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001853";
    }
else if($message == "UDN001854"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001854";
    }
else if($message == "UDN001855"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001855";
    }
else if($message == "UDN001856"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001856";
    }
else if($message == "UDN001857"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001857";
    }
else if($message == "UDN001858"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001858";
    }
else if($message == "UDN001859"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001859";
    }
else if($message == "UDN001860"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001860";
    }
else if($message == "UDN001861"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001861";
    }
else if($message == "UDN001862"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001862";
    }
else if($message == "UDN001863"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001863";
    }
else if($message == "UDN001864"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001864";
    }
else if($message == "UDN001865"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001865";
    }
else if($message == "UDN001866"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001866";
    }
else if($message == "UDN001867"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001867";
    }
else if($message == "UDN001868"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001868";
    }
else if($message == "UDN001869"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001869";
    }
else if($message == "UDN001870"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001870";
    }
else if($message == "UDN001871"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001871";
    }
else if($message == "UDN001872"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001872";
    }
else if($message == "UDN001873"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001873";
    }
else if($message == "UDN001874"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001874";
    }
else if($message == "UDN001875"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001875";
    }
else if($message == "UDN001876"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001876";
    }
else if($message == "UDN001877"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001877";
    }
else if($message == "UDN001878"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001878";
    }
else if($message == "UDN001879"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001879";
    }
else if($message == "UDN001880"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001880";
    }
else if($message == "UDN001881"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001881";
    }
else if($message == "UDN001882"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001882";
    }
else if($message == "UDN001883"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001883";
    }
else if($message == "UDN001884"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001884";
    }
else if($message == "UDN001885"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001885";
    }
else if($message == "UDN001886"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001886";
    }
else if($message == "UDN001887"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001887";
    }
else if($message == "UDN001888"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001888";
    }
else if($message == "UDN001889"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001889";
    }
else if($message == "UDN001890"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001890";
    }
else if($message == "UDN001891"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001891";
    }
else if($message == "UDN001892"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001892";
    }
else if($message == "UDN001893"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001893";
    }
else if($message == "UDN001894"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001894";
    }
else if($message == "UDN001895"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001895";
    }
else if($message == "UDN001896"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001896";
    }
else if($message == "UDN001897"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001897";
    }
else if($message == "UDN001898"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001898";
    }
else if($message == "UDN001899"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001899";
    }
else if($message == "UDN001900"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001900";
    }
else if($message == "UDN001901"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001901";
    }
else if($message == "UDN001902"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001902";
    }
else if($message == "UDN001903"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001903";
    }
else if($message == "UDN001904"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001904";
    }
else if($message == "UDN001905"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001905";
    }
else if($message == "UDN001906"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001906";
    }
else if($message == "UDN001907"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001907";
    }
else if($message == "UDN001908"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001908";
    }
else if($message == "UDN001909"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001909";
    }
else if($message == "UDN001910"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001910";
    }
else if($message == "UDN001911"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001911";
    }
else if($message == "UDN001912"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001912";
    }
else if($message == "UDN001913"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001913";
    }
else if($message == "UDN001914"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001914";
    }
else if($message == "UDN001915"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001915";
    }
else if($message == "UDN001916"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001916";
    }
else if($message == "UDN001917"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001917";
    }
else if($message == "UDN001918"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001918";
    }
else if($message == "UDN001919"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001919";
    }
else if($message == "UDN001920"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001920";
    }
else if($message == "UDN001921"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001921";
    }
else if($message == "UDN001922"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001922";
    }
else if($message == "UDN001923"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001923";
    }
else if($message == "UDN001924"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001924";
    }
else if($message == "UDN001925"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001925";
    }
else if($message == "UDN001926"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001926";
    }
else if($message == "UDN001927"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001927";
    }
else if($message == "UDN001928"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001928";
    }
else if($message == "UDN001929"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001929";
    }
else if($message == "UDN001930"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001930";
    }
else if($message == "UDN001931"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001931";
    }
else if($message == "UDN001932"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001932";
    }
else if($message == "UDN001933"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001933";
    }
else if($message == "UDN001934"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001934";
    }
else if($message == "UDN001935"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001935";
    }
else if($message == "UDN001936"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001936";
    }
else if($message == "UDN001937"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001937";
    }
else if($message == "UDN001938"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001938";
    }
else if($message == "UDN001939"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001939";
    }
else if($message == "UDN001940"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001940";
    }
else if($message == "UDN001941"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001941";
    }
else if($message == "UDN001942"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001942";
    }
else if($message == "UDN001943"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001943";
    }
else if($message == "UDN001944"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001944";
    }
else if($message == "UDN001945"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001945";
    }
else if($message == "UDN001946"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001946";
    }
else if($message == "UDN001947"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001947";
    }
else if($message == "UDN00560"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN00560";
}
else if($message == "1"){
        $arrayPostData['messages'][0]['text'] = "1";
    }
else if($message == "2"){
        $arrayPostData['messages'][0]['text'] = "2";
    }
else if($message == "3"){
        $arrayPostData['messages'][0]['text'] = "3";
    }
else if($message == "4"){
        $arrayPostData['messages'][0]['text'] = "4";
    }
else if($message == "5"){
        $arrayPostData['messages'][0]['text'] = "5";
    }
else if($message == "6"){
        $arrayPostData['messages'][0]['text'] = "6";
    }
else if($message == "7"){
        $arrayPostData['messages'][0]['text'] = "7";
    }
else if($message == "8"){
        $arrayPostData['messages'][0]['text'] = "8";
    }
else if($message == "9"){
        $arrayPostData['messages'][0]['text'] = "9";
    }
else if($message == "10"){
        $arrayPostData['messages'][0]['text'] = "10";
    }
else if($message == "11"){
        $arrayPostData['messages'][0]['text'] = "11";
    }
else if($message == "12"){
        $arrayPostData['messages'][0]['text'] = "12";
    }
else if($message == "13"){
        $arrayPostData['messages'][0]['text'] = "13";
    }
else if($message == "14"){
        $arrayPostData['messages'][0]['text'] = "14";
    }
else if($message == "15"){
        $arrayPostData['messages'][0]['text'] = "15";
    }
else if($message == "16"){
        $arrayPostData['messages'][0]['text'] = "16";
    }
else if($message == "17"){
        $arrayPostData['messages'][0]['text'] = "17";
    }
else if($message == "18"){
        $arrayPostData['messages'][0]['text'] = "18";
    }
else if($message == "19"){
        $arrayPostData['messages'][0]['text'] = "19";
    }
else if($message == "20"){
        $arrayPostData['messages'][0]['text'] = "20";
    }
else if($message == "21"){
        $arrayPostData['messages'][0]['text'] = "21";
    }
else if($message == "22"){
        $arrayPostData['messages'][0]['text'] = "22";
    }
else if($message == "23"){
        $arrayPostData['messages'][0]['text'] = "23";
    }
else if($message == "24"){
        $arrayPostData['messages'][0]['text'] = "24";
    }
else if($message == "25"){
        $arrayPostData['messages'][0]['text'] = "25";
    }
else if($message == "26"){
        $arrayPostData['messages'][0]['text'] = "26";
    }
else if($message == "27"){
        $arrayPostData['messages'][0]['text'] = "27";
    }
else if($message == "28"){
        $arrayPostData['messages'][0]['text'] = "28";
    }
else if($message == "29"){
        $arrayPostData['messages'][0]['text'] = "29";
    }
else if($message == "30"){
        $arrayPostData['messages'][0]['text'] = "30";
    }
else if($message == "31"){
        $arrayPostData['messages'][0]['text'] = "31";
    }
else if($message == "32"){
        $arrayPostData['messages'][0]['text'] = "32";
    }
else if($message == "33"){
        $arrayPostData['messages'][0]['text'] = "33";
    }
else if($message == "34"){
        $arrayPostData['messages'][0]['text'] = "34";
    }
else if($message == "35"){
        $arrayPostData['messages'][0]['text'] = "35";
    }
else if($message == "36"){
        $arrayPostData['messages'][0]['text'] = "36";
    }
else if($message == "37"){
        $arrayPostData['messages'][0]['text'] = "37";
    }
else if($message == "38"){
        $arrayPostData['messages'][0]['text'] = "38";
    }
else if($message == "39"){
        $arrayPostData['messages'][0]['text'] = "39";
    }
else if($message == "40"){
        $arrayPostData['messages'][0]['text'] = "40";
    }
else if($message == "41"){
        $arrayPostData['messages'][0]['text'] = "41";
    }
else if($message == "42"){
        $arrayPostData['messages'][0]['text'] = "42";
    }
else if($message == "43"){
        $arrayPostData['messages'][0]['text'] = "43";
    }
else if($message == "44"){
        $arrayPostData['messages'][0]['text'] = "44";
    }
else if($message == "45"){
        $arrayPostData['messages'][0]['text'] = "45";
    }
else if($message == "46"){
        $arrayPostData['messages'][0]['text'] = "46";
    }
else if($message == "47"){
        $arrayPostData['messages'][0]['text'] = "47";
    }
else if($message == "48"){
        $arrayPostData['messages'][0]['text'] = "48";
    }
else if($message == "49"){
        $arrayPostData['messages'][0]['text'] = "49";
    }
else if($message == "50"){
        $arrayPostData['messages'][0]['text'] = "50";
    }
else if($message == "51"){
        $arrayPostData['messages'][0]['text'] = "51";
    }
else if($message == "52"){
        $arrayPostData['messages'][0]['text'] = "52";
    }
else if($message == "53"){
        $arrayPostData['messages'][0]['text'] = "53";
    }
else if($message == "54"){
        $arrayPostData['messages'][0]['text'] = "54";
    }
else if($message == "55"){
        $arrayPostData['messages'][0]['text'] = "55";
    }
else if($message == "56"){
        $arrayPostData['messages'][0]['text'] = "56";
    }
else if($message == "57"){
        $arrayPostData['messages'][0]['text'] = "57";
    }
else if($message == "58"){
        $arrayPostData['messages'][0]['text'] = "58";
    }
else if($message == "59"){
        $arrayPostData['messages'][0]['text'] = "59";
    }
else if($message == "60"){
        $arrayPostData['messages'][0]['text'] = "60";
    }
else if($message == "61"){
        $arrayPostData['messages'][0]['text'] = "61";
    }
else if($message == "62"){
        $arrayPostData['messages'][0]['text'] = "62";
    }
else if($message == "63"){
        $arrayPostData['messages'][0]['text'] = "63";
    }
else if($message == "64"){
        $arrayPostData['messages'][0]['text'] = "64";
    }
else if($message == "65"){
        $arrayPostData['messages'][0]['text'] = "65";
    }
else if($message == "66"){
        $arrayPostData['messages'][0]['text'] = "66";
    }
else if($message == "67"){
        $arrayPostData['messages'][0]['text'] = "67";
    }
else if($message == "68"){
        $arrayPostData['messages'][0]['text'] = "68";
    }
else if($message == "69"){
        $arrayPostData['messages'][0]['text'] = "69";
    }
else if($message == "70"){
        $arrayPostData['messages'][0]['text'] = "70";
    }
else if($message == "71"){
        $arrayPostData['messages'][0]['text'] = "71";
    }
else if($message == "72"){
        $arrayPostData['messages'][0]['text'] = "72";
    }
else if($message == "73"){
        $arrayPostData['messages'][0]['text'] = "73";
    }
else if($message == "74"){
        $arrayPostData['messages'][0]['text'] = "74";
    }
else if($message == "75"){
        $arrayPostData['messages'][0]['text'] = "75";
    }
else if($message == "76"){
        $arrayPostData['messages'][0]['text'] = "76";
    }
else if($message == "77"){
        $arrayPostData['messages'][0]['text'] = "77";
    }
else if($message == "78"){
        $arrayPostData['messages'][0]['text'] = "78";
    }
else if($message == "79"){
        $arrayPostData['messages'][0]['text'] = "79";
    }
else if($message == "80"){
        $arrayPostData['messages'][0]['text'] = "80";
    }
else if($message == "81"){
        $arrayPostData['messages'][0]['text'] = "81";
    }
else if($message == "82"){
        $arrayPostData['messages'][0]['text'] = "82";
    }
else if($message == "83"){
        $arrayPostData['messages'][0]['text'] = "83";
    }
else if($message == "84"){
        $arrayPostData['messages'][0]['text'] = "84";
    }
else if($message == "85"){
        $arrayPostData['messages'][0]['text'] = "85";
    }
else if($message == "86"){
        $arrayPostData['messages'][0]['text'] = "86";
    }
else if($message == "87"){
        $arrayPostData['messages'][0]['text'] = "87";
    }
else if($message == "88"){
        $arrayPostData['messages'][0]['text'] = "88";
    }
else if($message == "89"){
        $arrayPostData['messages'][0]['text'] = "89";
    }
else if($message == "90"){
        $arrayPostData['messages'][0]['text'] = "90";
    }
else if($message == "91"){
        $arrayPostData['messages'][0]['text'] = "91";
    }
else if($message == "92"){
        $arrayPostData['messages'][0]['text'] = "92";
    }
else if($message == "93"){
        $arrayPostData['messages'][0]['text'] = "93";
    }
else if($message == "94"){
        $arrayPostData['messages'][0]['text'] = "94";
    }
else if($message == "95"){
        $arrayPostData['messages'][0]['text'] = "95";
    }
else if($message == "96"){
        $arrayPostData['messages'][0]['text'] = "96";
    }
else if($message == "97"){
        $arrayPostData['messages'][0]['text'] = "97";
    }
else if($message == "98"){
        $arrayPostData['messages'][0]['text'] = "98";
    }
else if($message == "99"){
        $arrayPostData['messages'][0]['text'] = "99";
    }
else if($message == "100"){
        $arrayPostData['messages'][0]['text'] = "100";
    }
else if($message == "101"){
        $arrayPostData['messages'][0]['text'] = "101";
    }
else if($message == "102"){
        $arrayPostData['messages'][0]['text'] = "102";
    }
else if($message == "103"){
        $arrayPostData['messages'][0]['text'] = "103";
    }
else if($message == "104"){
        $arrayPostData['messages'][0]['text'] = "104";
    }
else if($message == "105"){
        $arrayPostData['messages'][0]['text'] = "105";
    }
else if($message == "106"){
        $arrayPostData['messages'][0]['text'] = "106";
    }
else if($message == "107"){
        $arrayPostData['messages'][0]['text'] = "107";
    }
else if($message == "108"){
        $arrayPostData['messages'][0]['text'] = "108";
    }
else if($message == "109"){
        $arrayPostData['messages'][0]['text'] = "109";
    }
else if($message == "110"){
        $arrayPostData['messages'][0]['text'] = "110";
    }
else if($message == "111"){
        $arrayPostData['messages'][0]['text'] = "111";
    }
else if($message == "112"){
        $arrayPostData['messages'][0]['text'] = "112";
    }
else if($message == "113"){
        $arrayPostData['messages'][0]['text'] = "113";
    }
else if($message == "114"){
        $arrayPostData['messages'][0]['text'] = "114";
    }
else if($message == "115"){
        $arrayPostData['messages'][0]['text'] = "115";
    }
else if($message == "116"){
        $arrayPostData['messages'][0]['text'] = "116";
    }
else if($message == "117"){
        $arrayPostData['messages'][0]['text'] = "117";
    }
else if($message == "118"){
        $arrayPostData['messages'][0]['text'] = "118";
    }
else if($message == "119"){
        $arrayPostData['messages'][0]['text'] = "119";
    }
else if($message == "120"){
        $arrayPostData['messages'][0]['text'] = "120";
    }
else if($message == "121"){
        $arrayPostData['messages'][0]['text'] = "121";
    }
else if($message == "122"){
        $arrayPostData['messages'][0]['text'] = "122";
    }
else if($message == "123"){
        $arrayPostData['messages'][0]['text'] = "123";
    }
else if($message == "124"){
        $arrayPostData['messages'][0]['text'] = "124";
    }
else if($message == "125"){
        $arrayPostData['messages'][0]['text'] = "125";
    }
else if($message == "126"){
        $arrayPostData['messages'][0]['text'] = "126";
    }
else if($message == "127"){
        $arrayPostData['messages'][0]['text'] = "127";
    }
else if($message == "128"){
        $arrayPostData['messages'][0]['text'] = "128";
    }
else if($message == "129"){
        $arrayPostData['messages'][0]['text'] = "129";
    }
else if($message == "130"){
        $arrayPostData['messages'][0]['text'] = "130";
    }
else if($message == "131"){
        $arrayPostData['messages'][0]['text'] = "131";
    }
else if($message == "132"){
        $arrayPostData['messages'][0]['text'] = "132";
    }
else if($message == "133"){
        $arrayPostData['messages'][0]['text'] = "133";
    }
else if($message == "134"){
        $arrayPostData['messages'][0]['text'] = "134";
    }
else if($message == "135"){
        $arrayPostData['messages'][0]['text'] = "135";
    }
else if($message == "136"){
        $arrayPostData['messages'][0]['text'] = "136";
    }
else if($message == "137"){
        $arrayPostData['messages'][0]['text'] = "137";
    }
else if($message == "138"){
        $arrayPostData['messages'][0]['text'] = "138";
    }
else if($message == "139"){
        $arrayPostData['messages'][0]['text'] = "139";
    }
else if($message == "140"){
        $arrayPostData['messages'][0]['text'] = "140";
    }
else if($message == "141"){
        $arrayPostData['messages'][0]['text'] = "141";
    }
else if($message == "142"){
        $arrayPostData['messages'][0]['text'] = "142";
    }
else if($message == "143"){
        $arrayPostData['messages'][0]['text'] = "143";
    }
else if($message == "144"){
        $arrayPostData['messages'][0]['text'] = "144";
    }
else if($message == "145"){
        $arrayPostData['messages'][0]['text'] = "145";
    }
else if($message == "146"){
        $arrayPostData['messages'][0]['text'] = "146";
    }
else if($message == "147"){
        $arrayPostData['messages'][0]['text'] = "147";
    }
else if($message == "148"){
        $arrayPostData['messages'][0]['text'] = "148";
    }
else if($message == "149"){
        $arrayPostData['messages'][0]['text'] = "149";
    }
else if($message == "150"){
        $arrayPostData['messages'][0]['text'] = "150";
    }
else if($message == "151"){
        $arrayPostData['messages'][0]['text'] = "151";
    }
else if($message == "152"){
        $arrayPostData['messages'][0]['text'] = "152";
    }
else if($message == "153"){
        $arrayPostData['messages'][0]['text'] = "153";
    }
else if($message == "154"){
        $arrayPostData['messages'][0]['text'] = "154";
    }
else if($message == "155"){
        $arrayPostData['messages'][0]['text'] = "155";
    }
else if($message == "156"){
        $arrayPostData['messages'][0]['text'] = "156";
    }
else if($message == "157"){
        $arrayPostData['messages'][0]['text'] = "157";
    }
else if($message == "158"){
        $arrayPostData['messages'][0]['text'] = "158";
    }
else if($message == "159"){
        $arrayPostData['messages'][0]['text'] = "159";
    }
else if($message == "160"){
        $arrayPostData['messages'][0]['text'] = "160";
    }
else if($message == "161"){
        $arrayPostData['messages'][0]['text'] = "161";
    }
else if($message == "162"){
        $arrayPostData['messages'][0]['text'] = "162";
    }
else if($message == "163"){
        $arrayPostData['messages'][0]['text'] = "163";
    }
else if($message == "164"){
        $arrayPostData['messages'][0]['text'] = "164";
    }
else if($message == "165"){
        $arrayPostData['messages'][0]['text'] = "165";
    }
else if($message == "166"){
        $arrayPostData['messages'][0]['text'] = "166";
    }
else if($message == "167"){
        $arrayPostData['messages'][0]['text'] = "167";
    }
else if($message == "168"){
        $arrayPostData['messages'][0]['text'] = "168";
    }
else if($message == "169"){
        $arrayPostData['messages'][0]['text'] = "169";
    }
else if($message == "170"){
        $arrayPostData['messages'][0]['text'] = "170";
    }
else if($message == "171"){
        $arrayPostData['messages'][0]['text'] = "171";
    }
else if($message == "172"){
        $arrayPostData['messages'][0]['text'] = "172";
    }
else if($message == "173"){
        $arrayPostData['messages'][0]['text'] = "173";
    }
else if($message == "174"){
        $arrayPostData['messages'][0]['text'] = "174";
    }
else if($message == "175"){
        $arrayPostData['messages'][0]['text'] = "175";
    }
else if($message == "176"){
        $arrayPostData['messages'][0]['text'] = "176";
    }
else if($message == "177"){
        $arrayPostData['messages'][0]['text'] = "177";
    }
else if($message == "178"){
        $arrayPostData['messages'][0]['text'] = "178";
    }
else if($message == "179"){
        $arrayPostData['messages'][0]['text'] = "179";
    }
else if($message == "180"){
        $arrayPostData['messages'][0]['text'] = "180";
    }
else if($message == "181"){
        $arrayPostData['messages'][0]['text'] = "181";
    }
else if($message == "182"){
        $arrayPostData['messages'][0]['text'] = "182";
    }
else if($message == "183"){
        $arrayPostData['messages'][0]['text'] = "183";
    }
else if($message == "184"){
        $arrayPostData['messages'][0]['text'] = "184";
    }
else if($message == "185"){
        $arrayPostData['messages'][0]['text'] = "185";
    }
else if($message == "186"){
        $arrayPostData['messages'][0]['text'] = "186";
    }
else if($message == "187"){
        $arrayPostData['messages'][0]['text'] = "187";
    }
else if($message == "188"){
        $arrayPostData['messages'][0]['text'] = "188";
    }
else if($message == "189"){
        $arrayPostData['messages'][0]['text'] = "189";
    }
else if($message == "190"){
        $arrayPostData['messages'][0]['text'] = "190";
    }
else if($message == "191"){
        $arrayPostData['messages'][0]['text'] = "191";
    }
else if($message == "192"){
        $arrayPostData['messages'][0]['text'] = "192";
    }
else if($message == "193"){
        $arrayPostData['messages'][0]['text'] = "193";
    }
else if($message == "194"){
        $arrayPostData['messages'][0]['text'] = "194";
    }
else if($message == "195"){
        $arrayPostData['messages'][0]['text'] = "195";
    }
else if($message == "196"){
        $arrayPostData['messages'][0]['text'] = "196";
    }
else if($message == "197"){
        $arrayPostData['messages'][0]['text'] = "197";
    }
else if($message == "198"){
        $arrayPostData['messages'][0]['text'] = "198";
    }
else if($message == "199"){
        $arrayPostData['messages'][0]['text'] = "199";
    }
else if($message == "200"){
        $arrayPostData['messages'][0]['text'] = "200";
    }
else if($message == "201"){
        $arrayPostData['messages'][0]['text'] = "201";
    }
else if($message == "202"){
        $arrayPostData['messages'][0]['text'] = "202";
    }
else if($message == "203"){
        $arrayPostData['messages'][0]['text'] = "203";
    }
else if($message == "204"){
        $arrayPostData['messages'][0]['text'] = "204";
    }
else if($message == "205"){
        $arrayPostData['messages'][0]['text'] = "205";
    }
else if($message == "206"){
        $arrayPostData['messages'][0]['text'] = "206";
    }
else if($message == "207"){
        $arrayPostData['messages'][0]['text'] = "207";
    }
else if($message == "208"){
        $arrayPostData['messages'][0]['text'] = "208";
    }
else if($message == "209"){
        $arrayPostData['messages'][0]['text'] = "209";
    }
else if($message == "210"){
        $arrayPostData['messages'][0]['text'] = "210";
    }
else if($message == "211"){
        $arrayPostData['messages'][0]['text'] = "211";
    }
else if($message == "212"){
        $arrayPostData['messages'][0]['text'] = "212";
    }
else if($message == "213"){
        $arrayPostData['messages'][0]['text'] = "213";
    }
else if($message == "214"){
        $arrayPostData['messages'][0]['text'] = "214";
    }
else if($message == "215"){
        $arrayPostData['messages'][0]['text'] = "215";
    }
else if($message == "216"){
        $arrayPostData['messages'][0]['text'] = "216";
    }
else if($message == "217"){
        $arrayPostData['messages'][0]['text'] = "217";
    }
else if($message == "218"){
        $arrayPostData['messages'][0]['text'] = "218";
    }
else if($message == "219"){
        $arrayPostData['messages'][0]['text'] = "219";
    }
else if($message == "220"){
        $arrayPostData['messages'][0]['text'] = "220";
    }
else if($message == "221"){
        $arrayPostData['messages'][0]['text'] = "221";
    }
else if($message == "222"){
        $arrayPostData['messages'][0]['text'] = "222";
    }
else if($message == "223"){
        $arrayPostData['messages'][0]['text'] = "223";
    }
else if($message == "224"){
        $arrayPostData['messages'][0]['text'] = "224";
    }
else if($message == "225"){
        $arrayPostData['messages'][0]['text'] = "225";
    }
else if($message == "226"){
        $arrayPostData['messages'][0]['text'] = "226";
    }
else if($message == "227"){
        $arrayPostData['messages'][0]['text'] = "227";
    }
else if($message == "228"){
        $arrayPostData['messages'][0]['text'] = "228";
    }
else if($message == "229"){
        $arrayPostData['messages'][0]['text'] = "229";
    }
else if($message == "230"){
        $arrayPostData['messages'][0]['text'] = "230";
    }
else if($message == "231"){
        $arrayPostData['messages'][0]['text'] = "231";
    }
else if($message == "232"){
        $arrayPostData['messages'][0]['text'] = "232";
    }
else if($message == "233"){
        $arrayPostData['messages'][0]['text'] = "233";
    }
else if($message == "234"){
        $arrayPostData['messages'][0]['text'] = "234";
    }
else if($message == "235"){
        $arrayPostData['messages'][0]['text'] = "235";
    }
else if($message == "236"){
        $arrayPostData['messages'][0]['text'] = "236";
    }
else if($message == "237"){
        $arrayPostData['messages'][0]['text'] = "237";
    }
else if($message == "238"){
        $arrayPostData['messages'][0]['text'] = "238";
    }
else if($message == "239"){
        $arrayPostData['messages'][0]['text'] = "239";
    }
else if($message == "240"){
        $arrayPostData['messages'][0]['text'] = "240";
    }
else if($message == "241"){
        $arrayPostData['messages'][0]['text'] = "241";
    }
else if($message == "242"){
        $arrayPostData['messages'][0]['text'] = "242";
    }
else if($message == "243"){
        $arrayPostData['messages'][0]['text'] = "243";
    }
else if($message == "244"){
        $arrayPostData['messages'][0]['text'] = "244";
    }
else if($message == "245"){
        $arrayPostData['messages'][0]['text'] = "245";
    }
else if($message == "246"){
        $arrayPostData['messages'][0]['text'] = "246";
    }
else if($message == "247"){
        $arrayPostData['messages'][0]['text'] = "247";
    }
else if($message == "248"){
        $arrayPostData['messages'][0]['text'] = "248";
    }
else if($message == "249"){
        $arrayPostData['messages'][0]['text'] = "249";
    }
else if($message == "250"){
        $arrayPostData['messages'][0]['text'] = "250";
    }
else if($message == "251"){
        $arrayPostData['messages'][0]['text'] = "251";
    }
else if($message == "252"){
        $arrayPostData['messages'][0]['text'] = "252";
    }
else if($message == "253"){
        $arrayPostData['messages'][0]['text'] = "253";
    }
else if($message == "254"){
        $arrayPostData['messages'][0]['text'] = "254";
    }
else if($message == "255"){
        $arrayPostData['messages'][0]['text'] = "255";
    }
else if($message == "256"){
        $arrayPostData['messages'][0]['text'] = "256";
    }
else if($message == "257"){
        $arrayPostData['messages'][0]['text'] = "257";
    }
else if($message == "258"){
        $arrayPostData['messages'][0]['text'] = "258";
    }
else if($message == "259"){
        $arrayPostData['messages'][0]['text'] = "259";
    }
else if($message == "260"){
        $arrayPostData['messages'][0]['text'] = "260";
    }
else if($message == "261"){
        $arrayPostData['messages'][0]['text'] = "261";
    }
else if($message == "262"){
        $arrayPostData['messages'][0]['text'] = "262";
    }
else if($message == "263"){
        $arrayPostData['messages'][0]['text'] = "263";
    }
else if($message == "264"){
        $arrayPostData['messages'][0]['text'] = "264";
    }
else if($message == "265"){
        $arrayPostData['messages'][0]['text'] = "265";
    }
else if($message == "266"){
        $arrayPostData['messages'][0]['text'] = "266";
    }
else if($message == "267"){
        $arrayPostData['messages'][0]['text'] = "267";
    }
else if($message == "268"){
        $arrayPostData['messages'][0]['text'] = "268";
    }
else if($message == "269"){
        $arrayPostData['messages'][0]['text'] = "269";
    }
else if($message == "270"){
        $arrayPostData['messages'][0]['text'] = "270";
    }
else if($message == "271"){
        $arrayPostData['messages'][0]['text'] = "271";
    }
else if($message == "272"){
        $arrayPostData['messages'][0]['text'] = "272";
    }
else if($message == "273"){
        $arrayPostData['messages'][0]['text'] = "273";
    }
else if($message == "274"){
        $arrayPostData['messages'][0]['text'] = "274";
    }
else if($message == "275"){
        $arrayPostData['messages'][0]['text'] = "275";
    }
else if($message == "276"){
        $arrayPostData['messages'][0]['text'] = "276";
    }
else if($message == "277"){
        $arrayPostData['messages'][0]['text'] = "277";
    }
else if($message == "278"){
        $arrayPostData['messages'][0]['text'] = "278";
    }
else if($message == "279"){
        $arrayPostData['messages'][0]['text'] = "279";
    }
else if($message == "280"){
        $arrayPostData['messages'][0]['text'] = "280";
    }
else if($message == "281"){
        $arrayPostData['messages'][0]['text'] = "281";
    }
else if($message == "282"){
        $arrayPostData['messages'][0]['text'] = "282";
    }
else if($message == "283"){
        $arrayPostData['messages'][0]['text'] = "283";
    }
else if($message == "284"){
        $arrayPostData['messages'][0]['text'] = "284";
    }
else if($message == "285"){
        $arrayPostData['messages'][0]['text'] = "285";
    }
else if($message == "286"){
        $arrayPostData['messages'][0]['text'] = "286";
    }
else if($message == "287"){
        $arrayPostData['messages'][0]['text'] = "287";
    }
else if($message == "288"){
        $arrayPostData['messages'][0]['text'] = "288";
    }
else if($message == "289"){
        $arrayPostData['messages'][0]['text'] = "289";
    }
else if($message == "290"){
        $arrayPostData['messages'][0]['text'] = "290";
    }
else if($message == "291"){
        $arrayPostData['messages'][0]['text'] = "291";
    }
else if($message == "292"){
        $arrayPostData['messages'][0]['text'] = "292";
    }
else if($message == "293"){
        $arrayPostData['messages'][0]['text'] = "293";
    }
else if($message == "294"){
        $arrayPostData['messages'][0]['text'] = "294";
    }
else if($message == "295"){
        $arrayPostData['messages'][0]['text'] = "295";
    }
else if($message == "296"){
        $arrayPostData['messages'][0]['text'] = "296";
    }
else if($message == "297"){
        $arrayPostData['messages'][0]['text'] = "297";
    }
else if($message == "298"){
        $arrayPostData['messages'][0]['text'] = "298";
    }
else if($message == "299"){
        $arrayPostData['messages'][0]['text'] = "299";
    }
else if($message == "300"){
        $arrayPostData['messages'][0]['text'] = "300";
    }
else if($message == "301"){
        $arrayPostData['messages'][0]['text'] = "301";
    }
else if($message == "302"){
        $arrayPostData['messages'][0]['text'] = "302";
    }
else if($message == "303"){
        $arrayPostData['messages'][0]['text'] = "303";
    }
else if($message == "304"){
        $arrayPostData['messages'][0]['text'] = "304";
    }
else if($message == "305"){
        $arrayPostData['messages'][0]['text'] = "305";
    }
else if($message == "306"){
        $arrayPostData['messages'][0]['text'] = "306";
    }
else if($message == "307"){
        $arrayPostData['messages'][0]['text'] = "307";
    }
else if($message == "308"){
        $arrayPostData['messages'][0]['text'] = "308";
    }
else if($message == "309"){
        $arrayPostData['messages'][0]['text'] = "309";
    }
else if($message == "310"){
        $arrayPostData['messages'][0]['text'] = "310";
    }
else if($message == "311"){
        $arrayPostData['messages'][0]['text'] = "311";
    }
else if($message == "312"){
        $arrayPostData['messages'][0]['text'] = "312";
    }
else if($message == "313"){
        $arrayPostData['messages'][0]['text'] = "313";
    }
else if($message == "314"){
        $arrayPostData['messages'][0]['text'] = "314";
    }
else if($message == "315"){
        $arrayPostData['messages'][0]['text'] = "315";
    }
else if($message == "316"){
        $arrayPostData['messages'][0]['text'] = "316";
    }
else if($message == "317"){
        $arrayPostData['messages'][0]['text'] = "317";
    }
else if($message == "318"){
        $arrayPostData['messages'][0]['text'] = "318";
    }
else if($message == "319"){
        $arrayPostData['messages'][0]['text'] = "319";
    }
else if($message == "320"){
        $arrayPostData['messages'][0]['text'] = "320";
    }
else if($message == "321"){
        $arrayPostData['messages'][0]['text'] = "321";
    }
else if($message == "322"){
        $arrayPostData['messages'][0]['text'] = "322";
    }
else if($message == "323"){
        $arrayPostData['messages'][0]['text'] = "323";
    }
else if($message == "324"){
        $arrayPostData['messages'][0]['text'] = "324";
    }
else if($message == "325"){
        $arrayPostData['messages'][0]['text'] = "325";
    }
else if($message == "326"){
        $arrayPostData['messages'][0]['text'] = "326";
    }
else if($message == "327"){
        $arrayPostData['messages'][0]['text'] = "327";
    }
else if($message == "328"){
        $arrayPostData['messages'][0]['text'] = "328";
    }
else if($message == "329"){
        $arrayPostData['messages'][0]['text'] = "329";
    }
else if($message == "330"){
        $arrayPostData['messages'][0]['text'] = "330";
    }
else if($message == "331"){
        $arrayPostData['messages'][0]['text'] = "331";
    }
else if($message == "332"){
        $arrayPostData['messages'][0]['text'] = "332";
    }
else if($message == "333"){
        $arrayPostData['messages'][0]['text'] = "333";
    }
else if($message == "334"){
        $arrayPostData['messages'][0]['text'] = "334";
    }
else if($message == "335"){
        $arrayPostData['messages'][0]['text'] = "335";
    }
else if($message == "336"){
        $arrayPostData['messages'][0]['text'] = "336";
    }
else if($message == "337"){
        $arrayPostData['messages'][0]['text'] = "337";
    }
else if($message == "338"){
        $arrayPostData['messages'][0]['text'] = "338";
    }
else if($message == "339"){
        $arrayPostData['messages'][0]['text'] = "339";
    }
else if($message == "340"){
        $arrayPostData['messages'][0]['text'] = "340";
    }
else if($message == "341"){
        $arrayPostData['messages'][0]['text'] = "341";
    }
else if($message == "342"){
        $arrayPostData['messages'][0]['text'] = "342";
    }
else if($message == "343"){
        $arrayPostData['messages'][0]['text'] = "343";
    }
else if($message == "344"){
        $arrayPostData['messages'][0]['text'] = "344";
    }
else if($message == "345"){
        $arrayPostData['messages'][0]['text'] = "345";
    }
else if($message == "346"){
        $arrayPostData['messages'][0]['text'] = "346";
    }
else if($message == "347"){
        $arrayPostData['messages'][0]['text'] = "347";
    }
else if($message == "348"){
        $arrayPostData['messages'][0]['text'] = "348";
    }
else if($message == "349"){
        $arrayPostData['messages'][0]['text'] = "349";
    }
else if($message == "350"){
        $arrayPostData['messages'][0]['text'] = "350";
    }
else if($message == "351"){
        $arrayPostData['messages'][0]['text'] = "351";
    }
else if($message == "352"){
        $arrayPostData['messages'][0]['text'] = "352";
    }
else if($message == "353"){
        $arrayPostData['messages'][0]['text'] = "353";
    }
else if($message == "354"){
        $arrayPostData['messages'][0]['text'] = "354";
    }
else if($message == "355"){
        $arrayPostData['messages'][0]['text'] = "355";
    }
else if($message == "356"){
        $arrayPostData['messages'][0]['text'] = "356";
    }
else if($message == "357"){
        $arrayPostData['messages'][0]['text'] = "357";
    }
else if($message == "358"){
        $arrayPostData['messages'][0]['text'] = "358";
    }
else if($message == "359"){
        $arrayPostData['messages'][0]['text'] = "359";
    }
else if($message == "360"){
        $arrayPostData['messages'][0]['text'] = "360";
    }
else if($message == "361"){
        $arrayPostData['messages'][0]['text'] = "361";
    }
else if($message == "362"){
        $arrayPostData['messages'][0]['text'] = "362";
    }
else if($message == "363"){
        $arrayPostData['messages'][0]['text'] = "363";
    }
else if($message == "364"){
        $arrayPostData['messages'][0]['text'] = "364";
    }
else if($message == "365"){
        $arrayPostData['messages'][0]['text'] = "365";
    }
else if($message == "366"){
        $arrayPostData['messages'][0]['text'] = "366";
    }
else if($message == "367"){
        $arrayPostData['messages'][0]['text'] = "367";
    }
else if($message == "368"){
        $arrayPostData['messages'][0]['text'] = "368";
    }
else if($message == "369"){
        $arrayPostData['messages'][0]['text'] = "369";
    }
else if($message == "370"){
        $arrayPostData['messages'][0]['text'] = "370";
    }
else if($message == "371"){
        $arrayPostData['messages'][0]['text'] = "371";
    }
else if($message == "372"){
        $arrayPostData['messages'][0]['text'] = "372";
    }
else if($message == "373"){
        $arrayPostData['messages'][0]['text'] = "373";
    }
else if($message == "374"){
        $arrayPostData['messages'][0]['text'] = "374";
    }
else if($message == "375"){
        $arrayPostData['messages'][0]['text'] = "375";
    }
else if($message == "376"){
        $arrayPostData['messages'][0]['text'] = "376";
    }
else if($message == "377"){
        $arrayPostData['messages'][0]['text'] = "377";
    }
else if($message == "378"){
        $arrayPostData['messages'][0]['text'] = "378";
    }
else if($message == "379"){
        $arrayPostData['messages'][0]['text'] = "379";
    }
else if($message == "380"){
        $arrayPostData['messages'][0]['text'] = "380";
    }
else if($message == "381"){
        $arrayPostData['messages'][0]['text'] = "381";
    }
else if($message == "382"){
        $arrayPostData['messages'][0]['text'] = "382";
    }
else if($message == "383"){
        $arrayPostData['messages'][0]['text'] = "383";
    }
else if($message == "384"){
        $arrayPostData['messages'][0]['text'] = "384";
    }
else if($message == "385"){
        $arrayPostData['messages'][0]['text'] = "385";
    }
else if($message == "386"){
        $arrayPostData['messages'][0]['text'] = "386";
    }
else if($message == "387"){
        $arrayPostData['messages'][0]['text'] = "387";
    }
else if($message == "388"){
        $arrayPostData['messages'][0]['text'] = "388";
    }
else if($message == "389"){
        $arrayPostData['messages'][0]['text'] = "389";
    }
else if($message == "390"){
        $arrayPostData['messages'][0]['text'] = "390";
    }
else if($message == "391"){
        $arrayPostData['messages'][0]['text'] = "391";
    }
else if($message == "392"){
        $arrayPostData['messages'][0]['text'] = "392";
    }
else if($message == "393"){
        $arrayPostData['messages'][0]['text'] = "393";
    }
else if($message == "394"){
        $arrayPostData['messages'][0]['text'] = "394";
    }
else if($message == "395"){
        $arrayPostData['messages'][0]['text'] = "395";
    }
else if($message == "396"){
        $arrayPostData['messages'][0]['text'] = "396";
    }
else if($message == "397"){
        $arrayPostData['messages'][0]['text'] = "397";
    }
else if($message == "398"){
        $arrayPostData['messages'][0]['text'] = "398";
    }
else if($message == "399"){
        $arrayPostData['messages'][0]['text'] = "399";
    }
else if($message == "400"){
        $arrayPostData['messages'][0]['text'] = "400";
    }
else if($message == "401"){
        $arrayPostData['messages'][0]['text'] = "401";
    }
else if($message == "402"){
        $arrayPostData['messages'][0]['text'] = "402";
    }
else if($message == "403"){
        $arrayPostData['messages'][0]['text'] = "403";
    }
else if($message == "404"){
        $arrayPostData['messages'][0]['text'] = "404";
    }
else if($message == "405"){
        $arrayPostData['messages'][0]['text'] = "405";
    }
else if($message == "406"){
        $arrayPostData['messages'][0]['text'] = "406";
    }
else if($message == "407"){
        $arrayPostData['messages'][0]['text'] = "407";
    }
else if($message == "408"){
        $arrayPostData['messages'][0]['text'] = "408";
    }
else if($message == "409"){
        $arrayPostData['messages'][0]['text'] = "409";
    }
else if($message == "410"){
        $arrayPostData['messages'][0]['text'] = "410";
    }
else if($message == "411"){
        $arrayPostData['messages'][0]['text'] = "411";
    }
else if($message == "412"){
        $arrayPostData['messages'][0]['text'] = "412";
    }
else if($message == "413"){
        $arrayPostData['messages'][0]['text'] = "413";
    }
else if($message == "414"){
        $arrayPostData['messages'][0]['text'] = "414";
    }
else if($message == "415"){
        $arrayPostData['messages'][0]['text'] = "415";
    }
else if($message == "416"){
        $arrayPostData['messages'][0]['text'] = "416";
    }
else if($message == "417"){
        $arrayPostData['messages'][0]['text'] = "417";
    }
else if($message == "418"){
        $arrayPostData['messages'][0]['text'] = "418";
    }
else if($message == "419"){
        $arrayPostData['messages'][0]['text'] = "419";
    }
else if($message == "420"){
        $arrayPostData['messages'][0]['text'] = "420";
    }
else if($message == "421"){
        $arrayPostData['messages'][0]['text'] = "421";
    }
else if($message == "422"){
        $arrayPostData['messages'][0]['text'] = "422";
    }
else if($message == "423"){
        $arrayPostData['messages'][0]['text'] = "423";
    }
else if($message == "424"){
        $arrayPostData['messages'][0]['text'] = "424";
    }
else if($message == "425"){
        $arrayPostData['messages'][0]['text'] = "425";
    }
else if($message == "426"){
        $arrayPostData['messages'][0]['text'] = "426";
    }
else if($message == "427"){
        $arrayPostData['messages'][0]['text'] = "427";
    }
else if($message == "428"){
        $arrayPostData['messages'][0]['text'] = "428";
    }
else if($message == "429"){
        $arrayPostData['messages'][0]['text'] = "429";
    }
else if($message == "430"){
        $arrayPostData['messages'][0]['text'] = "430";
    }
else if($message == "431"){
        $arrayPostData['messages'][0]['text'] = "431";
    }
else if($message == "432"){
        $arrayPostData['messages'][0]['text'] = "432";
    }
else if($message == "433"){
        $arrayPostData['messages'][0]['text'] = "433";
    }
else if($message == "434"){
        $arrayPostData['messages'][0]['text'] = "434";
    }
else if($message == "435"){
        $arrayPostData['messages'][0]['text'] = "435";
    }
else if($message == "436"){
        $arrayPostData['messages'][0]['text'] = "436";
    }
else if($message == "437"){
        $arrayPostData['messages'][0]['text'] = "437";
    }
else if($message == "438"){
        $arrayPostData['messages'][0]['text'] = "438";
    }
else if($message == "439"){
        $arrayPostData['messages'][0]['text'] = "439";
    }
else if($message == "440"){
        $arrayPostData['messages'][0]['text'] = "440";
    }
else if($message == "441"){
        $arrayPostData['messages'][0]['text'] = "441";
    }
else if($message == "442"){
        $arrayPostData['messages'][0]['text'] = "442";
    }
else if($message == "443"){
        $arrayPostData['messages'][0]['text'] = "443";
    }
else if($message == "444"){
        $arrayPostData['messages'][0]['text'] = "444";
    }
else if($message == "445"){
        $arrayPostData['messages'][0]['text'] = "445";
    }
else if($message == "446"){
        $arrayPostData['messages'][0]['text'] = "446";
    }
else if($message == "447"){
        $arrayPostData['messages'][0]['text'] = "447";
    }
else if($message == "448"){
        $arrayPostData['messages'][0]['text'] = "448";
    }
else if($message == "449"){
        $arrayPostData['messages'][0]['text'] = "449";
    }
else if($message == "450"){
        $arrayPostData['messages'][0]['text'] = "450";
    }
else if($message == "451"){
        $arrayPostData['messages'][0]['text'] = "451";
    }
else if($message == "452"){
        $arrayPostData['messages'][0]['text'] = "452";
    }
else if($message == "453"){
        $arrayPostData['messages'][0]['text'] = "453";
    }
else if($message == "454"){
        $arrayPostData['messages'][0]['text'] = "454";
    }
else if($message == "455"){
        $arrayPostData['messages'][0]['text'] = "455";
    }
else if($message == "456"){
        $arrayPostData['messages'][0]['text'] = "456";
    }
else if($message == "457"){
        $arrayPostData['messages'][0]['text'] = "457";
    }
else if($message == "458"){
        $arrayPostData['messages'][0]['text'] = "458";
    }
else if($message == "459"){
        $arrayPostData['messages'][0]['text'] = "459";
    }
else if($message == "460"){
        $arrayPostData['messages'][0]['text'] = "460";
    }
else if($message == "461"){
        $arrayPostData['messages'][0]['text'] = "461";
    }
else if($message == "462"){
        $arrayPostData['messages'][0]['text'] = "462";
    }
else if($message == "463"){
        $arrayPostData['messages'][0]['text'] = "463";
    }
else if($message == "464"){
        $arrayPostData['messages'][0]['text'] = "464";
    }
else if($message == "465"){
        $arrayPostData['messages'][0]['text'] = "465";
    }
else if($message == "466"){
        $arrayPostData['messages'][0]['text'] = "466";
    }
else if($message == "467"){
        $arrayPostData['messages'][0]['text'] = "467";
    }
else if($message == "468"){
        $arrayPostData['messages'][0]['text'] = "468";
    }
else if($message == "469"){
        $arrayPostData['messages'][0]['text'] = "469";
    }
else if($message == "470"){
        $arrayPostData['messages'][0]['text'] = "470";
    }
else if($message == "471"){
        $arrayPostData['messages'][0]['text'] = "471";
    }
else if($message == "472"){
        $arrayPostData['messages'][0]['text'] = "472";
    }
else if($message == "473"){
        $arrayPostData['messages'][0]['text'] = "473";
    }
else if($message == "474"){
        $arrayPostData['messages'][0]['text'] = "474";
    }
else if($message == "475"){
        $arrayPostData['messages'][0]['text'] = "475";
    }
else if($message == "476"){
        $arrayPostData['messages'][0]['text'] = "476";
    }
else if($message == "477"){
        $arrayPostData['messages'][0]['text'] = "477";
    }
else if($message == "478"){
        $arrayPostData['messages'][0]['text'] = "478";
    }
else if($message == "479"){
        $arrayPostData['messages'][0]['text'] = "479";
    }
else if($message == "480"){
        $arrayPostData['messages'][0]['text'] = "480";
    }
else if($message == "481"){
        $arrayPostData['messages'][0]['text'] = "481";
    }
else if($message == "482"){
        $arrayPostData['messages'][0]['text'] = "482";
    }
else if($message == "483"){
        $arrayPostData['messages'][0]['text'] = "483";
    }
else if($message == "484"){
        $arrayPostData['messages'][0]['text'] = "484";
    }
else if($message == "485"){
        $arrayPostData['messages'][0]['text'] = "485";
    }
else if($message == "486"){
        $arrayPostData['messages'][0]['text'] = "486";
    }
else if($message == "487"){
        $arrayPostData['messages'][0]['text'] = "487";
    }
else if($message == "488"){
        $arrayPostData['messages'][0]['text'] = "488";
    }
else if($message == "489"){
        $arrayPostData['messages'][0]['text'] = "489";
    }
else if($message == "490"){
        $arrayPostData['messages'][0]['text'] = "490";
    }
else if($message == "491"){
        $arrayPostData['messages'][0]['text'] = "491";
    }
else if($message == "492"){
        $arrayPostData['messages'][0]['text'] = "492";
    }
else if($message == "493"){
        $arrayPostData['messages'][0]['text'] = "493";
    }
else if($message == "494"){
        $arrayPostData['messages'][0]['text'] = "494";
    }
else if($message == "495"){
        $arrayPostData['messages'][0]['text'] = "495";
    }
else if($message == "496"){
        $arrayPostData['messages'][0]['text'] = "496";
    }
else if($message == "497"){
        $arrayPostData['messages'][0]['text'] = "497";
    }
else if($message == "498"){
        $arrayPostData['messages'][0]['text'] = "498";
    }
else if($message == "499"){
        $arrayPostData['messages'][0]['text'] = "499";
    }
else if($message == "500"){
        $arrayPostData['messages'][0]['text'] = "500";
    }
else if($message == "501"){
        $arrayPostData['messages'][0]['text'] = "501";
    }
else if($message == "502"){
        $arrayPostData['messages'][0]['text'] = "502";
    }
else if($message == "503"){
        $arrayPostData['messages'][0]['text'] = "503";
    }
else if($message == "504"){
        $arrayPostData['messages'][0]['text'] = "504";
    }
else if($message == "505"){
        $arrayPostData['messages'][0]['text'] = "505";
    }
else if($message == "506"){
        $arrayPostData['messages'][0]['text'] = "506";
    }
else if($message == "507"){
        $arrayPostData['messages'][0]['text'] = "507";
    }
else if($message == "508"){
        $arrayPostData['messages'][0]['text'] = "508";
    }
else if($message == "509"){
        $arrayPostData['messages'][0]['text'] = "509";
    }
else if($message == "510"){
        $arrayPostData['messages'][0]['text'] = "510";
    }
else if($message == "511"){
        $arrayPostData['messages'][0]['text'] = "511";
    }
else if($message == "512"){
        $arrayPostData['messages'][0]['text'] = "512";
    }
else if($message == "513"){
        $arrayPostData['messages'][0]['text'] = "513";
    }
else if($message == "514"){
        $arrayPostData['messages'][0]['text'] = "514";
    }
else if($message == "515"){
        $arrayPostData['messages'][0]['text'] = "515";
    }
else if($message == "516"){
        $arrayPostData['messages'][0]['text'] = "516";
    }
else if($message == "517"){
        $arrayPostData['messages'][0]['text'] = "517";
    }
else if($message == "518"){
        $arrayPostData['messages'][0]['text'] = "518";
    }
else if($message == "519"){
        $arrayPostData['messages'][0]['text'] = "519";
    }
else if($message == "520"){
        $arrayPostData['messages'][0]['text'] = "520";
    }
else if($message == "521"){
        $arrayPostData['messages'][0]['text'] = "521";
    }
else if($message == "522"){
        $arrayPostData['messages'][0]['text'] = "522";
    }
else if($message == "523"){
        $arrayPostData['messages'][0]['text'] = "523";
    }
else if($message == "524"){
        $arrayPostData['messages'][0]['text'] = "524";
    }
else if($message == "525"){
        $arrayPostData['messages'][0]['text'] = "525";
    }
else if($message == "526"){
        $arrayPostData['messages'][0]['text'] = "526";
    }
else if($message == "527"){
        $arrayPostData['messages'][0]['text'] = "527";
    }
else if($message == "528"){
        $arrayPostData['messages'][0]['text'] = "528";
    }
else if($message == "529"){
        $arrayPostData['messages'][0]['text'] = "529";
    }
else if($message == "530"){
        $arrayPostData['messages'][0]['text'] = "530";
    }
else if($message == "531"){
        $arrayPostData['messages'][0]['text'] = "531";
    }
else if($message == "532"){
        $arrayPostData['messages'][0]['text'] = "532";
    }
else if($message == "533"){
        $arrayPostData['messages'][0]['text'] = "533";
    }
else if($message == "534"){
        $arrayPostData['messages'][0]['text'] = "534";
    }
else if($message == "535"){
        $arrayPostData['messages'][0]['text'] = "535";
    }
else if($message == "536"){
        $arrayPostData['messages'][0]['text'] = "536";
    }
else if($message == "537"){
        $arrayPostData['messages'][0]['text'] = "537";
    }
else if($message == "538"){
        $arrayPostData['messages'][0]['text'] = "538";
    }
else if($message == "539"){
        $arrayPostData['messages'][0]['text'] = "539";
    }
else if($message == "540"){
        $arrayPostData['messages'][0]['text'] = "540";
    }
else if($message == "541"){
        $arrayPostData['messages'][0]['text'] = "541";
    }
else if($message == "542"){
        $arrayPostData['messages'][0]['text'] = "542";
    }
else if($message == "543"){
        $arrayPostData['messages'][0]['text'] = "543";
    }
else if($message == "544"){
        $arrayPostData['messages'][0]['text'] = "544";
    }
else if($message == "545"){
        $arrayPostData['messages'][0]['text'] = "545";
    }
else if($message == "546"){
        $arrayPostData['messages'][0]['text'] = "546";
    }
else if($message == "547"){
        $arrayPostData['messages'][0]['text'] = "547";
    }
else if($message == "548"){
        $arrayPostData['messages'][0]['text'] = "548";
    }
else if($message == "549"){
        $arrayPostData['messages'][0]['text'] = "549";
    }
else if($message == "550"){
        $arrayPostData['messages'][0]['text'] = "550";
    }
else if($message == "551"){
        $arrayPostData['messages'][0]['text'] = "551";
    }
else if($message == "552"){
        $arrayPostData['messages'][0]['text'] = "552";
    }
else if($message == "553"){
        $arrayPostData['messages'][0]['text'] = "553";
    }
else if($message == "554"){
        $arrayPostData['messages'][0]['text'] = "554";
    }
else if($message == "555"){
        $arrayPostData['messages'][0]['text'] = "555";
    }
else if($message == "556"){
        $arrayPostData['messages'][0]['text'] = "556";
    }
else if($message == "557"){
        $arrayPostData['messages'][0]['text'] = "557";
    }
else if($message == "558"){
        $arrayPostData['messages'][0]['text'] = "558";
    }
else if($message == "559"){
        $arrayPostData['messages'][0]['text'] = "559";
    }
else if($message == "560"){
        $arrayPostData['messages'][0]['text'] = "560";
    }
else if($message == "561"){
        $arrayPostData['messages'][0]['text'] = "561";
    }
else if($message == "562"){
        $arrayPostData['messages'][0]['text'] = "562";
    }
else if($message == "563"){
        $arrayPostData['messages'][0]['text'] = "563";
    }
else if($message == "564"){
        $arrayPostData['messages'][0]['text'] = "564";
    }
else if($message == "565"){
        $arrayPostData['messages'][0]['text'] = "565";
    }
else if($message == "566"){
        $arrayPostData['messages'][0]['text'] = "566";
    }
else if($message == "567"){
        $arrayPostData['messages'][0]['text'] = "567";
    }
else if($message == "568"){
        $arrayPostData['messages'][0]['text'] = "568";
    }
else if($message == "569"){
        $arrayPostData['messages'][0]['text'] = "569";
    }
else if($message == "570"){
        $arrayPostData['messages'][0]['text'] = "570";
    }
else if($message == "571"){
        $arrayPostData['messages'][0]['text'] = "571";
    }
else if($message == "572"){
        $arrayPostData['messages'][0]['text'] = "572";
    }
else if($message == "573"){
        $arrayPostData['messages'][0]['text'] = "573";
    }
else if($message == "574"){
        $arrayPostData['messages'][0]['text'] = "574";
    }
else if($message == "575"){
        $arrayPostData['messages'][0]['text'] = "575";
    }
else if($message == "576"){
        $arrayPostData['messages'][0]['text'] = "576";
    }
else if($message == "577"){
        $arrayPostData['messages'][0]['text'] = "577";
    }
else if($message == "578"){
        $arrayPostData['messages'][0]['text'] = "578";
    }
else if($message == "579"){
        $arrayPostData['messages'][0]['text'] = "579";
    }
else if($message == "580"){
        $arrayPostData['messages'][0]['text'] = "580";
    }
else if($message == "581"){
        $arrayPostData['messages'][0]['text'] = "581";
    }
else if($message == "582"){
        $arrayPostData['messages'][0]['text'] = "582";
    }
else if($message == "583"){
        $arrayPostData['messages'][0]['text'] = "583";
    }
else if($message == "584"){
        $arrayPostData['messages'][0]['text'] = "584";
    }
else if($message == "585"){
        $arrayPostData['messages'][0]['text'] = "585";
    }
else if($message == "586"){
        $arrayPostData['messages'][0]['text'] = "586";
    }
else if($message == "587"){
        $arrayPostData['messages'][0]['text'] = "587";
    }
else if($message == "588"){
        $arrayPostData['messages'][0]['text'] = "588";
    }
else if($message == "589"){
        $arrayPostData['messages'][0]['text'] = "589";
    }
else if($message == "590"){
        $arrayPostData['messages'][0]['text'] = "590";
    }
else if($message == "591"){
        $arrayPostData['messages'][0]['text'] = "591";
    }
else if($message == "592"){
        $arrayPostData['messages'][0]['text'] = "592";
    }
else if($message == "593"){
        $arrayPostData['messages'][0]['text'] = "593";
    }
else if($message == "594"){
        $arrayPostData['messages'][0]['text'] = "594";
    }
else if($message == "595"){
        $arrayPostData['messages'][0]['text'] = "595";
    }
else if($message == "596"){
        $arrayPostData['messages'][0]['text'] = "596";
    }
else if($message == "597"){
        $arrayPostData['messages'][0]['text'] = "597";
    }
else if($message == "598"){
        $arrayPostData['messages'][0]['text'] = "598";
    }
else if($message == "599"){
        $arrayPostData['messages'][0]['text'] = "599";
    }
else if($message == "600"){
        $arrayPostData['messages'][0]['text'] = "600";
    }
else if($message == "601"){
        $arrayPostData['messages'][0]['text'] = "601";
    }
else if($message == "602"){
        $arrayPostData['messages'][0]['text'] = "602";
    }
else if($message == "603"){
        $arrayPostData['messages'][0]['text'] = "603";
    }
else if($message == "604"){
        $arrayPostData['messages'][0]['text'] = "604";
    }
else if($message == "605"){
        $arrayPostData['messages'][0]['text'] = "605";
    }
else if($message == "606"){
        $arrayPostData['messages'][0]['text'] = "606";
    }
else if($message == "607"){
        $arrayPostData['messages'][0]['text'] = "607";
    }
else if($message == "608"){
        $arrayPostData['messages'][0]['text'] = "608";
    }
else if($message == "609"){
        $arrayPostData['messages'][0]['text'] = "609";
    }
else if($message == "610"){
        $arrayPostData['messages'][0]['text'] = "610";
    }
else if($message == "611"){
        $arrayPostData['messages'][0]['text'] = "611";
    }
else if($message == "612"){
        $arrayPostData['messages'][0]['text'] = "612";
    }
else if($message == "613"){
        $arrayPostData['messages'][0]['text'] = "613";
    }
else if($message == "614"){
        $arrayPostData['messages'][0]['text'] = "614";
    }
else if($message == "615"){
        $arrayPostData['messages'][0]['text'] = "615";
    }
else if($message == "616"){
        $arrayPostData['messages'][0]['text'] = "616";
    }
else if($message == "617"){
        $arrayPostData['messages'][0]['text'] = "617";
    }
else if($message == "618"){
        $arrayPostData['messages'][0]['text'] = "618";
    }
else if($message == "619"){
        $arrayPostData['messages'][0]['text'] = "619";
    }
else if($message == "620"){
        $arrayPostData['messages'][0]['text'] = "620";
    }
else if($message == "621"){
        $arrayPostData['messages'][0]['text'] = "621";
    }
else if($message == "622"){
        $arrayPostData['messages'][0]['text'] = "622";
    }
else if($message == "623"){
        $arrayPostData['messages'][0]['text'] = "623";
    }
else if($message == "624"){
        $arrayPostData['messages'][0]['text'] = "624";
    }
else if($message == "625"){
        $arrayPostData['messages'][0]['text'] = "625";
    }
else if($message == "626"){
        $arrayPostData['messages'][0]['text'] = "626";
    }
else if($message == "627"){
        $arrayPostData['messages'][0]['text'] = "627";
    }
else if($message == "628"){
        $arrayPostData['messages'][0]['text'] = "628";
    }
else if($message == "629"){
        $arrayPostData['messages'][0]['text'] = "629";
    }
else if($message == "630"){
        $arrayPostData['messages'][0]['text'] = "630";
    }
else if($message == "631"){
        $arrayPostData['messages'][0]['text'] = "631";
    }
else if($message == "632"){
        $arrayPostData['messages'][0]['text'] = "632";
    }
else if($message == "633"){
        $arrayPostData['messages'][0]['text'] = "633";
    }
else if($message == "634"){
        $arrayPostData['messages'][0]['text'] = "634";
    }
else if($message == "635"){
        $arrayPostData['messages'][0]['text'] = "635";
    }
else if($message == "636"){
        $arrayPostData['messages'][0]['text'] = "636";
    }
else if($message == "637"){
        $arrayPostData['messages'][0]['text'] = "637";
    }
else if($message == "638"){
        $arrayPostData['messages'][0]['text'] = "638";
    }
else if($message == "639"){
        $arrayPostData['messages'][0]['text'] = "639";
    }
else if($message == "640"){
        $arrayPostData['messages'][0]['text'] = "640";
    }
else if($message == "641"){
        $arrayPostData['messages'][0]['text'] = "641";
    }
else if($message == "642"){
        $arrayPostData['messages'][0]['text'] = "642";
    }
else if($message == "643"){
        $arrayPostData['messages'][0]['text'] = "643";
    }
else if($message == "644"){
        $arrayPostData['messages'][0]['text'] = "644";
    }
else if($message == "645"){
        $arrayPostData['messages'][0]['text'] = "645";
    }
else if($message == "646"){
        $arrayPostData['messages'][0]['text'] = "646";
    }
else if($message == "647"){
        $arrayPostData['messages'][0]['text'] = "647";
    }
else if($message == "648"){
        $arrayPostData['messages'][0]['text'] = "648";
    }
else if($message == "649"){
        $arrayPostData['messages'][0]['text'] = "649";
    }
else if($message == "650"){
        $arrayPostData['messages'][0]['text'] = "650";
    }
else if($message == "651"){
        $arrayPostData['messages'][0]['text'] = "651";
    }
else if($message == "652"){
        $arrayPostData['messages'][0]['text'] = "652";
    }
else if($message == "653"){
        $arrayPostData['messages'][0]['text'] = "653";
    }
else if($message == "654"){
        $arrayPostData['messages'][0]['text'] = "654";
    }
else if($message == "655"){
        $arrayPostData['messages'][0]['text'] = "655";
    }
else if($message == "656"){
        $arrayPostData['messages'][0]['text'] = "656";
    }
else if($message == "657"){
        $arrayPostData['messages'][0]['text'] = "657";
    }
else if($message == "658"){
        $arrayPostData['messages'][0]['text'] = "658";
    }
else if($message == "659"){
        $arrayPostData['messages'][0]['text'] = "659";
    }
else if($message == "660"){
        $arrayPostData['messages'][0]['text'] = "660";
    }
else if($message == "661"){
        $arrayPostData['messages'][0]['text'] = "661";
    }
else if($message == "662"){
        $arrayPostData['messages'][0]['text'] = "662";
    }
else if($message == "663"){
        $arrayPostData['messages'][0]['text'] = "663";
    }
else if($message == "664"){
        $arrayPostData['messages'][0]['text'] = "664";
    }
else if($message == "665"){
        $arrayPostData['messages'][0]['text'] = "665";
    }
else if($message == "666"){
        $arrayPostData['messages'][0]['text'] = "666";
    }
else if($message == "667"){
        $arrayPostData['messages'][0]['text'] = "667";
    }
else if($message == "668"){
        $arrayPostData['messages'][0]['text'] = "668";
    }
else if($message == "669"){
        $arrayPostData['messages'][0]['text'] = "669";
    }
else if($message == "670"){
        $arrayPostData['messages'][0]['text'] = "670";
    }
else if($message == "671"){
        $arrayPostData['messages'][0]['text'] = "671";
    }
else if($message == "672"){
        $arrayPostData['messages'][0]['text'] = "672";
    }
else if($message == "673"){
        $arrayPostData['messages'][0]['text'] = "673";
    }
else if($message == "674"){
        $arrayPostData['messages'][0]['text'] = "674";
    }
else if($message == "675"){
        $arrayPostData['messages'][0]['text'] = "675";
    }
else if($message == "676"){
        $arrayPostData['messages'][0]['text'] = "676";
    }
else if($message == "677"){
        $arrayPostData['messages'][0]['text'] = "677";
    }
else if($message == "678"){
        $arrayPostData['messages'][0]['text'] = "678";
    }
else if($message == "679"){
        $arrayPostData['messages'][0]['text'] = "679";
    }
else if($message == "680"){
        $arrayPostData['messages'][0]['text'] = "680";
    }
else if($message == "681"){
        $arrayPostData['messages'][0]['text'] = "681";
    }
else if($message == "682"){
        $arrayPostData['messages'][0]['text'] = "682";
    }
else if($message == "683"){
        $arrayPostData['messages'][0]['text'] = "683";
    }
else if($message == "684"){
        $arrayPostData['messages'][0]['text'] = "684";
    }
else if($message == "685"){
        $arrayPostData['messages'][0]['text'] = "685";
    }
else if($message == "686"){
        $arrayPostData['messages'][0]['text'] = "686";
    }
else if($message == "687"){
        $arrayPostData['messages'][0]['text'] = "687";
    }
else if($message == "688"){
        $arrayPostData['messages'][0]['text'] = "688";
    }
else if($message == "689"){
        $arrayPostData['messages'][0]['text'] = "689";
    }
else if($message == "690"){
        $arrayPostData['messages'][0]['text'] = "690";
    }
else if($message == "691"){
        $arrayPostData['messages'][0]['text'] = "691";
    }
else if($message == "692"){
        $arrayPostData['messages'][0]['text'] = "692";
    }
else if($message == "693"){
        $arrayPostData['messages'][0]['text'] = "693";
    }
else if($message == "694"){
        $arrayPostData['messages'][0]['text'] = "694";
    }
else if($message == "695"){
        $arrayPostData['messages'][0]['text'] = "695";
    }
else if($message == "696"){
        $arrayPostData['messages'][0]['text'] = "696";
    }
else if($message == "697"){
        $arrayPostData['messages'][0]['text'] = "697";
    }
else if($message == "698"){
        $arrayPostData['messages'][0]['text'] = "698";
    }
else if($message == "699"){
        $arrayPostData['messages'][0]['text'] = "699";
    }
else if($message == "700"){
        $arrayPostData['messages'][0]['text'] = "700";
    }
else if($message == "701"){
        $arrayPostData['messages'][0]['text'] = "701";
    }
else if($message == "702"){
        $arrayPostData['messages'][0]['text'] = "702";
    }
else if($message == "703"){
        $arrayPostData['messages'][0]['text'] = "703";
    }
else if($message == "704"){
        $arrayPostData['messages'][0]['text'] = "704";
    }
else if($message == "705"){
        $arrayPostData['messages'][0]['text'] = "705";
    }
else if($message == "706"){
        $arrayPostData['messages'][0]['text'] = "706";
    }
else if($message == "707"){
        $arrayPostData['messages'][0]['text'] = "707";
    }
else if($message == "708"){
        $arrayPostData['messages'][0]['text'] = "708";
    }
else if($message == "709"){
        $arrayPostData['messages'][0]['text'] = "709";
    }
else if($message == "710"){
        $arrayPostData['messages'][0]['text'] = "710";
    }
else if($message == "711"){
        $arrayPostData['messages'][0]['text'] = "711";
    }
else if($message == "712"){
        $arrayPostData['messages'][0]['text'] = "712";
    }
else if($message == "713"){
        $arrayPostData['messages'][0]['text'] = "713";
    }
else if($message == "714"){
        $arrayPostData['messages'][0]['text'] = "714";
    }
else if($message == "715"){
        $arrayPostData['messages'][0]['text'] = "715";
    }
else if($message == "716"){
        $arrayPostData['messages'][0]['text'] = "716";
    }
else if($message == "717"){
        $arrayPostData['messages'][0]['text'] = "717";
    }
else if($message == "718"){
        $arrayPostData['messages'][0]['text'] = "718";
    }
else if($message == "719"){
        $arrayPostData['messages'][0]['text'] = "719";
    }
else if($message == "720"){
        $arrayPostData['messages'][0]['text'] = "720";
    }
else if($message == "721"){
        $arrayPostData['messages'][0]['text'] = "721";
    }
else if($message == "722"){
        $arrayPostData['messages'][0]['text'] = "722";
    }
else if($message == "723"){
        $arrayPostData['messages'][0]['text'] = "723";
    }
else if($message == "724"){
        $arrayPostData['messages'][0]['text'] = "724";
    }
else if($message == "725"){
        $arrayPostData['messages'][0]['text'] = "725";
    }
else if($message == "726"){
        $arrayPostData['messages'][0]['text'] = "726";
    }
else if($message == "727"){
        $arrayPostData['messages'][0]['text'] = "727";
    }
else if($message == "728"){
        $arrayPostData['messages'][0]['text'] = "728";
    }
else if($message == "729"){
        $arrayPostData['messages'][0]['text'] = "729";
    }
else if($message == "730"){
        $arrayPostData['messages'][0]['text'] = "730";
    }
else if($message == "731"){
        $arrayPostData['messages'][0]['text'] = "731";
    }
else if($message == "732"){
        $arrayPostData['messages'][0]['text'] = "732";
    }
else if($message == "733"){
        $arrayPostData['messages'][0]['text'] = "733";
    }
else if($message == "734"){
        $arrayPostData['messages'][0]['text'] = "734";
    }
else if($message == "735"){
        $arrayPostData['messages'][0]['text'] = "735";
    }
else if($message == "736"){
        $arrayPostData['messages'][0]['text'] = "736";
    }
else if($message == "737"){
        $arrayPostData['messages'][0]['text'] = "737";
    }
else if($message == "738"){
        $arrayPostData['messages'][0]['text'] = "738";
    }
else if($message == "739"){
        $arrayPostData['messages'][0]['text'] = "739";
    }
else if($message == "740"){
        $arrayPostData['messages'][0]['text'] = "740";
    }
else if($message == "741"){
        $arrayPostData['messages'][0]['text'] = "741";
    }
else if($message == "742"){
        $arrayPostData['messages'][0]['text'] = "742";
    }
else if($message == "743"){
        $arrayPostData['messages'][0]['text'] = "743";
    }
else if($message == "744"){
        $arrayPostData['messages'][0]['text'] = "744";
    }
else if($message == "745"){
        $arrayPostData['messages'][0]['text'] = "745";
    }
else if($message == "746"){
        $arrayPostData['messages'][0]['text'] = "746";
    }
else if($message == "747"){
        $arrayPostData['messages'][0]['text'] = "747";
    }
else if($message == "748"){
        $arrayPostData['messages'][0]['text'] = "748";
    }
else if($message == "749"){
        $arrayPostData['messages'][0]['text'] = "749";
    }
else if($message == "750"){
        $arrayPostData['messages'][0]['text'] = "750";
    }
else if($message == "751"){
        $arrayPostData['messages'][0]['text'] = "751";
    }
else if($message == "752"){
        $arrayPostData['messages'][0]['text'] = "752";
    }
else if($message == "753"){
        $arrayPostData['messages'][0]['text'] = "753";
    }
else if($message == "754"){
        $arrayPostData['messages'][0]['text'] = "754";
    }
else if($message == "755"){
        $arrayPostData['messages'][0]['text'] = "755";
    }
else if($message == "756"){
        $arrayPostData['messages'][0]['text'] = "756";
    }
else if($message == "757"){
        $arrayPostData['messages'][0]['text'] = "757";
    }
else if($message == "758"){
        $arrayPostData['messages'][0]['text'] = "758";
    }
else if($message == "759"){
        $arrayPostData['messages'][0]['text'] = "759";
    }
else if($message == "760"){
        $arrayPostData['messages'][0]['text'] = "760";
    }
else if($message == "761"){
        $arrayPostData['messages'][0]['text'] = "761";
    }
else if($message == "762"){
        $arrayPostData['messages'][0]['text'] = "762";
    }
else if($message == "763"){
        $arrayPostData['messages'][0]['text'] = "763";
    }
else if($message == "764"){
        $arrayPostData['messages'][0]['text'] = "764";
    }
else if($message == "765"){
        $arrayPostData['messages'][0]['text'] = "765";
    }
else if($message == "766"){
        $arrayPostData['messages'][0]['text'] = "766";
    }
else if($message == "767"){
        $arrayPostData['messages'][0]['text'] = "767";
    }
else if($message == "768"){
        $arrayPostData['messages'][0]['text'] = "768";
    }
else if($message == "769"){
        $arrayPostData['messages'][0]['text'] = "769";
    }
else if($message == "770"){
        $arrayPostData['messages'][0]['text'] = "770";
    }
else if($message == "771"){
        $arrayPostData['messages'][0]['text'] = "771";
    }
else if($message == "772"){
        $arrayPostData['messages'][0]['text'] = "772";
    }
else if($message == "773"){
        $arrayPostData['messages'][0]['text'] = "773";
    }
else if($message == "774"){
        $arrayPostData['messages'][0]['text'] = "774";
    }
else if($message == "775"){
        $arrayPostData['messages'][0]['text'] = "775";
    }
else if($message == "776"){
        $arrayPostData['messages'][0]['text'] = "776";
    }
else if($message == "777"){
        $arrayPostData['messages'][0]['text'] = "777";
    }
else if($message == "778"){
        $arrayPostData['messages'][0]['text'] = "778";
    }
else if($message == "779"){
        $arrayPostData['messages'][0]['text'] = "779";
    }
else if($message == "780"){
        $arrayPostData['messages'][0]['text'] = "780";
    }
else if($message == "781"){
        $arrayPostData['messages'][0]['text'] = "781";
    }
else if($message == "782"){
        $arrayPostData['messages'][0]['text'] = "782";
    }
else if($message == "783"){
        $arrayPostData['messages'][0]['text'] = "783";
    }
else if($message == "784"){
        $arrayPostData['messages'][0]['text'] = "784";
    }
else if($message == "785"){
        $arrayPostData['messages'][0]['text'] = "785";
    }
else if($message == "786"){
        $arrayPostData['messages'][0]['text'] = "786";
    }
else if($message == "787"){
        $arrayPostData['messages'][0]['text'] = "787";
    }
else if($message == "788"){
        $arrayPostData['messages'][0]['text'] = "788";
    }
else if($message == "789"){
        $arrayPostData['messages'][0]['text'] = "789";
    }
else if($message == "790"){
        $arrayPostData['messages'][0]['text'] = "790";
    }
else if($message == "791"){
        $arrayPostData['messages'][0]['text'] = "791";
    }
else if($message == "792"){
        $arrayPostData['messages'][0]['text'] = "792";
    }
else if($message == "793"){
        $arrayPostData['messages'][0]['text'] = "793";
    }
else if($message == "794"){
        $arrayPostData['messages'][0]['text'] = "794";
    }
else if($message == "795"){
        $arrayPostData['messages'][0]['text'] = "795";
    }
else if($message == "796"){
        $arrayPostData['messages'][0]['text'] = "796";
    }
else if($message == "797"){
        $arrayPostData['messages'][0]['text'] = "797";
    }
else if($message == "798"){
        $arrayPostData['messages'][0]['text'] = "798";
    }
else if($message == "799"){
        $arrayPostData['messages'][0]['text'] = "799";
    }
else if($message == "800"){
        $arrayPostData['messages'][0]['text'] = "800";
    }
else if($message == "801"){
        $arrayPostData['messages'][0]['text'] = "801";
    }
else if($message == "802"){
        $arrayPostData['messages'][0]['text'] = "802";
    }
else if($message == "803"){
        $arrayPostData['messages'][0]['text'] = "803";
    }
else if($message == "804"){
        $arrayPostData['messages'][0]['text'] = "804";
    }
else if($message == "805"){
        $arrayPostData['messages'][0]['text'] = "805";
    }
else if($message == "806"){
        $arrayPostData['messages'][0]['text'] = "806";
    }
else if($message == "807"){
        $arrayPostData['messages'][0]['text'] = "807";
    }
else if($message == "808"){
        $arrayPostData['messages'][0]['text'] = "808";
    }
else if($message == "809"){
        $arrayPostData['messages'][0]['text'] = "809";
    }
else if($message == "810"){
        $arrayPostData['messages'][0]['text'] = "810";
    }
else if($message == "811"){
        $arrayPostData['messages'][0]['text'] = "811";
    }
else if($message == "812"){
        $arrayPostData['messages'][0]['text'] = "812";
    }
else if($message == "813"){
        $arrayPostData['messages'][0]['text'] = "813";
    }
else if($message == "814"){
        $arrayPostData['messages'][0]['text'] = "814";
    }
else if($message == "815"){
        $arrayPostData['messages'][0]['text'] = "815";
    }
else if($message == "816"){
        $arrayPostData['messages'][0]['text'] = "816";
    }
else if($message == "817"){
        $arrayPostData['messages'][0]['text'] = "817";
    }
else if($message == "818"){
        $arrayPostData['messages'][0]['text'] = "818";
    }
else if($message == "819"){
        $arrayPostData['messages'][0]['text'] = "819";
    }
else if($message == "820"){
        $arrayPostData['messages'][0]['text'] = "820";
    }
else if($message == "821"){
        $arrayPostData['messages'][0]['text'] = "821";
    }
else if($message == "822"){
        $arrayPostData['messages'][0]['text'] = "822";
    }
else if($message == "823"){
        $arrayPostData['messages'][0]['text'] = "823";
    }
else if($message == "824"){
        $arrayPostData['messages'][0]['text'] = "824";
    }
else if($message == "825"){
        $arrayPostData['messages'][0]['text'] = "825";
    }
else if($message == "826"){
        $arrayPostData['messages'][0]['text'] = "826";
    }
else if($message == "827"){
        $arrayPostData['messages'][0]['text'] = "827";
    }
else if($message == "828"){
        $arrayPostData['messages'][0]['text'] = "828";
    }
else if($message == "829"){
        $arrayPostData['messages'][0]['text'] = "829";
    }
else if($message == "830"){
        $arrayPostData['messages'][0]['text'] = "830";
    }
else if($message == "831"){
        $arrayPostData['messages'][0]['text'] = "831";
    }
else if($message == "832"){
        $arrayPostData['messages'][0]['text'] = "832";
    }
else if($message == "833"){
        $arrayPostData['messages'][0]['text'] = "833";
    }
else if($message == "834"){
        $arrayPostData['messages'][0]['text'] = "834";
    }
else if($message == "835"){
        $arrayPostData['messages'][0]['text'] = "835";
    }
else if($message == "836"){
        $arrayPostData['messages'][0]['text'] = "836";
    }
else if($message == "837"){
        $arrayPostData['messages'][0]['text'] = "837";
    }
else if($message == "838"){
        $arrayPostData['messages'][0]['text'] = "838";
    }
else if($message == "839"){
        $arrayPostData['messages'][0]['text'] = "839";
    }
else if($message == "840"){
        $arrayPostData['messages'][0]['text'] = "840";
    }
else if($message == "841"){
        $arrayPostData['messages'][0]['text'] = "841";
    }
else if($message == "842"){
        $arrayPostData['messages'][0]['text'] = "842";
    }
else if($message == "843"){
        $arrayPostData['messages'][0]['text'] = "843";
    }
else if($message == "844"){
        $arrayPostData['messages'][0]['text'] = "844";
    }
else if($message == "845"){
        $arrayPostData['messages'][0]['text'] = "845";
    }
else if($message == "846"){
        $arrayPostData['messages'][0]['text'] = "846";
    }
else if($message == "847"){
        $arrayPostData['messages'][0]['text'] = "847";
    }
else if($message == "848"){
        $arrayPostData['messages'][0]['text'] = "848";
    }
else if($message == "849"){
        $arrayPostData['messages'][0]['text'] = "849";
    }
else if($message == "850"){
        $arrayPostData['messages'][0]['text'] = "850";
    }
else if($message == "851"){
        $arrayPostData['messages'][0]['text'] = "851";
    }
else if($message == "852"){
        $arrayPostData['messages'][0]['text'] = "852";
    }
else if($message == "853"){
        $arrayPostData['messages'][0]['text'] = "853";
    }
else if($message == "854"){
        $arrayPostData['messages'][0]['text'] = "854";
    }
else if($message == "855"){
        $arrayPostData['messages'][0]['text'] = "855";
    }
else if($message == "856"){
        $arrayPostData['messages'][0]['text'] = "856";
    }
else if($message == "857"){
        $arrayPostData['messages'][0]['text'] = "857";
    }
else if($message == "858"){
        $arrayPostData['messages'][0]['text'] = "858";
    }
else if($message == "859"){
        $arrayPostData['messages'][0]['text'] = "859";
    }
else if($message == "860"){
        $arrayPostData['messages'][0]['text'] = "860";
    }
else if($message == "861"){
        $arrayPostData['messages'][0]['text'] = "861";
    }
else if($message == "862"){
        $arrayPostData['messages'][0]['text'] = "862";
    }
else if($message == "863"){
        $arrayPostData['messages'][0]['text'] = "863";
    }
else if($message == "864"){
        $arrayPostData['messages'][0]['text'] = "864";
    }
else if($message == "865"){
        $arrayPostData['messages'][0]['text'] = "865";
    }
else if($message == "866"){
        $arrayPostData['messages'][0]['text'] = "866";
    }
else if($message == "867"){
        $arrayPostData['messages'][0]['text'] = "867";
    }
else if($message == "868"){
        $arrayPostData['messages'][0]['text'] = "868";
    }
else if($message == "869"){
        $arrayPostData['messages'][0]['text'] = "869";
    }
else if($message == "870"){
        $arrayPostData['messages'][0]['text'] = "870";
    }
else if($message == "871"){
        $arrayPostData['messages'][0]['text'] = "871";
    }
else if($message == "872"){
        $arrayPostData['messages'][0]['text'] = "872";
    }
else if($message == "873"){
        $arrayPostData['messages'][0]['text'] = "873";
    }
else if($message == "874"){
        $arrayPostData['messages'][0]['text'] = "874";
    }
else if($message == "875"){
        $arrayPostData['messages'][0]['text'] = "875";
    }
else if($message == "876"){
        $arrayPostData['messages'][0]['text'] = "876";
    }
else if($message == "877"){
        $arrayPostData['messages'][0]['text'] = "877";
    }
else if($message == "878"){
        $arrayPostData['messages'][0]['text'] = "878";
    }
else if($message == "879"){
        $arrayPostData['messages'][0]['text'] = "879";
    }
else if($message == "880"){
        $arrayPostData['messages'][0]['text'] = "880";
    }
else if($message == "881"){
        $arrayPostData['messages'][0]['text'] = "881";
    }
else if($message == "882"){
        $arrayPostData['messages'][0]['text'] = "882";
    }
else if($message == "883"){
        $arrayPostData['messages'][0]['text'] = "883";
    }
else if($message == "884"){
        $arrayPostData['messages'][0]['text'] = "884";
    }
else if($message == "885"){
        $arrayPostData['messages'][0]['text'] = "885";
    }
else if($message == "886"){
        $arrayPostData['messages'][0]['text'] = "886";
    }
else if($message == "887"){
        $arrayPostData['messages'][0]['text'] = "887";
    }
else if($message == "888"){
        $arrayPostData['messages'][0]['text'] = "888";
    }
else if($message == "889"){
        $arrayPostData['messages'][0]['text'] = "889";
    }
else if($message == "890"){
        $arrayPostData['messages'][0]['text'] = "890";
    }
else if($message == "891"){
        $arrayPostData['messages'][0]['text'] = "891";
    }
else if($message == "892"){
        $arrayPostData['messages'][0]['text'] = "892";
    }
else if($message == "893"){
        $arrayPostData['messages'][0]['text'] = "893";
    }
else if($message == "894"){
        $arrayPostData['messages'][0]['text'] = "894";
    }
else if($message == "895"){
        $arrayPostData['messages'][0]['text'] = "895";
    }
else if($message == "896"){
        $arrayPostData['messages'][0]['text'] = "896";
    }
else if($message == "897"){
        $arrayPostData['messages'][0]['text'] = "897";
    }
else if($message == "898"){
        $arrayPostData['messages'][0]['text'] = "898";
    }
else if($message == "899"){
        $arrayPostData['messages'][0]['text'] = "899";
    }
else if($message == "900"){
        $arrayPostData['messages'][0]['text'] = "900";
    }
else if($message == "901"){
        $arrayPostData['messages'][0]['text'] = "901";
    }
else if($message == "902"){
        $arrayPostData['messages'][0]['text'] = "902";
    }
else if($message == "903"){
        $arrayPostData['messages'][0]['text'] = "903";
    }
else if($message == "904"){
        $arrayPostData['messages'][0]['text'] = "904";
    }
else if($message == "905"){
        $arrayPostData['messages'][0]['text'] = "905";
    }
else if($message == "906"){
        $arrayPostData['messages'][0]['text'] = "906";
    }
else if($message == "907"){
        $arrayPostData['messages'][0]['text'] = "907";
    }
else if($message == "908"){
        $arrayPostData['messages'][0]['text'] = "908";
    }
else if($message == "909"){
        $arrayPostData['messages'][0]['text'] = "909";
    }
else if($message == "910"){
        $arrayPostData['messages'][0]['text'] = "910";
    }
else if($message == "911"){
        $arrayPostData['messages'][0]['text'] = "911";
    }
else if($message == "912"){
        $arrayPostData['messages'][0]['text'] = "912";
    }
else if($message == "913"){
        $arrayPostData['messages'][0]['text'] = "913";
    }
else if($message == "914"){
        $arrayPostData['messages'][0]['text'] = "914";
    }
else if($message == "915"){
        $arrayPostData['messages'][0]['text'] = "915";
    }
else if($message == "916"){
        $arrayPostData['messages'][0]['text'] = "916";
    }
else if($message == "917"){
        $arrayPostData['messages'][0]['text'] = "917";
    }
else if($message == "918"){
        $arrayPostData['messages'][0]['text'] = "918";
    }
else if($message == "919"){
        $arrayPostData['messages'][0]['text'] = "919";
    }
else if($message == "920"){
        $arrayPostData['messages'][0]['text'] = "920";
    }
else if($message == "921"){
        $arrayPostData['messages'][0]['text'] = "921";
    }
else if($message == "922"){
        $arrayPostData['messages'][0]['text'] = "922";
    }
else if($message == "923"){
        $arrayPostData['messages'][0]['text'] = "923";
    }
else if($message == "924"){
        $arrayPostData['messages'][0]['text'] = "924";
    }
else if($message == "925"){
        $arrayPostData['messages'][0]['text'] = "925";
    }
else if($message == "926"){
        $arrayPostData['messages'][0]['text'] = "926";
    }
else if($message == "927"){
        $arrayPostData['messages'][0]['text'] = "927";
    }
else if($message == "928"){
        $arrayPostData['messages'][0]['text'] = "928";
    }
else if($message == "929"){
        $arrayPostData['messages'][0]['text'] = "929";
    }
else if($message == "930"){
        $arrayPostData['messages'][0]['text'] = "930";
    }
else if($message == "931"){
        $arrayPostData['messages'][0]['text'] = "931";
    }
else if($message == "932"){
        $arrayPostData['messages'][0]['text'] = "932";
    }
else if($message == "933"){
        $arrayPostData['messages'][0]['text'] = "933";
    }
else if($message == "934"){
        $arrayPostData['messages'][0]['text'] = "934";
    }
else if($message == "935"){
        $arrayPostData['messages'][0]['text'] = "935";
    }
else if($message == "936"){
        $arrayPostData['messages'][0]['text'] = "936";
    }
else if($message == "937"){
        $arrayPostData['messages'][0]['text'] = "937";
    }
else if($message == "938"){
        $arrayPostData['messages'][0]['text'] = "938";
    }
else if($message == "939"){
        $arrayPostData['messages'][0]['text'] = "939";
    }
else if($message == "940"){
        $arrayPostData['messages'][0]['text'] = "940";
    }
else if($message == "941"){
        $arrayPostData['messages'][0]['text'] = "941";
    }
else if($message == "942"){
        $arrayPostData['messages'][0]['text'] = "942";
    }
else if($message == "943"){
        $arrayPostData['messages'][0]['text'] = "943";
    }
else if($message == "944"){
        $arrayPostData['messages'][0]['text'] = "944";
    }
else if($message == "945"){
        $arrayPostData['messages'][0]['text'] = "945";
    }
else if($message == "946"){
        $arrayPostData['messages'][0]['text'] = "946";
    }
else if($message == "947"){
        $arrayPostData['messages'][0]['text'] = "947";
    }
else if($message == "948"){
        $arrayPostData['messages'][0]['text'] = "948";
    }
else if($message == "949"){
        $arrayPostData['messages'][0]['text'] = "949";
    }
else if($message == "950"){
        $arrayPostData['messages'][0]['text'] = "950";
    }
else if($message == "951"){
        $arrayPostData['messages'][0]['text'] = "951";
    }
else if($message == "952"){
        $arrayPostData['messages'][0]['text'] = "952";
    }
else if($message == "953"){
        $arrayPostData['messages'][0]['text'] = "953";
    }
else if($message == "954"){
        $arrayPostData['messages'][0]['text'] = "954";
    }
else if($message == "955"){
        $arrayPostData['messages'][0]['text'] = "955";
    }
else if($message == "956"){
        $arrayPostData['messages'][0]['text'] = "956";
    }
else if($message == "957"){
        $arrayPostData['messages'][0]['text'] = "957";
    }
else if($message == "958"){
        $arrayPostData['messages'][0]['text'] = "958";
    }
else if($message == "959"){
        $arrayPostData['messages'][0]['text'] = "959";
    }
else if($message == "960"){
        $arrayPostData['messages'][0]['text'] = "960";
    }
else if($message == "961"){
        $arrayPostData['messages'][0]['text'] = "961";
    }
else if($message == "962"){
        $arrayPostData['messages'][0]['text'] = "962";
    }
else if($message == "963"){
        $arrayPostData['messages'][0]['text'] = "963";
    }
else if($message == "964"){
        $arrayPostData['messages'][0]['text'] = "964";
    }
else if($message == "965"){
        $arrayPostData['messages'][0]['text'] = "965";
    }
else if($message == "966"){
        $arrayPostData['messages'][0]['text'] = "966";
    }
else if($message == "967"){
        $arrayPostData['messages'][0]['text'] = "967";
    }
else if($message == "968"){
        $arrayPostData['messages'][0]['text'] = "968";
    }
else if($message == "969"){
        $arrayPostData['messages'][0]['text'] = "969";
    }
else if($message == "970"){
        $arrayPostData['messages'][0]['text'] = "970";
    }
else if($message == "971"){
        $arrayPostData['messages'][0]['text'] = "971";
    }
else if($message == "972"){
        $arrayPostData['messages'][0]['text'] = "972";
    }
else if($message == "973"){
        $arrayPostData['messages'][0]['text'] = "973";
    }
else if($message == "974"){
        $arrayPostData['messages'][0]['text'] = "974";
    }
else if($message == "975"){
        $arrayPostData['messages'][0]['text'] = "975";
    }
else if($message == "976"){
        $arrayPostData['messages'][0]['text'] = "976";
    }
else if($message == "977"){
        $arrayPostData['messages'][0]['text'] = "977";
    }
else if($message == "978"){
        $arrayPostData['messages'][0]['text'] = "978";
    }
else if($message == "979"){
        $arrayPostData['messages'][0]['text'] = "979";
    }
else if($message == "980"){
        $arrayPostData['messages'][0]['text'] = "980";
    }
else if($message == "981"){
        $arrayPostData['messages'][0]['text'] = "981";
    }
else if($message == "982"){
        $arrayPostData['messages'][0]['text'] = "982";
    }
else if($message == "983"){
        $arrayPostData['messages'][0]['text'] = "983";
    }
else if($message == "984"){
        $arrayPostData['messages'][0]['text'] = "984";
    }
else if($message == "985"){
        $arrayPostData['messages'][0]['text'] = "985";
    }
else if($message == "986"){
        $arrayPostData['messages'][0]['text'] = "986";
    }
else if($message == "987"){
        $arrayPostData['messages'][0]['text'] = "987";
    }
else if($message == "988"){
        $arrayPostData['messages'][0]['text'] = "988";
    }
else if($message == "989"){
        $arrayPostData['messages'][0]['text'] = "989";
    }
else if($message == "990"){
        $arrayPostData['messages'][0]['text'] = "990";
    }
else if($message == "991"){
        $arrayPostData['messages'][0]['text'] = "991";
    }
else if($message == "992"){
        $arrayPostData['messages'][0]['text'] = "992";
    }
else if($message == "993"){
        $arrayPostData['messages'][0]['text'] = "993";
    }
else if($message == "994"){
        $arrayPostData['messages'][0]['text'] = "994";
    }
else if($message == "995"){
        $arrayPostData['messages'][0]['text'] = "995";
    }
else if($message == "996"){
        $arrayPostData['messages'][0]['text'] = "996";
    }
else if($message == "997"){
        $arrayPostData['messages'][0]['text'] = "997";
    }
else if($message == "998"){
        $arrayPostData['messages'][0]['text'] = "998";
    }
else if($message == "999"){
        $arrayPostData['messages'][0]['text'] = "999";
    }
else if($message == "1000"){
        $arrayPostData['messages'][0]['text'] = "1000";
    }
else if($message == "1001"){
        $arrayPostData['messages'][0]['text'] = "1001";
    }
else if($message == "1002"){
        $arrayPostData['messages'][0]['text'] = "1002";
    }
else if($message == "1003"){
        $arrayPostData['messages'][0]['text'] = "1003";
    }
else if($message == "1004"){
        $arrayPostData['messages'][0]['text'] = "1004";
    }
else if($message == "1005"){
        $arrayPostData['messages'][0]['text'] = "1005";
    }
else if($message == "1006"){
        $arrayPostData['messages'][0]['text'] = "1006";
    }
else if($message == "1007"){
        $arrayPostData['messages'][0]['text'] = "1007";
    }
else if($message == "1008"){
        $arrayPostData['messages'][0]['text'] = "1008";
    }
else if($message == "1009"){
        $arrayPostData['messages'][0]['text'] = "1009";
    }
else if($message == "1010"){
        $arrayPostData['messages'][0]['text'] = "1010";
    }
else if($message == "1011"){
        $arrayPostData['messages'][0]['text'] = "1011";
    }
else if($message == "1012"){
        $arrayPostData['messages'][0]['text'] = "1012";
    }
else if($message == "1013"){
        $arrayPostData['messages'][0]['text'] = "1013";
    }
else if($message == "1014"){
        $arrayPostData['messages'][0]['text'] = "1014";
    }
else if($message == "1015"){
        $arrayPostData['messages'][0]['text'] = "1015";
    }
else if($message == "1016"){
        $arrayPostData['messages'][0]['text'] = "1016";
    }
else if($message == "1017"){
        $arrayPostData['messages'][0]['text'] = "1017";
    }
else if($message == "1018"){
        $arrayPostData['messages'][0]['text'] = "1018";
    }
else if($message == "1019"){
        $arrayPostData['messages'][0]['text'] = "1019";
    }
else if($message == "1020"){
        $arrayPostData['messages'][0]['text'] = "1020";
    }
else if($message == "1021"){
        $arrayPostData['messages'][0]['text'] = "1021";
    }
else if($message == "1022"){
        $arrayPostData['messages'][0]['text'] = "1022";
    }
else if($message == "1023"){
        $arrayPostData['messages'][0]['text'] = "1023";
    }
else if($message == "1024"){
        $arrayPostData['messages'][0]['text'] = "1024";
    }
else if($message == "1025"){
        $arrayPostData['messages'][0]['text'] = "1025";
    }
else if($message == "1026"){
        $arrayPostData['messages'][0]['text'] = "1026";
    }
else if($message == "1027"){
        $arrayPostData['messages'][0]['text'] = "1027";
    }
else if($message == "1028"){
        $arrayPostData['messages'][0]['text'] = "1028";
    }
else if($message == "1029"){
        $arrayPostData['messages'][0]['text'] = "1029";
    }
else if($message == "1030"){
        $arrayPostData['messages'][0]['text'] = "1030";
    }
else if($message == "1031"){
        $arrayPostData['messages'][0]['text'] = "1031";
    }
else if($message == "1032"){
        $arrayPostData['messages'][0]['text'] = "1032";
    }
else if($message == "1033"){
        $arrayPostData['messages'][0]['text'] = "1033";
    }
else if($message == "1034"){
        $arrayPostData['messages'][0]['text'] = "1034";
    }
else if($message == "1035"){
        $arrayPostData['messages'][0]['text'] = "1035";
    }
else if($message == "1036"){
        $arrayPostData['messages'][0]['text'] = "1036";
    }
else if($message == "1037"){
        $arrayPostData['messages'][0]['text'] = "1037";
    }
else if($message == "1038"){
        $arrayPostData['messages'][0]['text'] = "1038";
    }
else if($message == "1039"){
        $arrayPostData['messages'][0]['text'] = "1039";
    }
else if($message == "1040"){
        $arrayPostData['messages'][0]['text'] = "1040";
    }
else if($message == "1041"){
        $arrayPostData['messages'][0]['text'] = "1041";
    }
else if($message == "1042"){
        $arrayPostData['messages'][0]['text'] = "1042";
    }
else if($message == "1043"){
        $arrayPostData['messages'][0]['text'] = "1043";
    }
else if($message == "1044"){
        $arrayPostData['messages'][0]['text'] = "1044";
    }
else if($message == "1045"){
        $arrayPostData['messages'][0]['text'] = "1045";
    }
else if($message == "1046"){
        $arrayPostData['messages'][0]['text'] = "1046";
    }
else if($message == "1047"){
        $arrayPostData['messages'][0]['text'] = "1047";
    }
else if($message == "1048"){
        $arrayPostData['messages'][0]['text'] = "1048";
    }
else if($message == "1049"){
        $arrayPostData['messages'][0]['text'] = "1049";
    }
else if($message == "1050"){
        $arrayPostData['messages'][0]['text'] = "1050";
    }
else if($message == "1051"){
        $arrayPostData['messages'][0]['text'] = "1051";
    }
else if($message == "1052"){
        $arrayPostData['messages'][0]['text'] = "1052";
    }
else if($message == "1053"){
        $arrayPostData['messages'][0]['text'] = "1053";
    }
else if($message == "1054"){
        $arrayPostData['messages'][0]['text'] = "1054";
    }
else if($message == "1055"){
        $arrayPostData['messages'][0]['text'] = "1055";
    }
else if($message == "1056"){
        $arrayPostData['messages'][0]['text'] = "1056";
    }
else if($message == "1057"){
        $arrayPostData['messages'][0]['text'] = "1057";
    }
else if($message == "1058"){
        $arrayPostData['messages'][0]['text'] = "1058";
    }
else if($message == "1059"){
        $arrayPostData['messages'][0]['text'] = "1059";
    }
else if($message == "1060"){
        $arrayPostData['messages'][0]['text'] = "1060";
    }
else if($message == "1061"){
        $arrayPostData['messages'][0]['text'] = "1061";
    }
else if($message == "1062"){
        $arrayPostData['messages'][0]['text'] = "1062";
    }
else if($message == "1063"){
        $arrayPostData['messages'][0]['text'] = "1063";
    }
else if($message == "1064"){
        $arrayPostData['messages'][0]['text'] = "1064";
    }
else if($message == "1065"){
        $arrayPostData['messages'][0]['text'] = "1065";
    }
else if($message == "1066"){
        $arrayPostData['messages'][0]['text'] = "1066";
    }
else if($message == "1067"){
        $arrayPostData['messages'][0]['text'] = "1067";
    }
else if($message == "1068"){
        $arrayPostData['messages'][0]['text'] = "1068";
    }
else if($message == "1069"){
        $arrayPostData['messages'][0]['text'] = "1069";
    }
else if($message == "1070"){
        $arrayPostData['messages'][0]['text'] = "1070";
    }
else if($message == "1071"){
        $arrayPostData['messages'][0]['text'] = "1071";
    }
else if($message == "1072"){
        $arrayPostData['messages'][0]['text'] = "1072";
    }
else if($message == "1073"){
        $arrayPostData['messages'][0]['text'] = "1073";
    }
else if($message == "1074"){
        $arrayPostData['messages'][0]['text'] = "1074";
    }
else if($message == "1075"){
        $arrayPostData['messages'][0]['text'] = "1075";
    }
else if($message == "1076"){
        $arrayPostData['messages'][0]['text'] = "1076";
    }
else if($message == "1077"){
        $arrayPostData['messages'][0]['text'] = "1077";
    }
else if($message == "1078"){
        $arrayPostData['messages'][0]['text'] = "1078";
    }
else if($message == "1079"){
        $arrayPostData['messages'][0]['text'] = "1079";
    }
else if($message == "1080"){
        $arrayPostData['messages'][0]['text'] = "1080";
    }
else if($message == "1081"){
        $arrayPostData['messages'][0]['text'] = "1081";
    }
else if($message == "1082"){
        $arrayPostData['messages'][0]['text'] = "1082";
    }
else if($message == "1083"){
        $arrayPostData['messages'][0]['text'] = "1083";
    }
else if($message == "1084"){
        $arrayPostData['messages'][0]['text'] = "1084";
    }
else if($message == "1085"){
        $arrayPostData['messages'][0]['text'] = "1085";
    }
else if($message == "1086"){
        $arrayPostData['messages'][0]['text'] = "1086";
    }
else if($message == "1087"){
        $arrayPostData['messages'][0]['text'] = "1087";
    }
else if($message == "1088"){
        $arrayPostData['messages'][0]['text'] = "1088";
    }
else if($message == "1089"){
        $arrayPostData['messages'][0]['text'] = "1089";
    }
else if($message == "1090"){
        $arrayPostData['messages'][0]['text'] = "1090";
    }
else if($message == "1091"){
        $arrayPostData['messages'][0]['text'] = "1091";
    }
else if($message == "1092"){
        $arrayPostData['messages'][0]['text'] = "1092";
    }
else if($message == "1093"){
        $arrayPostData['messages'][0]['text'] = "1093";
    }
else if($message == "1094"){
        $arrayPostData['messages'][0]['text'] = "1094";
    }
else if($message == "1095"){
        $arrayPostData['messages'][0]['text'] = "1095";
    }
else if($message == "1096"){
        $arrayPostData['messages'][0]['text'] = "1096";
    }
else if($message == "1097"){
        $arrayPostData['messages'][0]['text'] = "1097";
    }
else if($message == "1098"){
        $arrayPostData['messages'][0]['text'] = "1098";
    }
else if($message == "1099"){
        $arrayPostData['messages'][0]['text'] = "1099";
    }
else if($message == "1100"){
        $arrayPostData['messages'][0]['text'] = "1100";
    }
else if($message == "1101"){
        $arrayPostData['messages'][0]['text'] = "1101";
    }
else if($message == "1102"){
        $arrayPostData['messages'][0]['text'] = "1102";
    }
else if($message == "1103"){
        $arrayPostData['messages'][0]['text'] = "1103";
    }
else if($message == "1104"){
        $arrayPostData['messages'][0]['text'] = "1104";
    }
else if($message == "1105"){
        $arrayPostData['messages'][0]['text'] = "1105";
    }
else if($message == "1106"){
        $arrayPostData['messages'][0]['text'] = "1106";
    }
else if($message == "1107"){
        $arrayPostData['messages'][0]['text'] = "1107";
    }
else if($message == "1108"){
        $arrayPostData['messages'][0]['text'] = "1108";
    }
else if($message == "1109"){
        $arrayPostData['messages'][0]['text'] = "1109";
    }
else if($message == "1110"){
        $arrayPostData['messages'][0]['text'] = "1110";
    }
else if($message == "1111"){
        $arrayPostData['messages'][0]['text'] = "1111";
    }
else if($message == "1112"){
        $arrayPostData['messages'][0]['text'] = "1112";
    }
else if($message == "1113"){
        $arrayPostData['messages'][0]['text'] = "1113";
    }
else if($message == "1114"){
        $arrayPostData['messages'][0]['text'] = "1114";
    }
else if($message == "1115"){
        $arrayPostData['messages'][0]['text'] = "1115";
    }
else if($message == "1116"){
        $arrayPostData['messages'][0]['text'] = "1116";
    }
else if($message == "1117"){
        $arrayPostData['messages'][0]['text'] = "1117";
    }
else if($message == "1118"){
        $arrayPostData['messages'][0]['text'] = "1118";
    }
else if($message == "1119"){
        $arrayPostData['messages'][0]['text'] = "1119";
    }
else if($message == "1120"){
        $arrayPostData['messages'][0]['text'] = "1120";
    }
else if($message == "1121"){
        $arrayPostData['messages'][0]['text'] = "1121";
    }
else if($message == "1122"){
        $arrayPostData['messages'][0]['text'] = "1122";
    }
else if($message == "1123"){
        $arrayPostData['messages'][0]['text'] = "1123";
    }
else if($message == "1124"){
        $arrayPostData['messages'][0]['text'] = "1124";
    }
else if($message == "1125"){
        $arrayPostData['messages'][0]['text'] = "1125";
    }
else if($message == "1126"){
        $arrayPostData['messages'][0]['text'] = "1126";
    }
else if($message == "1127"){
        $arrayPostData['messages'][0]['text'] = "1127";
    }
else if($message == "1128"){
        $arrayPostData['messages'][0]['text'] = "1128";
    }
else if($message == "1129"){
        $arrayPostData['messages'][0]['text'] = "1129";
    }
else if($message == "1130"){
        $arrayPostData['messages'][0]['text'] = "1130";
    }
else if($message == "1131"){
        $arrayPostData['messages'][0]['text'] = "1131";
    }
else if($message == "1132"){
        $arrayPostData['messages'][0]['text'] = "1132";
    }
else if($message == "1133"){
        $arrayPostData['messages'][0]['text'] = "1133";
    }
else if($message == "1134"){
        $arrayPostData['messages'][0]['text'] = "1134";
    }
else if($message == "1135"){
        $arrayPostData['messages'][0]['text'] = "1135";
    }
else if($message == "1136"){
        $arrayPostData['messages'][0]['text'] = "1136";
    }
else if($message == "1137"){
        $arrayPostData['messages'][0]['text'] = "1137";
    }
else if($message == "1138"){
        $arrayPostData['messages'][0]['text'] = "1138";
    }
else if($message == "1139"){
        $arrayPostData['messages'][0]['text'] = "1139";
    }
else if($message == "1140"){
        $arrayPostData['messages'][0]['text'] = "1140";
    }
else if($message == "1141"){
        $arrayPostData['messages'][0]['text'] = "1141";
    }
else if($message == "1142"){
        $arrayPostData['messages'][0]['text'] = "1142";
    }
else if($message == "1143"){
        $arrayPostData['messages'][0]['text'] = "1143";
    }
else if($message == "1144"){
        $arrayPostData['messages'][0]['text'] = "1144";
    }
else if($message == "1145"){
        $arrayPostData['messages'][0]['text'] = "1145";
    }
else if($message == "1146"){
        $arrayPostData['messages'][0]['text'] = "1146";
    }
else if($message == "1147"){
        $arrayPostData['messages'][0]['text'] = "1147";
    }
else if($message == "1148"){
        $arrayPostData['messages'][0]['text'] = "1148";
    }
else if($message == "1149"){
        $arrayPostData['messages'][0]['text'] = "1149";
    }
else if($message == "1150"){
        $arrayPostData['messages'][0]['text'] = "1150";
    }
else if($message == "1151"){
        $arrayPostData['messages'][0]['text'] = "1151";
    }
else if($message == "1152"){
        $arrayPostData['messages'][0]['text'] = "1152";
    }
else if($message == "1153"){
        $arrayPostData['messages'][0]['text'] = "1153";
    }
else if($message == "1154"){
        $arrayPostData['messages'][0]['text'] = "1154";
    }
else if($message == "1155"){
        $arrayPostData['messages'][0]['text'] = "1155";
    }
else if($message == "1156"){
        $arrayPostData['messages'][0]['text'] = "1156";
    }
else if($message == "1157"){
        $arrayPostData['messages'][0]['text'] = "1157";
    }
else if($message == "1158"){
        $arrayPostData['messages'][0]['text'] = "1158";
    }
else if($message == "1159"){
        $arrayPostData['messages'][0]['text'] = "1159";
    }
else if($message == "1160"){
        $arrayPostData['messages'][0]['text'] = "1160";
    }
else if($message == "1161"){
        $arrayPostData['messages'][0]['text'] = "1161";
    }
else if($message == "1162"){
        $arrayPostData['messages'][0]['text'] = "1162";
    }
else if($message == "1163"){
        $arrayPostData['messages'][0]['text'] = "1163";
    }
else if($message == "1164"){
        $arrayPostData['messages'][0]['text'] = "1164";
    }
else if($message == "1165"){
        $arrayPostData['messages'][0]['text'] = "1165";
    }
else if($message == "1166"){
        $arrayPostData['messages'][0]['text'] = "1166";
    }
else if($message == "1167"){
        $arrayPostData['messages'][0]['text'] = "1167";
    }
else if($message == "1168"){
        $arrayPostData['messages'][0]['text'] = "1168";
    }
else if($message == "1169"){
        $arrayPostData['messages'][0]['text'] = "1169";
    }
else if($message == "1170"){
        $arrayPostData['messages'][0]['text'] = "1170";
    }
else if($message == "1171"){
        $arrayPostData['messages'][0]['text'] = "1171";
    }
else if($message == "1172"){
        $arrayPostData['messages'][0]['text'] = "1172";
    }
else if($message == "1173"){
        $arrayPostData['messages'][0]['text'] = "1173";
    }
else if($message == "1174"){
        $arrayPostData['messages'][0]['text'] = "1174";
    }
else if($message == "1175"){
        $arrayPostData['messages'][0]['text'] = "1175";
    }
else if($message == "1176"){
        $arrayPostData['messages'][0]['text'] = "1176";
    }
else if($message == "1177"){
        $arrayPostData['messages'][0]['text'] = "1177";
    }
else if($message == "1178"){
        $arrayPostData['messages'][0]['text'] = "1178";
    }
else if($message == "1179"){
        $arrayPostData['messages'][0]['text'] = "1179";
    }
else if($message == "1180"){
        $arrayPostData['messages'][0]['text'] = "1180";
    }
else if($message == "1181"){
        $arrayPostData['messages'][0]['text'] = "1181";
    }
else if($message == "1182"){
        $arrayPostData['messages'][0]['text'] = "1182";
    }
else if($message == "1183"){
        $arrayPostData['messages'][0]['text'] = "1183";
    }
else if($message == "1184"){
        $arrayPostData['messages'][0]['text'] = "1184";
    }
else if($message == "1185"){
        $arrayPostData['messages'][0]['text'] = "1185";
    }
else if($message == "1186"){
        $arrayPostData['messages'][0]['text'] = "1186";
    }
else if($message == "1187"){
        $arrayPostData['messages'][0]['text'] = "1187";
    }
else if($message == "1188"){
        $arrayPostData['messages'][0]['text'] = "1188";
    }
else if($message == "1189"){
        $arrayPostData['messages'][0]['text'] = "1189";
    }
else if($message == "1190"){
        $arrayPostData['messages'][0]['text'] = "1190";
    }
else if($message == "1191"){
        $arrayPostData['messages'][0]['text'] = "1191";
    }
else if($message == "1192"){
        $arrayPostData['messages'][0]['text'] = "1192";
    }
else if($message == "1193"){
        $arrayPostData['messages'][0]['text'] = "1193";
    }
else if($message == "1194"){
        $arrayPostData['messages'][0]['text'] = "1194";
    }
else if($message == "1195"){
        $arrayPostData['messages'][0]['text'] = "1195";
    }
else if($message == "1196"){
        $arrayPostData['messages'][0]['text'] = "1196";
    }
else if($message == "1197"){
        $arrayPostData['messages'][0]['text'] = "1197";
    }
else if($message == "1198"){
        $arrayPostData['messages'][0]['text'] = "1198";
    }
else if($message == "1199"){
        $arrayPostData['messages'][0]['text'] = "1199";
    }
else if($message == "1200"){
        $arrayPostData['messages'][0]['text'] = "1200";
    }
else if($message == "1201"){
        $arrayPostData['messages'][0]['text'] = "1201";
    }
else if($message == "1202"){
        $arrayPostData['messages'][0]['text'] = "1202";
    }
else if($message == "1203"){
        $arrayPostData['messages'][0]['text'] = "1203";
    }
else if($message == "1204"){
        $arrayPostData['messages'][0]['text'] = "1204";
    }
else if($message == "1205"){
        $arrayPostData['messages'][0]['text'] = "1205";
    }
else if($message == "1206"){
        $arrayPostData['messages'][0]['text'] = "1206";
    }
else if($message == "1207"){
        $arrayPostData['messages'][0]['text'] = "1207";
    }
else if($message == "1208"){
        $arrayPostData['messages'][0]['text'] = "1208";
    }
else if($message == "1209"){
        $arrayPostData['messages'][0]['text'] = "1209";
    }
else if($message == "1210"){
        $arrayPostData['messages'][0]['text'] = "1210";
    }
else if($message == "1211"){
        $arrayPostData['messages'][0]['text'] = "1211";
    }
else if($message == "1212"){
        $arrayPostData['messages'][0]['text'] = "1212";
    }
else if($message == "1213"){
        $arrayPostData['messages'][0]['text'] = "1213";
    }
else if($message == "1214"){
        $arrayPostData['messages'][0]['text'] = "1214";
    }
else if($message == "1215"){
        $arrayPostData['messages'][0]['text'] = "1215";
    }
else if($message == "1216"){
        $arrayPostData['messages'][0]['text'] = "1216";
    }
else if($message == "1217"){
        $arrayPostData['messages'][0]['text'] = "1217";
    }
else if($message == "1218"){
        $arrayPostData['messages'][0]['text'] = "1218";
    }
else if($message == "1219"){
        $arrayPostData['messages'][0]['text'] = "1219";
    }
else if($message == "1220"){
        $arrayPostData['messages'][0]['text'] = "1220";
    }
else if($message == "1221"){
        $arrayPostData['messages'][0]['text'] = "1221";
    }
else if($message == "1222"){
        $arrayPostData['messages'][0]['text'] = "1222";
    }
else if($message == "1223"){
        $arrayPostData['messages'][0]['text'] = "1223";
    }
else if($message == "1224"){
        $arrayPostData['messages'][0]['text'] = "1224";
    }
else if($message == "1225"){
        $arrayPostData['messages'][0]['text'] = "1225";
    }
else if($message == "1226"){
        $arrayPostData['messages'][0]['text'] = "1226";
    }
else if($message == "1227"){
        $arrayPostData['messages'][0]['text'] = "1227";
    }
else if($message == "1228"){
        $arrayPostData['messages'][0]['text'] = "1228";
    }
else if($message == "1229"){
        $arrayPostData['messages'][0]['text'] = "1229";
    }
else if($message == "1230"){
        $arrayPostData['messages'][0]['text'] = "1230";
    }
else if($message == "1231"){
        $arrayPostData['messages'][0]['text'] = "1231";
    }
else if($message == "1232"){
        $arrayPostData['messages'][0]['text'] = "1232";
    }
else if($message == "1233"){
        $arrayPostData['messages'][0]['text'] = "1233";
    }
else if($message == "1234"){
        $arrayPostData['messages'][0]['text'] = "1234";
    }
else if($message == "1235"){
        $arrayPostData['messages'][0]['text'] = "1235";
    }
else if($message == "1236"){
        $arrayPostData['messages'][0]['text'] = "1236";
    }
else if($message == "1237"){
        $arrayPostData['messages'][0]['text'] = "1237";
    }
else if($message == "1238"){
        $arrayPostData['messages'][0]['text'] = "1238";
    }
else if($message == "1239"){
        $arrayPostData['messages'][0]['text'] = "1239";
    }
else if($message == "1240"){
        $arrayPostData['messages'][0]['text'] = "1240";
    }
else if($message == "1241"){
        $arrayPostData['messages'][0]['text'] = "1241";
    }
else if($message == "1242"){
        $arrayPostData['messages'][0]['text'] = "1242";
    }
else if($message == "1243"){
        $arrayPostData['messages'][0]['text'] = "1243";
    }
else if($message == "1244"){
        $arrayPostData['messages'][0]['text'] = "1244";
    }
else if($message == "1245"){
        $arrayPostData['messages'][0]['text'] = "1245";
    }
else if($message == "1246"){
        $arrayPostData['messages'][0]['text'] = "1246";
    }
else if($message == "1247"){
        $arrayPostData['messages'][0]['text'] = "1247";
    }
else if($message == "1248"){
        $arrayPostData['messages'][0]['text'] = "1248";
    }
else if($message == "1249"){
        $arrayPostData['messages'][0]['text'] = "1249";
    }
else if($message == "1250"){
        $arrayPostData['messages'][0]['text'] = "1250";
    }
else if($message == "1251"){
        $arrayPostData['messages'][0]['text'] = "1251";
    }
else if($message == "1252"){
        $arrayPostData['messages'][0]['text'] = "1252";
    }
else if($message == "1253"){
        $arrayPostData['messages'][0]['text'] = "1253";
    }
else if($message == "1254"){
        $arrayPostData['messages'][0]['text'] = "1254";
    }
else if($message == "1255"){
        $arrayPostData['messages'][0]['text'] = "1255";
    }
else if($message == "1256"){
        $arrayPostData['messages'][0]['text'] = "1256";
    }
else if($message == "1257"){
        $arrayPostData['messages'][0]['text'] = "1257";
    }
else if($message == "1258"){
        $arrayPostData['messages'][0]['text'] = "1258";
    }
else if($message == "1259"){
        $arrayPostData['messages'][0]['text'] = "1259";
    }
else if($message == "1260"){
        $arrayPostData['messages'][0]['text'] = "1260";
    }
else if($message == "1261"){
        $arrayPostData['messages'][0]['text'] = "1261";
    }
else if($message == "1262"){
        $arrayPostData['messages'][0]['text'] = "1262";
    }
else if($message == "1263"){
        $arrayPostData['messages'][0]['text'] = "1263";
    }
else if($message == "1264"){
        $arrayPostData['messages'][0]['text'] = "1264";
    }
else if($message == "1265"){
        $arrayPostData['messages'][0]['text'] = "1265";
    }
else if($message == "1266"){
        $arrayPostData['messages'][0]['text'] = "1266";
    }
else if($message == "1267"){
        $arrayPostData['messages'][0]['text'] = "1267";
    }
else if($message == "1268"){
        $arrayPostData['messages'][0]['text'] = "1268";
    }
else if($message == "1269"){
        $arrayPostData['messages'][0]['text'] = "1269";
    }
else if($message == "1270"){
        $arrayPostData['messages'][0]['text'] = "1270";
    }
else if($message == "1271"){
        $arrayPostData['messages'][0]['text'] = "1271";
    }
else if($message == "1272"){
        $arrayPostData['messages'][0]['text'] = "1272";
    }
else if($message == "1273"){
        $arrayPostData['messages'][0]['text'] = "1273";
    }
else if($message == "1274"){
        $arrayPostData['messages'][0]['text'] = "1274";
    }
else if($message == "1275"){
        $arrayPostData['messages'][0]['text'] = "1275";
    }
else if($message == "1276"){
        $arrayPostData['messages'][0]['text'] = "1276";
    }
else if($message == "1277"){
        $arrayPostData['messages'][0]['text'] = "1277";
    }
else if($message == "1278"){
        $arrayPostData['messages'][0]['text'] = "1278";
    }
else if($message == "1279"){
        $arrayPostData['messages'][0]['text'] = "1279";
    }
else if($message == "1280"){
        $arrayPostData['messages'][0]['text'] = "1280";
    }
else if($message == "1281"){
        $arrayPostData['messages'][0]['text'] = "1281";
    }
else if($message == "1282"){
        $arrayPostData['messages'][0]['text'] = "1282";
    }
else if($message == "1283"){
        $arrayPostData['messages'][0]['text'] = "1283";
    }
else if($message == "1284"){
        $arrayPostData['messages'][0]['text'] = "1284";
    }
else if($message == "1285"){
        $arrayPostData['messages'][0]['text'] = "1285";
    }
else if($message == "1286"){
        $arrayPostData['messages'][0]['text'] = "1286";
    }
else if($message == "1287"){
        $arrayPostData['messages'][0]['text'] = "1287";
    }
else if($message == "1288"){
        $arrayPostData['messages'][0]['text'] = "1288";
    }
else if($message == "1289"){
        $arrayPostData['messages'][0]['text'] = "1289";
    }
else if($message == "1290"){
        $arrayPostData['messages'][0]['text'] = "1290";
    }
else if($message == "1291"){
        $arrayPostData['messages'][0]['text'] = "1291";
    }
else if($message == "1292"){
        $arrayPostData['messages'][0]['text'] = "1292";
    }
else if($message == "1293"){
        $arrayPostData['messages'][0]['text'] = "1293";
    }
else if($message == "1294"){
        $arrayPostData['messages'][0]['text'] = "1294";
    }
else if($message == "1295"){
        $arrayPostData['messages'][0]['text'] = "1295";
    }
else if($message == "1296"){
        $arrayPostData['messages'][0]['text'] = "1296";
    }
else if($message == "1297"){
        $arrayPostData['messages'][0]['text'] = "1297";
    }
else if($message == "1298"){
        $arrayPostData['messages'][0]['text'] = "1298";
    }
else if($message == "1299"){
        $arrayPostData['messages'][0]['text'] = "1299";
    }
else if($message == "1300"){
        $arrayPostData['messages'][0]['text'] = "1300";
    }
else if($message == "1301"){
        $arrayPostData['messages'][0]['text'] = "1301";
    }
else if($message == "1302"){
        $arrayPostData['messages'][0]['text'] = "1302";
    }
else if($message == "1303"){
        $arrayPostData['messages'][0]['text'] = "1303";
    }
else if($message == "1304"){
        $arrayPostData['messages'][0]['text'] = "1304";
    }
else if($message == "1305"){
        $arrayPostData['messages'][0]['text'] = "1305";
    }
else if($message == "1306"){
        $arrayPostData['messages'][0]['text'] = "1306";
    }
else if($message == "1307"){
        $arrayPostData['messages'][0]['text'] = "1307";
    }
else if($message == "1308"){
        $arrayPostData['messages'][0]['text'] = "1308";
    }
else if($message == "1309"){
        $arrayPostData['messages'][0]['text'] = "1309";
    }
else if($message == "1310"){
        $arrayPostData['messages'][0]['text'] = "1310";
    }
else if($message == "1311"){
        $arrayPostData['messages'][0]['text'] = "1311";
    }
else if($message == "1312"){
        $arrayPostData['messages'][0]['text'] = "1312";
    }
else if($message == "1313"){
        $arrayPostData['messages'][0]['text'] = "1313";
    }
else if($message == "1314"){
        $arrayPostData['messages'][0]['text'] = "1314";
    }
else if($message == "1315"){
        $arrayPostData['messages'][0]['text'] = "1315";
    }
else if($message == "1316"){
        $arrayPostData['messages'][0]['text'] = "1316";
    }
else if($message == "1317"){
        $arrayPostData['messages'][0]['text'] = "1317";
    }
else if($message == "1318"){
        $arrayPostData['messages'][0]['text'] = "1318";
    }
else if($message == "1319"){
        $arrayPostData['messages'][0]['text'] = "1319";
    }
else if($message == "1320"){
        $arrayPostData['messages'][0]['text'] = "1320";
    }
else if($message == "1321"){
        $arrayPostData['messages'][0]['text'] = "1321";
    }
else if($message == "1322"){
        $arrayPostData['messages'][0]['text'] = "1322";
    }
else if($message == "1323"){
        $arrayPostData['messages'][0]['text'] = "1323";
    }
else if($message == "1324"){
        $arrayPostData['messages'][0]['text'] = "1324";
    }
else if($message == "1325"){
        $arrayPostData['messages'][0]['text'] = "1325";
    }
else if($message == "1326"){
        $arrayPostData['messages'][0]['text'] = "1326";
    }
else if($message == "1327"){
        $arrayPostData['messages'][0]['text'] = "1327";
    }
else if($message == "1328"){
        $arrayPostData['messages'][0]['text'] = "1328";
    }
else if($message == "1329"){
        $arrayPostData['messages'][0]['text'] = "1329";
    }
else if($message == "1330"){
        $arrayPostData['messages'][0]['text'] = "1330";
    }
else if($message == "1331"){
        $arrayPostData['messages'][0]['text'] = "1331";
    }
else if($message == "1332"){
        $arrayPostData['messages'][0]['text'] = "1332";
    }
else if($message == "1333"){
        $arrayPostData['messages'][0]['text'] = "1333";
    }
else if($message == "1334"){
        $arrayPostData['messages'][0]['text'] = "1334";
    }
else if($message == "1335"){
        $arrayPostData['messages'][0]['text'] = "1335";
    }
else if($message == "1336"){
        $arrayPostData['messages'][0]['text'] = "1336";
    }
else if($message == "1337"){
        $arrayPostData['messages'][0]['text'] = "1337";
    }
else if($message == "1338"){
        $arrayPostData['messages'][0]['text'] = "1338";
    }
else if($message == "1339"){
        $arrayPostData['messages'][0]['text'] = "1339";
    }
else if($message == "1340"){
        $arrayPostData['messages'][0]['text'] = "1340";
    }
else if($message == "1341"){
        $arrayPostData['messages'][0]['text'] = "1341";
    }
else if($message == "1342"){
        $arrayPostData['messages'][0]['text'] = "1342";
    }
else if($message == "1343"){
        $arrayPostData['messages'][0]['text'] = "1343";
    }
else if($message == "1344"){
        $arrayPostData['messages'][0]['text'] = "1344";
    }
else if($message == "1345"){
        $arrayPostData['messages'][0]['text'] = "1345";
    }
else if($message == "1346"){
        $arrayPostData['messages'][0]['text'] = "1346";
    }
else if($message == "1347"){
        $arrayPostData['messages'][0]['text'] = "1347";
    }
else if($message == "1348"){
        $arrayPostData['messages'][0]['text'] = "1348";
    }
else if($message == "1349"){
        $arrayPostData['messages'][0]['text'] = "1349";
    }
else if($message == "1350"){
        $arrayPostData['messages'][0]['text'] = "1350";
    }
else if($message == "1351"){
        $arrayPostData['messages'][0]['text'] = "1351";
    }
else if($message == "1352"){
        $arrayPostData['messages'][0]['text'] = "1352";
    }
else if($message == "1353"){
        $arrayPostData['messages'][0]['text'] = "1353";
    }
else if($message == "1354"){
        $arrayPostData['messages'][0]['text'] = "1354";
    }
else if($message == "1355"){
        $arrayPostData['messages'][0]['text'] = "1355";
    }
else if($message == "1356"){
        $arrayPostData['messages'][0]['text'] = "1356";
    }
else if($message == "1357"){
        $arrayPostData['messages'][0]['text'] = "1357";
    }
else if($message == "1358"){
        $arrayPostData['messages'][0]['text'] = "1358";
    }
else if($message == "1359"){
        $arrayPostData['messages'][0]['text'] = "1359";
    }
else if($message == "1360"){
        $arrayPostData['messages'][0]['text'] = "1360";
    }
else if($message == "1361"){
        $arrayPostData['messages'][0]['text'] = "1361";
    }
else if($message == "1362"){
        $arrayPostData['messages'][0]['text'] = "1362";
    }
else if($message == "1363"){
        $arrayPostData['messages'][0]['text'] = "1363";
    }
else if($message == "1364"){
        $arrayPostData['messages'][0]['text'] = "1364";
    }
else if($message == "1365"){
        $arrayPostData['messages'][0]['text'] = "1365";
    }
else if($message == "1366"){
        $arrayPostData['messages'][0]['text'] = "1366";
    }
else if($message == "1367"){
        $arrayPostData['messages'][0]['text'] = "1367";
    }
else if($message == "1368"){
        $arrayPostData['messages'][0]['text'] = "1368";
    }
else if($message == "1369"){
        $arrayPostData['messages'][0]['text'] = "1369";
    }
else if($message == "1370"){
        $arrayPostData['messages'][0]['text'] = "1370";
    }
else if($message == "1371"){
        $arrayPostData['messages'][0]['text'] = "1371";
    }
else if($message == "1372"){
        $arrayPostData['messages'][0]['text'] = "1372";
    }
else if($message == "1373"){
        $arrayPostData['messages'][0]['text'] = "1373";
    }
else if($message == "1374"){
        $arrayPostData['messages'][0]['text'] = "1374";
    }
else if($message == "1375"){
        $arrayPostData['messages'][0]['text'] = "1375";
    }
else if($message == "1376"){
        $arrayPostData['messages'][0]['text'] = "1376";
    }
else if($message == "1377"){
        $arrayPostData['messages'][0]['text'] = "1377";
    }
else if($message == "1378"){
        $arrayPostData['messages'][0]['text'] = "1378";
    }
else if($message == "1379"){
        $arrayPostData['messages'][0]['text'] = "1379";
    }
else if($message == "1380"){
        $arrayPostData['messages'][0]['text'] = "1380";
    }
else if($message == "1381"){
        $arrayPostData['messages'][0]['text'] = "1381";
    }
else if($message == "1382"){
        $arrayPostData['messages'][0]['text'] = "1382";
    }
else if($message == "1383"){
        $arrayPostData['messages'][0]['text'] = "1383";
    }
else if($message == "1384"){
        $arrayPostData['messages'][0]['text'] = "1384";
    }
else if($message == "1385"){
        $arrayPostData['messages'][0]['text'] = "1385";
    }
else if($message == "1386"){
        $arrayPostData['messages'][0]['text'] = "1386";
    }
else if($message == "1387"){
        $arrayPostData['messages'][0]['text'] = "1387";
    }
else if($message == "1388"){
        $arrayPostData['messages'][0]['text'] = "1388";
    }
else if($message == "1389"){
        $arrayPostData['messages'][0]['text'] = "1389";
    }
else if($message == "1390"){
        $arrayPostData['messages'][0]['text'] = "1390";
    }
else if($message == "1391"){
        $arrayPostData['messages'][0]['text'] = "1391";
    }
else if($message == "1392"){
        $arrayPostData['messages'][0]['text'] = "1392";
    }
else if($message == "1393"){
        $arrayPostData['messages'][0]['text'] = "1393";
    }
else if($message == "1394"){
        $arrayPostData['messages'][0]['text'] = "1394";
    }
else if($message == "1395"){
        $arrayPostData['messages'][0]['text'] = "1395";
    }
else if($message == "1396"){
        $arrayPostData['messages'][0]['text'] = "1396";
    }
else if($message == "1397"){
        $arrayPostData['messages'][0]['text'] = "1397";
    }
else if($message == "1398"){
        $arrayPostData['messages'][0]['text'] = "1398";
    }
else if($message == "1399"){
        $arrayPostData['messages'][0]['text'] = "1399";
    }
else if($message == "1400"){
        $arrayPostData['messages'][0]['text'] = "1400";
    }
else if($message == "1401"){
        $arrayPostData['messages'][0]['text'] = "1401";
    }
else if($message == "1402"){
        $arrayPostData['messages'][0]['text'] = "1402";
    }
else if($message == "1403"){
        $arrayPostData['messages'][0]['text'] = "1403";
    }
else if($message == "1404"){
        $arrayPostData['messages'][0]['text'] = "1404";
    }
else if($message == "1405"){
        $arrayPostData['messages'][0]['text'] = "1405";
    }
else if($message == "1406"){
        $arrayPostData['messages'][0]['text'] = "1406";
    }
else if($message == "1407"){
        $arrayPostData['messages'][0]['text'] = "1407";
    }
else if($message == "1408"){
        $arrayPostData['messages'][0]['text'] = "1408";
    }
else if($message == "1409"){
        $arrayPostData['messages'][0]['text'] = "1409";
    }
else if($message == "1410"){
        $arrayPostData['messages'][0]['text'] = "1410";
    }
else if($message == "1411"){
        $arrayPostData['messages'][0]['text'] = "1411";
    }
else if($message == "1412"){
        $arrayPostData['messages'][0]['text'] = "1412";
    }
else if($message == "1413"){
        $arrayPostData['messages'][0]['text'] = "1413";
    }
else if($message == "1414"){
        $arrayPostData['messages'][0]['text'] = "1414";
    }
else if($message == "1415"){
        $arrayPostData['messages'][0]['text'] = "1415";
    }
else if($message == "1416"){
        $arrayPostData['messages'][0]['text'] = "1416";
    }
else if($message == "1417"){
        $arrayPostData['messages'][0]['text'] = "1417";
    }
else if($message == "1418"){
        $arrayPostData['messages'][0]['text'] = "1418";
    }
else if($message == "1419"){
        $arrayPostData['messages'][0]['text'] = "1419";
    }
else if($message == "1420"){
        $arrayPostData['messages'][0]['text'] = "1420";
    }
else if($message == "1421"){
        $arrayPostData['messages'][0]['text'] = "1421";
    }
else if($message == "1422"){
        $arrayPostData['messages'][0]['text'] = "1422";
    }
else if($message == "1423"){
        $arrayPostData['messages'][0]['text'] = "1423";
    }
else if($message == "1424"){
        $arrayPostData['messages'][0]['text'] = "1424";
    }
else if($message == "1425"){
        $arrayPostData['messages'][0]['text'] = "1425";
    }
else if($message == "1426"){
        $arrayPostData['messages'][0]['text'] = "1426";
    }
else if($message == "1427"){
        $arrayPostData['messages'][0]['text'] = "1427";
    }
else if($message == "1428"){
        $arrayPostData['messages'][0]['text'] = "1428";
    }
else if($message == "1429"){
        $arrayPostData['messages'][0]['text'] = "1429";
    }
else if($message == "1430"){
        $arrayPostData['messages'][0]['text'] = "1430";
    }
else if($message == "1431"){
        $arrayPostData['messages'][0]['text'] = "1431";
    }
else if($message == "1432"){
        $arrayPostData['messages'][0]['text'] = "1432";
    }
else if($message == "1433"){
        $arrayPostData['messages'][0]['text'] = "1433";
    }
else if($message == "1434"){
        $arrayPostData['messages'][0]['text'] = "1434";
    }
else if($message == "1435"){
        $arrayPostData['messages'][0]['text'] = "1435";
    }
else if($message == "1436"){
        $arrayPostData['messages'][0]['text'] = "1436";
    }
else if($message == "1437"){
        $arrayPostData['messages'][0]['text'] = "1437";
    }
else if($message == "1438"){
        $arrayPostData['messages'][0]['text'] = "1438";
    }
else if($message == "1439"){
        $arrayPostData['messages'][0]['text'] = "1439";
    }
else if($message == "1440"){
        $arrayPostData['messages'][0]['text'] = "1440";
    }
else if($message == "1441"){
        $arrayPostData['messages'][0]['text'] = "1441";
    }
else if($message == "1442"){
        $arrayPostData['messages'][0]['text'] = "1442";
    }
else if($message == "1443"){
        $arrayPostData['messages'][0]['text'] = "1443";
    }
else if($message == "1444"){
        $arrayPostData['messages'][0]['text'] = "1444";
    }
else if($message == "1445"){
        $arrayPostData['messages'][0]['text'] = "1445";
    }
else if($message == "1446"){
        $arrayPostData['messages'][0]['text'] = "1446";
    }
else if($message == "1447"){
        $arrayPostData['messages'][0]['text'] = "1447";
    }
else if($message == "1448"){
        $arrayPostData['messages'][0]['text'] = "1448";
    }
else if($message == "1449"){
        $arrayPostData['messages'][0]['text'] = "1449";
    }
else if($message == "1450"){
        $arrayPostData['messages'][0]['text'] = "1450";
    }
else if($message == "1451"){
        $arrayPostData['messages'][0]['text'] = "1451";
    }
else if($message == "1452"){
        $arrayPostData['messages'][0]['text'] = "1452";
    }
else if($message == "1453"){
        $arrayPostData['messages'][0]['text'] = "1453";
    }
else if($message == "1454"){
        $arrayPostData['messages'][0]['text'] = "1454";
    }
else if($message == "1455"){
        $arrayPostData['messages'][0]['text'] = "1455";
    }
else if($message == "1456"){
        $arrayPostData['messages'][0]['text'] = "1456";
    }
else if($message == "1457"){
        $arrayPostData['messages'][0]['text'] = "1457";
    }
else if($message == "1458"){
        $arrayPostData['messages'][0]['text'] = "1458";
    }
else if($message == "1459"){
        $arrayPostData['messages'][0]['text'] = "1459";
    }
else if($message == "1460"){
        $arrayPostData['messages'][0]['text'] = "1460";
    }
else if($message == "1461"){
        $arrayPostData['messages'][0]['text'] = "1461";
    }
else if($message == "1462"){
        $arrayPostData['messages'][0]['text'] = "1462";
    }
else if($message == "1463"){
        $arrayPostData['messages'][0]['text'] = "1463";
    }
else if($message == "1464"){
        $arrayPostData['messages'][0]['text'] = "1464";
    }
else if($message == "1465"){
        $arrayPostData['messages'][0]['text'] = "1465";
    }
else if($message == "1466"){
        $arrayPostData['messages'][0]['text'] = "1466";
    }
else if($message == "1467"){
        $arrayPostData['messages'][0]['text'] = "1467";
    }
else if($message == "1468"){
        $arrayPostData['messages'][0]['text'] = "1468";
    }
else if($message == "1469"){
        $arrayPostData['messages'][0]['text'] = "1469";
    }
else if($message == "1470"){
        $arrayPostData['messages'][0]['text'] = "1470";
    }
else if($message == "1471"){
        $arrayPostData['messages'][0]['text'] = "1471";
    }
else if($message == "1472"){
        $arrayPostData['messages'][0]['text'] = "1472";
    }
else if($message == "1473"){
        $arrayPostData['messages'][0]['text'] = "1473";
    }
else if($message == "1474"){
        $arrayPostData['messages'][0]['text'] = "1474";
    }
else if($message == "1475"){
        $arrayPostData['messages'][0]['text'] = "1475";
    }
else if($message == "1476"){
        $arrayPostData['messages'][0]['text'] = "1476";
    }
else if($message == "1477"){
        $arrayPostData['messages'][0]['text'] = "1477";
    }
else if($message == "1478"){
        $arrayPostData['messages'][0]['text'] = "1478";
    }
else if($message == "1479"){
        $arrayPostData['messages'][0]['text'] = "1479";
    }
else if($message == "1480"){
        $arrayPostData['messages'][0]['text'] = "1480";
    }
else if($message == "1481"){
        $arrayPostData['messages'][0]['text'] = "1481";
    }
else if($message == "1482"){
        $arrayPostData['messages'][0]['text'] = "1482";
    }
else if($message == "1483"){
        $arrayPostData['messages'][0]['text'] = "1483";
    }
else if($message == "1484"){
        $arrayPostData['messages'][0]['text'] = "1484";
    }
else if($message == "1485"){
        $arrayPostData['messages'][0]['text'] = "1485";
    }
else if($message == "1486"){
        $arrayPostData['messages'][0]['text'] = "1486";
    }
else if($message == "1487"){
        $arrayPostData['messages'][0]['text'] = "1487";
    }
else if($message == "1488"){
        $arrayPostData['messages'][0]['text'] = "1488";
    }
else if($message == "1489"){
        $arrayPostData['messages'][0]['text'] = "1489";
    }
else if($message == "1490"){
        $arrayPostData['messages'][0]['text'] = "1490";
    }
else if($message == "1491"){
        $arrayPostData['messages'][0]['text'] = "1491";
    }
else if($message == "1492"){
        $arrayPostData['messages'][0]['text'] = "1492";
    }
else if($message == "1493"){
        $arrayPostData['messages'][0]['text'] = "1493";
    }
else if($message == "1494"){
        $arrayPostData['messages'][0]['text'] = "1494";
    }
else if($message == "1495"){
        $arrayPostData['messages'][0]['text'] = "1495";
    }
else if($message == "1496"){
        $arrayPostData['messages'][0]['text'] = "1496";
    }
else if($message == "1497"){
        $arrayPostData['messages'][0]['text'] = "1497";
    }
else if($message == "1498"){
        $arrayPostData['messages'][0]['text'] = "1498";
    }
else if($message == "1499"){
        $arrayPostData['messages'][0]['text'] = "1499";
    }
else if($message == "1500"){
        $arrayPostData['messages'][0]['text'] = "1500";
    }
else if($message == "1501"){
        $arrayPostData['messages'][0]['text'] = "1501";
    }
else if($message == "1502"){
        $arrayPostData['messages'][0]['text'] = "1502";
    }
else if($message == "1503"){
        $arrayPostData['messages'][0]['text'] = "1503";
    }
else if($message == "1504"){
        $arrayPostData['messages'][0]['text'] = "1504";
    }
else if($message == "1505"){
        $arrayPostData['messages'][0]['text'] = "1505";
    }
else if($message == "1506"){
        $arrayPostData['messages'][0]['text'] = "1506";
    }
else if($message == "1507"){
        $arrayPostData['messages'][0]['text'] = "1507";
    }
else if($message == "1508"){
        $arrayPostData['messages'][0]['text'] = "1508";
    }
else if($message == "1509"){
        $arrayPostData['messages'][0]['text'] = "1509";
    }
else if($message == "1510"){
        $arrayPostData['messages'][0]['text'] = "1510";
    }
else if($message == "1511"){
        $arrayPostData['messages'][0]['text'] = "1511";
    }
else if($message == "1512"){
        $arrayPostData['messages'][0]['text'] = "1512";
    }
else if($message == "1513"){
        $arrayPostData['messages'][0]['text'] = "1513";
    }
else if($message == "1514"){
        $arrayPostData['messages'][0]['text'] = "1514";
    }
else if($message == "1515"){
        $arrayPostData['messages'][0]['text'] = "1515";
    }
else if($message == "1516"){
        $arrayPostData['messages'][0]['text'] = "1516";
    }
else if($message == "1517"){
        $arrayPostData['messages'][0]['text'] = "1517";
    }
else if($message == "1518"){
        $arrayPostData['messages'][0]['text'] = "1518";
    }
else if($message == "1519"){
        $arrayPostData['messages'][0]['text'] = "1519";
    }
else if($message == "1520"){
        $arrayPostData['messages'][0]['text'] = "1520";
    }
else if($message == "1521"){
        $arrayPostData['messages'][0]['text'] = "1521";
    }
else if($message == "1522"){
        $arrayPostData['messages'][0]['text'] = "1522";
    }
else if($message == "1523"){
        $arrayPostData['messages'][0]['text'] = "1523";
    }
else if($message == "1524"){
        $arrayPostData['messages'][0]['text'] = "1524";
    }
else if($message == "1525"){
        $arrayPostData['messages'][0]['text'] = "1525";
    }
else if($message == "1526"){
        $arrayPostData['messages'][0]['text'] = "1526";
    }
else if($message == "1527"){
        $arrayPostData['messages'][0]['text'] = "1527";
    }
else if($message == "1528"){
        $arrayPostData['messages'][0]['text'] = "1528";
    }
else if($message == "1529"){
        $arrayPostData['messages'][0]['text'] = "1529";
    }
else if($message == "1530"){
        $arrayPostData['messages'][0]['text'] = "1530";
    }
else if($message == "1531"){
        $arrayPostData['messages'][0]['text'] = "1531";
    }
else if($message == "1532"){
        $arrayPostData['messages'][0]['text'] = "1532";
    }
else if($message == "1533"){
        $arrayPostData['messages'][0]['text'] = "1533";
    }
else if($message == "1534"){
        $arrayPostData['messages'][0]['text'] = "1534";
    }
else if($message == "1535"){
        $arrayPostData['messages'][0]['text'] = "1535";
    }
else if($message == "1536"){
        $arrayPostData['messages'][0]['text'] = "1536";
    }
else if($message == "1537"){
        $arrayPostData['messages'][0]['text'] = "1537";
    }
else if($message == "1538"){
        $arrayPostData['messages'][0]['text'] = "1538";
    }
else if($message == "1539"){
        $arrayPostData['messages'][0]['text'] = "1539";
    }
else if($message == "1540"){
        $arrayPostData['messages'][0]['text'] = "1540";
    }
else if($message == "1541"){
        $arrayPostData['messages'][0]['text'] = "1541";
    }
else if($message == "1542"){
        $arrayPostData['messages'][0]['text'] = "1542";
    }
else if($message == "1543"){
        $arrayPostData['messages'][0]['text'] = "1543";
    }
else if($message == "1544"){
        $arrayPostData['messages'][0]['text'] = "1544";
    }
else if($message == "1545"){
        $arrayPostData['messages'][0]['text'] = "1545";
    }
else if($message == "1546"){
        $arrayPostData['messages'][0]['text'] = "1546";
    }
else if($message == "1547"){
        $arrayPostData['messages'][0]['text'] = "1547";
    }
else if($message == "1548"){
        $arrayPostData['messages'][0]['text'] = "1548";
    }
else if($message == "1549"){
        $arrayPostData['messages'][0]['text'] = "1549";
    }
else if($message == "1550"){
        $arrayPostData['messages'][0]['text'] = "1550";
    }
else if($message == "1551"){
        $arrayPostData['messages'][0]['text'] = "1551";
    }
else if($message == "1552"){
        $arrayPostData['messages'][0]['text'] = "1552";
    }
else if($message == "1553"){
        $arrayPostData['messages'][0]['text'] = "1553";
    }
else if($message == "1554"){
        $arrayPostData['messages'][0]['text'] = "1554";
    }
else if($message == "1555"){
        $arrayPostData['messages'][0]['text'] = "1555";
    }
else if($message == "1556"){
        $arrayPostData['messages'][0]['text'] = "1556";
    }
else if($message == "1557"){
        $arrayPostData['messages'][0]['text'] = "1557";
    }
else if($message == "1558"){
        $arrayPostData['messages'][0]['text'] = "1558";
    }
else if($message == "1559"){
        $arrayPostData['messages'][0]['text'] = "1559";
    }
else if($message == "1560"){
        $arrayPostData['messages'][0]['text'] = "1560";
    }
else if($message == "1561"){
        $arrayPostData['messages'][0]['text'] = "1561";
    }
else if($message == "1562"){
        $arrayPostData['messages'][0]['text'] = "1562";
    }
else if($message == "1563"){
        $arrayPostData['messages'][0]['text'] = "1563";
    }
else if($message == "1564"){
        $arrayPostData['messages'][0]['text'] = "1564";
    }
else if($message == "1565"){
        $arrayPostData['messages'][0]['text'] = "1565";
    }
else if($message == "1566"){
        $arrayPostData['messages'][0]['text'] = "1566";
    }
else if($message == "1567"){
        $arrayPostData['messages'][0]['text'] = "1567";
    }
else if($message == "1568"){
        $arrayPostData['messages'][0]['text'] = "1568";
    }
else if($message == "1569"){
        $arrayPostData['messages'][0]['text'] = "1569";
    }
else if($message == "1570"){
        $arrayPostData['messages'][0]['text'] = "1570";
    }
else if($message == "1571"){
        $arrayPostData['messages'][0]['text'] = "1571";
    }
else if($message == "1572"){
        $arrayPostData['messages'][0]['text'] = "1572";
    }
else if($message == "1573"){
        $arrayPostData['messages'][0]['text'] = "1573";
    }
else if($message == "1574"){
        $arrayPostData['messages'][0]['text'] = "1574";
    }
else if($message == "1575"){
        $arrayPostData['messages'][0]['text'] = "1575";
    }
else if($message == "1576"){
        $arrayPostData['messages'][0]['text'] = "1576";
    }
else if($message == "1577"){
        $arrayPostData['messages'][0]['text'] = "1577";
    }
else if($message == "1578"){
        $arrayPostData['messages'][0]['text'] = "1578";
    }
else if($message == "1579"){
        $arrayPostData['messages'][0]['text'] = "1579";
    }
else if($message == "1580"){
        $arrayPostData['messages'][0]['text'] = "1580";
    }
else if($message == "1581"){
        $arrayPostData['messages'][0]['text'] = "1581";
    }
else if($message == "1582"){
        $arrayPostData['messages'][0]['text'] = "1582";
    }
else if($message == "1583"){
        $arrayPostData['messages'][0]['text'] = "1583";
    }
else if($message == "1584"){
        $arrayPostData['messages'][0]['text'] = "1584";
    }
else if($message == "1585"){
        $arrayPostData['messages'][0]['text'] = "1585";
    }
else if($message == "1586"){
        $arrayPostData['messages'][0]['text'] = "1586";
    }
else if($message == "1587"){
        $arrayPostData['messages'][0]['text'] = "1587";
    }
else if($message == "1588"){
        $arrayPostData['messages'][0]['text'] = "1588";
    }
else if($message == "1589"){
        $arrayPostData['messages'][0]['text'] = "1589";
    }
else if($message == "1590"){
        $arrayPostData['messages'][0]['text'] = "1590";
    }
else if($message == "1591"){
        $arrayPostData['messages'][0]['text'] = "1591";
    }
else if($message == "1592"){
        $arrayPostData['messages'][0]['text'] = "1592";
    }
else if($message == "1593"){
        $arrayPostData['messages'][0]['text'] = "1593";
    }
else if($message == "1594"){
        $arrayPostData['messages'][0]['text'] = "1594";
    }
else if($message == "1595"){
        $arrayPostData['messages'][0]['text'] = "1595";
    }
else if($message == "1596"){
        $arrayPostData['messages'][0]['text'] = "1596";
    }
else if($message == "1597"){
        $arrayPostData['messages'][0]['text'] = "1597";
    }
else if($message == "1598"){
        $arrayPostData['messages'][0]['text'] = "1598";
    }
else if($message == "1599"){
        $arrayPostData['messages'][0]['text'] = "1599";
    }
else if($message == "1600"){
        $arrayPostData['messages'][0]['text'] = "1600";
    }
else if($message == "1601"){
        $arrayPostData['messages'][0]['text'] = "1601";
    }
else if($message == "1602"){
        $arrayPostData['messages'][0]['text'] = "1602";
    }
else if($message == "1603"){
        $arrayPostData['messages'][0]['text'] = "1603";
    }
else if($message == "1604"){
        $arrayPostData['messages'][0]['text'] = "1604";
    }
else if($message == "1605"){
        $arrayPostData['messages'][0]['text'] = "1605";
    }
else if($message == "1606"){
        $arrayPostData['messages'][0]['text'] = "1606";
    }
else if($message == "1607"){
        $arrayPostData['messages'][0]['text'] = "1607";
    }
else if($message == "1608"){
        $arrayPostData['messages'][0]['text'] = "1608";
    }
else if($message == "1609"){
        $arrayPostData['messages'][0]['text'] = "1609";
    }
else if($message == "1610"){
        $arrayPostData['messages'][0]['text'] = "1610";
    }
else if($message == "1611"){
        $arrayPostData['messages'][0]['text'] = "1611";
    }
else if($message == "1612"){
        $arrayPostData['messages'][0]['text'] = "1612";
    }
else if($message == "1613"){
        $arrayPostData['messages'][0]['text'] = "1613";
    }
else if($message == "1614"){
        $arrayPostData['messages'][0]['text'] = "1614";
    }
else if($message == "1615"){
        $arrayPostData['messages'][0]['text'] = "1615";
    }
else if($message == "1616"){
        $arrayPostData['messages'][0]['text'] = "1616";
    }
else if($message == "1617"){
        $arrayPostData['messages'][0]['text'] = "1617";
    }
else if($message == "1618"){
        $arrayPostData['messages'][0]['text'] = "1618";
    }
else if($message == "1619"){
        $arrayPostData['messages'][0]['text'] = "1619";
    }
else if($message == "1620"){
        $arrayPostData['messages'][0]['text'] = "1620";
    }
else if($message == "1621"){
        $arrayPostData['messages'][0]['text'] = "1621";
    }
else if($message == "1622"){
        $arrayPostData['messages'][0]['text'] = "1622";
    }
else if($message == "1623"){
        $arrayPostData['messages'][0]['text'] = "1623";
    }
else if($message == "1624"){
        $arrayPostData['messages'][0]['text'] = "1624";
    }
else if($message == "1625"){
        $arrayPostData['messages'][0]['text'] = "1625";
    }
else if($message == "1626"){
        $arrayPostData['messages'][0]['text'] = "1626";
    }
else if($message == "1627"){
        $arrayPostData['messages'][0]['text'] = "1627";
    }
else if($message == "1628"){
        $arrayPostData['messages'][0]['text'] = "1628";
    }
else if($message == "1629"){
        $arrayPostData['messages'][0]['text'] = "1629";
    }
else if($message == "1630"){
        $arrayPostData['messages'][0]['text'] = "1630";
    }
else if($message == "1631"){
        $arrayPostData['messages'][0]['text'] = "1631";
    }
else if($message == "1632"){
        $arrayPostData['messages'][0]['text'] = "1632";
    }
else if($message == "1633"){
        $arrayPostData['messages'][0]['text'] = "1633";
    }
else if($message == "1634"){
        $arrayPostData['messages'][0]['text'] = "1634";
    }
else if($message == "1635"){
        $arrayPostData['messages'][0]['text'] = "1635";
    }
else if($message == "1636"){
        $arrayPostData['messages'][0]['text'] = "1636";
    }
else if($message == "1637"){
        $arrayPostData['messages'][0]['text'] = "1637";
    }
else if($message == "1638"){
        $arrayPostData['messages'][0]['text'] = "1638";
    }
else if($message == "1639"){
        $arrayPostData['messages'][0]['text'] = "1639";
    }
else if($message == "1640"){
        $arrayPostData['messages'][0]['text'] = "1640";
    }
else if($message == "1641"){
        $arrayPostData['messages'][0]['text'] = "1641";
    }
else if($message == "1642"){
        $arrayPostData['messages'][0]['text'] = "1642";
    }
else if($message == "1643"){
        $arrayPostData['messages'][0]['text'] = "1643";
    }
else if($message == "1644"){
        $arrayPostData['messages'][0]['text'] = "1644";
    }
else if($message == "1645"){
        $arrayPostData['messages'][0]['text'] = "1645";
    }
else if($message == "1646"){
        $arrayPostData['messages'][0]['text'] = "1646";
    }
else if($message == "1647"){
        $arrayPostData['messages'][0]['text'] = "1647";
    }
else if($message == "1648"){
        $arrayPostData['messages'][0]['text'] = "1648";
    }
else if($message == "1649"){
        $arrayPostData['messages'][0]['text'] = "1649";
    }
else if($message == "1650"){
        $arrayPostData['messages'][0]['text'] = "1650";
    }
else if($message == "1651"){
        $arrayPostData['messages'][0]['text'] = "1651";
    }
else if($message == "1652"){
        $arrayPostData['messages'][0]['text'] = "1652";
    }
else if($message == "1653"){
        $arrayPostData['messages'][0]['text'] = "1653";
    }
else if($message == "1654"){
        $arrayPostData['messages'][0]['text'] = "1654";
    }
else if($message == "1655"){
        $arrayPostData['messages'][0]['text'] = "1655";
    }
else if($message == "1656"){
        $arrayPostData['messages'][0]['text'] = "1656";
    }
else if($message == "1657"){
        $arrayPostData['messages'][0]['text'] = "1657";
    }
else if($message == "1658"){
        $arrayPostData['messages'][0]['text'] = "1658";
    }
else if($message == "1659"){
        $arrayPostData['messages'][0]['text'] = "1659";
    }
else if($message == "1660"){
        $arrayPostData['messages'][0]['text'] = "1660";
    }
else if($message == "1661"){
        $arrayPostData['messages'][0]['text'] = "1661";
    }
else if($message == "1662"){
        $arrayPostData['messages'][0]['text'] = "1662";
    }
else if($message == "1663"){
        $arrayPostData['messages'][0]['text'] = "1663";
    }
else if($message == "1664"){
        $arrayPostData['messages'][0]['text'] = "1664";
    }
else if($message == "1665"){
        $arrayPostData['messages'][0]['text'] = "1665";
    }
else if($message == "1666"){
        $arrayPostData['messages'][0]['text'] = "1666";
    }
else if($message == "1667"){
        $arrayPostData['messages'][0]['text'] = "1667";
    }
else if($message == "1668"){
        $arrayPostData['messages'][0]['text'] = "1668";
    }
else if($message == "1669"){
        $arrayPostData['messages'][0]['text'] = "1669";
    }
else if($message == "1670"){
        $arrayPostData['messages'][0]['text'] = "1670";
    }
else if($message == "1671"){
        $arrayPostData['messages'][0]['text'] = "1671";
    }
else if($message == "1672"){
        $arrayPostData['messages'][0]['text'] = "1672";
    }
else if($message == "1673"){
        $arrayPostData['messages'][0]['text'] = "1673";
    }
else if($message == "1674"){
        $arrayPostData['messages'][0]['text'] = "1674";
    }
else if($message == "1675"){
        $arrayPostData['messages'][0]['text'] = "1675";
    }
else if($message == "1676"){
        $arrayPostData['messages'][0]['text'] = "1676";
    }
else if($message == "1677"){
        $arrayPostData['messages'][0]['text'] = "1677";
    }
else if($message == "1678"){
        $arrayPostData['messages'][0]['text'] = "1678";
    }
else if($message == "1679"){
        $arrayPostData['messages'][0]['text'] = "1679";
    }
else if($message == "1680"){
        $arrayPostData['messages'][0]['text'] = "1680";
    }
else if($message == "1681"){
        $arrayPostData['messages'][0]['text'] = "1681";
    }
else if($message == "1682"){
        $arrayPostData['messages'][0]['text'] = "1682";
    }
else if($message == "1683"){
        $arrayPostData['messages'][0]['text'] = "1683";
    }
else if($message == "1684"){
        $arrayPostData['messages'][0]['text'] = "1684";
    }
else if($message == "1685"){
        $arrayPostData['messages'][0]['text'] = "1685";
    }
else if($message == "1686"){
        $arrayPostData['messages'][0]['text'] = "1686";
    }
else if($message == "1687"){
        $arrayPostData['messages'][0]['text'] = "1687";
    }
else if($message == "1688"){
        $arrayPostData['messages'][0]['text'] = "1688";
    }
else if($message == "1689"){
        $arrayPostData['messages'][0]['text'] = "1689";
    }
else if($message == "1690"){
        $arrayPostData['messages'][0]['text'] = "1690";
    }
else if($message == "1691"){
        $arrayPostData['messages'][0]['text'] = "1691";
    }
else if($message == "1692"){
        $arrayPostData['messages'][0]['text'] = "1692";
    }
else if($message == "1693"){
        $arrayPostData['messages'][0]['text'] = "1693";
    }
else if($message == "1694"){
        $arrayPostData['messages'][0]['text'] = "1694";
    }
else if($message == "1695"){
        $arrayPostData['messages'][0]['text'] = "1695";
    }
else if($message == "1696"){
        $arrayPostData['messages'][0]['text'] = "1696";
    }
else if($message == "1697"){
        $arrayPostData['messages'][0]['text'] = "1697";
    }
else if($message == "1698"){
        $arrayPostData['messages'][0]['text'] = "1698";
    }
else if($message == "1699"){
        $arrayPostData['messages'][0]['text'] = "1699";
    }
else if($message == "1700"){
        $arrayPostData['messages'][0]['text'] = "1700";
    }
else if($message == "1701"){
        $arrayPostData['messages'][0]['text'] = "1701";
    }
else if($message == "1702"){
        $arrayPostData['messages'][0]['text'] = "1702";
    }
else if($message == "1703"){
        $arrayPostData['messages'][0]['text'] = "1703";
    }
else if($message == "1704"){
        $arrayPostData['messages'][0]['text'] = "1704";
    }
else if($message == "1705"){
        $arrayPostData['messages'][0]['text'] = "1705";
    }
else if($message == "1706"){
        $arrayPostData['messages'][0]['text'] = "1706";
    }
else if($message == "1707"){
        $arrayPostData['messages'][0]['text'] = "1707";
    }
else if($message == "1708"){
        $arrayPostData['messages'][0]['text'] = "1708";
    }
else if($message == "1709"){
        $arrayPostData['messages'][0]['text'] = "1709";
    }
else if($message == "1710"){
        $arrayPostData['messages'][0]['text'] = "1710";
    }
else if($message == "1711"){
        $arrayPostData['messages'][0]['text'] = "1711";
    }
else if($message == "1712"){
        $arrayPostData['messages'][0]['text'] = "1712";
    }
else if($message == "1713"){
        $arrayPostData['messages'][0]['text'] = "1713";
    }
else if($message == "1714"){
        $arrayPostData['messages'][0]['text'] = "1714";
    }
else if($message == "1715"){
        $arrayPostData['messages'][0]['text'] = "1715";
    }
else if($message == "1716"){
        $arrayPostData['messages'][0]['text'] = "1716";
    }
else if($message == "1717"){
        $arrayPostData['messages'][0]['text'] = "1717";
    }
else if($message == "1718"){
        $arrayPostData['messages'][0]['text'] = "1718";
    }
else if($message == "1719"){
        $arrayPostData['messages'][0]['text'] = "1719";
    }
else if($message == "1720"){
        $arrayPostData['messages'][0]['text'] = "1720";
    }
else if($message == "1721"){
        $arrayPostData['messages'][0]['text'] = "1721";
    }
else if($message == "1722"){
        $arrayPostData['messages'][0]['text'] = "1722";
    }
else if($message == "1723"){
        $arrayPostData['messages'][0]['text'] = "1723";
    }
else if($message == "1724"){
        $arrayPostData['messages'][0]['text'] = "1724";
    }
else if($message == "1725"){
        $arrayPostData['messages'][0]['text'] = "1725";
    }
else if($message == "1726"){
        $arrayPostData['messages'][0]['text'] = "1726";
    }
else if($message == "1727"){
        $arrayPostData['messages'][0]['text'] = "1727";
    }
else if($message == "1728"){
        $arrayPostData['messages'][0]['text'] = "1728";
    }
else if($message == "1729"){
        $arrayPostData['messages'][0]['text'] = "1729";
    }
else if($message == "1730"){
        $arrayPostData['messages'][0]['text'] = "1730";
    }
else if($message == "1731"){
        $arrayPostData['messages'][0]['text'] = "1731";
    }
else if($message == "1732"){
        $arrayPostData['messages'][0]['text'] = "1732";
    }
else if($message == "1733"){
        $arrayPostData['messages'][0]['text'] = "1733";
    }
else if($message == "1734"){
        $arrayPostData['messages'][0]['text'] = "1734";
    }
else if($message == "1735"){
        $arrayPostData['messages'][0]['text'] = "1735";
    }
else if($message == "1736"){
        $arrayPostData['messages'][0]['text'] = "1736";
    }
else if($message == "1737"){
        $arrayPostData['messages'][0]['text'] = "1737";
    }
else if($message == "1738"){
        $arrayPostData['messages'][0]['text'] = "1738";
    }
else if($message == "1739"){
        $arrayPostData['messages'][0]['text'] = "1739";
    }
else if($message == "1740"){
        $arrayPostData['messages'][0]['text'] = "1740";
    }
else if($message == "1741"){
        $arrayPostData['messages'][0]['text'] = "1741";
    }
else if($message == "1742"){
        $arrayPostData['messages'][0]['text'] = "1742";
    }
else if($message == "1743"){
        $arrayPostData['messages'][0]['text'] = "1743";
    }
else if($message == "1744"){
        $arrayPostData['messages'][0]['text'] = "1744";
    }
else if($message == "1745"){
        $arrayPostData['messages'][0]['text'] = "1745";
    }
else if($message == "1746"){
        $arrayPostData['messages'][0]['text'] = "1746";
    }
else if($message == "1747"){
        $arrayPostData['messages'][0]['text'] = "1747";
    }
else if($message == "1748"){
        $arrayPostData['messages'][0]['text'] = "1748";
    }
else if($message == "1749"){
        $arrayPostData['messages'][0]['text'] = "1749";
    }
else if($message == "1750"){
        $arrayPostData['messages'][0]['text'] = "1750";
    }
else if($message == "1751"){
        $arrayPostData['messages'][0]['text'] = "1751";
    }
else if($message == "1752"){
        $arrayPostData['messages'][0]['text'] = "1752";
    }
else if($message == "1753"){
        $arrayPostData['messages'][0]['text'] = "1753";
    }
else if($message == "1754"){
        $arrayPostData['messages'][0]['text'] = "1754";
    }
else if($message == "1755"){
        $arrayPostData['messages'][0]['text'] = "1755";
    }
else if($message == "1756"){
        $arrayPostData['messages'][0]['text'] = "1756";
    }
else if($message == "1757"){
        $arrayPostData['messages'][0]['text'] = "1757";
    }
else if($message == "1758"){
        $arrayPostData['messages'][0]['text'] = "1758";
    }
else if($message == "1759"){
        $arrayPostData['messages'][0]['text'] = "1759";
    }
else if($message == "1760"){
        $arrayPostData['messages'][0]['text'] = "1760";
    }
else if($message == "1761"){
        $arrayPostData['messages'][0]['text'] = "1761";
    }
else if($message == "1762"){
        $arrayPostData['messages'][0]['text'] = "1762";
    }
else if($message == "1763"){
        $arrayPostData['messages'][0]['text'] = "1763";
    }
else if($message == "1764"){
        $arrayPostData['messages'][0]['text'] = "1764";
    }
else if($message == "1765"){
        $arrayPostData['messages'][0]['text'] = "1765";
    }
else if($message == "1766"){
        $arrayPostData['messages'][0]['text'] = "1766";
    }
else if($message == "1767"){
        $arrayPostData['messages'][0]['text'] = "1767";
    }
else if($message == "1768"){
        $arrayPostData['messages'][0]['text'] = "1768";
    }
else if($message == "1769"){
        $arrayPostData['messages'][0]['text'] = "1769";
    }
else if($message == "1770"){
        $arrayPostData['messages'][0]['text'] = "1770";
    }
else if($message == "1771"){
        $arrayPostData['messages'][0]['text'] = "1771";
    }
else if($message == "1772"){
        $arrayPostData['messages'][0]['text'] = "1772";
    }
else if($message == "1773"){
        $arrayPostData['messages'][0]['text'] = "1773";
    }
else if($message == "1774"){
        $arrayPostData['messages'][0]['text'] = "1774";
    }
else if($message == "1775"){
        $arrayPostData['messages'][0]['text'] = "1775";
    }
else if($message == "1776"){
        $arrayPostData['messages'][0]['text'] = "1776";
    }
else if($message == "1777"){
        $arrayPostData['messages'][0]['text'] = "1777";
    }
else if($message == "1778"){
        $arrayPostData['messages'][0]['text'] = "1778";
    }
else if($message == "1779"){
        $arrayPostData['messages'][0]['text'] = "1779";
    }
else if($message == "1780"){
        $arrayPostData['messages'][0]['text'] = "1780";
    }
else if($message == "1781"){
        $arrayPostData['messages'][0]['text'] = "1781";
    }
else if($message == "1782"){
        $arrayPostData['messages'][0]['text'] = "1782";
    }
else if($message == "1783"){
        $arrayPostData['messages'][0]['text'] = "1783";
    }
else if($message == "1784"){
        $arrayPostData['messages'][0]['text'] = "1784";
    }
else if($message == "1785"){
        $arrayPostData['messages'][0]['text'] = "1785";
    }
else if($message == "1786"){
        $arrayPostData['messages'][0]['text'] = "1786";
    }
else if($message == "1787"){
        $arrayPostData['messages'][0]['text'] = "1787";
    }
else if($message == "1788"){
        $arrayPostData['messages'][0]['text'] = "1788";
    }
else if($message == "1789"){
        $arrayPostData['messages'][0]['text'] = "1789";
    }
else if($message == "1790"){
        $arrayPostData['messages'][0]['text'] = "1790";
    }
else if($message == "1791"){
        $arrayPostData['messages'][0]['text'] = "1791";
    }
else if($message == "1792"){
        $arrayPostData['messages'][0]['text'] = "1792";
    }
else if($message == "1793"){
        $arrayPostData['messages'][0]['text'] = "1793";
    }
else if($message == "1794"){
        $arrayPostData['messages'][0]['text'] = "1794";
    }
else if($message == "1795"){
        $arrayPostData['messages'][0]['text'] = "1795";
    }
else if($message == "1796"){
        $arrayPostData['messages'][0]['text'] = "1796";
    }
else if($message == "1797"){
        $arrayPostData['messages'][0]['text'] = "1797";
    }
else if($message == "1798"){
        $arrayPostData['messages'][0]['text'] = "1798";
    }
else if($message == "1799"){
        $arrayPostData['messages'][0]['text'] = "1799";
    }
else if($message == "1800"){
        $arrayPostData['messages'][0]['text'] = "1800";
    }
else if($message == "1801"){
        $arrayPostData['messages'][0]['text'] = "1801";
    }
else if($message == "1802"){
        $arrayPostData['messages'][0]['text'] = "1802";
    }
else if($message == "1803"){
        $arrayPostData['messages'][0]['text'] = "1803";
    }
else if($message == "1804"){
        $arrayPostData['messages'][0]['text'] = "1804";
    }
else if($message == "1805"){
        $arrayPostData['messages'][0]['text'] = "1805";
    }
else if($message == "1806"){
        $arrayPostData['messages'][0]['text'] = "1806";
    }
else if($message == "1807"){
        $arrayPostData['messages'][0]['text'] = "1807";
    }
else if($message == "1808"){
        $arrayPostData['messages'][0]['text'] = "1808";
    }
else if($message == "1809"){
        $arrayPostData['messages'][0]['text'] = "1809";
    }
else if($message == "1810"){
        $arrayPostData['messages'][0]['text'] = "1810";
    }
else if($message == "1811"){
        $arrayPostData['messages'][0]['text'] = "1811";
    }
else if($message == "1812"){
        $arrayPostData['messages'][0]['text'] = "1812";
    }
else if($message == "1813"){
        $arrayPostData['messages'][0]['text'] = "1813";
    }
else if($message == "1814"){
        $arrayPostData['messages'][0]['text'] = "1814";
    }
else if($message == "1815"){
        $arrayPostData['messages'][0]['text'] = "1815";
    }
else if($message == "1816"){
        $arrayPostData['messages'][0]['text'] = "1816";
    }
else if($message == "1817"){
        $arrayPostData['messages'][0]['text'] = "1817";
    }
else if($message == "1818"){
        $arrayPostData['messages'][0]['text'] = "1818";
    }
else if($message == "1819"){
        $arrayPostData['messages'][0]['text'] = "1819";
    }
else if($message == "1820"){
        $arrayPostData['messages'][0]['text'] = "1820";
    }
else if($message == "1821"){
        $arrayPostData['messages'][0]['text'] = "1821";
    }
else if($message == "1822"){
        $arrayPostData['messages'][0]['text'] = "1822";
    }
else if($message == "1823"){
        $arrayPostData['messages'][0]['text'] = "1823";
    }
else if($message == "1824"){
        $arrayPostData['messages'][0]['text'] = "1824";
    }
else if($message == "1825"){
        $arrayPostData['messages'][0]['text'] = "1825";
    }
else if($message == "1826"){
        $arrayPostData['messages'][0]['text'] = "1826";
    }
else if($message == "1827"){
        $arrayPostData['messages'][0]['text'] = "1827";
    }
else if($message == "1828"){
        $arrayPostData['messages'][0]['text'] = "1828";
    }
else if($message == "1829"){
        $arrayPostData['messages'][0]['text'] = "1829";
    }
else if($message == "1830"){
        $arrayPostData['messages'][0]['text'] = "1830";
    }
else if($message == "1831"){
        $arrayPostData['messages'][0]['text'] = "1831";
    }
else if($message == "1832"){
        $arrayPostData['messages'][0]['text'] = "1832";
    }
else if($message == "1833"){
        $arrayPostData['messages'][0]['text'] = "1833";
    }
else if($message == "1834"){
        $arrayPostData['messages'][0]['text'] = "1834";
    }
else if($message == "1835"){
        $arrayPostData['messages'][0]['text'] = "1835";
    }
else if($message == "1836"){
        $arrayPostData['messages'][0]['text'] = "1836";
    }
else if($message == "1837"){
        $arrayPostData['messages'][0]['text'] = "1837";
    }
else if($message == "1838"){
        $arrayPostData['messages'][0]['text'] = "1838";
    }
else if($message == "1839"){
        $arrayPostData['messages'][0]['text'] = "1839";
    }
else if($message == "1840"){
        $arrayPostData['messages'][0]['text'] = "1840";
    }
else if($message == "1841"){
        $arrayPostData['messages'][0]['text'] = "1841";
    }
else if($message == "1842"){
        $arrayPostData['messages'][0]['text'] = "1842";
    }
else if($message == "1843"){
        $arrayPostData['messages'][0]['text'] = "1843";
    }
else if($message == "1844"){
        $arrayPostData['messages'][0]['text'] = "1844";
    }
else if($message == "1845"){
        $arrayPostData['messages'][0]['text'] = "1845";
    }
else if($message == "1846"){
        $arrayPostData['messages'][0]['text'] = "1846";
    }
else if($message == "1847"){
        $arrayPostData['messages'][0]['text'] = "1847";
    }
else if($message == "1848"){
        $arrayPostData['messages'][0]['text'] = "1848";
    }
else if($message == "1849"){
        $arrayPostData['messages'][0]['text'] = "1849";
    }
else if($message == "1850"){
        $arrayPostData['messages'][0]['text'] = "1850";
    }
else if($message == "1851"){
        $arrayPostData['messages'][0]['text'] = "1851";
    }
else if($message == "1852"){
        $arrayPostData['messages'][0]['text'] = "1852";
    }
else if($message == "1853"){
        $arrayPostData['messages'][0]['text'] = "1853";
    }
else if($message == "1854"){
        $arrayPostData['messages'][0]['text'] = "1854";
    }
else if($message == "1855"){
        $arrayPostData['messages'][0]['text'] = "1855";
    }
else if($message == "1856"){
        $arrayPostData['messages'][0]['text'] = "1856";
    }
else if($message == "1857"){
        $arrayPostData['messages'][0]['text'] = "1857";
    }
else if($message == "1858"){
        $arrayPostData['messages'][0]['text'] = "1858";
    }
else if($message == "1859"){
        $arrayPostData['messages'][0]['text'] = "1859";
    }
else if($message == "1860"){
        $arrayPostData['messages'][0]['text'] = "1860";
    }
else if($message == "1861"){
        $arrayPostData['messages'][0]['text'] = "1861";
    }
else if($message == "1862"){
        $arrayPostData['messages'][0]['text'] = "1862";
    }
else if($message == "1863"){
        $arrayPostData['messages'][0]['text'] = "1863";
    }
else if($message == "1864"){
        $arrayPostData['messages'][0]['text'] = "1864";
    }
else if($message == "1865"){
        $arrayPostData['messages'][0]['text'] = "1865";
    }
else if($message == "1866"){
        $arrayPostData['messages'][0]['text'] = "1866";
    }
else if($message == "1867"){
        $arrayPostData['messages'][0]['text'] = "1867";
    }
else if($message == "1868"){
        $arrayPostData['messages'][0]['text'] = "1868";
    }
else if($message == "1869"){
        $arrayPostData['messages'][0]['text'] = "1869";
    }
else if($message == "1870"){
        $arrayPostData['messages'][0]['text'] = "1870";
    }
else if($message == "1871"){
        $arrayPostData['messages'][0]['text'] = "1871";
    }
else if($message == "1872"){
        $arrayPostData['messages'][0]['text'] = "1872";
    }
else if($message == "1873"){
        $arrayPostData['messages'][0]['text'] = "1873";
    }
else if($message == "1874"){
        $arrayPostData['messages'][0]['text'] = "1874";
    }
else if($message == "1875"){
        $arrayPostData['messages'][0]['text'] = "1875";
    }
else if($message == "1876"){
        $arrayPostData['messages'][0]['text'] = "1876";
    }
else if($message == "1877"){
        $arrayPostData['messages'][0]['text'] = "1877";
    }
else if($message == "1878"){
        $arrayPostData['messages'][0]['text'] = "1878";
    }
else if($message == "1879"){
        $arrayPostData['messages'][0]['text'] = "1879";
    }
else if($message == "1880"){
        $arrayPostData['messages'][0]['text'] = "1880";
    }
else if($message == "1881"){
        $arrayPostData['messages'][0]['text'] = "1881";
    }
else if($message == "1882"){
        $arrayPostData['messages'][0]['text'] = "1882";
    }
else if($message == "1883"){
        $arrayPostData['messages'][0]['text'] = "1883";
    }
else if($message == "1884"){
        $arrayPostData['messages'][0]['text'] = "1884";
    }
else if($message == "1885"){
        $arrayPostData['messages'][0]['text'] = "1885";
    }
else if($message == "1886"){
        $arrayPostData['messages'][0]['text'] = "1886";
    }
else if($message == "1887"){
        $arrayPostData['messages'][0]['text'] = "1887";
    }
else if($message == "1888"){
        $arrayPostData['messages'][0]['text'] = "1888";
    }
else if($message == "1889"){
        $arrayPostData['messages'][0]['text'] = "1889";
    }
else if($message == "1890"){
        $arrayPostData['messages'][0]['text'] = "1890";
    }
else if($message == "1891"){
        $arrayPostData['messages'][0]['text'] = "1891";
    }
else if($message == "1892"){
        $arrayPostData['messages'][0]['text'] = "1892";
    }
else if($message == "1893"){
        $arrayPostData['messages'][0]['text'] = "1893";
    }
else if($message == "1894"){
        $arrayPostData['messages'][0]['text'] = "1894";
    }
else if($message == "1895"){
        $arrayPostData['messages'][0]['text'] = "1895";
    }
else if($message == "1896"){
        $arrayPostData['messages'][0]['text'] = "1896";
    }
else if($message == "1897"){
        $arrayPostData['messages'][0]['text'] = "1897";
    }
else if($message == "1898"){
        $arrayPostData['messages'][0]['text'] = "1898";
    }
else if($message == "1899"){
        $arrayPostData['messages'][0]['text'] = "1899";
    }
else if($message == "1900"){
        $arrayPostData['messages'][0]['text'] = "1900";
    }
else if($message == "1901"){
        $arrayPostData['messages'][0]['text'] = "1901";
    }
else if($message == "1902"){
        $arrayPostData['messages'][0]['text'] = "1902";
    }
else if($message == "1903"){
        $arrayPostData['messages'][0]['text'] = "1903";
    }
else if($message == "1904"){
        $arrayPostData['messages'][0]['text'] = "1904";
    }
else if($message == "1905"){
        $arrayPostData['messages'][0]['text'] = "1905";
    }
else if($message == "1906"){
        $arrayPostData['messages'][0]['text'] = "1906";
    }
else if($message == "1907"){
        $arrayPostData['messages'][0]['text'] = "1907";
    }
else if($message == "1908"){
        $arrayPostData['messages'][0]['text'] = "1908";
    }
else if($message == "1909"){
        $arrayPostData['messages'][0]['text'] = "1909";
    }
else if($message == "1910"){
        $arrayPostData['messages'][0]['text'] = "1910";
    }
else if($message == "1911"){
        $arrayPostData['messages'][0]['text'] = "1911";
    }
else if($message == "1912"){
        $arrayPostData['messages'][0]['text'] = "1912";
    }
else if($message == "1913"){
        $arrayPostData['messages'][0]['text'] = "1913";
    }
else if($message == "1914"){
        $arrayPostData['messages'][0]['text'] = "1914";
    }
else if($message == "1915"){
        $arrayPostData['messages'][0]['text'] = "1915";
    }
else if($message == "1916"){
        $arrayPostData['messages'][0]['text'] = "1916";
    }
else if($message == "1917"){
        $arrayPostData['messages'][0]['text'] = "1917";
    }
else if($message == "1918"){
        $arrayPostData['messages'][0]['text'] = "1918";
    }
else if($message == "1919"){
        $arrayPostData['messages'][0]['text'] = "1919";
    }
else if($message == "1920"){
        $arrayPostData['messages'][0]['text'] = "1920";
    }
else if($message == "1921"){
        $arrayPostData['messages'][0]['text'] = "1921";
    }
else if($message == "1922"){
        $arrayPostData['messages'][0]['text'] = "1922";
    }
else if($message == "1923"){
        $arrayPostData['messages'][0]['text'] = "1923";
    }
else if($message == "1924"){
        $arrayPostData['messages'][0]['text'] = "1924";
    }
else if($message == "1925"){
        $arrayPostData['messages'][0]['text'] = "1925";
    }
else if($message == "1926"){
        $arrayPostData['messages'][0]['text'] = "1926";
    }
else if($message == "1927"){
        $arrayPostData['messages'][0]['text'] = "1927";
    }
else if($message == "1928"){
        $arrayPostData['messages'][0]['text'] = "1928";
    }
else if($message == "1929"){
        $arrayPostData['messages'][0]['text'] = "1929";
    }
else if($message == "1930"){
        $arrayPostData['messages'][0]['text'] = "1930";
    }
else if($message == "1931"){
        $arrayPostData['messages'][0]['text'] = "1931";
    }
else if($message == "1932"){
        $arrayPostData['messages'][0]['text'] = "1932";
    }
else if($message == "1933"){
        $arrayPostData['messages'][0]['text'] = "1933";
    }
else if($message == "1934"){
        $arrayPostData['messages'][0]['text'] = "1934";
    }
else if($message == "1935"){
        $arrayPostData['messages'][0]['text'] = "1935";
    }
else if($message == "1936"){
        $arrayPostData['messages'][0]['text'] = "1936";
    }
else if($message == "1937"){
        $arrayPostData['messages'][0]['text'] = "1937";
    }
else if($message == "1938"){
        $arrayPostData['messages'][0]['text'] = "1938";
    }
else if($message == "1939"){
        $arrayPostData['messages'][0]['text'] = "1939";
    }
else if($message == "1940"){
        $arrayPostData['messages'][0]['text'] = "1940";
    }
else if($message == "1941"){
        $arrayPostData['messages'][0]['text'] = "1941";
    }
else if($message == "1942"){
        $arrayPostData['messages'][0]['text'] = "1942";
    }
else if($message == "1943"){
        $arrayPostData['messages'][0]['text'] = "1943";
    }
else if($message == "1944"){
        $arrayPostData['messages'][0]['text'] = "1944";
    }
else if($message == "1945"){
        $arrayPostData['messages'][0]['text'] = "1945";
    }
else if($message == "1946"){
        $arrayPostData['messages'][0]['text'] = "1946";
    }
else if($message == "1947"){
        $arrayPostData['messages'][0]['text'] = "1947";
    }
else if($message == "1948"){
        $arrayPostData['messages'][0]['text'] = "1948";
    }
else if($message == "1949"){
        $arrayPostData['messages'][0]['text'] = "1949";
    }
else if($message == "1950"){
        $arrayPostData['messages'][0]['text'] = "1950";
    }
else if($message == "1951"){
        $arrayPostData['messages'][0]['text'] = "1951";
    }
else if($message == "1952"){
        $arrayPostData['messages'][0]['text'] = "1952";
    }
else if($message == "1953"){
        $arrayPostData['messages'][0]['text'] = "1953";
    }
else if($message == "1954"){
        $arrayPostData['messages'][0]['text'] = "1954";
    }
else if($message == "1955"){
        $arrayPostData['messages'][0]['text'] = "1955";
    }
else if($message == "1956"){
        $arrayPostData['messages'][0]['text'] = "1956";
    }
else if($message == "1957"){
        $arrayPostData['messages'][0]['text'] = "1957";
    }
else if($message == "1958"){
        $arrayPostData['messages'][0]['text'] = "1958";
    }
else if($message == "1959"){
        $arrayPostData['messages'][0]['text'] = "1959";
    }
else if($message == "1960"){
        $arrayPostData['messages'][0]['text'] = "1960";
    }
else if($message == "1961"){
        $arrayPostData['messages'][0]['text'] = "1961";
    }
else if($message == "1962"){
        $arrayPostData['messages'][0]['text'] = "1962";
    }
else if($message == "1963"){
        $arrayPostData['messages'][0]['text'] = "1963";
    }
else if($message == "1964"){
        $arrayPostData['messages'][0]['text'] = "1964";
    }
else if($message == "1965"){
        $arrayPostData['messages'][0]['text'] = "1965";
    }
else if($message == "1966"){
        $arrayPostData['messages'][0]['text'] = "1966";
    }
else if($message == "1967"){
        $arrayPostData['messages'][0]['text'] = "1967";
    }
else if($message == "1968"){
        $arrayPostData['messages'][0]['text'] = "1968";
    }
else if($message == "1969"){
        $arrayPostData['messages'][0]['text'] = "1969";
    }
else if($message == "1970"){
        $arrayPostData['messages'][0]['text'] = "1970";
    }
else if($message == "1971"){
        $arrayPostData['messages'][0]['text'] = "1971";
    }
else if($message == "1972"){
        $arrayPostData['messages'][0]['text'] = "1972";
    }
else if($message == "1973"){
        $arrayPostData['messages'][0]['text'] = "1973";
    }
else if($message == "1974"){
        $arrayPostData['messages'][0]['text'] = "1974";
    }
else if($message == "1975"){
        $arrayPostData['messages'][0]['text'] = "1975";
    }
else if($message == "1976"){
        $arrayPostData['messages'][0]['text'] = "1976";
    }
else if($message == "1977"){
        $arrayPostData['messages'][0]['text'] = "1977";
    }
else if($message == "1978"){
        $arrayPostData['messages'][0]['text'] = "1978";
    }
else if($message == "1979"){
        $arrayPostData['messages'][0]['text'] = "1979";
    }
else if($message == "1980"){
        $arrayPostData['messages'][0]['text'] = "1980";
    }
else if($message == "1981"){
        $arrayPostData['messages'][0]['text'] = "1981";
    }
else if($message == "1982"){
        $arrayPostData['messages'][0]['text'] = "1982";
    }
else if($message == "1983"){
        $arrayPostData['messages'][0]['text'] = "1983";
    }
else if($message == "1984"){
        $arrayPostData['messages'][0]['text'] = "1984";
    }
else if($message == "1985"){
        $arrayPostData['messages'][0]['text'] = "1985";
    }
else if($message == "1986"){
        $arrayPostData['messages'][0]['text'] = "1986";
    }
else if($message == "1987"){
        $arrayPostData['messages'][0]['text'] = "1987";
    }
else if($message == "1988"){
        $arrayPostData['messages'][0]['text'] = "1988";
    }
else if($message == "1989"){
        $arrayPostData['messages'][0]['text'] = "1989";
    }
else if($message == "1990"){
        $arrayPostData['messages'][0]['text'] = "1990";
    }
else if($message == "1991"){
        $arrayPostData['messages'][0]['text'] = "1991";
    }
else if($message == "1992"){
        $arrayPostData['messages'][0]['text'] = "1992";
    }
else if($message == "1993"){
        $arrayPostData['messages'][0]['text'] = "1993";
    }
else if($message == "1994"){
        $arrayPostData['messages'][0]['text'] = "1994";
    }
else if($message == "1995"){
        $arrayPostData['messages'][0]['text'] = "1995";
    }
else if($message == "1996"){
        $arrayPostData['messages'][0]['text'] = "1996";
    }
else if($message == "1997"){
        $arrayPostData['messages'][0]['text'] = "1997";
    }
else if($message == "1998"){
        $arrayPostData['messages'][0]['text'] = "1998";
    }
else if($message == "1999"){
        $arrayPostData['messages'][0]['text'] = "1999";
    }
else if($message == "2000"){
        $arrayPostData['messages'][0]['text'] = "2000";
    }
else if($message == "2001"){
        $arrayPostData['messages'][0]['text'] = "2001";
    }
else if($message == "2002"){
        $arrayPostData['messages'][0]['text'] = "2002";
    }
else if($message == "2003"){
        $arrayPostData['messages'][0]['text'] = "2003";
    }
else if($message == "2004"){
        $arrayPostData['messages'][0]['text'] = "2004";
    }
else if($message == "2005"){
        $arrayPostData['messages'][0]['text'] = "2005";
    }
else if($message == "2006"){
        $arrayPostData['messages'][0]['text'] = "2006";
    }
else if($message == "2007"){
        $arrayPostData['messages'][0]['text'] = "2007";
    }
else if($message == "2008"){
        $arrayPostData['messages'][0]['text'] = "2008";
    }
else if($message == "2009"){
        $arrayPostData['messages'][0]['text'] = "2009";
    }
else if($message == "2010"){
        $arrayPostData['messages'][0]['text'] = "2010";
    }
else if($message == "2011"){
        $arrayPostData['messages'][0]['text'] = "2011";
    }
else if($message == "2012"){
        $arrayPostData['messages'][0]['text'] = "2012";
    }
else if($message == "2013"){
        $arrayPostData['messages'][0]['text'] = "2013";
    }
else if($message == "2014"){
        $arrayPostData['messages'][0]['text'] = "2014";
    }
else if($message == "2015"){
        $arrayPostData['messages'][0]['text'] = "2015";
    }
else if($message == "2016"){
        $arrayPostData['messages'][0]['text'] = "2016";
    }
else if($message == "2017"){
        $arrayPostData['messages'][0]['text'] = "2017";
    }
else if($message == "2018"){
        $arrayPostData['messages'][0]['text'] = "2018";
    }
else if($message == "2019"){
        $arrayPostData['messages'][0]['text'] = "2019";
    }
else if($message == "2020"){
        $arrayPostData['messages'][0]['text'] = "2020";
    }
else if($message == "2021"){
        $arrayPostData['messages'][0]['text'] = "2021";
    }
else if($message == "2022"){
        $arrayPostData['messages'][0]['text'] = "2022";
    }
else if($message == "2023"){
        $arrayPostData['messages'][0]['text'] = "2023";
    }
else if($message == "2024"){
        $arrayPostData['messages'][0]['text'] = "2024";
    }
else if($message == "2025"){
        $arrayPostData['messages'][0]['text'] = "2025";
    }
else if($message == "2026"){
        $arrayPostData['messages'][0]['text'] = "2026";
    }
else if($message == "2027"){
        $arrayPostData['messages'][0]['text'] = "2027";
    }
else if($message == "2028"){
        $arrayPostData['messages'][0]['text'] = "2028";
    }
else if($message == "2029"){
        $arrayPostData['messages'][0]['text'] = "2029";
    }
else if($message == "2030"){
        $arrayPostData['messages'][0]['text'] = "2030";
    }
else if($message == "2031"){
        $arrayPostData['messages'][0]['text'] = "2031";
    }
else if($message == "2032"){
        $arrayPostData['messages'][0]['text'] = "2032";
    }
else if($message == "2033"){
        $arrayPostData['messages'][0]['text'] = "2033";
    }
else if($message == "2034"){
        $arrayPostData['messages'][0]['text'] = "2034";
    }
else if($message == "2035"){
        $arrayPostData['messages'][0]['text'] = "2035";
    }
else if($message == "2036"){
        $arrayPostData['messages'][0]['text'] = "2036";
    }
else if($message == "2037"){
        $arrayPostData['messages'][0]['text'] = "2037";
    }
else if($message == "2038"){
        $arrayPostData['messages'][0]['text'] = "2038";
    }
else if($message == "2039"){
        $arrayPostData['messages'][0]['text'] = "2039";
    }
else if($message == "2040"){
        $arrayPostData['messages'][0]['text'] = "2040";
    }
else if($message == "2041"){
        $arrayPostData['messages'][0]['text'] = "2041";
    }
else if($message == "2042"){
        $arrayPostData['messages'][0]['text'] = "2042";
    }
else if($message == "2043"){
        $arrayPostData['messages'][0]['text'] = "2043";
    }
else if($message == "2044"){
        $arrayPostData['messages'][0]['text'] = "2044";
    }
else if($message == "2045"){
        $arrayPostData['messages'][0]['text'] = "2045";
    }
else if($message == "2046"){
        $arrayPostData['messages'][0]['text'] = "2046";
    }
else if($message == "2047"){
        $arrayPostData['messages'][0]['text'] = "2047";
    }
else if($message == "2048"){
        $arrayPostData['messages'][0]['text'] = "2048";
    }
else if($message == "2049"){
        $arrayPostData['messages'][0]['text'] = "2049";
    }
else if($message == "2050"){
        $arrayPostData['messages'][0]['text'] = "2050";
    }
else if($message == "2051"){
        $arrayPostData['messages'][0]['text'] = "2051";
    }
else if($message == "2052"){
        $arrayPostData['messages'][0]['text'] = "2052";
    }
else if($message == "2053"){
        $arrayPostData['messages'][0]['text'] = "2053";
    }
else if($message == "2054"){
        $arrayPostData['messages'][0]['text'] = "2054";
    }
else if($message == "2055"){
        $arrayPostData['messages'][0]['text'] = "2055";
    }
else if($message == "2056"){
        $arrayPostData['messages'][0]['text'] = "2056";
    }
else if($message == "2057"){
        $arrayPostData['messages'][0]['text'] = "2057";
    }
else if($message == "2058"){
        $arrayPostData['messages'][0]['text'] = "2058";
    }
else if($message == "2059"){
        $arrayPostData['messages'][0]['text'] = "2059";
    }
else if($message == "2060"){
        $arrayPostData['messages'][0]['text'] = "2060";
    }
else if($message == "2061"){
        $arrayPostData['messages'][0]['text'] = "2061";
    }
else if($message == "2062"){
        $arrayPostData['messages'][0]['text'] = "2062";
    }
else if($message == "2063"){
        $arrayPostData['messages'][0]['text'] = "2063";
    }
else if($message == "2064"){
        $arrayPostData['messages'][0]['text'] = "2064";
    }
else if($message == "2065"){
        $arrayPostData['messages'][0]['text'] = "2065";
    }
else if($message == "2066"){
        $arrayPostData['messages'][0]['text'] = "2066";
    }
else if($message == "2067"){
        $arrayPostData['messages'][0]['text'] = "2067";
    }
else if($message == "2068"){
        $arrayPostData['messages'][0]['text'] = "2068";
    }
else if($message == "2069"){
        $arrayPostData['messages'][0]['text'] = "2069";
    }
else if($message == "2070"){
        $arrayPostData['messages'][0]['text'] = "2070";
    }
else if($message == "2071"){
        $arrayPostData['messages'][0]['text'] = "2071";
    }
else if($message == "2072"){
        $arrayPostData['messages'][0]['text'] = "2072";
    }
else if($message == "2073"){
        $arrayPostData['messages'][0]['text'] = "2073";
    }
else if($message == "2074"){
        $arrayPostData['messages'][0]['text'] = "2074";
    }
else if($message == "2075"){
        $arrayPostData['messages'][0]['text'] = "2075";
    }
else if($message == "2076"){
        $arrayPostData['messages'][0]['text'] = "2076";
    }
else if($message == "2077"){
        $arrayPostData['messages'][0]['text'] = "2077";
    }
else if($message == "2078"){
        $arrayPostData['messages'][0]['text'] = "2078";
    }
else if($message == "2079"){
        $arrayPostData['messages'][0]['text'] = "2079";
    }
else if($message == "2080"){
        $arrayPostData['messages'][0]['text'] = "2080";
    }
else if($message == "2081"){
        $arrayPostData['messages'][0]['text'] = "2081";
    }
else if($message == "2082"){
        $arrayPostData['messages'][0]['text'] = "2082";
    }
else if($message == "2083"){
        $arrayPostData['messages'][0]['text'] = "2083";
    }
else if($message == "2084"){
        $arrayPostData['messages'][0]['text'] = "2084";
    }
else if($message == "2085"){
        $arrayPostData['messages'][0]['text'] = "2085";
    }
else if($message == "2086"){
        $arrayPostData['messages'][0]['text'] = "2086";
    }
else if($message == "2087"){
        $arrayPostData['messages'][0]['text'] = "2087";
    }
else if($message == "2088"){
        $arrayPostData['messages'][0]['text'] = "2088";
    }
else if($message == "2089"){
        $arrayPostData['messages'][0]['text'] = "2089";
    }
else if($message == "2090"){
        $arrayPostData['messages'][0]['text'] = "2090";
    }
else if($message == "2091"){
        $arrayPostData['messages'][0]['text'] = "2091";
    }
else if($message == "2092"){
        $arrayPostData['messages'][0]['text'] = "2092";
    }
else if($message == "2093"){
        $arrayPostData['messages'][0]['text'] = "2093";
    }
else if($message == "2094"){
        $arrayPostData['messages'][0]['text'] = "2094";
    }
else if($message == "2095"){
        $arrayPostData['messages'][0]['text'] = "2095";
    }
else if($message == "2096"){
        $arrayPostData['messages'][0]['text'] = "2096";
    }
else if($message == "2097"){
        $arrayPostData['messages'][0]['text'] = "2097";
    }
else if($message == "2098"){
        $arrayPostData['messages'][0]['text'] = "2098";
    }
else if($message == "2099"){
        $arrayPostData['messages'][0]['text'] = "2099";
    }
else if($message == "2100"){
        $arrayPostData['messages'][0]['text'] = "2100";
    }
else if($message == "2101"){
        $arrayPostData['messages'][0]['text'] = "2101";
    }
else if($message == "2102"){
        $arrayPostData['messages'][0]['text'] = "2102";
    }
else if($message == "2103"){
        $arrayPostData['messages'][0]['text'] = "2103";
    }
else if($message == "2104"){
        $arrayPostData['messages'][0]['text'] = "2104";
    }
else if($message == "2105"){
        $arrayPostData['messages'][0]['text'] = "2105";
    }
else if($message == "2106"){
        $arrayPostData['messages'][0]['text'] = "2106";
    }
else if($message == "2107"){
        $arrayPostData['messages'][0]['text'] = "2107";
    }
else if($message == "2108"){
        $arrayPostData['messages'][0]['text'] = "2108";
    }
else if($message == "2109"){
        $arrayPostData['messages'][0]['text'] = "2109";
    }
else if($message == "2110"){
        $arrayPostData['messages'][0]['text'] = "2110";
    }
else if($message == "2111"){
        $arrayPostData['messages'][0]['text'] = "2111";
    }
else if($message == "2112"){
        $arrayPostData['messages'][0]['text'] = "2112";
    }
else if($message == "2113"){
        $arrayPostData['messages'][0]['text'] = "2113";
    }
else if($message == "2114"){
        $arrayPostData['messages'][0]['text'] = "2114";
    }
else if($message == "2115"){
        $arrayPostData['messages'][0]['text'] = "2115";
    }
else if($message == "2116"){
        $arrayPostData['messages'][0]['text'] = "2116";
    }
else if($message == "2117"){
        $arrayPostData['messages'][0]['text'] = "2117";
    }
else if($message == "2118"){
        $arrayPostData['messages'][0]['text'] = "2118";
    }
else if($message == "2119"){
        $arrayPostData['messages'][0]['text'] = "2119";
    }
else if($message == "2120"){
        $arrayPostData['messages'][0]['text'] = "2120";
    }
else if($message == "2121"){
        $arrayPostData['messages'][0]['text'] = "2121";
    }
else if($message == "2122"){
        $arrayPostData['messages'][0]['text'] = "2122";
    }
else if($message == "2123"){
        $arrayPostData['messages'][0]['text'] = "2123";
    }
else if($message == "2124"){
        $arrayPostData['messages'][0]['text'] = "2124";
    }
else if($message == "2125"){
        $arrayPostData['messages'][0]['text'] = "2125";
    }
else if($message == "2126"){
        $arrayPostData['messages'][0]['text'] = "2126";
    }
else if($message == "2127"){
        $arrayPostData['messages'][0]['text'] = "2127";
    }
else if($message == "2128"){
        $arrayPostData['messages'][0]['text'] = "2128";
    }
else if($message == "2129"){
        $arrayPostData['messages'][0]['text'] = "2129";
    }
else if($message == "2130"){
        $arrayPostData['messages'][0]['text'] = "2130";
    }
else if($message == "2131"){
        $arrayPostData['messages'][0]['text'] = "2131";
    }
else if($message == "2132"){
        $arrayPostData['messages'][0]['text'] = "2132";
    }
else if($message == "2133"){
        $arrayPostData['messages'][0]['text'] = "2133";
    }
else if($message == "2134"){
        $arrayPostData['messages'][0]['text'] = "2134";
    }
else if($message == "2135"){
        $arrayPostData['messages'][0]['text'] = "2135";
    }
else if($message == "2136"){
        $arrayPostData['messages'][0]['text'] = "2136";
    }
else if($message == "2137"){
        $arrayPostData['messages'][0]['text'] = "2137";
    }
else if($message == "2138"){
        $arrayPostData['messages'][0]['text'] = "2138";
    }
else if($message == "2139"){
        $arrayPostData['messages'][0]['text'] = "2139";
    }
else if($message == "2140"){
        $arrayPostData['messages'][0]['text'] = "2140";
    }
else if($message == "2141"){
        $arrayPostData['messages'][0]['text'] = "2141";
    }
else if($message == "2142"){
        $arrayPostData['messages'][0]['text'] = "2142";
    }
else if($message == "2143"){
        $arrayPostData['messages'][0]['text'] = "2143";
    }
else if($message == "2144"){
        $arrayPostData['messages'][0]['text'] = "2144";
    }
else if($message == "2145"){
        $arrayPostData['messages'][0]['text'] = "2145";
    }
else if($message == "2146"){
        $arrayPostData['messages'][0]['text'] = "2146";
    }
else if($message == "2147"){
        $arrayPostData['messages'][0]['text'] = "2147";
    }
else if($message == "2148"){
        $arrayPostData['messages'][0]['text'] = "2148";
    }
else if($message == "2149"){
        $arrayPostData['messages'][0]['text'] = "2149";
    }
else if($message == "2150"){
        $arrayPostData['messages'][0]['text'] = "2150";
    }
else if($message == "2151"){
        $arrayPostData['messages'][0]['text'] = "2151";
    }
else if($message == "2152"){
        $arrayPostData['messages'][0]['text'] = "2152";
    }
else if($message == "2153"){
        $arrayPostData['messages'][0]['text'] = "2153";
    }
else if($message == "2154"){
        $arrayPostData['messages'][0]['text'] = "2154";
    }
else if($message == "2155"){
        $arrayPostData['messages'][0]['text'] = "2155";
    }
else if($message == "2156"){
        $arrayPostData['messages'][0]['text'] = "2156";
    }
else if($message == "2157"){
        $arrayPostData['messages'][0]['text'] = "2157";
    }
else if($message == "2158"){
        $arrayPostData['messages'][0]['text'] = "2158";
    }
else if($message == "2159"){
        $arrayPostData['messages'][0]['text'] = "2159";
    }
else if($message == "2160"){
        $arrayPostData['messages'][0]['text'] = "2160";
    }
else if($message == "2161"){
        $arrayPostData['messages'][0]['text'] = "2161";
    }
else if($message == "2162"){
        $arrayPostData['messages'][0]['text'] = "2162";
    }
else if($message == "2163"){
        $arrayPostData['messages'][0]['text'] = "2163";
    }
else if($message == "2164"){
        $arrayPostData['messages'][0]['text'] = "2164";
    }
else if($message == "2165"){
        $arrayPostData['messages'][0]['text'] = "2165";
    }
else if($message == "2166"){
        $arrayPostData['messages'][0]['text'] = "2166";
    }
else if($message == "2167"){
        $arrayPostData['messages'][0]['text'] = "2167";
    }
else if($message == "2168"){
        $arrayPostData['messages'][0]['text'] = "2168";
    }
else if($message == "2169"){
        $arrayPostData['messages'][0]['text'] = "2169";
    }
else if($message == "2170"){
        $arrayPostData['messages'][0]['text'] = "2170";
    }
else if($message == "2171"){
        $arrayPostData['messages'][0]['text'] = "2171";
    }
else if($message == "2172"){
        $arrayPostData['messages'][0]['text'] = "2172";
    }
else if($message == "2173"){
        $arrayPostData['messages'][0]['text'] = "2173";
    }
else if($message == "2174"){
        $arrayPostData['messages'][0]['text'] = "2174";
    }
else if($message == "2175"){
        $arrayPostData['messages'][0]['text'] = "2175";
    }
else if($message == "2176"){
        $arrayPostData['messages'][0]['text'] = "2176";
    }
else if($message == "2177"){
        $arrayPostData['messages'][0]['text'] = "2177";
    }
else if($message == "2178"){
        $arrayPostData['messages'][0]['text'] = "2178";
    }
else if($message == "2179"){
        $arrayPostData['messages'][0]['text'] = "2179";
    }
else if($message == "2180"){
        $arrayPostData['messages'][0]['text'] = "2180";
    }
else if($message == "2181"){
        $arrayPostData['messages'][0]['text'] = "2181";
    }
else if($message == "2182"){
        $arrayPostData['messages'][0]['text'] = "2182";
    }
else if($message == "2183"){
        $arrayPostData['messages'][0]['text'] = "2183";
    }
else if($message == "2184"){
        $arrayPostData['messages'][0]['text'] = "2184";
    }
else if($message == "2185"){
        $arrayPostData['messages'][0]['text'] = "2185";
    }
else if($message == "2186"){
        $arrayPostData['messages'][0]['text'] = "2186";
    }
else if($message == "2187"){
        $arrayPostData['messages'][0]['text'] = "2187";
    }
else if($message == "2188"){
        $arrayPostData['messages'][0]['text'] = "2188";
    }
else if($message == "2189"){
        $arrayPostData['messages'][0]['text'] = "2189";
    }
else if($message == "2190"){
        $arrayPostData['messages'][0]['text'] = "2190";
    }
else if($message == "2191"){
        $arrayPostData['messages'][0]['text'] = "2191";
    }
else if($message == "2192"){
        $arrayPostData['messages'][0]['text'] = "2192";
    }
else if($message == "2193"){
        $arrayPostData['messages'][0]['text'] = "2193";
    }
else if($message == "2194"){
        $arrayPostData['messages'][0]['text'] = "2194";
    }
else if($message == "2195"){
        $arrayPostData['messages'][0]['text'] = "2195";
    }
else if($message == "2196"){
        $arrayPostData['messages'][0]['text'] = "2196";
    }
else if($message == "2197"){
        $arrayPostData['messages'][0]['text'] = "2197";
    }
else if($message == "2198"){
        $arrayPostData['messages'][0]['text'] = "2198";
    }
else if($message == "2199"){
        $arrayPostData['messages'][0]['text'] = "2199";
    }
else if($message == "2200"){
        $arrayPostData['messages'][0]['text'] = "2200";
    }
else if($message == "2201"){
        $arrayPostData['messages'][0]['text'] = "2201";
    }
else if($message == "2202"){
        $arrayPostData['messages'][0]['text'] = "2202";
    }
else if($message == "2203"){
        $arrayPostData['messages'][0]['text'] = "2203";
    }
else if($message == "2204"){
        $arrayPostData['messages'][0]['text'] = "2204";
    }
else if($message == "2205"){
        $arrayPostData['messages'][0]['text'] = "2205";
    }
else if($message == "2206"){
        $arrayPostData['messages'][0]['text'] = "2206";
    }
else if($message == "2207"){
        $arrayPostData['messages'][0]['text'] = "2207";
    }
else if($message == "2208"){
        $arrayPostData['messages'][0]['text'] = "2208";
    }
else if($message == "2209"){
        $arrayPostData['messages'][0]['text'] = "2209";
    }
else if($message == "2210"){
        $arrayPostData['messages'][0]['text'] = "2210";
    }
else if($message == "2211"){
        $arrayPostData['messages'][0]['text'] = "2211";
    }
else if($message == "2212"){
        $arrayPostData['messages'][0]['text'] = "2212";
    }
else if($message == "2213"){
        $arrayPostData['messages'][0]['text'] = "2213";
    }
else if($message == "2214"){
        $arrayPostData['messages'][0]['text'] = "2214";
    }
else if($message == "2215"){
        $arrayPostData['messages'][0]['text'] = "2215";
    }
else if($message == "2216"){
        $arrayPostData['messages'][0]['text'] = "2216";
    }
else if($message == "2217"){
        $arrayPostData['messages'][0]['text'] = "2217";
    }
else if($message == "2218"){
        $arrayPostData['messages'][0]['text'] = "2218";
    }
else if($message == "2219"){
        $arrayPostData['messages'][0]['text'] = "2219";
    }
else if($message == "2220"){
        $arrayPostData['messages'][0]['text'] = "2220";
    }
else if($message == "2221"){
        $arrayPostData['messages'][0]['text'] = "2221";
    }
else if($message == "2222"){
        $arrayPostData['messages'][0]['text'] = "2222";
    }
else if($message == "2223"){
        $arrayPostData['messages'][0]['text'] = "2223";
    }
else if($message == "2224"){
        $arrayPostData['messages'][0]['text'] = "2224";
    }
else if($message == "2225"){
        $arrayPostData['messages'][0]['text'] = "2225";
    }
else if($message == "2226"){
        $arrayPostData['messages'][0]['text'] = "2226";
    }
else if($message == "2227"){
        $arrayPostData['messages'][0]['text'] = "2227";
    }
else if($message == "2228"){
        $arrayPostData['messages'][0]['text'] = "2228";
    }
else if($message == "2229"){
        $arrayPostData['messages'][0]['text'] = "2229";
    }
else if($message == "2230"){
        $arrayPostData['messages'][0]['text'] = "2230";
    }
else if($message == "2231"){
        $arrayPostData['messages'][0]['text'] = "2231";
    }
else if($message == "2232"){
        $arrayPostData['messages'][0]['text'] = "2232";
    }
else if($message == "2233"){
        $arrayPostData['messages'][0]['text'] = "2233";
    }
else if($message == "2234"){
        $arrayPostData['messages'][0]['text'] = "2234";
    }
else if($message == "2235"){
        $arrayPostData['messages'][0]['text'] = "2235";
    }
else if($message == "2236"){
        $arrayPostData['messages'][0]['text'] = "2236";
    }
else if($message == "2237"){
        $arrayPostData['messages'][0]['text'] = "2237";
    }
else if($message == "2238"){
        $arrayPostData['messages'][0]['text'] = "2238";
    }
else if($message == "2239"){
        $arrayPostData['messages'][0]['text'] = "2239";
    }
else if($message == "2240"){
        $arrayPostData['messages'][0]['text'] = "2240";
    }
else if($message == "2241"){
        $arrayPostData['messages'][0]['text'] = "2241";
    }
else if($message == "2242"){
        $arrayPostData['messages'][0]['text'] = "2242";
    }
else if($message == "2243"){
        $arrayPostData['messages'][0]['text'] = "2243";
    }
else if($message == "2244"){
        $arrayPostData['messages'][0]['text'] = "2244";
    }
else if($message == "2245"){
        $arrayPostData['messages'][0]['text'] = "2245";
    }
else if($message == "2246"){
        $arrayPostData['messages'][0]['text'] = "2246";
    }
else if($message == "2247"){
        $arrayPostData['messages'][0]['text'] = "2247";
    }
else if($message == "2248"){
        $arrayPostData['messages'][0]['text'] = "2248";
    }
else if($message == "2249"){
        $arrayPostData['messages'][0]['text'] = "2249";
    }
else if($message == "2250"){
        $arrayPostData['messages'][0]['text'] = "2250";
    }
else if($message == "2251"){
        $arrayPostData['messages'][0]['text'] = "2251";
    }
else if($message == "2252"){
        $arrayPostData['messages'][0]['text'] = "2252";
    }
else if($message == "2253"){
        $arrayPostData['messages'][0]['text'] = "2253";
    }
else if($message == "2254"){
        $arrayPostData['messages'][0]['text'] = "2254";
    }
else if($message == "2255"){
        $arrayPostData['messages'][0]['text'] = "2255";
    }
else if($message == "2256"){
        $arrayPostData['messages'][0]['text'] = "2256";
    }
else if($message == "2257"){
        $arrayPostData['messages'][0]['text'] = "2257";
    }
else if($message == "2258"){
        $arrayPostData['messages'][0]['text'] = "2258";
    }
else if($message == "2259"){
        $arrayPostData['messages'][0]['text'] = "2259";
    }
else if($message == "2260"){
        $arrayPostData['messages'][0]['text'] = "2260";
    }
else if($message == "2261"){
        $arrayPostData['messages'][0]['text'] = "2261";
    }
else if($message == "2262"){
        $arrayPostData['messages'][0]['text'] = "2262";
    }
else if($message == "2263"){
        $arrayPostData['messages'][0]['text'] = "2263";
    }
else if($message == "2264"){
        $arrayPostData['messages'][0]['text'] = "2264";
    }
else if($message == "2265"){
        $arrayPostData['messages'][0]['text'] = "2265";
    }
else if($message == "2266"){
        $arrayPostData['messages'][0]['text'] = "2266";
    }
else if($message == "2267"){
        $arrayPostData['messages'][0]['text'] = "2267";
    }
else if($message == "2268"){
        $arrayPostData['messages'][0]['text'] = "2268";
    }
else if($message == "2269"){
        $arrayPostData['messages'][0]['text'] = "2269";
    }
else if($message == "2270"){
        $arrayPostData['messages'][0]['text'] = "2270";
    }
else if($message == "2271"){
        $arrayPostData['messages'][0]['text'] = "2271";
    }
else if($message == "2272"){
        $arrayPostData['messages'][0]['text'] = "2272";
    }
else if($message == "2273"){
        $arrayPostData['messages'][0]['text'] = "2273";
    }
else if($message == "2274"){
        $arrayPostData['messages'][0]['text'] = "2274";
    }
else if($message == "2275"){
        $arrayPostData['messages'][0]['text'] = "2275";
    }
else if($message == "2276"){
        $arrayPostData['messages'][0]['text'] = "2276";
    }
else if($message == "2277"){
        $arrayPostData['messages'][0]['text'] = "2277";
    }
else if($message == "2278"){
        $arrayPostData['messages'][0]['text'] = "2278";
    }
else if($message == "2279"){
        $arrayPostData['messages'][0]['text'] = "2279";
    }
else if($message == "2280"){
        $arrayPostData['messages'][0]['text'] = "2280";
    }
else if($message == "2281"){
        $arrayPostData['messages'][0]['text'] = "2281";
    }
else if($message == "2282"){
        $arrayPostData['messages'][0]['text'] = "2282";
    }
else if($message == "2283"){
        $arrayPostData['messages'][0]['text'] = "2283";
    }
else if($message == "2284"){
        $arrayPostData['messages'][0]['text'] = "2284";
    }
else if($message == "2285"){
        $arrayPostData['messages'][0]['text'] = "2285";
    }
else if($message == "2286"){
        $arrayPostData['messages'][0]['text'] = "2286";
    }
else if($message == "2287"){
        $arrayPostData['messages'][0]['text'] = "2287";
    }
else if($message == "2288"){
        $arrayPostData['messages'][0]['text'] = "2288";
    }
else if($message == "2289"){
        $arrayPostData['messages'][0]['text'] = "2289";
    }
else if($message == "2290"){
        $arrayPostData['messages'][0]['text'] = "2290";
    }
else if($message == "2291"){
        $arrayPostData['messages'][0]['text'] = "2291";
    }
else if($message == "2292"){
        $arrayPostData['messages'][0]['text'] = "2292";
    }
else if($message == "2293"){
        $arrayPostData['messages'][0]['text'] = "2293";
    }
else if($message == "2294"){
        $arrayPostData['messages'][0]['text'] = "2294";
    }
else if($message == "2295"){
        $arrayPostData['messages'][0]['text'] = "2295";
    }
else if($message == "2296"){
        $arrayPostData['messages'][0]['text'] = "2296";
    }
else if($message == "2297"){
        $arrayPostData['messages'][0]['text'] = "2297";
    }
else if($message == "2298"){
        $arrayPostData['messages'][0]['text'] = "2298";
    }
else if($message == "2299"){
        $arrayPostData['messages'][0]['text'] = "2299";
    }
else if($message == "2300"){
        $arrayPostData['messages'][0]['text'] = "2300";
    }
else if($message == "2301"){
        $arrayPostData['messages'][0]['text'] = "2301";
    }
else if($message == "2302"){
        $arrayPostData['messages'][0]['text'] = "2302";
    }
else if($message == "2303"){
        $arrayPostData['messages'][0]['text'] = "2303";
    }
else if($message == "2304"){
        $arrayPostData['messages'][0]['text'] = "2304";
    }
else if($message == "2305"){
        $arrayPostData['messages'][0]['text'] = "2305";
    }
else if($message == "2306"){
        $arrayPostData['messages'][0]['text'] = "2306";
    }
else if($message == "2307"){
        $arrayPostData['messages'][0]['text'] = "2307";
    }
else if($message == "2308"){
        $arrayPostData['messages'][0]['text'] = "2308";
    }
else if($message == "2309"){
        $arrayPostData['messages'][0]['text'] = "2309";
    }
else if($message == "2310"){
        $arrayPostData['messages'][0]['text'] = "2310";
    }
else if($message == "2311"){
        $arrayPostData['messages'][0]['text'] = "2311";
    }
else if($message == "2312"){
        $arrayPostData['messages'][0]['text'] = "2312";
    }
else if($message == "2313"){
        $arrayPostData['messages'][0]['text'] = "2313";
    }
else if($message == "2314"){
        $arrayPostData['messages'][0]['text'] = "2314";
    }
else if($message == "2315"){
        $arrayPostData['messages'][0]['text'] = "2315";
    }
else if($message == "2316"){
        $arrayPostData['messages'][0]['text'] = "2316";
    }
else if($message == "2317"){
        $arrayPostData['messages'][0]['text'] = "2317";
    }
else if($message == "2318"){
        $arrayPostData['messages'][0]['text'] = "2318";
    }
else if($message == "2319"){
        $arrayPostData['messages'][0]['text'] = "2319";
    }
else if($message == "2320"){
        $arrayPostData['messages'][0]['text'] = "2320";
    }
else if($message == "2321"){
        $arrayPostData['messages'][0]['text'] = "2321";
    }
else if($message == "2322"){
        $arrayPostData['messages'][0]['text'] = "2322";
    }
else if($message == "2323"){
        $arrayPostData['messages'][0]['text'] = "2323";
    }
else if($message == "2324"){
        $arrayPostData['messages'][0]['text'] = "2324";
    }
else if($message == "2325"){
        $arrayPostData['messages'][0]['text'] = "2325";
    }
else if($message == "2326"){
        $arrayPostData['messages'][0]['text'] = "2326";
    }
else if($message == "2327"){
        $arrayPostData['messages'][0]['text'] = "2327";
    }
else if($message == "2328"){
        $arrayPostData['messages'][0]['text'] = "2328";
    }
else if($message == "2329"){
        $arrayPostData['messages'][0]['text'] = "2329";
    }
else if($message == "2330"){
        $arrayPostData['messages'][0]['text'] = "2330";
    }
else if($message == "2331"){
        $arrayPostData['messages'][0]['text'] = "2331";
    }
else if($message == "2332"){
        $arrayPostData['messages'][0]['text'] = "2332";
    }
else if($message == "2333"){
        $arrayPostData['messages'][0]['text'] = "2333";
    }
else if($message == "2334"){
        $arrayPostData['messages'][0]['text'] = "2334";
    }
else if($message == "2335"){
        $arrayPostData['messages'][0]['text'] = "2335";
    }
else if($message == "2336"){
        $arrayPostData['messages'][0]['text'] = "2336";
    }
else if($message == "2337"){
        $arrayPostData['messages'][0]['text'] = "2337";
    }
else if($message == "2338"){
        $arrayPostData['messages'][0]['text'] = "2338";
    }
else if($message == "2339"){
        $arrayPostData['messages'][0]['text'] = "2339";
    }
else if($message == "2340"){
        $arrayPostData['messages'][0]['text'] = "2340";
    }
else if($message == "2341"){
        $arrayPostData['messages'][0]['text'] = "2341";
    }
else if($message == "2342"){
        $arrayPostData['messages'][0]['text'] = "2342";
    }
else if($message == "2343"){
        $arrayPostData['messages'][0]['text'] = "2343";
    }
else if($message == "2344"){
        $arrayPostData['messages'][0]['text'] = "2344";
    }
else if($message == "2345"){
        $arrayPostData['messages'][0]['text'] = "2345";
    }
else if($message == "2346"){
        $arrayPostData['messages'][0]['text'] = "2346";
    }
else if($message == "2347"){
        $arrayPostData['messages'][0]['text'] = "2347";
    }
else if($message == "2348"){
        $arrayPostData['messages'][0]['text'] = "2348";
    }
else if($message == "2349"){
        $arrayPostData['messages'][0]['text'] = "2349";
    }
else if($message == "2350"){
        $arrayPostData['messages'][0]['text'] = "2350";
    }
else if($message == "2351"){
        $arrayPostData['messages'][0]['text'] = "2351";
    }
else if($message == "2352"){
        $arrayPostData['messages'][0]['text'] = "2352";
    }
else if($message == "2353"){
        $arrayPostData['messages'][0]['text'] = "2353";
    }
else if($message == "2354"){
        $arrayPostData['messages'][0]['text'] = "2354";
    }
else if($message == "2355"){
        $arrayPostData['messages'][0]['text'] = "2355";
    }
else if($message == "2356"){
        $arrayPostData['messages'][0]['text'] = "2356";
    }
else if($message == "2357"){
        $arrayPostData['messages'][0]['text'] = "2357";
    }
else if($message == "2358"){
        $arrayPostData['messages'][0]['text'] = "2358";
    }
else if($message == "2359"){
        $arrayPostData['messages'][0]['text'] = "2359";
    }
else if($message == "2360"){
        $arrayPostData['messages'][0]['text'] = "2360";
    }
else if($message == "2361"){
        $arrayPostData['messages'][0]['text'] = "2361";
    }
else if($message == "2362"){
        $arrayPostData['messages'][0]['text'] = "2362";
    }
else if($message == "2363"){
        $arrayPostData['messages'][0]['text'] = "2363";
    }
else if($message == "2364"){
        $arrayPostData['messages'][0]['text'] = "2364";
    }
else if($message == "2365"){
        $arrayPostData['messages'][0]['text'] = "2365";
    }
else if($message == "2366"){
        $arrayPostData['messages'][0]['text'] = "2366";
    }
else if($message == "2367"){
        $arrayPostData['messages'][0]['text'] = "2367";
    }
else if($message == "2368"){
        $arrayPostData['messages'][0]['text'] = "2368";
    }
else if($message == "2369"){
        $arrayPostData['messages'][0]['text'] = "2369";
    }
else if($message == "2370"){
        $arrayPostData['messages'][0]['text'] = "2370";
    }
else if($message == "2371"){
        $arrayPostData['messages'][0]['text'] = "2371";
    }
else if($message == "2372"){
        $arrayPostData['messages'][0]['text'] = "2372";
    }
else if($message == "2373"){
        $arrayPostData['messages'][0]['text'] = "2373";
    }
else if($message == "2374"){
        $arrayPostData['messages'][0]['text'] = "2374";
    }
else if($message == "2375"){
        $arrayPostData['messages'][0]['text'] = "2375";
    }
else if($message == "2376"){
        $arrayPostData['messages'][0]['text'] = "2376";
    }
else if($message == "2377"){
        $arrayPostData['messages'][0]['text'] = "2377";
    }
else if($message == "2378"){
        $arrayPostData['messages'][0]['text'] = "2378";
    }
else if($message == "2379"){
        $arrayPostData['messages'][0]['text'] = "2379";
    }
else if($message == "2380"){
        $arrayPostData['messages'][0]['text'] = "2380";
    }
else if($message == "2381"){
        $arrayPostData['messages'][0]['text'] = "2381";
    }
else if($message == "2382"){
        $arrayPostData['messages'][0]['text'] = "2382";
    }
else if($message == "2383"){
        $arrayPostData['messages'][0]['text'] = "2383";
    }
else if($message == "2384"){
        $arrayPostData['messages'][0]['text'] = "2384";
    }
else if($message == "2385"){
        $arrayPostData['messages'][0]['text'] = "2385";
    }
else if($message == "2386"){
        $arrayPostData['messages'][0]['text'] = "2386";
    }
else if($message == "2387"){
        $arrayPostData['messages'][0]['text'] = "2387";
    }
else if($message == "2388"){
        $arrayPostData['messages'][0]['text'] = "2388";
    }
else if($message == "2389"){
        $arrayPostData['messages'][0]['text'] = "2389";
    }
else if($message == "2390"){
        $arrayPostData['messages'][0]['text'] = "2390";
    }
else if($message == "2391"){
        $arrayPostData['messages'][0]['text'] = "2391";
    }
else if($message == "2392"){
        $arrayPostData['messages'][0]['text'] = "2392";
    }
else if($message == "2393"){
        $arrayPostData['messages'][0]['text'] = "2393";
    }
else if($message == "2394"){
        $arrayPostData['messages'][0]['text'] = "2394";
    }
else if($message == "2395"){
        $arrayPostData['messages'][0]['text'] = "2395";
    }
else if($message == "2396"){
        $arrayPostData['messages'][0]['text'] = "2396";
    }
else if($message == "2397"){
        $arrayPostData['messages'][0]['text'] = "2397";
    }
else if($message == "2398"){
        $arrayPostData['messages'][0]['text'] = "2398";
    }
else if($message == "2399"){
        $arrayPostData['messages'][0]['text'] = "2399";
    }
else if($message == "2400"){
        $arrayPostData['messages'][0]['text'] = "2400";
    }
else if($message == "2401"){
        $arrayPostData['messages'][0]['text'] = "2401";
    }
else if($message == "2402"){
        $arrayPostData['messages'][0]['text'] = "2402";
    }
else if($message == "2403"){
        $arrayPostData['messages'][0]['text'] = "2403";
    }
else if($message == "2404"){
        $arrayPostData['messages'][0]['text'] = "2404";
    }
else if($message == "2405"){
        $arrayPostData['messages'][0]['text'] = "2405";
    }
else if($message == "2406"){
        $arrayPostData['messages'][0]['text'] = "2406";
    }
else if($message == "2407"){
        $arrayPostData['messages'][0]['text'] = "2407";
    }
else if($message == "2408"){
        $arrayPostData['messages'][0]['text'] = "2408";
    }
else if($message == "2409"){
        $arrayPostData['messages'][0]['text'] = "2409";
    }
else if($message == "2410"){
        $arrayPostData['messages'][0]['text'] = "2410";
    }
else if($message == "2411"){
        $arrayPostData['messages'][0]['text'] = "2411";
    }
else if($message == "2412"){
        $arrayPostData['messages'][0]['text'] = "2412";
    }
else if($message == "2413"){
        $arrayPostData['messages'][0]['text'] = "2413";
    }
else if($message == "2414"){
        $arrayPostData['messages'][0]['text'] = "2414";
    }
else if($message == "2415"){
        $arrayPostData['messages'][0]['text'] = "2415";
    }
else if($message == "2416"){
        $arrayPostData['messages'][0]['text'] = "2416";
    }
else if($message == "2417"){
        $arrayPostData['messages'][0]['text'] = "2417";
    }
else if($message == "2418"){
        $arrayPostData['messages'][0]['text'] = "2418";
    }
else if($message == "2419"){
        $arrayPostData['messages'][0]['text'] = "2419";
    }
else if($message == "2420"){
        $arrayPostData['messages'][0]['text'] = "2420";
    }
else if($message == "2421"){
        $arrayPostData['messages'][0]['text'] = "2421";
    }
else if($message == "2422"){
        $arrayPostData['messages'][0]['text'] = "2422";
    }
else if($message == "2423"){
        $arrayPostData['messages'][0]['text'] = "2423";
    }
else if($message == "2424"){
        $arrayPostData['messages'][0]['text'] = "2424";
    }
else if($message == "2425"){
        $arrayPostData['messages'][0]['text'] = "2425";
    }
else if($message == "2426"){
        $arrayPostData['messages'][0]['text'] = "2426";
    }
else if($message == "2427"){
        $arrayPostData['messages'][0]['text'] = "2427";
    }
else if($message == "2428"){
        $arrayPostData['messages'][0]['text'] = "2428";
    }
else if($message == "2429"){
        $arrayPostData['messages'][0]['text'] = "2429";
    }
else if($message == "2430"){
        $arrayPostData['messages'][0]['text'] = "2430";
    }
else if($message == "2431"){
        $arrayPostData['messages'][0]['text'] = "2431";
    }
else if($message == "2432"){
        $arrayPostData['messages'][0]['text'] = "2432";
    }
else if($message == "2433"){
        $arrayPostData['messages'][0]['text'] = "2433";
    }
else if($message == "2434"){
        $arrayPostData['messages'][0]['text'] = "2434";
    }
else if($message == "2435"){
        $arrayPostData['messages'][0]['text'] = "2435";
    }
else if($message == "2436"){
        $arrayPostData['messages'][0]['text'] = "2436";
    }
else if($message == "2437"){
        $arrayPostData['messages'][0]['text'] = "2437";
    }
else if($message == "2438"){
        $arrayPostData['messages'][0]['text'] = "2438";
    }
else if($message == "2439"){
        $arrayPostData['messages'][0]['text'] = "2439";
    }
else if($message == "2440"){
        $arrayPostData['messages'][0]['text'] = "2440";
    }
else if($message == "2441"){
        $arrayPostData['messages'][0]['text'] = "2441";
    }
else if($message == "2442"){
        $arrayPostData['messages'][0]['text'] = "2442";
    }
else if($message == "2443"){
        $arrayPostData['messages'][0]['text'] = "2443";
    }
else if($message == "2444"){
        $arrayPostData['messages'][0]['text'] = "2444";
    }
else if($message == "2445"){
        $arrayPostData['messages'][0]['text'] = "2445";
    }
else if($message == "2446"){
        $arrayPostData['messages'][0]['text'] = "2446";
    }
else if($message == "2447"){
        $arrayPostData['messages'][0]['text'] = "2447";
    }
else if($message == "2448"){
        $arrayPostData['messages'][0]['text'] = "2448";
    }
else if($message == "2449"){
        $arrayPostData['messages'][0]['text'] = "2449";
    }
else if($message == "2450"){
        $arrayPostData['messages'][0]['text'] = "2450";
    }
else if($message == "2451"){
        $arrayPostData['messages'][0]['text'] = "2451";
    }
else if($message == "2452"){
        $arrayPostData['messages'][0]['text'] = "2452";
    }
else if($message == "2453"){
        $arrayPostData['messages'][0]['text'] = "2453";
    }
else if($message == "2454"){
        $arrayPostData['messages'][0]['text'] = "2454";
    }
else if($message == "2455"){
        $arrayPostData['messages'][0]['text'] = "2455";
    }
else if($message == "2456"){
        $arrayPostData['messages'][0]['text'] = "2456";
    }
else if($message == "2457"){
        $arrayPostData['messages'][0]['text'] = "2457";
    }
else if($message == "2458"){
        $arrayPostData['messages'][0]['text'] = "2458";
    }
else if($message == "2459"){
        $arrayPostData['messages'][0]['text'] = "2459";
    }
else if($message == "2460"){
        $arrayPostData['messages'][0]['text'] = "2460";
    }
else if($message == "2461"){
        $arrayPostData['messages'][0]['text'] = "2461";
    }
else if($message == "2462"){
        $arrayPostData['messages'][0]['text'] = "2462";
    }
else if($message == "2463"){
        $arrayPostData['messages'][0]['text'] = "2463";
    }
else if($message == "2464"){
        $arrayPostData['messages'][0]['text'] = "2464";
    }
else if($message == "2465"){
        $arrayPostData['messages'][0]['text'] = "2465";
    }
else if($message == "2466"){
        $arrayPostData['messages'][0]['text'] = "2466";
    }
else if($message == "2467"){
        $arrayPostData['messages'][0]['text'] = "2467";
    }
else if($message == "2468"){
        $arrayPostData['messages'][0]['text'] = "2468";
    }
else if($message == "2469"){
        $arrayPostData['messages'][0]['text'] = "2469";
    }
else if($message == "2470"){
        $arrayPostData['messages'][0]['text'] = "2470";
    }
else if($message == "2471"){
        $arrayPostData['messages'][0]['text'] = "2471";
    }
else if($message == "2472"){
        $arrayPostData['messages'][0]['text'] = "2472";
    }
else if($message == "2473"){
        $arrayPostData['messages'][0]['text'] = "2473";
    }
else if($message == "2474"){
        $arrayPostData['messages'][0]['text'] = "2474";
    }
else if($message == "2475"){
        $arrayPostData['messages'][0]['text'] = "2475";
    }
else if($message == "2476"){
        $arrayPostData['messages'][0]['text'] = "2476";
    }
else if($message == "2477"){
        $arrayPostData['messages'][0]['text'] = "2477";
    }
else if($message == "2478"){
        $arrayPostData['messages'][0]['text'] = "2478";
    }
else if($message == "2479"){
        $arrayPostData['messages'][0]['text'] = "2479";
    }
else if($message == "2480"){
        $arrayPostData['messages'][0]['text'] = "2480";
    }
else if($message == "2481"){
        $arrayPostData['messages'][0]['text'] = "2481";
    }
else if($message == "2482"){
        $arrayPostData['messages'][0]['text'] = "2482";
    }
else if($message == "2483"){
        $arrayPostData['messages'][0]['text'] = "2483";
    }
else if($message == "2484"){
        $arrayPostData['messages'][0]['text'] = "2484";
    }
else if($message == "2485"){
        $arrayPostData['messages'][0]['text'] = "2485";
    }
else if($message == "2486"){
        $arrayPostData['messages'][0]['text'] = "2486";
    }
else if($message == "2487"){
        $arrayPostData['messages'][0]['text'] = "2487";
    }
else if($message == "2488"){
        $arrayPostData['messages'][0]['text'] = "2488";
    }
else if($message == "2489"){
        $arrayPostData['messages'][0]['text'] = "2489";
    }
else if($message == "2490"){
        $arrayPostData['messages'][0]['text'] = "2490";
    }
else if($message == "2491"){
        $arrayPostData['messages'][0]['text'] = "2491";
    }
else if($message == "2492"){
        $arrayPostData['messages'][0]['text'] = "2492";
    }
else if($message == "2493"){
        $arrayPostData['messages'][0]['text'] = "2493";
    }
else if($message == "2494"){
        $arrayPostData['messages'][0]['text'] = "2494";
    }
else if($message == "2495"){
        $arrayPostData['messages'][0]['text'] = "2495";
    }
else if($message == "2496"){
        $arrayPostData['messages'][0]['text'] = "2496";
    }
else if($message == "2497"){
        $arrayPostData['messages'][0]['text'] = "2497";
    }
else if($message == "2498"){
        $arrayPostData['messages'][0]['text'] = "2498";
    }
else if($message == "2499"){
        $arrayPostData['messages'][0]['text'] = "2499";
    }
else if($message == "2500"){
        $arrayPostData['messages'][0]['text'] = "2500";
    }
else if($message == "2501"){
        $arrayPostData['messages'][0]['text'] = "2501";
    }
else if($message == "2502"){
        $arrayPostData['messages'][0]['text'] = "2502";
    }
else if($message == "2503"){
        $arrayPostData['messages'][0]['text'] = "2503";
    }
else if($message == "2504"){
        $arrayPostData['messages'][0]['text'] = "2504";
    }
else if($message == "2505"){
        $arrayPostData['messages'][0]['text'] = "2505";
    }
else if($message == "2506"){
        $arrayPostData['messages'][0]['text'] = "2506";
    }
else if($message == "2507"){
        $arrayPostData['messages'][0]['text'] = "2507";
    }
else if($message == "2508"){
        $arrayPostData['messages'][0]['text'] = "2508";
    }
else if($message == "2509"){
        $arrayPostData['messages'][0]['text'] = "2509";
    }
else if($message == "2510"){
        $arrayPostData['messages'][0]['text'] = "2510";
    }
else if($message == "2511"){
        $arrayPostData['messages'][0]['text'] = "2511";
    }
else if($message == "2512"){
        $arrayPostData['messages'][0]['text'] = "2512";
    }
else if($message == "2513"){
        $arrayPostData['messages'][0]['text'] = "2513";
    }
else if($message == "2514"){
        $arrayPostData['messages'][0]['text'] = "2514";
    }
else if($message == "2515"){
        $arrayPostData['messages'][0]['text'] = "2515";
    }
else if($message == "2516"){
        $arrayPostData['messages'][0]['text'] = "2516";
    }
else if($message == "2517"){
        $arrayPostData['messages'][0]['text'] = "2517";
    }
else if($message == "2518"){
        $arrayPostData['messages'][0]['text'] = "2518";
    }
else if($message == "2519"){
        $arrayPostData['messages'][0]['text'] = "2519";
    }
else if($message == "2520"){
        $arrayPostData['messages'][0]['text'] = "2520";
    }
else if($message == "2521"){
        $arrayPostData['messages'][0]['text'] = "2521";
    }
else if($message == "2522"){
        $arrayPostData['messages'][0]['text'] = "2522";
    }
else if($message == "2523"){
        $arrayPostData['messages'][0]['text'] = "2523";
    }
else if($message == "2524"){
        $arrayPostData['messages'][0]['text'] = "2524";
    }
else if($message == "2525"){
        $arrayPostData['messages'][0]['text'] = "2525";
    }
else if($message == "2526"){
        $arrayPostData['messages'][0]['text'] = "2526";
    }
else if($message == "2527"){
        $arrayPostData['messages'][0]['text'] = "2527";
    }
else if($message == "2528"){
        $arrayPostData['messages'][0]['text'] = "2528";
    }
else if($message == "2529"){
        $arrayPostData['messages'][0]['text'] = "2529";
    }
else if($message == "2530"){
        $arrayPostData['messages'][0]['text'] = "2530";
    }
else if($message == "2531"){
        $arrayPostData['messages'][0]['text'] = "2531";
    }
else if($message == "2532"){
        $arrayPostData['messages'][0]['text'] = "2532";
    }
else if($message == "2533"){
        $arrayPostData['messages'][0]['text'] = "2533";
    }
else if($message == "2534"){
        $arrayPostData['messages'][0]['text'] = "2534";
    }
else if($message == "2535"){
        $arrayPostData['messages'][0]['text'] = "2535";
    }
else if($message == "2536"){
        $arrayPostData['messages'][0]['text'] = "2536";
    }
else if($message == "2537"){
        $arrayPostData['messages'][0]['text'] = "2537";
    }
else if($message == "2538"){
        $arrayPostData['messages'][0]['text'] = "2538";
    }
else if($message == "2539"){
        $arrayPostData['messages'][0]['text'] = "2539";
    }
else if($message == "2540"){
        $arrayPostData['messages'][0]['text'] = "2540";
    }
else if($message == "2541"){
        $arrayPostData['messages'][0]['text'] = "2541";
    }
else if($message == "2542"){
        $arrayPostData['messages'][0]['text'] = "2542";
    }
else if($message == "2543"){
        $arrayPostData['messages'][0]['text'] = "2543";
    }
else if($message == "2544"){
        $arrayPostData['messages'][0]['text'] = "2544";
    }
else if($message == "2545"){
        $arrayPostData['messages'][0]['text'] = "2545";
    }
else if($message == "2546"){
        $arrayPostData['messages'][0]['text'] = "2546";
    }
else if($message == "2547"){
        $arrayPostData['messages'][0]['text'] = "2547";
    }
else if($message == "2548"){
        $arrayPostData['messages'][0]['text'] = "2548";
    }
else if($message == "2549"){
        $arrayPostData['messages'][0]['text'] = "2549";
    }
else if($message == "2550"){
        $arrayPostData['messages'][0]['text'] = "2550";
    }
else if($message == "2551"){
        $arrayPostData['messages'][0]['text'] = "2551";
    }
else if($message == "2552"){
        $arrayPostData['messages'][0]['text'] = "2552";
    }
else if($message == "2553"){
        $arrayPostData['messages'][0]['text'] = "2553";
    }
else if($message == "2554"){
        $arrayPostData['messages'][0]['text'] = "2554";
    }
else if($message == "2555"){
        $arrayPostData['messages'][0]['text'] = "2555";
    }
else if($message == "2556"){
        $arrayPostData['messages'][0]['text'] = "2556";
    }
else if($message == "2557"){
        $arrayPostData['messages'][0]['text'] = "2557";
    }
else if($message == "2558"){
        $arrayPostData['messages'][0]['text'] = "2558";
    }
else if($message == "2559"){
        $arrayPostData['messages'][0]['text'] = "2559";
    }
else if($message == "2560"){
        $arrayPostData['messages'][0]['text'] = "2560";
    }
else if($message == "2561"){
        $arrayPostData['messages'][0]['text'] = "2561";
    }
else if($message == "2562"){
        $arrayPostData['messages'][0]['text'] = "2562";
    }
else if($message == "2563"){
        $arrayPostData['messages'][0]['text'] = "2563";
    }
else if($message == "2564"){
        $arrayPostData['messages'][0]['text'] = "2564";
    }
else if($message == "2565"){
        $arrayPostData['messages'][0]['text'] = "2565";
    }
else if($message == "2566"){
        $arrayPostData['messages'][0]['text'] = "2566";
    }
else if($message == "2567"){
        $arrayPostData['messages'][0]['text'] = "2567";
    }
else if($message == "2568"){
        $arrayPostData['messages'][0]['text'] = "2568";
    }
else if($message == "2569"){
        $arrayPostData['messages'][0]['text'] = "2569";
    }
else if($message == "2570"){
        $arrayPostData['messages'][0]['text'] = "2570";
    }
else if($message == "2571"){
        $arrayPostData['messages'][0]['text'] = "2571";
    }
else if($message == "2572"){
        $arrayPostData['messages'][0]['text'] = "2572";
    }
else if($message == "2573"){
        $arrayPostData['messages'][0]['text'] = "2573";
    }
else if($message == "2574"){
        $arrayPostData['messages'][0]['text'] = "2574";
    }
else if($message == "2575"){
        $arrayPostData['messages'][0]['text'] = "2575";
    }
else if($message == "2576"){
        $arrayPostData['messages'][0]['text'] = "2576";
    }
else if($message == "2577"){
        $arrayPostData['messages'][0]['text'] = "2577";
    }
else if($message == "2578"){
        $arrayPostData['messages'][0]['text'] = "2578";
    }
else if($message == "2579"){
        $arrayPostData['messages'][0]['text'] = "2579";
    }
else if($message == "2580"){
        $arrayPostData['messages'][0]['text'] = "2580";
    }
else if($message == "2581"){
        $arrayPostData['messages'][0]['text'] = "2581";
    }
else if($message == "2582"){
        $arrayPostData['messages'][0]['text'] = "2582";
    }
else if($message == "2583"){
        $arrayPostData['messages'][0]['text'] = "2583";
    }
else if($message == "2584"){
        $arrayPostData['messages'][0]['text'] = "2584";
    }
else if($message == "2585"){
        $arrayPostData['messages'][0]['text'] = "2585";
    }
else if($message == "2586"){
        $arrayPostData['messages'][0]['text'] = "2586";
    }
else if($message == "2587"){
        $arrayPostData['messages'][0]['text'] = "2587";
    }
else if($message == "2588"){
        $arrayPostData['messages'][0]['text'] = "2588";
    }
else if($message == "2589"){
        $arrayPostData['messages'][0]['text'] = "2589";
    }
else if($message == "2590"){
        $arrayPostData['messages'][0]['text'] = "2590";
    }
else if($message == "2591"){
        $arrayPostData['messages'][0]['text'] = "2591";
    }
else if($message == "2592"){
        $arrayPostData['messages'][0]['text'] = "2592";
    }
else if($message == "2593"){
        $arrayPostData['messages'][0]['text'] = "2593";
    }
else if($message == "2594"){
        $arrayPostData['messages'][0]['text'] = "2594";
    }
else if($message == "2595"){
        $arrayPostData['messages'][0]['text'] = "2595";
    }
else if($message == "2596"){
        $arrayPostData['messages'][0]['text'] = "2596";
    }
else if($message == "2597"){
        $arrayPostData['messages'][0]['text'] = "2597";
    }
else if($message == "2598"){
        $arrayPostData['messages'][0]['text'] = "2598";
    }
else if($message == "2599"){
        $arrayPostData['messages'][0]['text'] = "2599";
    }
else if($message == "2600"){
        $arrayPostData['messages'][0]['text'] = "2600";
    }
else if($message == "2601"){
        $arrayPostData['messages'][0]['text'] = "2601";
    }
else if($message == "2602"){
        $arrayPostData['messages'][0]['text'] = "2602";
    }
else if($message == "2603"){
        $arrayPostData['messages'][0]['text'] = "2603";
    }
else if($message == "2604"){
        $arrayPostData['messages'][0]['text'] = "2604";
    }
else if($message == "2605"){
        $arrayPostData['messages'][0]['text'] = "2605";
    }
else if($message == "2606"){
        $arrayPostData['messages'][0]['text'] = "2606";
    }
else if($message == "2607"){
        $arrayPostData['messages'][0]['text'] = "2607";
    }
else if($message == "2608"){
        $arrayPostData['messages'][0]['text'] = "2608";
    }
else if($message == "2609"){
        $arrayPostData['messages'][0]['text'] = "2609";
    }
else if($message == "2610"){
        $arrayPostData['messages'][0]['text'] = "2610";
    }
else if($message == "2611"){
        $arrayPostData['messages'][0]['text'] = "2611";
    }
else if($message == "2612"){
        $arrayPostData['messages'][0]['text'] = "2612";
    }
else if($message == "2613"){
        $arrayPostData['messages'][0]['text'] = "2613";
    }
else if($message == "2614"){
        $arrayPostData['messages'][0]['text'] = "2614";
    }
else if($message == "2615"){
        $arrayPostData['messages'][0]['text'] = "2615";
    }
else if($message == "2616"){
        $arrayPostData['messages'][0]['text'] = "2616";
    }
else if($message == "2617"){
        $arrayPostData['messages'][0]['text'] = "2617";
    }
else if($message == "2618"){
        $arrayPostData['messages'][0]['text'] = "2618";
    }
else if($message == "2619"){
        $arrayPostData['messages'][0]['text'] = "2619";
    }
else if($message == "2620"){
        $arrayPostData['messages'][0]['text'] = "2620";
    }
else if($message == "2621"){
        $arrayPostData['messages'][0]['text'] = "2621";
    }
else if($message == "2622"){
        $arrayPostData['messages'][0]['text'] = "2622";
    }
else if($message == "2623"){
        $arrayPostData['messages'][0]['text'] = "2623";
    }
else if($message == "2624"){
        $arrayPostData['messages'][0]['text'] = "2624";
    }
else if($message == "2625"){
        $arrayPostData['messages'][0]['text'] = "2625";
    }
else if($message == "2626"){
        $arrayPostData['messages'][0]['text'] = "2626";
    }
else if($message == "2627"){
        $arrayPostData['messages'][0]['text'] = "2627";
    }
else if($message == "2628"){
        $arrayPostData['messages'][0]['text'] = "2628";
    }
else if($message == "2629"){
        $arrayPostData['messages'][0]['text'] = "2629";
    }
else if($message == "2630"){
        $arrayPostData['messages'][0]['text'] = "2630";
    }
else if($message == "2631"){
        $arrayPostData['messages'][0]['text'] = "2631";
    }
else if($message == "2632"){
        $arrayPostData['messages'][0]['text'] = "2632";
    }
else if($message == "2633"){
        $arrayPostData['messages'][0]['text'] = "2633";
    }
else if($message == "2634"){
        $arrayPostData['messages'][0]['text'] = "2634";
    }
else if($message == "2635"){
        $arrayPostData['messages'][0]['text'] = "2635";
    }
else if($message == "2636"){
        $arrayPostData['messages'][0]['text'] = "2636";
    }
else if($message == "2637"){
        $arrayPostData['messages'][0]['text'] = "2637";
    }
else if($message == "2638"){
        $arrayPostData['messages'][0]['text'] = "2638";
    }
else if($message == "2639"){
        $arrayPostData['messages'][0]['text'] = "2639";
    }
else if($message == "2640"){
        $arrayPostData['messages'][0]['text'] = "2640";
    }
else if($message == "2641"){
        $arrayPostData['messages'][0]['text'] = "2641";
    }
else if($message == "2642"){
        $arrayPostData['messages'][0]['text'] = "2642";
    }
else if($message == "2643"){
        $arrayPostData['messages'][0]['text'] = "2643";
    }
else if($message == "2644"){
        $arrayPostData['messages'][0]['text'] = "2644";
    }
else if($message == "2645"){
        $arrayPostData['messages'][0]['text'] = "2645";
    }
else if($message == "2646"){
        $arrayPostData['messages'][0]['text'] = "2646";
    }
else if($message == "2647"){
        $arrayPostData['messages'][0]['text'] = "2647";
    }
else if($message == "2648"){
        $arrayPostData['messages'][0]['text'] = "2648";
    }
else if($message == "2649"){
        $arrayPostData['messages'][0]['text'] = "2649";
    }
else if($message == "2650"){
        $arrayPostData['messages'][0]['text'] = "2650";
    }
else if($message == "2651"){
        $arrayPostData['messages'][0]['text'] = "2651";
    }
else if($message == "2652"){
        $arrayPostData['messages'][0]['text'] = "2652";
    }
else if($message == "2653"){
        $arrayPostData['messages'][0]['text'] = "2653";
    }
else if($message == "2654"){
        $arrayPostData['messages'][0]['text'] = "2654";
    }
else if($message == "2655"){
        $arrayPostData['messages'][0]['text'] = "2655";
    }
else if($message == "2656"){
        $arrayPostData['messages'][0]['text'] = "2656";
    }
else if($message == "2657"){
        $arrayPostData['messages'][0]['text'] = "2657";
    }
else if($message == "2658"){
        $arrayPostData['messages'][0]['text'] = "2658";
    }
else if($message == "2659"){
        $arrayPostData['messages'][0]['text'] = "2659";
    }
else if($message == "2660"){
        $arrayPostData['messages'][0]['text'] = "2660";
    }
else if($message == "2661"){
        $arrayPostData['messages'][0]['text'] = "2661";
    }
else if($message == "2662"){
        $arrayPostData['messages'][0]['text'] = "2662";
    }
else if($message == "2663"){
        $arrayPostData['messages'][0]['text'] = "2663";
    }
else if($message == "2664"){
        $arrayPostData['messages'][0]['text'] = "2664";
    }
else if($message == "2665"){
        $arrayPostData['messages'][0]['text'] = "2665";
    }
else if($message == "2666"){
        $arrayPostData['messages'][0]['text'] = "2666";
    }
else if($message == "2667"){
        $arrayPostData['messages'][0]['text'] = "2667";
    }
else if($message == "2668"){
        $arrayPostData['messages'][0]['text'] = "2668";
    }
else if($message == "2669"){
        $arrayPostData['messages'][0]['text'] = "2669";
    }
else if($message == "2670"){
        $arrayPostData['messages'][0]['text'] = "2670";
    }
else if($message == "2671"){
        $arrayPostData['messages'][0]['text'] = "2671";
    }
else if($message == "2672"){
        $arrayPostData['messages'][0]['text'] = "2672";
    }
else if($message == "2673"){
        $arrayPostData['messages'][0]['text'] = "2673";
    }
else if($message == "2674"){
        $arrayPostData['messages'][0]['text'] = "2674";
    }
else if($message == "2675"){
        $arrayPostData['messages'][0]['text'] = "2675";
    }
else if($message == "2676"){
        $arrayPostData['messages'][0]['text'] = "2676";
    }
else if($message == "2677"){
        $arrayPostData['messages'][0]['text'] = "2677";
    }
else if($message == "2678"){
        $arrayPostData['messages'][0]['text'] = "2678";
    }
else if($message == "2679"){
        $arrayPostData['messages'][0]['text'] = "2679";
    }
else if($message == "2680"){
        $arrayPostData['messages'][0]['text'] = "2680";
    }
else if($message == "2681"){
        $arrayPostData['messages'][0]['text'] = "2681";
    }
else if($message == "2682"){
        $arrayPostData['messages'][0]['text'] = "2682";
    }
else if($message == "2683"){
        $arrayPostData['messages'][0]['text'] = "2683";
    }
else if($message == "2684"){
        $arrayPostData['messages'][0]['text'] = "2684";
    }
else if($message == "2685"){
        $arrayPostData['messages'][0]['text'] = "2685";
    }
else if($message == "2686"){
        $arrayPostData['messages'][0]['text'] = "2686";
    }
else if($message == "2687"){
        $arrayPostData['messages'][0]['text'] = "2687";
    }
else if($message == "2688"){
        $arrayPostData['messages'][0]['text'] = "2688";
    }
else if($message == "2689"){
        $arrayPostData['messages'][0]['text'] = "2689";
    }
else if($message == "2690"){
        $arrayPostData['messages'][0]['text'] = "2690";
    }
else if($message == "2691"){
        $arrayPostData['messages'][0]['text'] = "2691";
    }
else if($message == "2692"){
        $arrayPostData['messages'][0]['text'] = "2692";
    }
else if($message == "2693"){
        $arrayPostData['messages'][0]['text'] = "2693";
    }
else if($message == "2694"){
        $arrayPostData['messages'][0]['text'] = "2694";
    }
else if($message == "2695"){
        $arrayPostData['messages'][0]['text'] = "2695";
    }
else if($message == "2696"){
        $arrayPostData['messages'][0]['text'] = "2696";
    }
else if($message == "2697"){
        $arrayPostData['messages'][0]['text'] = "2697";
    }
else if($message == "2698"){
        $arrayPostData['messages'][0]['text'] = "2698";
    }
else if($message == "2699"){
        $arrayPostData['messages'][0]['text'] = "2699";
    }
else if($message == "2700"){
        $arrayPostData['messages'][0]['text'] = "2700";
    }
else if($message == "2701"){
        $arrayPostData['messages'][0]['text'] = "2701";
    }
else if($message == "2702"){
        $arrayPostData['messages'][0]['text'] = "2702";
    }
else if($message == "2703"){
        $arrayPostData['messages'][0]['text'] = "2703";
    }
else if($message == "2704"){
        $arrayPostData['messages'][0]['text'] = "2704";
    }
else if($message == "2705"){
        $arrayPostData['messages'][0]['text'] = "2705";
    }
else if($message == "2706"){
        $arrayPostData['messages'][0]['text'] = "2706";
    }
else if($message == "2707"){
        $arrayPostData['messages'][0]['text'] = "2707";
    }
else if($message == "2708"){
        $arrayPostData['messages'][0]['text'] = "2708";
    }
else if($message == "2709"){
        $arrayPostData['messages'][0]['text'] = "2709";
    }
else if($message == "2710"){
        $arrayPostData['messages'][0]['text'] = "2710";
    }
else if($message == "2711"){
        $arrayPostData['messages'][0]['text'] = "2711";
    }
else if($message == "2712"){
        $arrayPostData['messages'][0]['text'] = "2712";
    }
else if($message == "2713"){
        $arrayPostData['messages'][0]['text'] = "2713";
    }
else if($message == "2714"){
        $arrayPostData['messages'][0]['text'] = "2714";
    }
else if($message == "2715"){
        $arrayPostData['messages'][0]['text'] = "2715";
    }
else if($message == "2716"){
        $arrayPostData['messages'][0]['text'] = "2716";
    }
else if($message == "2717"){
        $arrayPostData['messages'][0]['text'] = "2717";
    }
else if($message == "2718"){
        $arrayPostData['messages'][0]['text'] = "2718";
    }
else if($message == "2719"){
        $arrayPostData['messages'][0]['text'] = "2719";
    }
else if($message == "2720"){
        $arrayPostData['messages'][0]['text'] = "2720";
    }
else if($message == "2721"){
        $arrayPostData['messages'][0]['text'] = "2721";
    }
else if($message == "2722"){
        $arrayPostData['messages'][0]['text'] = "2722";
    }
else if($message == "2723"){
        $arrayPostData['messages'][0]['text'] = "2723";
    }
else if($message == "2724"){
        $arrayPostData['messages'][0]['text'] = "2724";
    }
else if($message == "2725"){
        $arrayPostData['messages'][0]['text'] = "2725";
    }
else if($message == "2726"){
        $arrayPostData['messages'][0]['text'] = "2726";
    }
else if($message == "2727"){
        $arrayPostData['messages'][0]['text'] = "2727";
    }
else if($message == "2728"){
        $arrayPostData['messages'][0]['text'] = "2728";
    }
else if($message == "2729"){
        $arrayPostData['messages'][0]['text'] = "2729";
    }
else if($message == "2730"){
        $arrayPostData['messages'][0]['text'] = "2730";
    }
else if($message == "2731"){
        $arrayPostData['messages'][0]['text'] = "2731";
    }
else if($message == "2732"){
        $arrayPostData['messages'][0]['text'] = "2732";
    }
else if($message == "2733"){
        $arrayPostData['messages'][0]['text'] = "2733";
    }
else if($message == "2734"){
        $arrayPostData['messages'][0]['text'] = "2734";
    }
else if($message == "2735"){
        $arrayPostData['messages'][0]['text'] = "2735";
    }
else if($message == "2736"){
        $arrayPostData['messages'][0]['text'] = "2736";
    }
else if($message == "2737"){
        $arrayPostData['messages'][0]['text'] = "2737";
    }
else if($message == "2738"){
        $arrayPostData['messages'][0]['text'] = "2738";
    }
else if($message == "2739"){
        $arrayPostData['messages'][0]['text'] = "2739";
    }
else if($message == "2740"){
        $arrayPostData['messages'][0]['text'] = "2740";
    }
else if($message == "2741"){
        $arrayPostData['messages'][0]['text'] = "2741";
    }
else if($message == "2742"){
        $arrayPostData['messages'][0]['text'] = "2742";
    }
else if($message == "2743"){
        $arrayPostData['messages'][0]['text'] = "2743";
    }
else if($message == "2744"){
        $arrayPostData['messages'][0]['text'] = "2744";
    }
else if($message == "2745"){
        $arrayPostData['messages'][0]['text'] = "2745";
    }
else if($message == "2746"){
        $arrayPostData['messages'][0]['text'] = "2746";
    }
else if($message == "2747"){
        $arrayPostData['messages'][0]['text'] = "2747";
    }
else if($message == "2748"){
        $arrayPostData['messages'][0]['text'] = "2748";
    }
else if($message == "2749"){
        $arrayPostData['messages'][0]['text'] = "2749";
    }
else if($message == "2750"){
        $arrayPostData['messages'][0]['text'] = "2750";
    }
else if($message == "2751"){
        $arrayPostData['messages'][0]['text'] = "2751";
    }
else if($message == "2752"){
        $arrayPostData['messages'][0]['text'] = "2752";
    }
else if($message == "2753"){
        $arrayPostData['messages'][0]['text'] = "2753";
    }
else if($message == "2754"){
        $arrayPostData['messages'][0]['text'] = "2754";
    }
else if($message == "2755"){
        $arrayPostData['messages'][0]['text'] = "2755";
    }
else if($message == "2756"){
        $arrayPostData['messages'][0]['text'] = "2756";
    }
else if($message == "2757"){
        $arrayPostData['messages'][0]['text'] = "2757";
    }
else if($message == "2758"){
        $arrayPostData['messages'][0]['text'] = "2758";
    }
else if($message == "2759"){
        $arrayPostData['messages'][0]['text'] = "2759";
    }
else if($message == "2760"){
        $arrayPostData['messages'][0]['text'] = "2760";
    }
else if($message == "2761"){
        $arrayPostData['messages'][0]['text'] = "2761";
    }
else if($message == "2762"){
        $arrayPostData['messages'][0]['text'] = "2762";
    }
else if($message == "2763"){
        $arrayPostData['messages'][0]['text'] = "2763";
    }
else if($message == "2764"){
        $arrayPostData['messages'][0]['text'] = "2764";
    }
else if($message == "2765"){
        $arrayPostData['messages'][0]['text'] = "2765";
    }
else if($message == "2766"){
        $arrayPostData['messages'][0]['text'] = "2766";
    }
else if($message == "2767"){
        $arrayPostData['messages'][0]['text'] = "2767";
    }
else if($message == "2768"){
        $arrayPostData['messages'][0]['text'] = "2768";
    }
else if($message == "2769"){
        $arrayPostData['messages'][0]['text'] = "2769";
    }
else if($message == "2770"){
        $arrayPostData['messages'][0]['text'] = "2770";
    }
else if($message == "2771"){
        $arrayPostData['messages'][0]['text'] = "2771";
    }
else if($message == "2772"){
        $arrayPostData['messages'][0]['text'] = "2772";
    }
else if($message == "2773"){
        $arrayPostData['messages'][0]['text'] = "2773";
    }
else if($message == "2774"){
        $arrayPostData['messages'][0]['text'] = "2774";
    }
else if($message == "2775"){
        $arrayPostData['messages'][0]['text'] = "2775";
    }
else if($message == "2776"){
        $arrayPostData['messages'][0]['text'] = "2776";
    }
else if($message == "2777"){
        $arrayPostData['messages'][0]['text'] = "2777";
    }
else if($message == "2778"){
        $arrayPostData['messages'][0]['text'] = "2778";
    }
else if($message == "2779"){
        $arrayPostData['messages'][0]['text'] = "2779";
    }
else if($message == "2780"){
        $arrayPostData['messages'][0]['text'] = "2780";
    }
else if($message == "2781"){
        $arrayPostData['messages'][0]['text'] = "2781";
    }
else if($message == "2782"){
        $arrayPostData['messages'][0]['text'] = "2782";
    }
else if($message == "2783"){
        $arrayPostData['messages'][0]['text'] = "2783";
    }
else if($message == "2784"){
        $arrayPostData['messages'][0]['text'] = "2784";
    }
else if($message == "2785"){
        $arrayPostData['messages'][0]['text'] = "2785";
    }
else if($message == "2786"){
        $arrayPostData['messages'][0]['text'] = "2786";
    }
else if($message == "2787"){
        $arrayPostData['messages'][0]['text'] = "2787";
    }
else if($message == "2788"){
        $arrayPostData['messages'][0]['text'] = "2788";
    }
else if($message == "2789"){
        $arrayPostData['messages'][0]['text'] = "2789";
    }
else if($message == "2790"){
        $arrayPostData['messages'][0]['text'] = "2790";
    }
else if($message == "2791"){
        $arrayPostData['messages'][0]['text'] = "2791";
    }
else if($message == "2792"){
        $arrayPostData['messages'][0]['text'] = "2792";
    }
else if($message == "2793"){
        $arrayPostData['messages'][0]['text'] = "2793";
    }
else if($message == "2794"){
        $arrayPostData['messages'][0]['text'] = "2794";
    }
else if($message == "2795"){
        $arrayPostData['messages'][0]['text'] = "2795";
    }
else if($message == "2796"){
        $arrayPostData['messages'][0]['text'] = "2796";
    }
else if($message == "2797"){
        $arrayPostData['messages'][0]['text'] = "2797";
    }
else if($message == "2798"){
        $arrayPostData['messages'][0]['text'] = "2798";
    }
else if($message == "2799"){
        $arrayPostData['messages'][0]['text'] = "2799";
    }
else if($message == "2800"){
        $arrayPostData['messages'][0]['text'] = "2800";
    }
else if($message == "2801"){
        $arrayPostData['messages'][0]['text'] = "2801";
    }
else if($message == "2802"){
        $arrayPostData['messages'][0]['text'] = "2802";
    }
else if($message == "2803"){
        $arrayPostData['messages'][0]['text'] = "2803";
    }
else if($message == "2804"){
        $arrayPostData['messages'][0]['text'] = "2804";
    }
else if($message == "2805"){
        $arrayPostData['messages'][0]['text'] = "2805";
    }
else if($message == "2806"){
        $arrayPostData['messages'][0]['text'] = "2806";
    }
else if($message == "2807"){
        $arrayPostData['messages'][0]['text'] = "2807";
    }
else if($message == "2808"){
        $arrayPostData['messages'][0]['text'] = "2808";
    }
else if($message == "2809"){
        $arrayPostData['messages'][0]['text'] = "2809";
    }
else if($message == "2810"){
        $arrayPostData['messages'][0]['text'] = "2810";
    }
else if($message == "2811"){
        $arrayPostData['messages'][0]['text'] = "2811";
    }
else if($message == "2812"){
        $arrayPostData['messages'][0]['text'] = "2812";
    }
else if($message == "2813"){
        $arrayPostData['messages'][0]['text'] = "2813";
    }
else if($message == "2814"){
        $arrayPostData['messages'][0]['text'] = "2814";
    }
else if($message == "2815"){
        $arrayPostData['messages'][0]['text'] = "2815";
    }
else if($message == "2816"){
        $arrayPostData['messages'][0]['text'] = "2816";
    }
else if($message == "2817"){
        $arrayPostData['messages'][0]['text'] = "2817";
    }
else if($message == "2818"){
        $arrayPostData['messages'][0]['text'] = "2818";
    }
else if($message == "2819"){
        $arrayPostData['messages'][0]['text'] = "2819";
    }
else if($message == "2820"){
        $arrayPostData['messages'][0]['text'] = "2820";
    }
else if($message == "2821"){
        $arrayPostData['messages'][0]['text'] = "2821";
    }
else if($message == "2822"){
        $arrayPostData['messages'][0]['text'] = "2822";
    }
else if($message == "2823"){
        $arrayPostData['messages'][0]['text'] = "2823";
    }
else if($message == "2824"){
        $arrayPostData['messages'][0]['text'] = "2824";
    }
else if($message == "2825"){
        $arrayPostData['messages'][0]['text'] = "2825";
    }
else if($message == "2826"){
        $arrayPostData['messages'][0]['text'] = "2826";
    }
else if($message == "2827"){
        $arrayPostData['messages'][0]['text'] = "2827";
    }
else if($message == "2828"){
        $arrayPostData['messages'][0]['text'] = "2828";
    }
else if($message == "2829"){
        $arrayPostData['messages'][0]['text'] = "2829";
    }
else if($message == "2830"){
        $arrayPostData['messages'][0]['text'] = "2830";
    }
else if($message == "2831"){
        $arrayPostData['messages'][0]['text'] = "2831";
    }
else if($message == "2832"){
        $arrayPostData['messages'][0]['text'] = "2832";
    }
else if($message == "2833"){
        $arrayPostData['messages'][0]['text'] = "2833";
    }
else if($message == "2834"){
        $arrayPostData['messages'][0]['text'] = "2834";
    }
else if($message == "2835"){
        $arrayPostData['messages'][0]['text'] = "2835";
    }
else if($message == "2836"){
        $arrayPostData['messages'][0]['text'] = "2836";
    }
else if($message == "2837"){
        $arrayPostData['messages'][0]['text'] = "2837";
    }
else if($message == "2838"){
        $arrayPostData['messages'][0]['text'] = "2838";
    }
else if($message == "2839"){
        $arrayPostData['messages'][0]['text'] = "2839";
    }
else if($message == "2840"){
        $arrayPostData['messages'][0]['text'] = "2840";
    }
else if($message == "2841"){
        $arrayPostData['messages'][0]['text'] = "2841";
    }
else if($message == "2842"){
        $arrayPostData['messages'][0]['text'] = "2842";
    }
else if($message == "2843"){
        $arrayPostData['messages'][0]['text'] = "2843";
    }
else if($message == "2844"){
        $arrayPostData['messages'][0]['text'] = "2844";
    }
else if($message == "2845"){
        $arrayPostData['messages'][0]['text'] = "2845";
    }
else if($message == "2846"){
        $arrayPostData['messages'][0]['text'] = "2846";
    }
else if($message == "2847"){
        $arrayPostData['messages'][0]['text'] = "2847";
    }
else if($message == "2848"){
        $arrayPostData['messages'][0]['text'] = "2848";
    }
else if($message == "2849"){
        $arrayPostData['messages'][0]['text'] = "2849";
    }
else if($message == "2850"){
        $arrayPostData['messages'][0]['text'] = "2850";
    }
else if($message == "2851"){
        $arrayPostData['messages'][0]['text'] = "2851";
    }
else if($message == "2852"){
        $arrayPostData['messages'][0]['text'] = "2852";
    }
else if($message == "2853"){
        $arrayPostData['messages'][0]['text'] = "2853";
    }
else if($message == "2854"){
        $arrayPostData['messages'][0]['text'] = "2854";
    }
else if($message == "2855"){
        $arrayPostData['messages'][0]['text'] = "2855";
    }
else if($message == "2856"){
        $arrayPostData['messages'][0]['text'] = "2856";
    }
else if($message == "2857"){
        $arrayPostData['messages'][0]['text'] = "2857";
    }
else if($message == "2858"){
        $arrayPostData['messages'][0]['text'] = "2858";
    }
else if($message == "2859"){
        $arrayPostData['messages'][0]['text'] = "2859";
    }
else if($message == "2860"){
        $arrayPostData['messages'][0]['text'] = "2860";
    }
else if($message == "2861"){
        $arrayPostData['messages'][0]['text'] = "2861";
    }
else if($message == "2862"){
        $arrayPostData['messages'][0]['text'] = "2862";
    }
else if($message == "2863"){
        $arrayPostData['messages'][0]['text'] = "2863";
    }
else if($message == "2864"){
        $arrayPostData['messages'][0]['text'] = "2864";
    }
else if($message == "2865"){
        $arrayPostData['messages'][0]['text'] = "2865";
    }
else if($message == "2866"){
        $arrayPostData['messages'][0]['text'] = "2866";
    }
else if($message == "2867"){
        $arrayPostData['messages'][0]['text'] = "2867";
    }
else if($message == "2868"){
        $arrayPostData['messages'][0]['text'] = "2868";
    }
else if($message == "2869"){
        $arrayPostData['messages'][0]['text'] = "2869";
    }
else if($message == "2870"){
        $arrayPostData['messages'][0]['text'] = "2870";
    }
else if($message == "2871"){
        $arrayPostData['messages'][0]['text'] = "2871";
    }
else if($message == "2872"){
        $arrayPostData['messages'][0]['text'] = "2872";
    }
else if($message == "2873"){
        $arrayPostData['messages'][0]['text'] = "2873";
    }
else if($message == "2874"){
        $arrayPostData['messages'][0]['text'] = "2874";
    }
else if($message == "2875"){
        $arrayPostData['messages'][0]['text'] = "2875";
    }
else if($message == "2876"){
        $arrayPostData['messages'][0]['text'] = "2876";
    }
else if($message == "2877"){
        $arrayPostData['messages'][0]['text'] = "2877";
    }
else if($message == "2878"){
        $arrayPostData['messages'][0]['text'] = "2878";
    }
else if($message == "2879"){
        $arrayPostData['messages'][0]['text'] = "2879";
    }
else if($message == "2880"){
        $arrayPostData['messages'][0]['text'] = "2880";
    }
else if($message == "2881"){
        $arrayPostData['messages'][0]['text'] = "2881";
    }
else if($message == "2882"){
        $arrayPostData['messages'][0]['text'] = "2882";
    }
else if($message == "2883"){
        $arrayPostData['messages'][0]['text'] = "2883";
    }
else if($message == "2884"){
        $arrayPostData['messages'][0]['text'] = "2884";
    }
else if($message == "2885"){
        $arrayPostData['messages'][0]['text'] = "2885";
    }
else if($message == "2886"){
        $arrayPostData['messages'][0]['text'] = "2886";
    }
else if($message == "2887"){
        $arrayPostData['messages'][0]['text'] = "2887";
    }
else if($message == "2888"){
        $arrayPostData['messages'][0]['text'] = "2888";
    }
else if($message == "2889"){
        $arrayPostData['messages'][0]['text'] = "2889";
    }
else if($message == "2890"){
        $arrayPostData['messages'][0]['text'] = "2890";
    }
else if($message == "2891"){
        $arrayPostData['messages'][0]['text'] = "2891";
    }
else if($message == "2892"){
        $arrayPostData['messages'][0]['text'] = "2892";
    }
else if($message == "2893"){
        $arrayPostData['messages'][0]['text'] = "2893";
    }
else if($message == "2894"){
        $arrayPostData['messages'][0]['text'] = "2894";
    }
else if($message == "2895"){
        $arrayPostData['messages'][0]['text'] = "2895";
    }
else if($message == "2896"){
        $arrayPostData['messages'][0]['text'] = "2896";
    }
else if($message == "2897"){
        $arrayPostData['messages'][0]['text'] = "2897";
    }
else if($message == "2898"){
        $arrayPostData['messages'][0]['text'] = "2898";
    }
else if($message == "2899"){
        $arrayPostData['messages'][0]['text'] = "2899";
    }
else if($message == "2900"){
        $arrayPostData['messages'][0]['text'] = "2900";
    }
else if($message == "2901"){
        $arrayPostData['messages'][0]['text'] = "2901";
    }
else if($message == "2902"){
        $arrayPostData['messages'][0]['text'] = "2902";
    }
else if($message == "2903"){
        $arrayPostData['messages'][0]['text'] = "2903";
    }
else if($message == "2904"){
        $arrayPostData['messages'][0]['text'] = "2904";
    }
else if($message == "2905"){
        $arrayPostData['messages'][0]['text'] = "2905";
    }
else if($message == "2906"){
        $arrayPostData['messages'][0]['text'] = "2906";
    }
else if($message == "2907"){
        $arrayPostData['messages'][0]['text'] = "2907";
    }
else if($message == "2908"){
        $arrayPostData['messages'][0]['text'] = "2908";
    }
else if($message == "2909"){
        $arrayPostData['messages'][0]['text'] = "2909";
    }
else if($message == "2910"){
        $arrayPostData['messages'][0]['text'] = "2910";
    }
else if($message == "2911"){
        $arrayPostData['messages'][0]['text'] = "2911";
    }
else if($message == "2912"){
        $arrayPostData['messages'][0]['text'] = "2912";
    }
else if($message == "2913"){
        $arrayPostData['messages'][0]['text'] = "2913";
    }
else if($message == "2914"){
        $arrayPostData['messages'][0]['text'] = "2914";
    }
else if($message == "2915"){
        $arrayPostData['messages'][0]['text'] = "2915";
    }
else if($message == "2916"){
        $arrayPostData['messages'][0]['text'] = "2916";
    }
else if($message == "2917"){
        $arrayPostData['messages'][0]['text'] = "2917";
    }
else if($message == "2918"){
        $arrayPostData['messages'][0]['text'] = "2918";
    }
else if($message == "2919"){
        $arrayPostData['messages'][0]['text'] = "2919";
    }
else if($message == "2920"){
        $arrayPostData['messages'][0]['text'] = "2920";
    }
else if($message == "2921"){
        $arrayPostData['messages'][0]['text'] = "2921";
    }
else if($message == "2922"){
        $arrayPostData['messages'][0]['text'] = "2922";
    }
else if($message == "2923"){
        $arrayPostData['messages'][0]['text'] = "2923";
    }
else if($message == "2924"){
        $arrayPostData['messages'][0]['text'] = "2924";
    }
else if($message == "2925"){
        $arrayPostData['messages'][0]['text'] = "2925";
    }
else if($message == "2926"){
        $arrayPostData['messages'][0]['text'] = "2926";
    }
else if($message == "2927"){
        $arrayPostData['messages'][0]['text'] = "2927";
    }
else if($message == "2928"){
        $arrayPostData['messages'][0]['text'] = "2928";
    }
else if($message == "2929"){
        $arrayPostData['messages'][0]['text'] = "2929";
    }
else if($message == "2930"){
        $arrayPostData['messages'][0]['text'] = "2930";
    }
else if($message == "2931"){
        $arrayPostData['messages'][0]['text'] = "2931";
    }
else if($message == "2932"){
        $arrayPostData['messages'][0]['text'] = "2932";
    }
else if($message == "2933"){
        $arrayPostData['messages'][0]['text'] = "2933";
    }
else if($message == "2934"){
        $arrayPostData['messages'][0]['text'] = "2934";
    }
else if($message == "2935"){
        $arrayPostData['messages'][0]['text'] = "2935";
    }
else if($message == "2936"){
        $arrayPostData['messages'][0]['text'] = "2936";
    }
else if($message == "2937"){
        $arrayPostData['messages'][0]['text'] = "2937";
    }
else if($message == "2938"){
        $arrayPostData['messages'][0]['text'] = "2938";
    }
else if($message == "2939"){
        $arrayPostData['messages'][0]['text'] = "2939";
    }
else if($message == "2940"){
        $arrayPostData['messages'][0]['text'] = "2940";
    }
else if($message == "2941"){
        $arrayPostData['messages'][0]['text'] = "2941";
    }
else if($message == "2942"){
        $arrayPostData['messages'][0]['text'] = "2942";
    }
else if($message == "2943"){
        $arrayPostData['messages'][0]['text'] = "2943";
    }
else if($message == "2944"){
        $arrayPostData['messages'][0]['text'] = "2944";
    }
else if($message == "2945"){
        $arrayPostData['messages'][0]['text'] = "2945";
    }
else if($message == "2946"){
        $arrayPostData['messages'][0]['text'] = "2946";
    }
else if($message == "2947"){
        $arrayPostData['messages'][0]['text'] = "2947";
    }
else if($message == "2948"){
        $arrayPostData['messages'][0]['text'] = "2948";
    }
else if($message == "2949"){
        $arrayPostData['messages'][0]['text'] = "2949";
    }
else if($message == "2950"){
        $arrayPostData['messages'][0]['text'] = "2950";
    }
else if($message == "2951"){
        $arrayPostData['messages'][0]['text'] = "2951";
    }
else if($message == "2952"){
        $arrayPostData['messages'][0]['text'] = "2952";
    }
else if($message == "2953"){
        $arrayPostData['messages'][0]['text'] = "2953";
    }
else if($message == "2954"){
        $arrayPostData['messages'][0]['text'] = "2954";
    }
else if($message == "2955"){
        $arrayPostData['messages'][0]['text'] = "2955";
    }
else if($message == "2956"){
        $arrayPostData['messages'][0]['text'] = "2956";
    }
else if($message == "2957"){
        $arrayPostData['messages'][0]['text'] = "2957";
    }
else if($message == "2958"){
        $arrayPostData['messages'][0]['text'] = "2958";
    }
else if($message == "2959"){
        $arrayPostData['messages'][0]['text'] = "2959";
    }
else if($message == "2960"){
        $arrayPostData['messages'][0]['text'] = "2960";
    }
else if($message == "2961"){
        $arrayPostData['messages'][0]['text'] = "2961";
    }
else if($message == "2962"){
        $arrayPostData['messages'][0]['text'] = "2962";
    }
else if($message == "2963"){
        $arrayPostData['messages'][0]['text'] = "2963";
    }
else if($message == "2964"){
        $arrayPostData['messages'][0]['text'] = "2964";
    }
else if($message == "2965"){
        $arrayPostData['messages'][0]['text'] = "2965";
    }
else if($message == "2966"){
        $arrayPostData['messages'][0]['text'] = "2966";
    }
else if($message == "2967"){
        $arrayPostData['messages'][0]['text'] = "2967";
    }
else if($message == "2968"){
        $arrayPostData['messages'][0]['text'] = "2968";
    }
else if($message == "2969"){
        $arrayPostData['messages'][0]['text'] = "2969";
    }
else if($message == "2970"){
        $arrayPostData['messages'][0]['text'] = "2970";
    }
else if($message == "2971"){
        $arrayPostData['messages'][0]['text'] = "2971";
    }
else if($message == "2972"){
        $arrayPostData['messages'][0]['text'] = "2972";
    }
else if($message == "2973"){
        $arrayPostData['messages'][0]['text'] = "2973";
    }
else if($message == "2974"){
        $arrayPostData['messages'][0]['text'] = "2974";
    }
else if($message == "2975"){
        $arrayPostData['messages'][0]['text'] = "2975";
    }
else if($message == "2976"){
        $arrayPostData['messages'][0]['text'] = "2976";
    }
else if($message == "2977"){
        $arrayPostData['messages'][0]['text'] = "2977";
    }
else if($message == "2978"){
        $arrayPostData['messages'][0]['text'] = "2978";
    }
else if($message == "2979"){
        $arrayPostData['messages'][0]['text'] = "2979";
    }
else if($message == "2980"){
        $arrayPostData['messages'][0]['text'] = "2980";
    }
else if($message == "2981"){
        $arrayPostData['messages'][0]['text'] = "2981";
    }
else if($message == "2982"){
        $arrayPostData['messages'][0]['text'] = "2982";
    }
else if($message == "2983"){
        $arrayPostData['messages'][0]['text'] = "2983";
    }
else if($message == "2984"){
        $arrayPostData['messages'][0]['text'] = "2984";
    }
else if($message == "2985"){
        $arrayPostData['messages'][0]['text'] = "2985";
    }
else if($message == "2986"){
        $arrayPostData['messages'][0]['text'] = "2986";
    }
else if($message == "2987"){
        $arrayPostData['messages'][0]['text'] = "2987";
    }
else if($message == "2988"){
        $arrayPostData['messages'][0]['text'] = "2988";
    }
else if($message == "2989"){
        $arrayPostData['messages'][0]['text'] = "2989";
    }
else if($message == "2990"){
        $arrayPostData['messages'][0]['text'] = "2990";
    }
else if($message == "2991"){
        $arrayPostData['messages'][0]['text'] = "2991";
    }
else if($message == "2992"){
        $arrayPostData['messages'][0]['text'] = "2992";
    }
else if($message == "2993"){
        $arrayPostData['messages'][0]['text'] = "2993";
    }
else if($message == "2994"){
        $arrayPostData['messages'][0]['text'] = "2994";
    }
else if($message == "2995"){
        $arrayPostData['messages'][0]['text'] = "2995";
    }
else if($message == "2996"){
        $arrayPostData['messages'][0]['text'] = "2996";
    }
else if($message == "2997"){
        $arrayPostData['messages'][0]['text'] = "2997";
    }
else if($message == "2998"){
        $arrayPostData['messages'][0]['text'] = "2998";
    }
else if($message == "2999"){
        $arrayPostData['messages'][0]['text'] = "2999";
    }
else if($message == "3000"){
        $arrayPostData['messages'][0]['text'] = "3000";
    }
else if($message == "3001"){
        $arrayPostData['messages'][0]['text'] = "3001";
    }
else if($message == "3002"){
        $arrayPostData['messages'][0]['text'] = "3002";
    }
else if($message == "3003"){
        $arrayPostData['messages'][0]['text'] = "3003";
    }
else if($message == "3004"){
        $arrayPostData['messages'][0]['text'] = "3004";
    }
else if($message == "3005"){
        $arrayPostData['messages'][0]['text'] = "3005";
    }
else if($message == "3006"){
        $arrayPostData['messages'][0]['text'] = "3006";
    }
else if($message == "3007"){
        $arrayPostData['messages'][0]['text'] = "3007";
    }
else if($message == "3008"){
        $arrayPostData['messages'][0]['text'] = "3008";
    }
else if($message == "3009"){
        $arrayPostData['messages'][0]['text'] = "3009";
    }
else if($message == "3010"){
        $arrayPostData['messages'][0]['text'] = "3010";
    }
else if($message == "3011"){
        $arrayPostData['messages'][0]['text'] = "3011";
    }
else if($message == "3012"){
        $arrayPostData['messages'][0]['text'] = "3012";
    }
else if($message == "3013"){
        $arrayPostData['messages'][0]['text'] = "3013";
    }
else if($message == "3014"){
        $arrayPostData['messages'][0]['text'] = "3014";
    }
else if($message == "3015"){
        $arrayPostData['messages'][0]['text'] = "3015";
    }
else if($message == "3016"){
        $arrayPostData['messages'][0]['text'] = "3016";
    }
else if($message == "3017"){
        $arrayPostData['messages'][0]['text'] = "3017";
    }
else if($message == "3018"){
        $arrayPostData['messages'][0]['text'] = "3018";
    }
else if($message == "3019"){
        $arrayPostData['messages'][0]['text'] = "3019";
    }
else if($message == "3020"){
        $arrayPostData['messages'][0]['text'] = "3020";
    }
else if($message == "3021"){
        $arrayPostData['messages'][0]['text'] = "3021";
    }
else if($message == "3022"){
        $arrayPostData['messages'][0]['text'] = "3022";
    }
else if($message == "3023"){
        $arrayPostData['messages'][0]['text'] = "3023";
    }
else if($message == "3024"){
        $arrayPostData['messages'][0]['text'] = "3024";
    }
else if($message == "3025"){
        $arrayPostData['messages'][0]['text'] = "3025";
    }
else if($message == "3026"){
        $arrayPostData['messages'][0]['text'] = "3026";
    }
else if($message == "3027"){
        $arrayPostData['messages'][0]['text'] = "3027";
    }
else if($message == "3028"){
        $arrayPostData['messages'][0]['text'] = "3028";
    }
else if($message == "3029"){
        $arrayPostData['messages'][0]['text'] = "3029";
    }
else if($message == "3030"){
        $arrayPostData['messages'][0]['text'] = "3030";
    }
else if($message == "3031"){
        $arrayPostData['messages'][0]['text'] = "3031";
    }
else if($message == "3032"){
        $arrayPostData['messages'][0]['text'] = "3032";
    }
else if($message == "3033"){
        $arrayPostData['messages'][0]['text'] = "3033";
    }
else if($message == "3034"){
        $arrayPostData['messages'][0]['text'] = "3034";
    }
else if($message == "3035"){
        $arrayPostData['messages'][0]['text'] = "3035";
    }
else if($message == "3036"){
        $arrayPostData['messages'][0]['text'] = "3036";
    }
else if($message == "3037"){
        $arrayPostData['messages'][0]['text'] = "3037";
    }
else if($message == "3038"){
        $arrayPostData['messages'][0]['text'] = "3038";
    }
else if($message == "3039"){
        $arrayPostData['messages'][0]['text'] = "3039";
    }
else if($message == "3040"){
        $arrayPostData['messages'][0]['text'] = "3040";
    }
else if($message == "3041"){
        $arrayPostData['messages'][0]['text'] = "3041";
    }
else if($message == "3042"){
        $arrayPostData['messages'][0]['text'] = "3042";
    }
else if($message == "3043"){
        $arrayPostData['messages'][0]['text'] = "3043";
    }
else if($message == "3044"){
        $arrayPostData['messages'][0]['text'] = "3044";
    }
else if($message == "3045"){
        $arrayPostData['messages'][0]['text'] = "3045";
    }
else if($message == "3046"){
        $arrayPostData['messages'][0]['text'] = "3046";
    }
else if($message == "3047"){
        $arrayPostData['messages'][0]['text'] = "3047";
    }
else if($message == "3048"){
        $arrayPostData['messages'][0]['text'] = "3048";
    }
else if($message == "3049"){
        $arrayPostData['messages'][0]['text'] = "3049";
    }
else if($message == "3050"){
        $arrayPostData['messages'][0]['text'] = "3050";
    }
else if($message == "3051"){
        $arrayPostData['messages'][0]['text'] = "3051";
    }
else if($message == "3052"){
        $arrayPostData['messages'][0]['text'] = "3052";
    }
else if($message == "3053"){
        $arrayPostData['messages'][0]['text'] = "3053";
    }
else if($message == "3054"){
        $arrayPostData['messages'][0]['text'] = "3054";
    }
else if($message == "3055"){
        $arrayPostData['messages'][0]['text'] = "3055";
    }
else if($message == "3056"){
        $arrayPostData['messages'][0]['text'] = "3056";
    }
else if($message == "3057"){
        $arrayPostData['messages'][0]['text'] = "3057";
    }
else if($message == "3058"){
        $arrayPostData['messages'][0]['text'] = "3058";
    }
else if($message == "3059"){
        $arrayPostData['messages'][0]['text'] = "3059";
    }
else if($message == "3060"){
        $arrayPostData['messages'][0]['text'] = "3060";
    }
else if($message == "3061"){
        $arrayPostData['messages'][0]['text'] = "3061";
    }
else if($message == "3062"){
        $arrayPostData['messages'][0]['text'] = "3062";
    }
else if($message == "3063"){
        $arrayPostData['messages'][0]['text'] = "3063";
    }
else if($message == "3064"){
        $arrayPostData['messages'][0]['text'] = "3064";
    }
else if($message == "3065"){
        $arrayPostData['messages'][0]['text'] = "3065";
    }
else if($message == "3066"){
        $arrayPostData['messages'][0]['text'] = "3066";
    }
else if($message == "3067"){
        $arrayPostData['messages'][0]['text'] = "3067";
    }
else if($message == "3068"){
        $arrayPostData['messages'][0]['text'] = "3068";
    }
else if($message == "3069"){
        $arrayPostData['messages'][0]['text'] = "3069";
    }
else if($message == "3070"){
        $arrayPostData['messages'][0]['text'] = "3070";
    }
else if($message == "3071"){
        $arrayPostData['messages'][0]['text'] = "3071";
    }
else if($message == "3072"){
        $arrayPostData['messages'][0]['text'] = "3072";
    }
else if($message == "3073"){
        $arrayPostData['messages'][0]['text'] = "3073";
    }
else if($message == "3074"){
        $arrayPostData['messages'][0]['text'] = "3074";
    }
else if($message == "3075"){
        $arrayPostData['messages'][0]['text'] = "3075";
    }
else if($message == "3076"){
        $arrayPostData['messages'][0]['text'] = "3076";
    }
else if($message == "3077"){
        $arrayPostData['messages'][0]['text'] = "3077";
    }
else if($message == "3078"){
        $arrayPostData['messages'][0]['text'] = "3078";
    }
else if($message == "3079"){
        $arrayPostData['messages'][0]['text'] = "3079";
    }
else if($message == "3080"){
        $arrayPostData['messages'][0]['text'] = "3080";
    }
else if($message == "3081"){
        $arrayPostData['messages'][0]['text'] = "3081";
    }
else if($message == "3082"){
        $arrayPostData['messages'][0]['text'] = "3082";
    }
else if($message == "3083"){
        $arrayPostData['messages'][0]['text'] = "3083";
    }
else if($message == "3084"){
        $arrayPostData['messages'][0]['text'] = "3084";
    }
else if($message == "3085"){
        $arrayPostData['messages'][0]['text'] = "3085";
    }
else if($message == "3086"){
        $arrayPostData['messages'][0]['text'] = "3086";
    }
else if($message == "3087"){
        $arrayPostData['messages'][0]['text'] = "3087";
    }
else if($message == "3088"){
        $arrayPostData['messages'][0]['text'] = "3088";
    }
else if($message == "3089"){
        $arrayPostData['messages'][0]['text'] = "3089";
    }
else if($message == "3090"){
        $arrayPostData['messages'][0]['text'] = "3090";
    }
else if($message == "3091"){
        $arrayPostData['messages'][0]['text'] = "3091";
    }
else if($message == "3092"){
        $arrayPostData['messages'][0]['text'] = "3092";
    }
else if($message == "3093"){
        $arrayPostData['messages'][0]['text'] = "3093";
    }
else if($message == "3094"){
        $arrayPostData['messages'][0]['text'] = "3094";
    }
else if($message == "3095"){
        $arrayPostData['messages'][0]['text'] = "3095";
    }
else if($message == "3096"){
        $arrayPostData['messages'][0]['text'] = "3096";
    }
else if($message == "3097"){
        $arrayPostData['messages'][0]['text'] = "3097";
    }
else if($message == "3098"){
        $arrayPostData['messages'][0]['text'] = "3098";
    }
else if($message == "3099"){
        $arrayPostData['messages'][0]['text'] = "3099";
    }
else if($message == "3100"){
        $arrayPostData['messages'][0]['text'] = "3100";
    }
else if($message == "3101"){
        $arrayPostData['messages'][0]['text'] = "3101";
    }
else if($message == "3102"){
        $arrayPostData['messages'][0]['text'] = "3102";
    }
else if($message == "3103"){
        $arrayPostData['messages'][0]['text'] = "3103";
    }
else if($message == "3104"){
        $arrayPostData['messages'][0]['text'] = "3104";
    }
else if($message == "3105"){
        $arrayPostData['messages'][0]['text'] = "3105";
    }
else if($message == "3106"){
        $arrayPostData['messages'][0]['text'] = "3106";
    }
else if($message == "3107"){
        $arrayPostData['messages'][0]['text'] = "3107";
    }
else if($message == "3108"){
        $arrayPostData['messages'][0]['text'] = "3108";
    }
else if($message == "3109"){
        $arrayPostData['messages'][0]['text'] = "3109";
    }
else if($message == "3110"){
        $arrayPostData['messages'][0]['text'] = "3110";
    }
else if($message == "3111"){
        $arrayPostData['messages'][0]['text'] = "3111";
    }
else if($message == "3112"){
        $arrayPostData['messages'][0]['text'] = "3112";
    }
else if($message == "3113"){
        $arrayPostData['messages'][0]['text'] = "3113";
    }
else if($message == "3114"){
        $arrayPostData['messages'][0]['text'] = "3114";
    }
else if($message == "3115"){
        $arrayPostData['messages'][0]['text'] = "3115";
    }
else if($message == "3116"){
        $arrayPostData['messages'][0]['text'] = "3116";
    }
else if($message == "3117"){
        $arrayPostData['messages'][0]['text'] = "3117";
    }
else if($message == "3118"){
        $arrayPostData['messages'][0]['text'] = "3118";
    }
else if($message == "3119"){
        $arrayPostData['messages'][0]['text'] = "3119";
    }
else if($message == "3120"){
        $arrayPostData['messages'][0]['text'] = "3120";
    }
else if($message == "3121"){
        $arrayPostData['messages'][0]['text'] = "3121";
    }
else if($message == "3122"){
        $arrayPostData['messages'][0]['text'] = "3122";
    }
else if($message == "3123"){
        $arrayPostData['messages'][0]['text'] = "3123";
    }
else if($message == "3124"){
        $arrayPostData['messages'][0]['text'] = "3124";
    }
else if($message == "3125"){
        $arrayPostData['messages'][0]['text'] = "3125";
    }
else if($message == "3126"){
        $arrayPostData['messages'][0]['text'] = "3126";
    }
else if($message == "3127"){
        $arrayPostData['messages'][0]['text'] = "3127";
    }
else if($message == "3128"){
        $arrayPostData['messages'][0]['text'] = "3128";
    }
else if($message == "3129"){
        $arrayPostData['messages'][0]['text'] = "3129";
    }
else if($message == "3130"){
        $arrayPostData['messages'][0]['text'] = "3130";
    }
else if($message == "3131"){
        $arrayPostData['messages'][0]['text'] = "3131";
    }
else if($message == "3132"){
        $arrayPostData['messages'][0]['text'] = "3132";
    }
else if($message == "3133"){
        $arrayPostData['messages'][0]['text'] = "3133";
    }
else if($message == "3134"){
        $arrayPostData['messages'][0]['text'] = "3134";
    }
else if($message == "3135"){
        $arrayPostData['messages'][0]['text'] = "3135";
    }
else if($message == "3136"){
        $arrayPostData['messages'][0]['text'] = "3136";
    }
else if($message == "3137"){
        $arrayPostData['messages'][0]['text'] = "3137";
    }
else if($message == "3138"){
        $arrayPostData['messages'][0]['text'] = "3138";
    }
else if($message == "3139"){
        $arrayPostData['messages'][0]['text'] = "3139";
    }
else if($message == "3140"){
        $arrayPostData['messages'][0]['text'] = "3140";
    }
else if($message == "3141"){
        $arrayPostData['messages'][0]['text'] = "3141";
    }
else if($message == "3142"){
        $arrayPostData['messages'][0]['text'] = "3142";
    }
else if($message == "3143"){
        $arrayPostData['messages'][0]['text'] = "3143";
    }
else if($message == "3144"){
        $arrayPostData['messages'][0]['text'] = "3144";
    }
else if($message == "3145"){
        $arrayPostData['messages'][0]['text'] = "3145";
    }
else if($message == "3146"){
        $arrayPostData['messages'][0]['text'] = "3146";
    }
else if($message == "3147"){
        $arrayPostData['messages'][0]['text'] = "3147";
    }
else if($message == "3148"){
        $arrayPostData['messages'][0]['text'] = "3148";
    }
else if($message == "3149"){
        $arrayPostData['messages'][0]['text'] = "3149";
    }
else if($message == "3150"){
        $arrayPostData['messages'][0]['text'] = "3150";
    }
else if($message == "3151"){
        $arrayPostData['messages'][0]['text'] = "3151";
    }
else if($message == "3152"){
        $arrayPostData['messages'][0]['text'] = "3152";
    }
else if($message == "3153"){
        $arrayPostData['messages'][0]['text'] = "3153";
    }
else if($message == "3154"){
        $arrayPostData['messages'][0]['text'] = "3154";
    }
else if($message == "3155"){
        $arrayPostData['messages'][0]['text'] = "3155";
    }
else if($message == "3156"){
        $arrayPostData['messages'][0]['text'] = "3156";
    }
else if($message == "3157"){
        $arrayPostData['messages'][0]['text'] = "3157";
    }
else if($message == "3158"){
        $arrayPostData['messages'][0]['text'] = "3158";
    }
else if($message == "3159"){
        $arrayPostData['messages'][0]['text'] = "3159";
    }
else if($message == "3160"){
        $arrayPostData['messages'][0]['text'] = "3160";
    }
else if($message == "3161"){
        $arrayPostData['messages'][0]['text'] = "3161";
    }
else if($message == "3162"){
        $arrayPostData['messages'][0]['text'] = "3162";
    }
else if($message == "3163"){
        $arrayPostData['messages'][0]['text'] = "3163";
    }
else if($message == "3164"){
        $arrayPostData['messages'][0]['text'] = "3164";
    }
else if($message == "3165"){
        $arrayPostData['messages'][0]['text'] = "3165";
    }
else if($message == "3166"){
        $arrayPostData['messages'][0]['text'] = "3166";
    }
else if($message == "3167"){
        $arrayPostData['messages'][0]['text'] = "3167";
    }
else if($message == "3168"){
        $arrayPostData['messages'][0]['text'] = "3168";
    }
else if($message == "3169"){
        $arrayPostData['messages'][0]['text'] = "3169";
    }
else if($message == "3170"){
        $arrayPostData['messages'][0]['text'] = "3170";
    }
else if($message == "3171"){
        $arrayPostData['messages'][0]['text'] = "3171";
    }
else if($message == "3172"){
        $arrayPostData['messages'][0]['text'] = "3172";
    }
else if($message == "3173"){
        $arrayPostData['messages'][0]['text'] = "3173";
    }
else if($message == "3174"){
        $arrayPostData['messages'][0]['text'] = "3174";
    }
else if($message == "3175"){
        $arrayPostData['messages'][0]['text'] = "3175";
    }
else if($message == "3176"){
        $arrayPostData['messages'][0]['text'] = "3176";
    }
else if($message == "3177"){
        $arrayPostData['messages'][0]['text'] = "3177";
    }
else if($message == "3178"){
        $arrayPostData['messages'][0]['text'] = "3178";
    }
else if($message == "3179"){
        $arrayPostData['messages'][0]['text'] = "3179";
    }
else if($message == "3180"){
        $arrayPostData['messages'][0]['text'] = "3180";
    }
else if($message == "3181"){
        $arrayPostData['messages'][0]['text'] = "3181";
    }
else if($message == "3182"){
        $arrayPostData['messages'][0]['text'] = "3182";
    }
else if($message == "3183"){
        $arrayPostData['messages'][0]['text'] = "3183";
    }
else if($message == "3184"){
        $arrayPostData['messages'][0]['text'] = "3184";
    }
else if($message == "3185"){
        $arrayPostData['messages'][0]['text'] = "3185";
    }
else if($message == "3186"){
        $arrayPostData['messages'][0]['text'] = "3186";
    }
else if($message == "3187"){
        $arrayPostData['messages'][0]['text'] = "3187";
    }
else if($message == "3188"){
        $arrayPostData['messages'][0]['text'] = "3188";
    }
else if($message == "3189"){
        $arrayPostData['messages'][0]['text'] = "3189";
    }
else if($message == "3190"){
        $arrayPostData['messages'][0]['text'] = "3190";
    }
else if($message == "3191"){
        $arrayPostData['messages'][0]['text'] = "3191";
    }
else if($message == "3192"){
        $arrayPostData['messages'][0]['text'] = "3192";
    }
else if($message == "3193"){
        $arrayPostData['messages'][0]['text'] = "3193";
    }
else if($message == "3194"){
        $arrayPostData['messages'][0]['text'] = "3194";
    }
else if($message == "3195"){
        $arrayPostData['messages'][0]['text'] = "3195";
    }
else if($message == "3196"){
        $arrayPostData['messages'][0]['text'] = "3196";
    }
else if($message == "3197"){
        $arrayPostData['messages'][0]['text'] = "3197";
    }
else if($message == "3198"){
        $arrayPostData['messages'][0]['text'] = "3198";
    }
else if($message == "3199"){
        $arrayPostData['messages'][0]['text'] = "3199";
    }
else if($message == "3200"){
        $arrayPostData['messages'][0]['text'] = "3200";
    }
else if($message == "3201"){
        $arrayPostData['messages'][0]['text'] = "3201";
    }
else if($message == "3202"){
        $arrayPostData['messages'][0]['text'] = "3202";
    }
else if($message == "3203"){
        $arrayPostData['messages'][0]['text'] = "3203";
    }
else if($message == "3204"){
        $arrayPostData['messages'][0]['text'] = "3204";
    }
else if($message == "3205"){
        $arrayPostData['messages'][0]['text'] = "3205";
    }
else if($message == "3206"){
        $arrayPostData['messages'][0]['text'] = "3206";
    }
else if($message == "3207"){
        $arrayPostData['messages'][0]['text'] = "3207";
    }
else if($message == "3208"){
        $arrayPostData['messages'][0]['text'] = "3208";
    }
else if($message == "3209"){
        $arrayPostData['messages'][0]['text'] = "3209";
    }
else if($message == "3210"){
        $arrayPostData['messages'][0]['text'] = "3210";
    }
else if($message == "3211"){
        $arrayPostData['messages'][0]['text'] = "3211";
    }
else if($message == "3212"){
        $arrayPostData['messages'][0]['text'] = "3212";
    }
else if($message == "3213"){
        $arrayPostData['messages'][0]['text'] = "3213";
    }
else if($message == "3214"){
        $arrayPostData['messages'][0]['text'] = "3214";
    }
else if($message == "3215"){
        $arrayPostData['messages'][0]['text'] = "3215";
    }
else if($message == "3216"){
        $arrayPostData['messages'][0]['text'] = "3216";
    }
else if($message == "3217"){
        $arrayPostData['messages'][0]['text'] = "3217";
    }
else if($message == "3218"){
        $arrayPostData['messages'][0]['text'] = "3218";
    }
else if($message == "3219"){
        $arrayPostData['messages'][0]['text'] = "3219";
    }
else if($message == "3220"){
        $arrayPostData['messages'][0]['text'] = "3220";
    }
else if($message == "3221"){
        $arrayPostData['messages'][0]['text'] = "3221";
    }
else if($message == "3222"){
        $arrayPostData['messages'][0]['text'] = "3222";
    }
else if($message == "3223"){
        $arrayPostData['messages'][0]['text'] = "3223";
    }
else if($message == "3224"){
        $arrayPostData['messages'][0]['text'] = "3224";
    }
else if($message == "3225"){
        $arrayPostData['messages'][0]['text'] = "3225";
    }
else if($message == "3226"){
        $arrayPostData['messages'][0]['text'] = "3226";
    }
else if($message == "3227"){
        $arrayPostData['messages'][0]['text'] = "3227";
    }
else if($message == "3228"){
        $arrayPostData['messages'][0]['text'] = "3228";
    }
else if($message == "3229"){
        $arrayPostData['messages'][0]['text'] = "3229";
    }
else if($message == "3230"){
        $arrayPostData['messages'][0]['text'] = "3230";
    }
else if($message == "3231"){
        $arrayPostData['messages'][0]['text'] = "3231";
    }
else if($message == "3232"){
        $arrayPostData['messages'][0]['text'] = "3232";
    }
else if($message == "3233"){
        $arrayPostData['messages'][0]['text'] = "3233";
    }
else if($message == "3234"){
        $arrayPostData['messages'][0]['text'] = "3234";
    }
else if($message == "3235"){
        $arrayPostData['messages'][0]['text'] = "3235";
    }
else if($message == "3236"){
        $arrayPostData['messages'][0]['text'] = "3236";
    }
else if($message == "3237"){
        $arrayPostData['messages'][0]['text'] = "3237";
    }
else if($message == "3238"){
        $arrayPostData['messages'][0]['text'] = "3238";
    }
else if($message == "3239"){
        $arrayPostData['messages'][0]['text'] = "3239";
    }
else if($message == "3240"){
        $arrayPostData['messages'][0]['text'] = "3240";
    }
else if($message == "3241"){
        $arrayPostData['messages'][0]['text'] = "3241";
    }
else if($message == "3242"){
        $arrayPostData['messages'][0]['text'] = "3242";
    }
else if($message == "3243"){
        $arrayPostData['messages'][0]['text'] = "3243";
    }
else if($message == "3244"){
        $arrayPostData['messages'][0]['text'] = "3244";
    }
else if($message == "3245"){
        $arrayPostData['messages'][0]['text'] = "3245";
    }
else if($message == "3246"){
        $arrayPostData['messages'][0]['text'] = "3246";
    }
else if($message == "3247"){
        $arrayPostData['messages'][0]['text'] = "3247";
    }
else if($message == "3248"){
        $arrayPostData['messages'][0]['text'] = "3248";
    }
else if($message == "3249"){
        $arrayPostData['messages'][0]['text'] = "3249";
    }
else if($message == "3250"){
        $arrayPostData['messages'][0]['text'] = "3250";
    }
else if($message == "3251"){
        $arrayPostData['messages'][0]['text'] = "3251";
    }
else if($message == "3252"){
        $arrayPostData['messages'][0]['text'] = "3252";
    }
else if($message == "3253"){
        $arrayPostData['messages'][0]['text'] = "3253";
    }
else if($message == "3254"){
        $arrayPostData['messages'][0]['text'] = "3254";
    }
else if($message == "3255"){
        $arrayPostData['messages'][0]['text'] = "3255";
    }
else if($message == "3256"){
        $arrayPostData['messages'][0]['text'] = "3256";
    }
else if($message == "3257"){
        $arrayPostData['messages'][0]['text'] = "3257";
    }
else if($message == "3258"){
        $arrayPostData['messages'][0]['text'] = "3258";
    }
else if($message == "3259"){
        $arrayPostData['messages'][0]['text'] = "3259";
    }
else if($message == "3260"){
        $arrayPostData['messages'][0]['text'] = "3260";
    }
else if($message == "3261"){
        $arrayPostData['messages'][0]['text'] = "3261";
    }
else if($message == "3262"){
        $arrayPostData['messages'][0]['text'] = "3262";
    }
else if($message == "3263"){
        $arrayPostData['messages'][0]['text'] = "3263";
    }
else if($message == "3264"){
        $arrayPostData['messages'][0]['text'] = "3264";
    }
else if($message == "3265"){
        $arrayPostData['messages'][0]['text'] = "3265";
    }
else if($message == "3266"){
        $arrayPostData['messages'][0]['text'] = "3266";
    }
else if($message == "3267"){
        $arrayPostData['messages'][0]['text'] = "3267";
    }
else if($message == "3268"){
        $arrayPostData['messages'][0]['text'] = "3268";
    }
else if($message == "3269"){
        $arrayPostData['messages'][0]['text'] = "3269";
    }
else if($message == "3270"){
        $arrayPostData['messages'][0]['text'] = "3270";
    }
else if($message == "3271"){
        $arrayPostData['messages'][0]['text'] = "3271";
    }
else if($message == "3272"){
        $arrayPostData['messages'][0]['text'] = "3272";
    }
else if($message == "3273"){
        $arrayPostData['messages'][0]['text'] = "3273";
    }
else if($message == "3274"){
        $arrayPostData['messages'][0]['text'] = "3274";
    }
else if($message == "3275"){
        $arrayPostData['messages'][0]['text'] = "3275";
    }
else if($message == "3276"){
        $arrayPostData['messages'][0]['text'] = "3276";
    }
else if($message == "3277"){
        $arrayPostData['messages'][0]['text'] = "3277";
    }
else if($message == "3278"){
        $arrayPostData['messages'][0]['text'] = "3278";
    }
else if($message == "3279"){
        $arrayPostData['messages'][0]['text'] = "3279";
    }
else if($message == "3280"){
        $arrayPostData['messages'][0]['text'] = "3280";
    }
else if($message == "3281"){
        $arrayPostData['messages'][0]['text'] = "3281";
    }
else if($message == "3282"){
        $arrayPostData['messages'][0]['text'] = "3282";
    }
else if($message == "3283"){
        $arrayPostData['messages'][0]['text'] = "3283";
    }
else if($message == "3284"){
        $arrayPostData['messages'][0]['text'] = "3284";
    }
else if($message == "3285"){
        $arrayPostData['messages'][0]['text'] = "3285";
    }
else if($message == "3286"){
        $arrayPostData['messages'][0]['text'] = "3286";
    }
else if($message == "3287"){
        $arrayPostData['messages'][0]['text'] = "3287";
    }
else if($message == "3288"){
        $arrayPostData['messages'][0]['text'] = "3288";
    }
else if($message == "3289"){
        $arrayPostData['messages'][0]['text'] = "3289";
    }
else if($message == "3290"){
        $arrayPostData['messages'][0]['text'] = "3290";
    }
else if($message == "3291"){
        $arrayPostData['messages'][0]['text'] = "3291";
    }
else if($message == "3292"){
        $arrayPostData['messages'][0]['text'] = "3292";
    }
else if($message == "3293"){
        $arrayPostData['messages'][0]['text'] = "3293";
    }
else if($message == "3294"){
        $arrayPostData['messages'][0]['text'] = "3294";
    }
else if($message == "3295"){
        $arrayPostData['messages'][0]['text'] = "3295";
    }
else if($message == "3296"){
        $arrayPostData['messages'][0]['text'] = "3296";
    }
else if($message == "3297"){
        $arrayPostData['messages'][0]['text'] = "3297";
    }
else if($message == "3298"){
        $arrayPostData['messages'][0]['text'] = "3298";
    }
else if($message == "3299"){
        $arrayPostData['messages'][0]['text'] = "3299";
    }
else if($message == "3300"){
        $arrayPostData['messages'][0]['text'] = "3300";
    }
else if($message == "3301"){
        $arrayPostData['messages'][0]['text'] = "3301";
    }
else if($message == "3302"){
        $arrayPostData['messages'][0]['text'] = "3302";
    }
else if($message == "3303"){
        $arrayPostData['messages'][0]['text'] = "3303";
    }
else if($message == "3304"){
        $arrayPostData['messages'][0]['text'] = "3304";
    }
else if($message == "3305"){
        $arrayPostData['messages'][0]['text'] = "3305";
    }
else if($message == "3306"){
        $arrayPostData['messages'][0]['text'] = "3306";
    }
else if($message == "3307"){
        $arrayPostData['messages'][0]['text'] = "3307";
    }
else if($message == "3308"){
        $arrayPostData['messages'][0]['text'] = "3308";
    }
else if($message == "3309"){
        $arrayPostData['messages'][0]['text'] = "3309";
    }
else if($message == "3310"){
        $arrayPostData['messages'][0]['text'] = "3310";
    }
else if($message == "3311"){
        $arrayPostData['messages'][0]['text'] = "3311";
    }
else if($message == "3312"){
        $arrayPostData['messages'][0]['text'] = "3312";
    }
else if($message == "3313"){
        $arrayPostData['messages'][0]['text'] = "3313";
    }
else if($message == "3314"){
        $arrayPostData['messages'][0]['text'] = "3314";
    }
else if($message == "3315"){
        $arrayPostData['messages'][0]['text'] = "3315";
    }
else if($message == "3316"){
        $arrayPostData['messages'][0]['text'] = "3316";
    }
else if($message == "3317"){
        $arrayPostData['messages'][0]['text'] = "3317";
    }
else if($message == "3318"){
        $arrayPostData['messages'][0]['text'] = "3318";
    }
else if($message == "3319"){
        $arrayPostData['messages'][0]['text'] = "3319";
    }
else if($message == "3320"){
        $arrayPostData['messages'][0]['text'] = "3320";
    }
else if($message == "3321"){
        $arrayPostData['messages'][0]['text'] = "3321";
    }
else if($message == "3322"){
        $arrayPostData['messages'][0]['text'] = "3322";
    }
else if($message == "3323"){
        $arrayPostData['messages'][0]['text'] = "3323";
    }
else if($message == "3324"){
        $arrayPostData['messages'][0]['text'] = "3324";
    }
else if($message == "3325"){
        $arrayPostData['messages'][0]['text'] = "3325";
    }
else if($message == "3326"){
        $arrayPostData['messages'][0]['text'] = "3326";
    }
else if($message == "3327"){
        $arrayPostData['messages'][0]['text'] = "3327";
    }
else if($message == "3328"){
        $arrayPostData['messages'][0]['text'] = "3328";
    }
else if($message == "3329"){
        $arrayPostData['messages'][0]['text'] = "3329";
    }
else if($message == "3330"){
        $arrayPostData['messages'][0]['text'] = "3330";
    }
else if($message == "3331"){
        $arrayPostData['messages'][0]['text'] = "3331";
    }
else if($message == "3332"){
        $arrayPostData['messages'][0]['text'] = "3332";
    }
else if($message == "3333"){
        $arrayPostData['messages'][0]['text'] = "3333";
    }
else if($message == "3334"){
        $arrayPostData['messages'][0]['text'] = "3334";
    }
else if($message == "3335"){
        $arrayPostData['messages'][0]['text'] = "3335";
    }
else if($message == "3336"){
        $arrayPostData['messages'][0]['text'] = "3336";
    }
else if($message == "3337"){
        $arrayPostData['messages'][0]['text'] = "3337";
    }
else if($message == "3338"){
        $arrayPostData['messages'][0]['text'] = "3338";
    }
else if($message == "3339"){
        $arrayPostData['messages'][0]['text'] = "3339";
    }
else if($message == "3340"){
        $arrayPostData['messages'][0]['text'] = "3340";
    }
else if($message == "3341"){
        $arrayPostData['messages'][0]['text'] = "3341";
    }
else if($message == "3342"){
        $arrayPostData['messages'][0]['text'] = "3342";
    }
else if($message == "3343"){
        $arrayPostData['messages'][0]['text'] = "3343";
    }
else if($message == "3344"){
        $arrayPostData['messages'][0]['text'] = "3344";
    }
else if($message == "3345"){
        $arrayPostData['messages'][0]['text'] = "3345";
    }
else if($message == "3346"){
        $arrayPostData['messages'][0]['text'] = "3346";
    }
else if($message == "3347"){
        $arrayPostData['messages'][0]['text'] = "3347";
    }
else if($message == "3348"){
        $arrayPostData['messages'][0]['text'] = "3348";
    }
else if($message == "3349"){
        $arrayPostData['messages'][0]['text'] = "3349";
    }
else if($message == "3350"){
        $arrayPostData['messages'][0]['text'] = "3350";
    }
else if($message == "3351"){
        $arrayPostData['messages'][0]['text'] = "3351";
    }
else if($message == "3352"){
        $arrayPostData['messages'][0]['text'] = "3352";
    }
else if($message == "3353"){
        $arrayPostData['messages'][0]['text'] = "3353";
    }
else if($message == "3354"){
        $arrayPostData['messages'][0]['text'] = "3354";
    }
else if($message == "3355"){
        $arrayPostData['messages'][0]['text'] = "3355";
    }
else if($message == "3356"){
        $arrayPostData['messages'][0]['text'] = "3356";
    }
else if($message == "3357"){
        $arrayPostData['messages'][0]['text'] = "3357";
    }
else if($message == "3358"){
        $arrayPostData['messages'][0]['text'] = "3358";
    }
else if($message == "3359"){
        $arrayPostData['messages'][0]['text'] = "3359";
    }
else if($message == "3360"){
        $arrayPostData['messages'][0]['text'] = "3360";
    }
else if($message == "3361"){
        $arrayPostData['messages'][0]['text'] = "3361";
    }
else if($message == "3362"){
        $arrayPostData['messages'][0]['text'] = "3362";
    }
else if($message == "3363"){
        $arrayPostData['messages'][0]['text'] = "3363";
    }
else if($message == "3364"){
        $arrayPostData['messages'][0]['text'] = "3364";
    }
else if($message == "3365"){
        $arrayPostData['messages'][0]['text'] = "3365";
    }
else if($message == "3366"){
        $arrayPostData['messages'][0]['text'] = "3366";
    }
else if($message == "3367"){
        $arrayPostData['messages'][0]['text'] = "3367";
    }
else if($message == "3368"){
        $arrayPostData['messages'][0]['text'] = "3368";
    }
else if($message == "3369"){
        $arrayPostData['messages'][0]['text'] = "3369";
    }
else if($message == "3370"){
        $arrayPostData['messages'][0]['text'] = "3370";
    }
else if($message == "3371"){
        $arrayPostData['messages'][0]['text'] = "3371";
    }
else if($message == "3372"){
        $arrayPostData['messages'][0]['text'] = "3372";
    }
else if($message == "3373"){
        $arrayPostData['messages'][0]['text'] = "3373";
    }
else if($message == "3374"){
        $arrayPostData['messages'][0]['text'] = "3374";
    }
else if($message == "3375"){
        $arrayPostData['messages'][0]['text'] = "3375";
    }
else if($message == "3376"){
        $arrayPostData['messages'][0]['text'] = "3376";
    }
else if($message == "3377"){
        $arrayPostData['messages'][0]['text'] = "3377";
    }
else if($message == "3378"){
        $arrayPostData['messages'][0]['text'] = "3378";
    }
else if($message == "3379"){
        $arrayPostData['messages'][0]['text'] = "3379";
    }
else if($message == "3380"){
        $arrayPostData['messages'][0]['text'] = "3380";
    }
else if($message == "3381"){
        $arrayPostData['messages'][0]['text'] = "3381";
    }
else if($message == "3382"){
        $arrayPostData['messages'][0]['text'] = "3382";
    }
else if($message == "3383"){
        $arrayPostData['messages'][0]['text'] = "3383";
    }
else if($message == "3384"){
        $arrayPostData['messages'][0]['text'] = "3384";
    }
else if($message == "3385"){
        $arrayPostData['messages'][0]['text'] = "3385";
    }
else if($message == "3386"){
        $arrayPostData['messages'][0]['text'] = "3386";
    }
else if($message == "3387"){
        $arrayPostData['messages'][0]['text'] = "3387";
    }
else if($message == "3388"){
        $arrayPostData['messages'][0]['text'] = "3388";
    }
else if($message == "3389"){
        $arrayPostData['messages'][0]['text'] = "3389";
    }
else if($message == "3390"){
        $arrayPostData['messages'][0]['text'] = "3390";
    }
else if($message == "3391"){
        $arrayPostData['messages'][0]['text'] = "3391";
    }
else if($message == "3392"){
        $arrayPostData['messages'][0]['text'] = "3392";
    }
else if($message == "3393"){
        $arrayPostData['messages'][0]['text'] = "3393";
    }
else if($message == "3394"){
        $arrayPostData['messages'][0]['text'] = "3394";
    }
else if($message == "3395"){
        $arrayPostData['messages'][0]['text'] = "3395";
    }
else if($message == "3396"){
        $arrayPostData['messages'][0]['text'] = "3396";
    }
else if($message == "3397"){
        $arrayPostData['messages'][0]['text'] = "3397";
    }
else if($message == "3398"){
        $arrayPostData['messages'][0]['text'] = "3398";
    }
else if($message == "3399"){
        $arrayPostData['messages'][0]['text'] = "3399";
    }
else if($message == "3400"){
        $arrayPostData['messages'][0]['text'] = "3400";
    }
else if($message == "3401"){
        $arrayPostData['messages'][0]['text'] = "3401";
    }
else if($message == "3402"){
        $arrayPostData['messages'][0]['text'] = "3402";
    }
else if($message == "3403"){
        $arrayPostData['messages'][0]['text'] = "3403";
    }
else if($message == "3404"){
        $arrayPostData['messages'][0]['text'] = "3404";
    }
else if($message == "3405"){
        $arrayPostData['messages'][0]['text'] = "3405";
    }
else if($message == "3406"){
        $arrayPostData['messages'][0]['text'] = "3406";
    }
else if($message == "3407"){
        $arrayPostData['messages'][0]['text'] = "3407";
    }
else if($message == "3408"){
        $arrayPostData['messages'][0]['text'] = "3408";
    }
else if($message == "3409"){
        $arrayPostData['messages'][0]['text'] = "3409";
    }
else if($message == "3410"){
        $arrayPostData['messages'][0]['text'] = "3410";
    }
else if($message == "3411"){
        $arrayPostData['messages'][0]['text'] = "3411";
    }
else if($message == "3412"){
        $arrayPostData['messages'][0]['text'] = "3412";
    }
else if($message == "3413"){
        $arrayPostData['messages'][0]['text'] = "3413";
    }
else if($message == "3414"){
        $arrayPostData['messages'][0]['text'] = "3414";
    }
else if($message == "3415"){
        $arrayPostData['messages'][0]['text'] = "3415";
    }
else if($message == "3416"){
        $arrayPostData['messages'][0]['text'] = "3416";
    }
else if($message == "3417"){
        $arrayPostData['messages'][0]['text'] = "3417";
    }
else if($message == "3418"){
        $arrayPostData['messages'][0]['text'] = "3418";
    }
else if($message == "3419"){
        $arrayPostData['messages'][0]['text'] = "3419";
    }
else if($message == "3420"){
        $arrayPostData['messages'][0]['text'] = "3420";
    }
else if($message == "3421"){
        $arrayPostData['messages'][0]['text'] = "3421";
    }
else if($message == "3422"){
        $arrayPostData['messages'][0]['text'] = "3422";
    }
else if($message == "3423"){
        $arrayPostData['messages'][0]['text'] = "3423";
    }
else if($message == "3424"){
        $arrayPostData['messages'][0]['text'] = "3424";
    }
else if($message == "3425"){
        $arrayPostData['messages'][0]['text'] = "3425";
    }
else if($message == "3426"){
        $arrayPostData['messages'][0]['text'] = "3426";
    }
else if($message == "3427"){
        $arrayPostData['messages'][0]['text'] = "3427";
    }
else if($message == "3428"){
        $arrayPostData['messages'][0]['text'] = "3428";
    }
else if($message == "3429"){
        $arrayPostData['messages'][0]['text'] = "3429";
    }
else if($message == "3430"){
        $arrayPostData['messages'][0]['text'] = "3430";
    }
else if($message == "3431"){
        $arrayPostData['messages'][0]['text'] = "3431";
    }
else if($message == "3432"){
        $arrayPostData['messages'][0]['text'] = "3432";
    }
else if($message == "3433"){
        $arrayPostData['messages'][0]['text'] = "3433";
    }
else if($message == "3434"){
        $arrayPostData['messages'][0]['text'] = "3434";
    }
else if($message == "3435"){
        $arrayPostData['messages'][0]['text'] = "3435";
    }
else if($message == "3436"){
        $arrayPostData['messages'][0]['text'] = "3436";
    }
else if($message == "3437"){
        $arrayPostData['messages'][0]['text'] = "3437";
    }
else if($message == "3438"){
        $arrayPostData['messages'][0]['text'] = "3438";
    }
else if($message == "3439"){
        $arrayPostData['messages'][0]['text'] = "3439";
    }
else if($message == "3440"){
        $arrayPostData['messages'][0]['text'] = "3440";
    }
else if($message == "3441"){
        $arrayPostData['messages'][0]['text'] = "3441";
    }
else if($message == "3442"){
        $arrayPostData['messages'][0]['text'] = "3442";
    }
else if($message == "3443"){
        $arrayPostData['messages'][0]['text'] = "3443";
    }
else if($message == "3444"){
        $arrayPostData['messages'][0]['text'] = "3444";
    }
else if($message == "3445"){
        $arrayPostData['messages'][0]['text'] = "3445";
    }
else if($message == "3446"){
        $arrayPostData['messages'][0]['text'] = "3446";
    }
else if($message == "3447"){
        $arrayPostData['messages'][0]['text'] = "3447";
    }
else if($message == "3448"){
        $arrayPostData['messages'][0]['text'] = "3448";
    }
else if($message == "3449"){
        $arrayPostData['messages'][0]['text'] = "3449";
    }
else if($message == "3450"){
        $arrayPostData['messages'][0]['text'] = "3450";
    }
else if($message == "3451"){
        $arrayPostData['messages'][0]['text'] = "3451";
    }
else if($message == "3452"){
        $arrayPostData['messages'][0]['text'] = "3452";
    }
else if($message == "3453"){
        $arrayPostData['messages'][0]['text'] = "3453";
    }
else if($message == "3454"){
        $arrayPostData['messages'][0]['text'] = "3454";
    }
else if($message == "3455"){
        $arrayPostData['messages'][0]['text'] = "3455";
    }
else if($message == "3456"){
        $arrayPostData['messages'][0]['text'] = "3456";
    }
else if($message == "3457"){
        $arrayPostData['messages'][0]['text'] = "3457";
    }
else if($message == "3458"){
        $arrayPostData['messages'][0]['text'] = "3458";
    }
else if($message == "3459"){
        $arrayPostData['messages'][0]['text'] = "3459";
    }
else if($message == "3460"){
        $arrayPostData['messages'][0]['text'] = "3460";
    }
else if($message == "3461"){
        $arrayPostData['messages'][0]['text'] = "3461";
    }
else if($message == "3462"){
        $arrayPostData['messages'][0]['text'] = "3462";
    }
else if($message == "3463"){
        $arrayPostData['messages'][0]['text'] = "3463";
    }
else if($message == "3464"){
        $arrayPostData['messages'][0]['text'] = "3464";
    }
else if($message == "3465"){
        $arrayPostData['messages'][0]['text'] = "3465";
    }
else if($message == "3466"){
        $arrayPostData['messages'][0]['text'] = "3466";
    }
else if($message == "3467"){
        $arrayPostData['messages'][0]['text'] = "3467";
    }
else if($message == "3468"){
        $arrayPostData['messages'][0]['text'] = "3468";
    }
else if($message == "3469"){
        $arrayPostData['messages'][0]['text'] = "3469";
    }
else if($message == "3470"){
        $arrayPostData['messages'][0]['text'] = "3470";
    }
else if($message == "3471"){
        $arrayPostData['messages'][0]['text'] = "3471";
    }
else if($message == "3472"){
        $arrayPostData['messages'][0]['text'] = "3472";
    }
else if($message == "3473"){
        $arrayPostData['messages'][0]['text'] = "3473";
    }
else if($message == "3474"){
        $arrayPostData['messages'][0]['text'] = "3474";
    }
else if($message == "3475"){
        $arrayPostData['messages'][0]['text'] = "3475";
    }
else if($message == "3476"){
        $arrayPostData['messages'][0]['text'] = "3476";
    }
else if($message == "3477"){
        $arrayPostData['messages'][0]['text'] = "3477";
    }
else if($message == "3478"){
        $arrayPostData['messages'][0]['text'] = "3478";
    }
else if($message == "3479"){
        $arrayPostData['messages'][0]['text'] = "3479";
    }
else if($message == "3480"){
        $arrayPostData['messages'][0]['text'] = "3480";
    }
else if($message == "3481"){
        $arrayPostData['messages'][0]['text'] = "3481";
    }
else if($message == "3482"){
        $arrayPostData['messages'][0]['text'] = "3482";
    }
else if($message == "3483"){
        $arrayPostData['messages'][0]['text'] = "3483";
    }
else if($message == "3484"){
        $arrayPostData['messages'][0]['text'] = "3484";
    }
else if($message == "3485"){
        $arrayPostData['messages'][0]['text'] = "3485";
    }
else if($message == "3486"){
        $arrayPostData['messages'][0]['text'] = "3486";
    }
else if($message == "3487"){
        $arrayPostData['messages'][0]['text'] = "3487";
    }
else if($message == "3488"){
        $arrayPostData['messages'][0]['text'] = "3488";
    }
else if($message == "3489"){
        $arrayPostData['messages'][0]['text'] = "3489";
    }
else if($message == "3490"){
        $arrayPostData['messages'][0]['text'] = "3490";
    }
else if($message == "3491"){
        $arrayPostData['messages'][0]['text'] = "3491";
    }
else if($message == "3492"){
        $arrayPostData['messages'][0]['text'] = "3492";
    }
else if($message == "3493"){
        $arrayPostData['messages'][0]['text'] = "3493";
    }
else if($message == "3494"){
        $arrayPostData['messages'][0]['text'] = "3494";
    }
else if($message == "3495"){
        $arrayPostData['messages'][0]['text'] = "3495";
    }
else if($message == "3496"){
        $arrayPostData['messages'][0]['text'] = "3496";
    }
else if($message == "3497"){
        $arrayPostData['messages'][0]['text'] = "3497";
    }
else if($message == "3498"){
        $arrayPostData['messages'][0]['text'] = "3498";
    }
else if($message == "3499"){
        $arrayPostData['messages'][0]['text'] = "3499";
    }
else if($message == "3500"){
        $arrayPostData['messages'][0]['text'] = "3500";
    }
else if($message == "3501"){
        $arrayPostData['messages'][0]['text'] = "3501";
    }
else if($message == "3502"){
        $arrayPostData['messages'][0]['text'] = "3502";
    }
else if($message == "3503"){
        $arrayPostData['messages'][0]['text'] = "3503";
    }
else if($message == "3504"){
        $arrayPostData['messages'][0]['text'] = "3504";
    }
else if($message == "3505"){
        $arrayPostData['messages'][0]['text'] = "3505";
    }
else if($message == "3506"){
        $arrayPostData['messages'][0]['text'] = "3506";
    }
else if($message == "3507"){
        $arrayPostData['messages'][0]['text'] = "3507";
    }
else if($message == "3508"){
        $arrayPostData['messages'][0]['text'] = "3508";
    }
else if($message == "3509"){
        $arrayPostData['messages'][0]['text'] = "3509";
    }
else if($message == "3510"){
        $arrayPostData['messages'][0]['text'] = "3510";
    }
else if($message == "3511"){
        $arrayPostData['messages'][0]['text'] = "3511";
    }
else if($message == "3512"){
        $arrayPostData['messages'][0]['text'] = "3512";
    }
else if($message == "3513"){
        $arrayPostData['messages'][0]['text'] = "3513";
    }
else if($message == "3514"){
        $arrayPostData['messages'][0]['text'] = "3514";
    }
else if($message == "3515"){
        $arrayPostData['messages'][0]['text'] = "3515";
    }
else if($message == "3516"){
        $arrayPostData['messages'][0]['text'] = "3516";
    }
else if($message == "3517"){
        $arrayPostData['messages'][0]['text'] = "3517";
    }
else if($message == "3518"){
        $arrayPostData['messages'][0]['text'] = "3518";
    }
else if($message == "3519"){
        $arrayPostData['messages'][0]['text'] = "3519";
    }
else if($message == "3520"){
        $arrayPostData['messages'][0]['text'] = "3520";
    }
else if($message == "3521"){
        $arrayPostData['messages'][0]['text'] = "3521";
    }
else if($message == "3522"){
        $arrayPostData['messages'][0]['text'] = "3522";
    }
else if($message == "3523"){
        $arrayPostData['messages'][0]['text'] = "3523";
    }
else if($message == "3524"){
        $arrayPostData['messages'][0]['text'] = "3524";
    }
else if($message == "3525"){
        $arrayPostData['messages'][0]['text'] = "3525";
    }
else if($message == "3526"){
        $arrayPostData['messages'][0]['text'] = "3526";
    }
else if($message == "3527"){
        $arrayPostData['messages'][0]['text'] = "3527";
    }
else if($message == "3528"){
        $arrayPostData['messages'][0]['text'] = "3528";
    }
else if($message == "3529"){
        $arrayPostData['messages'][0]['text'] = "3529";
    }
else if($message == "3530"){
        $arrayPostData['messages'][0]['text'] = "3530";
    }
else if($message == "3531"){
        $arrayPostData['messages'][0]['text'] = "3531";
    }
else if($message == "3532"){
        $arrayPostData['messages'][0]['text'] = "3532";
    }
else if($message == "3533"){
        $arrayPostData['messages'][0]['text'] = "3533";
    }
else if($message == "3534"){
        $arrayPostData['messages'][0]['text'] = "3534";
    }
else if($message == "3535"){
        $arrayPostData['messages'][0]['text'] = "3535";
    }
else if($message == "3536"){
        $arrayPostData['messages'][0]['text'] = "3536";
    }
else if($message == "3537"){
        $arrayPostData['messages'][0]['text'] = "3537";
    }
else if($message == "3538"){
        $arrayPostData['messages'][0]['text'] = "3538";
    }
else if($message == "3539"){
        $arrayPostData['messages'][0]['text'] = "3539";
    }
else if($message == "3540"){
        $arrayPostData['messages'][0]['text'] = "3540";
    }
else if($message == "3541"){
        $arrayPostData['messages'][0]['text'] = "3541";
    }
else if($message == "3542"){
        $arrayPostData['messages'][0]['text'] = "3542";
    }
else if($message == "3543"){
        $arrayPostData['messages'][0]['text'] = "3543";
    }
else if($message == "3544"){
        $arrayPostData['messages'][0]['text'] = "3544";
    }
else if($message == "3545"){
        $arrayPostData['messages'][0]['text'] = "3545";
    }
else if($message == "3546"){
        $arrayPostData['messages'][0]['text'] = "3546";
    }
else if($message == "3547"){
        $arrayPostData['messages'][0]['text'] = "3547";
    }
else if($message == "3548"){
        $arrayPostData['messages'][0]['text'] = "3548";
    }
else if($message == "3549"){
        $arrayPostData['messages'][0]['text'] = "3549";
    }
else if($message == "3550"){
        $arrayPostData['messages'][0]['text'] = "3550";
    }
else if($message == "3551"){
        $arrayPostData['messages'][0]['text'] = "3551";
    }
else if($message == "3552"){
        $arrayPostData['messages'][0]['text'] = "3552";
    }
else if($message == "3553"){
        $arrayPostData['messages'][0]['text'] = "3553";
    }
else if($message == "3554"){
        $arrayPostData['messages'][0]['text'] = "3554";
    }
else if($message == "3555"){
        $arrayPostData['messages'][0]['text'] = "3555";
    }
else if($message == "3556"){
        $arrayPostData['messages'][0]['text'] = "3556";
    }
else if($message == "3557"){
        $arrayPostData['messages'][0]['text'] = "3557";
    }
else if($message == "3558"){
        $arrayPostData['messages'][0]['text'] = "3558";
    }
else if($message == "3559"){
        $arrayPostData['messages'][0]['text'] = "3559";
    }
else if($message == "3560"){
        $arrayPostData['messages'][0]['text'] = "3560";
    }
else if($message == "3561"){
        $arrayPostData['messages'][0]['text'] = "3561";
    }
else if($message == "3562"){
        $arrayPostData['messages'][0]['text'] = "3562";
    }
else if($message == "3563"){
        $arrayPostData['messages'][0]['text'] = "3563";
    }
else if($message == "3564"){
        $arrayPostData['messages'][0]['text'] = "3564";
    }
else if($message == "3565"){
        $arrayPostData['messages'][0]['text'] = "3565";
    }
else if($message == "3566"){
        $arrayPostData['messages'][0]['text'] = "3566";
    }
else if($message == "3567"){
        $arrayPostData['messages'][0]['text'] = "3567";
    }
else if($message == "3568"){
        $arrayPostData['messages'][0]['text'] = "3568";
    }
else if($message == "3569"){
        $arrayPostData['messages'][0]['text'] = "3569";
    }
else if($message == "3570"){
        $arrayPostData['messages'][0]['text'] = "3570";
    }
else if($message == "3571"){
        $arrayPostData['messages'][0]['text'] = "3571";
    }
else if($message == "3572"){
        $arrayPostData['messages'][0]['text'] = "3572";
    }
else if($message == "3573"){
        $arrayPostData['messages'][0]['text'] = "3573";
    }
else if($message == "3574"){
        $arrayPostData['messages'][0]['text'] = "3574";
    }
else if($message == "3575"){
        $arrayPostData['messages'][0]['text'] = "3575";
    }
else if($message == "3576"){
        $arrayPostData['messages'][0]['text'] = "3576";
    }
else if($message == "3577"){
        $arrayPostData['messages'][0]['text'] = "3577";
    }
else if($message == "3578"){
        $arrayPostData['messages'][0]['text'] = "3578";
    }
else if($message == "3579"){
        $arrayPostData['messages'][0]['text'] = "3579";
    }
else if($message == "3580"){
        $arrayPostData['messages'][0]['text'] = "3580";
    }
else if($message == "3581"){
        $arrayPostData['messages'][0]['text'] = "3581";
    }
else if($message == "3582"){
        $arrayPostData['messages'][0]['text'] = "3582";
    }
else if($message == "3583"){
        $arrayPostData['messages'][0]['text'] = "3583";
    }
else if($message == "3584"){
        $arrayPostData['messages'][0]['text'] = "3584";
    }
else if($message == "3585"){
        $arrayPostData['messages'][0]['text'] = "3585";
    }
else if($message == "3586"){
        $arrayPostData['messages'][0]['text'] = "3586";
    }
else if($message == "3587"){
        $arrayPostData['messages'][0]['text'] = "3587";
    }
else if($message == "3588"){
        $arrayPostData['messages'][0]['text'] = "3588";
    }
else if($message == "3589"){
        $arrayPostData['messages'][0]['text'] = "3589";
    }
else if($message == "3590"){
        $arrayPostData['messages'][0]['text'] = "3590";
    }
else if($message == "3591"){
        $arrayPostData['messages'][0]['text'] = "3591";
    }
else if($message == "3592"){
        $arrayPostData['messages'][0]['text'] = "3592";
    }
else if($message == "3593"){
        $arrayPostData['messages'][0]['text'] = "3593";
    }
else if($message == "3594"){
        $arrayPostData['messages'][0]['text'] = "3594";
    }
else if($message == "3595"){
        $arrayPostData['messages'][0]['text'] = "3595";
    }
else if($message == "3596"){
        $arrayPostData['messages'][0]['text'] = "3596";
    }
else if($message == "3597"){
        $arrayPostData['messages'][0]['text'] = "3597";
    }
else if($message == "3598"){
        $arrayPostData['messages'][0]['text'] = "3598";
    }
else if($message == "3599"){
        $arrayPostData['messages'][0]['text'] = "3599";
    }
else if($message == "3600"){
        $arrayPostData['messages'][0]['text'] = "3600";
    }
else if($message == "3601"){
        $arrayPostData['messages'][0]['text'] = "3601";
    }
else if($message == "3602"){
        $arrayPostData['messages'][0]['text'] = "3602";
    }
else if($message == "3603"){
        $arrayPostData['messages'][0]['text'] = "3603";
    }
else if($message == "3604"){
        $arrayPostData['messages'][0]['text'] = "3604";
    }
else if($message == "3605"){
        $arrayPostData['messages'][0]['text'] = "3605";
    }
else if($message == "3606"){
        $arrayPostData['messages'][0]['text'] = "3606";
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
