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

if ($messageText == "เปิดบัญชี") {
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
else if ($messageText !== null) {
    $answer = ["attachment" => [
        "type" => "vertical",
        "tag" => "generic",
        "elements" => [
          [
            "type" => "vertical",
            "elements" => [
              [
                "type" => "image",
                "url" => "https://i.pinimg.com/736x/a0/67/5e/a0675e5161d7ae5be2550987f397a641--flower-shops-paper-flowers.jpg",
                "tooltip" => "Flowers"
              ],
              [
                "type" => "text",
                "tag" => "title",
                "text" => "Birthday Bouquet",
                "tooltip" => "Title"
              ],
              [
                "type" => "text",
                "tag" => "subtitle",
                "text" => "Wild flowers",
                "tooltip" => "subtitle"
              ],
              [
                "type" => "button",
                "tooltip" => "publish text example",
                "title" => "publish text example",
                "click" => [
                  "actions" => [
                    [
                      "type" => "publishText",
                      "text" => "published text button tap"
                    ]
                  ]
                ]
              ],
              [
                "type" => "button",
                "tooltip" => "URL button example",
                "title" => "URL button example",
                "click" => [
                  "actions" => [
                    [
                      "type" => "link",
                      "name" => "URL button tap",
                      "uri" => "https://www.pinterest.com/lyndawhite/beautiful-flowers/"
                    ]
                  ]
                ]
              ],
              [
                "type" => "button",
                "title" => "Navigate",
                "click" => [
                     "actions" => [
                    [
                      "type" => "navigate",
                      "lo" => 40.7562,
                      "la" => -73.99861
                    ]
                  ]
                ]
              ]
            ]
          ]]]];
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
