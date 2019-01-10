<?php
    $accessToken = "cTnKGPoV5We1pHUXDXJpRQGySzdPehWnp1DYJQwueVzwtOXONHFaKAs185kcpWV8T1Jivxv5xKrfWcGRyf9b1ARnLBYlMa4vuqntDdt4HC6pbgJgQ9XqzP52zyXefNnWbkdb0PJ1d7U2td3+qXivxwdB04t89/1O/w1cDnyilFU=";//copy Channel access token ตอนที่ตั้งค่ามาใส่
   $content = file_get_contents('php://input');
    $arrayJson = json_decode($content, true);
    
    $arrayHeader = array();
    $arrayHeader[] = "Content-Type: application/json";
    $arrayHeader[] = "Authorization: Bearer {$accessToken}";
    
    //รับข้อความจากผู้ใช้
    $message = $arrayJson['events'][0]['message']['text'];
#ตัวอย่าง Message Type "Text"
    if($message == "สวัสดี"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "สวัสดีจ้าาา";
        replyMsg($arrayHeader,$arrayPostData);
    }
else if($message == "BUN000099"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000099";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000216"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000216";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000231"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000231";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000100"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000100";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000140"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000140";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000354"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000354";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000217"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000217";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000355"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000355";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000215"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000215";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000216"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000216";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000356"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000356";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000357"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000357";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000128"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000128";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000232"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000232";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000263"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000263";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000141"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000141";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000232"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000232";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000262"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000262";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000090"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000090";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000281"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000281";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000281"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000281";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000282"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000282";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000358"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000358";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000367"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000367";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000366"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000366";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000282"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000282";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000060"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000060";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000362"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000362";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000283"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000283";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000358"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000358";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000060"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000060";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000360"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000360";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000359"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000359";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000090"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000090";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000360"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000360";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000361"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000361";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000363"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000363";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000364"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000364";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000362"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000362";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000363"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000363";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000364"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000364";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000284"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000284";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000365"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000365";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000366"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000366";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000367"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000367";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000368"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000368";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000284"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000284";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000368"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000368";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000369"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000369";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000369"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000369";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000370"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000370";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000371"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000371";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000024"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000024";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000027"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000027";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000029"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000029";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000091"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000091";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000025"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000025";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000049"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000049";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000118"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000118";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000024"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000024";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000092"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000092";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000029"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000029";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000091"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000091";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000093"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000093";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000117"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000117";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000027"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000027";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000092"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000092";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000372"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000372";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000270"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000270";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000129"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000129";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000285"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000285";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000052"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000052";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000374"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000374";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000048"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000048";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000051"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000051";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000094"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000094";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000049"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000049";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000048"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000048";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000050"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000050";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000120"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000120";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000051"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000051";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000053"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000053";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000119"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000119";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000050"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000050";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000052"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000052";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000053"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000053";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000093"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000093";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000121"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000121";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000120"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000120";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000121"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000121";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000117"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000117";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000118"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000118";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000094"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000094";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000119"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000119";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000129"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000129";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000373"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000373";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000372"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000372";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000373"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000373";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "BUN000374"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000374";
        replyMsg($arrayHeader,$arrayPostData);
    }

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
