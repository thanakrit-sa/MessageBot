<?
$input = json_decode(file_get_contents('php://input'), true);
$sender = $input['entry'][0]['messaging'][0]['sender']['id'];
$message = $input['entry'][0]['messaging'][0]['message']['text'];
// $messageImage = $input['entry'][0]['messaging'][0]['message']['images'];
$messagePost = $input['entry'][0]['messaging'][0]['postback'];
$messagePayload = $input['entry'][0]['messaging'][0]['postback']['payload'];
$message = strtolower($message);

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
  }
}

$url = "https://graph.facebook.com/v2.6/me/messages?access_token=EAADSvg5yW7UBANe7bbVYSBFRjWjifAH695QMPPNKLNuniWZAwzMq6WuKYTsJPyUfBpiT8fmH2RZCM1JtFgW3UL9MSHRHNFO803SM1hJnXZCbeGUqhapYc8GbSWWDXVNZArY2aMuvQFtcLGOTVXLXAXEoDS1RVZCzHe2ZBrPe4oKOS78KmDgx9d";
$ch = curl_init($url);
$Data = $jsonData;
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $Data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);