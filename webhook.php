
<?php

/* validate verify token needed for setting up web hook */
if (isset($_GET['hub_verify_token'])) {
  if ($_GET['hub_verify_token'] === 'aaa') {
    echo $_GET['hub_challenge'];
    return;
  } else {
    echo 'Invalid Verify Token';
    return;
  }
}

/* receive and send messages */
$input = json_decode(file_get_contents('php://input'), true);
if (isset($input['entry'][0]['messaging'][0]['sender']['id'])) {

  $sender = $input['entry'][0]['messaging'][0]['sender']['id']; //sender facebook id
  $message = $input['entry'][0]['messaging'][0]['message']['text']; //text that user sent

  $url = 'https://graph.facebook.com/v2.6/me/messages?access_token=EAADSvg5yW7UBAB0ZBReBydfiXS7EksFOdphUlxj9XA5KO6cUwZA0AoUmO9J8gbGmk4Rj8qodsNb46qq3E7qYLZA9jhdiQ9OFDiRvFl6XBKDitVqjXpfjMZB0VZCV2zZCLjemlT1g2IhdwD1NC1Co0cFuFiDpGQZBqFxZBnAZChRZCjZCYMeDPQJWogm';

  /*initialize curl*/
  $ch = curl_init($url);
  /*prepare response*/
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
  /* curl setting to send a json post data */
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
  if (!empty($message)) {
    $result = curl_exec($ch); // user will get the message
  }
}

?>