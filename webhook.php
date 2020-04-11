<?php

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
  if ($message == "เมนูหลัก") {
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
  } else if ($message == "โปรโมชั่น") {
    $jsonData = '{
      "recipient":{
        "id":"' . $sender . '"
      },
      "message": {
        "text":"ท่านสามารถเลือกหัวข้อที่ต้องการจะสอบถามได้ โดยมีหัวข้อดังนี้ .\r\n. หัวข้อที่ 1 โปรโมชั่นของแถม"
      }
    }';
  }
  else {
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
                    {
                      "title":"Copa69 ขอบคุณค่ะ.",
                      "image_url":"https://s3-ap-southeast-1.amazonaws.com/img-in-th/e795977e4a5a3626526fe96c6f02b561.png",
                      "ท่านสามารถเลือกเมนูที่ต้องการได้",
                      "buttons":[
                        {
                          "title":"เมนูหลัก",
                          "type":"postback",
                          "payload":"เมนูหลัก"
                        },{
                          "title":"ติดต่อผู้ดูแล",
                          "type":"postback",
                          "payload":"ติดต่อผู้ดูแล"
                        }
                        ]      
                      }
                    
                    
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
        "text": "ท่านสามารถเลือกหัวข้อที่ต้องการสอบถามได้จากแถบเมนูด้านล่าง",
        "quick_replies":[
          {
            "content_type":"text",
            "title":"โปรโมชั่น",
            "payload":"โปรโมชั่น",
          },
          {
            "content_type":"text",
            "title":"กลุ่ม/สูตร",
            "payload":"กลุ่ม/สูตร",
          },
          {
            "content_type":"text",
            "title":"เว็บไซต์",
            "payload":"เว็บไซต์",
          },
          {
            "content_type":"text",
            "title":"สอบถามเพิ่มเติม",
            "payload":"สอบถามเพิ่มเติม",
          },
          {
            "content_type":"text",
            "title":"แจ้งปัญหา",
            "payload":"แจ้งปัญหา",
          },
          {
            "content_type":"text",
            "title":"เมนูหลัก",
            "payload":"เมนูหลัก",
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
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));


$result = curl_exec($ch);




echo "hi";
