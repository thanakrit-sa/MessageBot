<?php

// include 'config.php';
// if ($_REQUEST['hub_verify_token'] === $hubVerifyToken) {
//   echo $_REQUEST['hub_challenge'];
//   exit;
// }



// $input = json_decode(file_get_contents('php://input'), true);
// $senderId = $input['entry'][0]['messaging'][0]['sender']['id'];
// $messageText = $input['entry'][0]['messaging'][0]['message']['text'];
// $messagePost = $input['entry'][0]['messaging'][0]['postback'];
// $messagePayload = $input['entry'][0]['messaging'][0]['postback']['payload'];
// $response = null;
// $count = 0;


// if ($messageText != null) {
//   if (strpos($messageText, "บัญชี")  == true || $messageText == "บัญชี" || strpos($messageText, "[yP=u")  == true || $messageText == "[yP=u") {
//     $answer = ["attachment"=>[
//       "type"=>"template",
//       "payload"=>[
//         "template_type"=>"generic",
//         "elements"=>[
//           [
//             "title"=>"Welcome to Peter\'s Hats",
//             "item_url"=>"https://www.cloudways.com/blog/migrate-symfony-from-cpanel-to-cloud-hosting/",
//             "image_url"=>"https://www.cloudways.com/blog/wp-content/uploads/Migrating-Your-Symfony-Website-To-Cloudways-Banner.jpg",
//             "subtitle"=>"We\'ve got the right hat for everyone.",
//             "buttons"=>[
//               [
//                 "type"=>"web_url",
//                 "url"=>"https://petersfancybrownhats.com",
//                 "title"=>"View Website"
//               ],
//               [
//                 "type"=>"postback",
//                 "title"=>"Start Chatting",
//                 "payload"=>"DEVELOPER_DEFINED_PAYLOAD"
//               ]              
//             ]
//           ]
//         ]
//       ]
//     ]];
// }
// elseif ($messageText == "test") {
//   $jsonData = '{
//     "recipient":{
//       "id":"'.$sender.'"
//     },
//     "message":{
//       "text":"bot menu:",
//       "quick_replies":[
//         {
//           "content_type":"text",
//           "title":"balance",
//           "payload":"DEVELOPER_DEFINED_PAYLOAD_FOR_PICKING_RED"
//         }
//       ]
//     }
//   }';
// }
// else if (strpos($messageText, "ปัญหา")  == true || $messageText == "ปัญหา" || strpos($messageText, "xyPsk")  == true || $messageText == "xyPsk" || strpos($messagePayload, "ปัญหา") == true) {
//   $answer = ["attachment"=>[
//     "type"=>"template",
//     "payload"=>[
//       "template_type"=>"list",
//       "elements"=>[
//         [
//            "title"=> "Classic T-Shirt Collection",
//                   "image_url"=> "https://www.cloudways.com/blog/wp-content/uploads/Migrating-Your-Symfony-Website-To-Cloudways-Banner.jpg",
//                   "subtitle"=> "See all our colors",
//                   "default_action"=> [
//                       "type"=> "web_url",
//                       "url"=> "https://www.cloudways.com/blog/migrate-symfony-from-cpanel-to-cloud-hosting/",                       
//                       "webview_height_ratio"=> "tall",
//                       // "messenger_extensions"=> true,
//                       // "fallback_url"=> "https://peterssendreceiveapp.ngrok.io/"
//                   ],
//           "buttons"=>[
//             [
//               "type"=>"web_url",
//               "url"=>"https://petersfancybrownhats.com",
//               "title"=>"View Website"
//             ],
//           ]
//         ],
//           [
//           "title"=>"Welcome to Peter\'s Hats",
//           "item_url"=>"https://www.cloudways.com/blog/migrate-symfony-from-cpanel-to-cloud-hosting/",
//           "image_url"=>"https://www.cloudways.com/blog/wp-content/uploads/Migrating-Your-Symfony-Website-To-Cloudways-Banner.jpg",
//           "subtitle"=>"We\'ve got the right hat for everyone.",
//           "buttons"=>[
//             [
//               "type"=>"web_url",
//               "url"=>"https://petersfancybrownhats.com",
//               "title"=>"View Website"
//             ],
//           ]
//         ],
//           [
//           "title"=>"Welcome to Peter\'s Hats",
//           "item_url"=>"https://www.cloudways.com/blog/migrate-symfony-from-cpanel-to-cloud-hosting/",
//           "image_url"=>"https://www.cloudways.com/blog/wp-content/uploads/Migrating-Your-Symfony-Website-To-Cloudways-Banner.jpg",
//           "subtitle"=>"We\'ve got the right hat for everyone.",
//           "buttons"=>[
//             [
//               "type"=>"web_url",
//               "url"=>"https://petersfancybrownhats.com",
//               "title"=>"View Website"
//             ],
//           ]
//         ]
//       ]
//     ]
//   ]];
//   } else {
//     $answer = ["attachment" => [
//       "type" => "template",
//       "payload" => [
//         "template_type" => "generic",
//         "elements" => [
//           [
//             "title" => "เมนูหลัก",
//             "item_url" => "https://www.google.com/?hl=th",
//             "image_url" => "https://www.biletium.com/wp-content/uploads/2019/09/109764-rdlnnfwoyl-1546592968.jpg",
//             "subtitle" => "กรุณาเลือกหัวข้อที่ต้องการ..",
//             "buttons" => [
//               [
//                 "type" => "postback",
//                 "title" => "เปิดบัญชี",
//                 "payload" => "เปิดบัญชี"
//               ],
//               [
//                 "type" => "postback",
//                 "title" => "แจ้งปัญหา",
//                 "payload" => "แจ้งปัญหา"
//               ],
//               [
//                 "type" => "postback",
//                 "title" => "ติดต่อ",
//                 "payload" => "ติดต่อ"
//               ]

//             ],

//           ]
//         ]
//       ]
//     ]];
//   }
// }
// if ($messagePayload != null) {
//   if ($messagePayload == "หัวข้อที่ 1") {
//     $answer = ["attachment" => [
//       "type" => "template",
//       "payload" => [
//         "template_type" => "generic",
//         "elements" => [
//           [
//             "title" => "หัวข้อที่ 1",
//             "item_url" => "",
//             "image_url" => "",
//             "subtitle" => "รายละเอียดหัวข้อที่ 1",
//             "buttons" => [
//               [
//                 "type" => "postback",
//                 "title" => "ตัวเลือกที่ 1",
//                 "payload" => "ตัวเลือกที่ 1"
//               ],
//               [
//                 "type" => "postback",
//                 "title" => "ตัวเลือกที่ 2",
//                 "payload" => "ตัวเลือกที่ 2"
//               ],
//             ],

//           ]
//         ]
//       ]
//     ]];
//   } else if ($messagePayload == "เปิดบัญชี") {
//     $answer = ["attachment" => [
//       "type" => "template",
//       "payload" => [
//         "template_type" => "generic",
//         "elements" => [
//           [
//             "title" => "เปิดบัญชี",
//             "item_url" => "https://www.google.com/?hl=th",
//             "image_url" => "",
//             "subtitle" => "กรุณาเลือกหัวข้อที่ต้องการ",
//             "buttons" => [
//               [
//                 "type" => "postback",
//                 "title" => "หัวข้อที่ 1",
//                 "payload" => "หัวข้อที่ 1"
//               ],
//               [
//                 "type" => "postback",
//                 "title" => "หัวข้อที่ 2",
//                 "payload" => "หัวข้อที่ 2"
//               ],
//               [
//                 "type" => "postback",
//                 "title" => "หัวข้อที่ 3",
//                 "payload" => "หัวข้อที่ 3"
//               ],
//             ],

//           ]
//         ]
//       ]
//     ]];
//   } else if ($messagePayload == "แจ้งปัญหา") {
//     $answer = ["attachment" => [
//       "type" => "template",
//       "payload" => [
//         "template_type" => "generic",
//         "elements" => [
//           [
//             "title" => "แจ้งปัญหา",
//             "item_url" => "https://www.google.com/?hl=th",
//             "image_url" => "",
//             "subtitle" => "กรุณาเลือกหัวข้อที่ต้องการ",
//             "buttons" => [
//               [
//                 "type" => "postback",
//                 "title" => "หัวข้อที่ 1",
//                 "payload" => "หัวข้อที่ 1"
//               ],
//               [
//                 "type" => "postback",
//                 "title" => "หัวข้อที่ 2",
//                 "payload" => "หัวข้อที่ 2"
//               ],
//               [
//                 "type" => "postback",
//                 "title" => "หัวข้อที่ 3",
//                 "payload" => "หัวข้อที่ 3"
//               ],
//             ],

//           ]
//         ]
//       ]
//     ]];
//   } else if ($messagePayload == "ตัวเลือกที่ 1") {
//     $answer = ["attachment" => [
//       "type" => "template",
//       "payload" => [
//         "template_type" => "generic",
//         "elements" => [
//           [
//             "title" => "ตัวเลือกที่ 1",
//             "item_url" => "",
//             "image_url" => "",
//             "subtitle" => "รายละเอียดตัวเลือกที่ 1",          

//           ]
//         ]
//       ]
//     ]];
//   } else {
//     $answer = ["attachment" => [
//       "type" => "template",
//       "payload" => [
//         "template_type" => "generic",
//         "elements" => [
//           [
//             "title" => "เมนูหลัก",
//             "item_url" => "https://www.google.com/?hl=th",
//             "image_url" => "https://www.biletium.com/wp-content/uploads/2019/09/109764-rdlnnfwoyl-1546592968.jpg",
//             "subtitle" => "กรุณาเลือกหัวข้อที่ต้องการ..",
//             "buttons" => [
//               [
//                 "type" => "postback",
//                 "title" => "เปิดบัญชี",
//                 "payload" => "เปิดบัญชี"
//               ],
//               [
//                 "type" => "postback",
//                 "title" => "แจ้งปัญหา",
//                 "payload" => "แจ้งปัญหา"
//               ],
//               [
//                 "type" => "postback",
//                 "title" => "ติดต่อ",
//                 "payload" => "ติดต่อ"
//               ],

//             ],

//           ]
//         ]
//       ]
//     ]];
//   }
// }



// $response = [
//   'recipient' => ['id' => $senderId],
//   'message' => $answer
// ];

$input = json_decode(file_get_contents('php://input'), true);
$sender = $input['entry'][0]['messaging'][0]['sender']['id'];
$message = $input['entry'][0]['messaging'][0]['message']['text'];
$messagePost = $input['entry'][0]['messaging'][0]['postback'];
$messagePayload = $input['entry'][0]['messaging'][0]['postback']['payload'];
$message = strtolower($message);



$url = "https://graph.facebook.com/v2.6/me/messages?access_token=EAADSvg5yW7UBAGyavqtG89YpW5Jep9Ul0lv0pZCZBAz3VZCjZBRQ0UfCHFgOot1K0hhLIGgR0XsW3xQ0SPAN6xBUoc4NZBOvOOZBZB0ESIC8RkCL601hovV8zX7FM5TKCCkCF4IZCUwxJqZAztEB5xUpoHocZCVuXrs26LBA4D6hlSrKjUQ6EtKsTx";

$ch = curl_init($url);

// ----------------------------------------------------------------------------------------------------------------------------- Message

if ($message != null) {
  if ($message == "ติดต่อ") {
  } else {
    $jsonData = '{
                "recipient":{
                  "id":"' . $sender . '"
                },
                "message":{
                  "attachment":{
                    "type":"template",
                    "payload":{
                      "template_type":"generic",
                      "elements":[
                        {
                          "title":"เกิดข้อผิดพลาด คีย์เวิร์ดไม่เข้าเงื่อนไข 😍",
                          "subtitle":"ท่านสามารถเลือกเมนูที่ต้องการได้เลยค่ะ",
                          "buttons":[
                            {
                              "title":"สอบถาม",
                              "type":"postback",
                              "payload":"สอบถาม"
                            },{
                              "title":"สมัครสมาชิก",
                              "type":"postback",
                              "payload":"สมัครสมาชิก"
                            },{
                              "title":"ติดต่อ",
                              "type":"postback",
                              "payload":"ติดต่อ"
                            }          
                            ]      
                          }
                          ]
                        }
                      }
                    }
                  }';
  }
}

// ----------------------------------------------------------------------------------------------------------------------------- Message
// ----------------------------------------------------------------------------------------------------------------------------- Payload

if ($messagePayload != null) {
  if ($messagePayload == "สมัครสมาชิก") {
    $jsonData = '{
    "recipient":{
      "id":"' . $sender . '"
    },
    "message":{
      "attachment":{
        "type":"template",
        "payload":{
          "template_type":"generic",
          "elements":[
            {
              "title":"โปรโมชั้นที่ 1",
              "image_url":"https://s3-ap-southeast-1.amazonaws.com/img-in-th/28cab9e87d7572552829c7a040c51775.png",
              "subtitle":"สมัครสมาชิก 1,000 รับฟรี Podไฟฟ้า หรือ หูฟังAirdots",
              
              "buttons":[
                {
                  "title":"โปรโมชั้นที่ 1",
                  "type":"postback",
                  "payload":"โปรโมชั้นที่ 1"
                }
                ]      
              },
              {
                "title":"โปรโมชั้นที่ 2",
                "image_url":"https://s3-ap-southeast-1.amazonaws.com/img-in-th/3fff3da2a574c47dd4941b379a784617.png",
                "subtitle":"สมัครสมาชิก 500 รับฟรี เสื้อฮู้ด หรือ หูฟัง P47 Wireless Headphones",
                
                "buttons":[
                  {
                    "title":"โปรโมชั้นที่ 2",
                    "type":"postback",
                    "payload":"Promotion 2"
                  }
                  ]      
                },
                {
                  "title":"โปรโมชั้นที่ 3",
                  "image_url":"https://s3-ap-southeast-1.amazonaws.com/img-in-th/cc2d248baeeff43c3360294536a184a4.png",
                  "subtitle":"สมัครสมาชิก 300 รับฟรี หูฟังบลูทูธ",
                  
                  "buttons":[
                    {
                      "title":"โปรโมชั้นที่ 3",
                      "type":"postback",
                      "payload":"โปรโมชั้นที่ 3"
                    }
                    ]      
                  },
                  {
                    "title":"โปรโมชั้นที่ 4",
                    "image_url":"https://s3-ap-southeast-1.amazonaws.com/img-in-th/ea0d45cc0e20adaf953227cb74bb4ece.png",
                    "subtitle":"สมัครสมาชิก 200 รับโบนัส 30%",
                    
                    "buttons":[
                      {
                        "title":"โปรโมชั้นที่ 4",
                        "type":"postback",
                        "payload":"โปรโมชั้นที่ 4"
                      }
                      ]      
                    },
                    
                    ]
                  }
                }
              }
            }';
  } else if ($messagePayload == "สอบถาม") {
    $jsonData = '{
      "recipient":{
        "id":"' . $sender . '"
      },
      "message":{
        "attachment":{
          "type":"template",
          "payload":{
            "template_type":"button",
            "text":"ท่านสามารถเลือกหัวข้อที่ต้องการสอบถามได้จากแถบเมนูด้านล่าง",
            "buttons":[
              {
                "title":"ย้อนกลับ",
                "type":"postback",
                "payload":"ย้อนกลับ"
              },
              {
                "title":"เมนูหลัก",
                "type":"postback",
                "payload":"เมนูหลัก"
              }
            ]
          }
        }
      },
      "message":{
        "text": "Pick a color:",
        "quick_replies":[
          {
            "content_type":"text",
            "title":"Red",
            "payload":"<POSTBACK_PAYLOAD>",
            "image_url":"http://example.com/img/red.png"
          },{
            "content_type":"text",
            "title":"Green",
            "payload":"<POSTBACK_PAYLOAD>",
            "image_url":"http://example.com/img/green.png"
          }
        ]
      }
    }';
  } else {
    $jsonData = '{
    "recipient":{
      "id":"' . $sender . '"
    },
    "message":{
      "attachment":{
        "type":"template",
        "payload":{
          "template_type":"generic",
          "elements":[
            {
              "title":"Copa69 สวัสดีค่ะ 😍",
              "subtitle":"ท่านสามารถเลือกเมนูที่ต้องการได้เลยค่ะ",
              "buttons":[
                {
                  "title":"สอบถาม",
                  "type":"postback",
                  "payload":"สอบถาม"
                },{
                  "title":"สมัครสมาชิก",
                  "type":"postback",
                  "payload":"สมัครสมาชิก"
                },{
                  "title":"ติดต่อ",
                  "type":"postback",
                  "payload":"ติดต่อ"
                }          
                ]      
              }
              ]
            }
          }
        }
      }';
  }
}

// ----------------------------------------------------------------------------------------------------------------------------- Payload










// $ch = curl_init('https://graph.facebook.com/v2.6/me/messages?access_token=' . $accessToken);

$Data = $jsonData;
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $Data);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);


$result = curl_exec($ch);




echo "hi";
