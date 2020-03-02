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

if($messageText == "สวัสดีครับ") {

    $answer = ["attachment"=>[
        "type"=>"template",
        "payload"=>[
          "template_type"=>"button",
          "text"=>"ต้องการติดต่อเรื่องอะไร ?",
          "buttons"=>[
            [
              "type"=>"web_url",
              "url"=>"https://petersapparel.parseapp.com",
              "title"=>"รายละเอียดเพิ่มเติม"
            ],
            [
              "type"=>"text",
              "title"=>"Start Chatting",
              "payload"=>"fdsgfsdg"
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
?>