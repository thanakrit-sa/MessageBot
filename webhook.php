<?php
 include 'config.php';
if ($_REQUEST['hub_verify_token'] === $hubVerifyToken) {
  echo $_REQUEST['hub_challenge'];
  exit;
}

$input = json_decode(file_get_contents('php://input'), true);
$senderId = $input['entry'][0]['messaging'][0]['sender']['id'];
$messageText = $input['entry'][0]['messaging'][0]['message']['text'];
$response = null;

if($messageText == $messageText){
    $answer = ["attachment"=>[
     "type"=>"template",
     "payload"=>[
       "template_type"=>"generic",
       "elements"=>[
         [
           "title"=>"ยินดีต้องรับ",
           "item_url"=>"https://www.google.com/?hl=th",
           "image_url"=>"https://i0.wp.com/dgcasino.com/wp-content/uploads/2019/01/%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%A3%E0%B8%9A%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%A3%E0%B9%88%E0%B8%B2-dg-casino.jpg?resize=596%2C300",
           "subtitle"=>"กรุณาเลือกหัวข้อที่ต้องการ",
           "buttons"=>[
             [
                "type"=>"postback",
                "title"=>"เปิด Account",
                "payload"=>"DEVELOPER_DEFINED_PAYLOAD"
             ],
             [
               "type"=>"postback",
               "title"=>"แจ้งปัญหา",
               "payload"=>"DEVELOPER_DEFINED_PAYLOAD"
             ],                
             [
                "type"=>"postback",
               "title"=>"ติดต่อ",
               "payload"=>"DEVELOPER_DEFINED_PAYLOAD"
             ],
                   
            ],     
               
         ]
       ]
     ]
   ]];
}

$response = [
    'recipient' => [ 'id' => $senderId ],
    'message' => $answer
];

$ch = curl_init('https://graph.facebook.com/v2.6/me/messages?access_token='.$accessToken);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($response));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
if(!empty($input)){
$result = curl_exec($ch);
}
curl_close($ch);
