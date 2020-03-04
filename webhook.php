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
                "payload" => "หัวข้อที่ 1"
              ],
              [
                "type" => "postback",
                "title" => "หัวข้อที่ 2",
                "payload" => "หัวข้อที่ 2"
              ],
              [
                "type" => "postback",
                "title" => "หัวข้อที่ 3",
                "payload" => "หัวข้อที่ 3"
              ],
            ],

          ]
        ]
      ]
    ]];
  } else if (strpos($messageText, "ปัญหา")  == true || $messageText == "ปัญหา" || strpos($messageText, "xyPsk")  == true || $messageText == "xyPsk" || strpos($messagePayload, "ปัญหา") == true) {
    $answer = ["attachment" => [
      "type" => "template",
      "payload" => [
        "template_type" => "generic",
        "elements" => [
          [
            "title" => "แจ้งปัญหา",
            "item_url" => "https://www.google.com/?hl=th",
            "image_url" => "",
            "subtitle" => "กรุณาเลือกหัวข้อที่ต้องการ",
            "buttons" => [
              [
                "type" => "postback",
                "title" => "หัวข้อที่ 1",
                "payload" => "หัวข้อที่ 1"
              ],
              [
                "type" => "postback",
                "title" => "หัวข้อที่ 2",
                "payload" => "หัวข้อที่ 2"
              ],
              [
                "type" => "postback",
                "title" => "หัวข้อที่ 3",
                "payload" => "หัวข้อที่ 3"
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
            "title" => "เมนูหลัก",
            "item_url" => "https://www.google.com/?hl=th",
            "image_url" => "https://www.biletium.com/wp-content/uploads/2019/09/109764-rdlnnfwoyl-1546592968.jpg",
            "subtitle" => "กรุณาเลือกหัวข้อที่ต้องการ..",
            "buttons" => [
              [
                "type" => "postback",
                "title" => "เปิดบัญชี",
                "payload" => "เปิดบัญชี"
              ],
              [
                "type" => "postback",
                "title" => "แจ้งปัญหา",
                "payload" => "แจ้งปัญหา"
              ],
              [
                "type" => "postback",
                "title" => "ติดต่อ",
                "payload" => "ติดต่อ"
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
          "title" => "เมนูหลัก",
          "item_url" => "https://www.google.com/?hl=th",
          "image_url" => "https://www.biletium.com/wp-content/uploads/2019/09/109764-rdlnnfwoyl-1546592968.jpg",
          "subtitle" => "กรุณาเลือกหัวข้อที่ต้องการ..",
          "buttons" => [
            [
              "type" => "postback",
              "title" => "เปิดบัญชี",
              "payload" => "เปิดบัญชี"
            ],
            [
              "type" => "postback",
              "title" => "แจ้งปัญหา",
              "payload" => "แจ้งปัญหา"
            ],
            [
              "type" => "postback",
              "title" => "ติดต่อ",
              "payload" => "ติดต่อ"
            ],

          ],

        ]
      ]
    ]
  ]];
} else if ($messagePayload == "หัวข้อที่ 1") {
  $answer = ["attachment" => [
    "type" => "template",
    "payload" => [
      "template_type" => "generic",
      "elements" => [
        [
          "title" => "หัวข้อที่ 1",
          "item_url" => "",
          "image_url" => "",
          "subtitle" => "รายละเอียดหัวข้อที่ 1",
          "buttons" => [
            [
              "type" => "postback",
              "title" => "ตัวเลือกที่ 1",
              "payload" => "ตัวเลือกที่ 1"
            ],
            [
              "type" => "postback",
              "title" => "ตัวเลือกที่ 2",
              "payload" => "ตัวเลือกที่ 2"
            ],
          ],

        ]
      ]
    ]
  ]];
} else if ($messagePayload == "เปิดบัญชี") {
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
              "payload" => "หัวข้อที่ 1"
            ],
            [
              "type" => "postback",
              "title" => "หัวข้อที่ 2",
              "payload" => "หัวข้อที่ 2"
            ],
            [
              "type" => "postback",
              "title" => "หัวข้อที่ 3",
              "payload" => "หัวข้อที่ 3"
            ],
          ],

        ]
      ]
    ]
  ]];
} else if ($messagePayload == "แจ้งปัญหา") {
  $answer = ["attachment" => [
    "type" => "template",
    "payload" => [
      "template_type" => "generic",
      "elements" => [
        [
          "title" => "แจ้งปัญหา",
          "item_url" => "https://www.google.com/?hl=th",
          "image_url" => "",
          "subtitle" => "กรุณาเลือกหัวข้อที่ต้องการ",
          "buttons" => [
            [
              "type" => "postback",
              "title" => "หัวข้อที่ 1",
              "payload" => "หัวข้อที่ 1"
            ],
            [
              "type" => "postback",
              "title" => "หัวข้อที่ 2",
              "payload" => "หัวข้อที่ 2"
            ],
            [
              "type" => "postback",
              "title" => "หัวข้อที่ 3",
              "payload" => "หัวข้อที่ 3"
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
