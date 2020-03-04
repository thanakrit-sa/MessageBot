<?php


include 'config.php';
if ($_REQUEST['hub_verify_token'] === $hubVerifyToken) {
  echo $_REQUEST['hub_challenge'];
  exit;
}



$input = json_decode(file_get_contents('php://input'), true);
$senderId = $input['entry'][0]['messaging'][0]['sender']['id'];
$messageText = $input['entry'][0]['messaging'][0]['message']['text'];
$messagePost = $input['entry'][0]['messaging'][0]['postback'];
$messagePayload = $input['entry'][0]['messaging'][0]['postback']['payload'];
$response = null;
$count = 0;


if ($messageText != null) {
  if (strpos($messageText, "บัญชี")  == true || $messageText == "บัญชี" || strpos($messageText, "[yP=u")  == true || $messageText == "[yP=u") {
    $answer = ["attachment" => [
      "type" => "template",
      "payload" => [
        "template_type" => "generic",
        "elements" => [
          [
            "title" => "เปิดบัญชี",
            "item_url" => "https://www.google.com/?hl=th",
            "image_url" => "",
            "subtitle" => "กรุณาเลือกหัวข้อที่ต้องการ",
            "buttons" => [
              [
                "type" => "postback",
                "title" => "หัวข้อที่ 1",
                "payload" => "DEVELOPER_DEFINED_PAYLOAD"
              ],
              [
                "type" => "postback",
                "title" => "หัวข้อที่ 2",
                "payload" => "DEVELOPER_DEFINED_PAYLOAD"
              ],
              [
                "type" => "postback",
                "title" => "หัวข้อที่ 3",
                "payload" => "DEVELOPER_DEFINED_PAYLOAD"
              ],

            ],

          ]
        ]
      ]
    ]];
  } else if (strpos($messageText, "ปัญหา")  == true || $messageText == "ปัญหา" || strpos($messageText, "xyPsk")  == true || $messageText == "xyPsk") {
    $answer = ["attachment" => [
      "type" => "template",
      "payload" => [
        "template_type" => "generic",
        "elements" => [
          [
            "title" => "เปิดบัญชี",
            "item_url" => "https://www.google.com/?hl=th",
            "image_url" => "",
            "subtitle" => "กรุณาเลือกหัวข้อที่ต้องการ",
            "buttons" => [
              [
                "type" => "postback",
                "title" => "หัวข้อที่ 1",
                "payload" => "DEVELOPER_DEFINED_PAYLOAD"
              ],
              [
                "type" => "postback",
                "title" => "หัวข้อที่ 2",
                "payload" => "DEVELOPER_DEFINED_PAYLOAD"
              ],
              [
                "type" => "postback",
                "title" => "หัวข้อที่ 3",
                "payload" => "DEVELOPER_DEFINED_PAYLOAD"
              ],

            ],

          ]
        ]
      ]
    ]];
  } else {
    $answer = ["attachment" => [
      "type" => "template",
      "payload" => [
        "template_type" => "generic",
        "elements" => [
          [
            "title" => "เปิดบัญชี",
            "item_url" => "https://www.google.com/?hl=th",
            "image_url" => "",
            "subtitle" => "กรุณาเลือกหัวข้อที่ต้องการ",
            "buttons" => [
              [
                "type" => "postback",
                "title" => "หัวข้อที่ 1",
                "payload" => "DEVELOPER_DEFINED_PAYLOAD"
              ],
              [
                "type" => "postback",
                "title" => "หัวข้อที่ 2",
                "payload" => "DEVELOPER_DEFINED_PAYLOAD"
              ],
              [
                "type" => "postback",
                "title" => "หัวข้อที่ 3",
                "payload" => "DEVELOPER_DEFINED_PAYLOAD"
              ],

            ],

          ]
        ]
      ]
    ]];
  }
}
if ($messagePayload != null) {
  $answer = ["attachment" => [
    "type" => "template",
    "payload" => [
      "template_type" => "generic",
      "elements" => [
        [
          "title" => "เปิดบัญชี",
          "item_url" => "https://www.google.com/?hl=th",
          "image_url" => "",
          "subtitle" => "กรุณาเลือกหัวข้อที่ต้องการ",
          "buttons" => [
            [
              "type" => "postback",
              "title" => "หัวข้อที่ 1",
              "payload" => "DEVELOPER_DEFINED_PAYLOAD"
            ],
            [
              "type" => "postback",
              "title" => "หัวข้อที่ 2",
              "payload" => "DEVELOPER_DEFINED_PAYLOAD"
            ],
            [
              "type" => "postback",
              "title" => "หัวข้อที่ 3",
              "payload" => "DEVELOPER_DEFINED_PAYLOAD"
            ],

          ],

        ]
      ]
    ]
  ]];
}



$response = [
  'recipient' => ['id' => $senderId],
  'message' => $answer
];

$ch = curl_init('https://graph.facebook.com/v2.6/me/messages?access_token=' . $accessToken);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($response));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
if (!empty($input)) {
  $result = curl_exec($ch);
}
curl_close($ch);
