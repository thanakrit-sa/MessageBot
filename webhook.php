
<?php

if (isset($_GET['hub_verify_token'])) {
  if ($_GET['hub_verify_token'] === 'aaa') {
    echo $_GET['hub_challenge'];
    return;
  } else {
    echo 'Invalid Verify Token';
    return;
  }
}

$input = json_decode(file_get_contents('php://input'), true);
if (isset($input['entry'][0]['messaging'][0]['sender']['id'])) {

  $sender = $input['entry'][0]['messaging'][0]['sender']['id'];
  $message = $input['entry'][0]['messaging'][0]['message']['text'];

  $url = 'https://graph.facebook.com/v2.6/me/messages?access_token=EAADSvg5yW7UBAE1bhcjwLo9sgiPEUSJoUmgXUh3fcNuopsKzFCIMYwBqiSMAZBiXUy0QkaPZB6G9y7kZBTekkS4ZAWvoNPXlAifV2V8M491DN3oWZCzW2B0dGuXxfnYVyNI21oZAeogYniQPcbPkRoLvb2zYdFEJ04RbjCp8EDxAZDZD';

  $ch = curl_init($url);
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
              "title":"Welcome!",
              "image_url":"https://petersfancybrownhats.com/company_image.png",
              "subtitle":"We have the right hat for everyone.",
              "default_action": {
                "type": "web_url",
                "url": "https://petersfancybrownhats.com/view?item=103",
                "messenger_extensions": false,
                "webview_height_ratio": "tall",
                "fallback_url": "https://petersfancybrownhats.com/"
              },
              "buttons":[
                {
                  "type":"web_url",
                  "url":"https://petersfancybrownhats.com",
                  "title":"View Website"
                },{
                  "type":"postback",
                  "title":"Start Chatting",
                  "payload":"DEVELOPER_DEFINED_PAYLOAD"
                }              
              ]      
            }
          ]
        }
      }
    }
  }';
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
  if (!empty($message)) {
    $result = curl_exec($ch);
  }
}

?>