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
        "attachment": {
          "type": "template",
          "payload": {
             "template_type": "media",
             "elements": [
                {
                   "media_type": "image",
                   "url": "https://business.facebook.com/106357340974767/photos/pcb.128740035403164/128739975403170",
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
  } else if ($message == "ย้อนกลับสอบถาม") {
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
  } else if ($message == "โปรโมชั่น") {
    $jsonData = '{
      "recipient":{
        "id":"' . $sender . '"
      },
      "message": {
        "text":"ท่านสามารถเลือกหัวข้อที่ต้องการจะสอบถามได้ โดยมีหัวข้อดังนี้ \r\n \r\nหัวข้อที่ 1 โปรโมชั่นของแถม \r\nหัวข้อที่ 2 โปรโมชั่น 18+ \r\n \r\nเลือกตัวข้อโดยการคลิกที่แถบเมนูด้านล่าง",
        "quick_replies":[
          {
            "content_type":"text",
            "title":"โปรโมชั่น : หัวข้อ 1",
            "payload":"โปรโมชั่น : หัวข้อ 1",
          },
          {
            "content_type":"text",
            "title":"โปรโมชั่น : หัวข้อ 2",
            "payload":"โปรโมชั่น : หัวข้อ 2",
          },
          {
            "title":"ย้อนกลับสอบถาม",
            "content_type":"text",
            "payload": "ย้อนกลับสอบถาม",
          },
          {
            "content_type":"text",
            "title":"เมนูหลัก",
            "payload":"เมนูหลัก",
          }
        ]
      }
    }';
  } else if ($message == "กลุ่ม/สูตร") {
    $jsonData = '{
      "recipient":{
        "id":"' . $sender . '"
      },
      "message": {
        "text":"ท่านสามารถเลือกหัวข้อที่ต้องการจะสอบถามได้ โดยมีหัวข้อดังนี้ \r\n \r\nหัวข้อที่ 1 สูตรโกงบาคาร่า \r\nหัวข้อที่ 2 กลุ่มวิเคราะห์บอล \r\nหัวข้อที่ 3 กลุ่มนำเล่นบาคาร่า \r\nหัวข้อที่ 4 วิธีเข้าเล่นบาคาร่า \r\nหัวข้อที่ 5 วิธีการเข้าแทงบอล \r\n \r\nเลือกตัวข้อโดยการคลิกที่แถบเมนูด้านล่าง",
        "quick_replies":[
          {
            "content_type":"text",
            "title":"กลุ่ม : หัวข้อ 1",
            "payload":"กลุ่ม : หัวข้อ 1",
          },
          {
            "content_type":"text",
            "title":"กลุ่ม : หัวข้อ 2",
            "payload":"กลุ่ม : หัวข้อ 2",
          },
          {
            "content_type":"text",
            "title":"กลุ่ม : หัวข้อ 3",
            "payload":"กลุ่ม : หัวข้อ 3",
          },
          {
            "content_type":"text",
            "title":"กลุ่ม : หัวข้อ 4",
            "payload":"กลุ่ม : หัวข้อ 4",
          },
          {
            "content_type":"text",
            "title":"กลุ่ม : หัวข้อ 5",
            "payload":"กลุ่ม : หัวข้อ 5",
          },
          {
            "title":"ย้อนกลับสอบถาม",
            "content_type":"text",
            "payload": "ย้อนกลับสอบถาม",
          },
          {
            "content_type":"text",
            "title":"เมนูหลัก",
            "payload":"เมนูหลัก",
          }
        ]
      }
    }';
  } else if ($message == "เว็บไซต์") {
    $jsonData = '{
      "recipient":{
        "id":"' . $sender . '"
      },
      "message": {
        "text":"ท่านสามารถเลือกหัวข้อที่ต้องการจะสอบถามได้ โดยมีหัวข้อดังนี้ \r\n \r\nหัวข้อที่ 1 ภายในเว็บมีอะไรบ้าง \r\nหัวข้อที่ 2 วิธีเข้าหน้าเว็บ \r\n \r\nเลือกตัวข้อโดยการคลิกที่แถบเมนูด้านล่าง",
        "quick_replies":[
          {
            "content_type":"text",
            "title":"เว็บ : หัวข้อ 1",
            "payload":"เว็บ : หัวข้อ 1",
          },
          {
            "content_type":"text",
            "title":"เว็บ : หัวข้อ 2",
            "payload":"เว็บ : หัวข้อ 2",
          },
          {
            "title":"ย้อนกลับสอบถาม",
            "content_type":"text",
            "payload": "ย้อนกลับสอบถาม",
          },
          {
            "content_type":"text",
            "title":"เมนูหลัก",
            "payload":"เมนูหลัก",
          }
        ]
      }
    }';
  } else if ($message == "สอบถามเพิ่มเติม") {
    $jsonData = '{
      "recipient":{
        "id":"' . $sender . '"
      },
      "message": {
        "text":"ท่านสามารถเลือกหัวข้อที่ต้องการจะสอบถามได้ โดยมีหัวข้อดังนี้ \r\n \r\nหัวข้อที่ 1 ทำเทิร์นเท่าไหร่ \r\nหัวข้อที่ 2 ฝากถอนขั้นต่ำ \r\nหัวข้อที่ 3 ถอนได้กี่ครั้งต่อวัน \r\nหัวข้อที่ 4 วิธีฝากเงิน \r\nหัวข้อที่ 5 วิธีถอนเงิน \r\n \r\nเลือกตัวข้อโดยการคลิกที่แถบเมนูด้านล่าง",
        "quick_replies":[
          {
            "content_type":"text",
            "title":"เพิ่มเติม : หัวข้อ 1",
            "payload":"เพิ่มเติม : หัวข้อ 1",
          },
          {
            "content_type":"text",
            "title":"เพิ่มเติม : หัวข้อ 2",
            "payload":"เพิ่มเติม : หัวข้อ 2",
          },
          {
            "content_type":"text",
            "title":"เพิ่มเติม : หัวข้อ 3",
            "payload":"เพิ่มเติม : หัวข้อ 3",
          },
          {
            "content_type":"text",
            "title":"เพิ่มเติม : หัวข้อ 4",
            "payload":"เพิ่มเติม : หัวข้อ 4",
          },
          {
            "content_type":"text",
            "title":"เพิ่มเติม : หัวข้อ 5",
            "payload":"เพิ่มเติม : หัวข้อ 5",
          },
          {
            "title":"ย้อนกลับสอบถาม",
            "content_type":"text",
            "payload": "ย้อนกลับสอบถาม",
          },
          {
            "content_type":"text",
            "title":"เมนูหลัก",
            "payload":"เมนูหลัก",
          }
        ]
      }
    }';
  } else if ($message == "แจ้งปัญหา") {
    $jsonData = '{
      "recipient":{
        "id":"' . $sender . '"
      },
      "message": {
        "text":"ท่านสามารถเลือกหัวข้อที่ต้องการจะสอบถามได้ โดยมีหัวข้อดังนี้ \r\n \r\nหัวข้อที่ 1 ฝาก-ถอนไม่สำเร็จ \r\nหัวข้อที่ 2 เช็คว่าเคยสมัครไปรึยัง \r\nหัวข้อที่ 3 ลืมชื่อผู้ใช้-รหัสผ่าน \r\n \r\nเลือกตัวข้อโดยการคลิกที่แถบเมนูด้านล่าง",
        "quick_replies":[
          {
            "content_type":"text",
            "title":"ปัญหา : หัวข้อ 1",
            "payload":"ปัญหา : หัวข้อ 1",
          },
          {
            "content_type":"text",
            "title":"ปัญหา : หัวข้อ 2",
            "payload":"ปัญหา : หัวข้อ 2",
          },
          {
            "content_type":"text",
            "title":"ปัญหา : หัวข้อ 3",
            "payload":"ปัญหา : หัวข้อ 3",
          },
          {
            "title":"ย้อนกลับสอบถาม",
            "content_type":"text",
            "payload": "ย้อนกลับสอบถาม",
          },
          {
            "content_type":"text",
            "title":"เมนูหลัก",
            "payload":"เมนูหลัก",
          }
        ]
      }
    }';
  } else if ($message == "โปรโมชั่น : หัวข้อ 1") {
    $jsonData = '{
      "recipient":{
        "id":"' . $sender . '"
      },
      "message":{
        "attachment": {
          "type": "template",
          "payload": {
             "template_type": "media",
             "elements": [
                {
                   "media_type": "image",
                   "url": "https://business.facebook.com/106357340974767/photos/pcb.128740035403164/128739902069844",
                   "buttons": [
                    {
                      "title":"ย้อนกลับโปรโมชั่น",
                      "type":"postback",
                      "payload":"ย้อนกลับโปรโมชั่น"
                    },{
                      "title":"กลับเมนูหลัก",
                      "type":"postback",
                      "payload":"กลับเมนูหลัก"
                    }
                  ]
                }
             ]
          }
        }    
      }
    }';
  } else if ($message == "โปรโมชั่น : หัวข้อ 2") {
    $jsonData = '{
      "recipient":{
        "id":"' . $sender . '"
      },
      "message":{
        "attachment": {
          "type": "template",
          "payload": {
             "template_type": "media",
             "elements": [
                {
                   "media_type": "image",
                   "url": "https://business.facebook.com/106357340974767/photos/pcb.128740035403164/128739975403170",
                   "buttons": [
                    {
                      "title":"ย้อนกลับโปรโมชั่น",
                      "type":"postback",
                      "payload":"ย้อนกลับโปรโมชั่น"
                    },{
                      "title":"กลับเมนูหลัก",
                      "type":"postback",
                      "payload":"กลับเมนูหลัก"
                    }
                  ]
                }
              ]
          }
        }    
      }
    }';
  } else if ($message == "กลุ่ม : หัวข้อ 1") {
    $jsonData = '{
      "recipient":{
        "id":"' . $sender . '"
      },
      "message":{
        "attachment":{
          "type":"template",
          "payload":{
            "template_type":"button",
            "text":"สูตรโกงบาคาร่า \r\n \r\n - แจ้งชื่อผู้ใช้งานและสลิปการโอนเงิน \r\n _____________________________ \r\n \r\n",
            "buttons":[
              {
                "type":"web_url",
                "url":"https://www.google.com",
                "title":"สูตรบาคาร่า"
              },
              {
                "type":"postback",
                "payload":"ย้อนกลับกลุ่ม",
                "title":"ย้อนกลับกลุ่ม"
              },
              {
                "type":"postback",
                "payload":"เมนูหลัก",
                "title":"เมนูหลัก"
              },
              
            ]
          }
        }
      }
    }';
  } else if ($message == "กลุ่ม : หัวข้อ 2") {
    $jsonData = '{
      "recipient":{
        "id":"' . $sender . '"
      },
      "message":{
        "attachment":{
          "type":"template",
          "payload":{
            "template_type":"button",
            "text":"กลุ่มวิเคราะห์บอล \r\n \r\n - กลุ่มวิเคระห์บอลคลิกลิ้งเลยค่ะ \r\n _____________________________ \r\n \r\n",
            "buttons":[
              {
                "type":"web_url",
                "url":"https://www.google.com",
                "title":"กลุ่มวิเคราะห์บอล"
              },
              {
                "type":"postback",
                "payload":"ย้อนกลับกลุ่ม",
                "title":"ย้อนกลับกลุ่ม"
              },
              {
                "type":"postback",
                "payload":"เมนูหลัก",
                "title":"เมนูหลัก"
              },
              
            ]
          }
        }
      }
    }';
  } else if ($message == "กลุ่ม : หัวข้อ 3") {
    $jsonData = '{
      "recipient":{
        "id":"' . $sender . '"
      },
      "message":{
        "attachment":{
          "type":"template",
          "payload":{
            "template_type":"button",
            "text":"กลุ่มนำเล่นบาคาร่า \r\n \r\n - กลุ่มนำเล่นบาคาร่าคลิกลิ้งเลยค่ะ \r\n _____________________________ \r\n \r\n",
            "buttons":[
              {
                "type":"web_url",
                "url":"https://www.google.com",
                "title":"กลุ่มนำเล่นบาคาร่า"
              },
              {
                "type":"postback",
                "payload":"ย้อนกลับกลุ่ม",
                "title":"ย้อนกลับกลุ่ม"
              },
              {
                "type":"postback",
                "payload":"เมนูหลัก",
                "title":"เมนูหลัก"
              },
              
            ]
          }
        }
      }
    }';
  }  else if ($message == "กลุ่ม : หัวข้อ 4") {
    $jsonData = '{
      "recipient":{
        "id":"' . $sender . '"
      },
      "message":{
        "attachment":{
          "type":"template",
          "payload":{
            "template_type":"button",
            "text":"วิธีเข้าเล่นบาคาร่า \r\n \r\n - วิธีเข้าเล่นบาคาร่าคลิกลิ้งเลยค่ะ \r\n _____________________________ \r\n \r\n",
            "buttons":[
              {
                "type":"web_url",
                "url":"https://www.google.com",
                "title":"วิธีเข้าเล่นบาคาร่า"
              },
              {
                "type":"postback",
                "payload":"ย้อนกลับกลุ่ม",
                "title":"ย้อนกลับกลุ่ม"
              },
              {
                "type":"postback",
                "payload":"เมนูหลัก",
                "title":"เมนูหลัก"
              },
              
            ]
          }
        }
      }
    }';
  } else if ($message == "กลุ่ม : หัวข้อ 5") {
    $jsonData = '{
      "recipient":{
        "id":"' . $sender . '"
      },
      "message":{
        "attachment":{
          "type":"template",
          "payload":{
            "template_type":"button",
            "text":"วิธีการเข้าแทงบอล \r\n \r\n - วิธีการเข้าเล่นแทงบอลคลิกลิ้งเลยค่ะ \r\n _____________________________ \r\n \r\n",
            "buttons":[
              {
                "type":"web_url",
                "url":"https://www.google.com",
                "title":"วิธีการเข้าแทงบอล"
              },
              {
                "type":"postback",
                "payload":"ย้อนกลับกลุ่ม",
                "title":"ย้อนกลับกลุ่ม"
              },
              {
                "type":"postback",
                "payload":"เมนูหลัก",
                "title":"เมนูหลัก"
              },
              
            ]
          }
        }
      }
    }';
  } else if ($message == "เว็บ : หัวข้อ 1") {
    $jsonData = '{
      "recipient":{
        "id":"' . $sender . '"
      },
      "message":{
        "attachment":{
          "type":"template",
          "payload":{
            "template_type":"button",
            "text":"ภายในเว็บมีอะไรบ้าง \r\n \r\n _____________________________ \r\n \r\n - เล่นทุกอย่างได้ในยูสเดียว บอล มวย หวย คาสิโน เกม สล็อต มีให้เลือกเล่นครบวงจรค่ะ",
            "buttons":[
              {
                "type":"postback",
                "payload":"ย้อนกลับเว็บไซต๋์",
                "title":"ย้อนกลับเว็บไซต๋์"
              },
              {
                "type":"postback",
                "payload":"เมนูหลัก",
                "title":"เมนูหลัก"
              },
              
            ]
          }
        }
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
                          "title":"ย์เวิร์ดไม่เข้าเงื่อนไข 😍",
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
                      "subtitle":"ท่านสามารถเลือกเมนูที่ต้องการได้",
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
  } else if ($messagePayload == "ย้อนกลับโปรโมชั่น") {
    $jsonData = '{
      "recipient":{
        "id":"' . $sender . '"
      },
      "message": {
        "text":"ท่านสามารถเลือกหัวข้อที่ต้องการจะสอบถามได้ โดยมีหัวข้อดังนี้ \r\n \r\nหัวข้อที่ 1 โปรโมชั่นของแถม \r\nหัวข้อที่ 2 โปรโมชั่น 18+ \r\n \r\nเลือกตัวข้อโดยการคลิกที่แถบเมนูด้านล่าง",
        "quick_replies":[
          {
            "content_type":"text",
            "title":"โปรโมชั่น : หัวข้อ 1",
            "payload":"โปรโมชั่น : หัวข้อ 1",
          },
          {
            "content_type":"text",
            "title":"โปรโมชั่น : หัวข้อ 2",
            "payload":"โปรโมชั่น : หัวข้อ 2",
          },
          {
            "title":"ย้อนกลับสอบถาม",
            "content_type":"text",
            "payload": "ย้อนกลับสอบถาม",
          },
          {
            "content_type":"text",
            "title":"เมนูหลัก",
            "payload":"เมนูหลัก",
          }
        ]
      }
    }';
  } else if ($messagePayload == "ย้อนกลับกลุ่ม") {
    $jsonData = '{
      "recipient":{
        "id":"' . $sender . '"
      },
      "message": {
        "text":"ท่านสามารถเลือกหัวข้อที่ต้องการจะสอบถามได้ โดยมีหัวข้อดังนี้ \r\n \r\nหัวข้อที่ 1 สูตรโกงบาคาร่า \r\nหัวข้อที่ 2 กลุ่มวิเคราะห์บอล \r\nหัวข้อที่ 3 กลุ่มนำเล่นบาคาร่า \r\nหัวข้อที่ 4 วิธีเข้าเล่นบาคาร่า \r\nหัวข้อที่ 5 วิธีการเข้าแทงบอล \r\n \r\nเลือกตัวข้อโดยการคลิกที่แถบเมนูด้านล่าง",
        "quick_replies":[
          {
            "content_type":"text",
            "title":"กลุ่ม : หัวข้อ 1",
            "payload":"กลุ่ม : หัวข้อ 1",
          },
          {
            "content_type":"text",
            "title":"กลุ่ม : หัวข้อ 2",
            "payload":"กลุ่ม : หัวข้อ 2",
          },
          {
            "content_type":"text",
            "title":"กลุ่ม : หัวข้อ 3",
            "payload":"กลุ่ม : หัวข้อ 3",
          },
          {
            "content_type":"text",
            "title":"กลุ่ม : หัวข้อ 4",
            "payload":"กลุ่ม : หัวข้อ 4",
          },
          {
            "content_type":"text",
            "title":"กลุ่ม : หัวข้อ 5",
            "payload":"กลุ่ม : หัวข้อ 5",
          },
          {
            "title":"ย้อนกลับสอบถาม",
            "content_type":"text",
            "payload": "ย้อนกลับสอบถาม",
          },
          {
            "content_type":"text",
            "title":"เมนูหลัก",
            "payload":"เมนูหลัก",
          }
        ]
      }
    }';
  } else if ($messagePayload == "ย้อนกลับเว็บไซต์") {
    $jsonData = '{
      "recipient":{
        "id":"' . $sender . '"
      },
      "message": {
        "text":"ท่านสามารถเลือกหัวข้อที่ต้องการจะสอบถามได้ โดยมีหัวข้อดังนี้ \r\n \r\nหัวข้อที่ 1 ภายในเว็บมีอะไรบ้าง \r\nหัวข้อที่ 2 วิธีเข้าหน้าเว็บ \r\n \r\nเลือกตัวข้อโดยการคลิกที่แถบเมนูด้านล่าง",
        "quick_replies":[
          {
            "content_type":"text",
            "title":"เว็บ : หัวข้อ 1",
            "payload":"เว็บ : หัวข้อ 1",
          },
          {
            "content_type":"text",
            "title":"เว็บ : หัวข้อ 2",
            "payload":"เว็บ : หัวข้อ 2",
          },
          {
            "title":"ย้อนกลับสอบถาม",
            "content_type":"text",
            "payload": "ย้อนกลับสอบถาม",
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
      "attachment": {
        "type": "template",
        "payload": {
           "template_type": "media",
           "elements": [
              {
                 "media_type": "image",
                 "url": "https://business.facebook.com/106357340974767/photos/pcb.128740035403164/128739975403170",
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
