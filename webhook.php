<?php
$access_token = "EAADSvg5yW7UBAOlAM97B4wgvIPPIl7Xyct1X2otLFz5drI6jfKZCvoepcZBcFtxaOZAk7GZCFGJRJbvmYFLNjXHwwCcwZAM2TULPSZBF7sdZBEdIZAXCXYW25YJNSMyuOlSZBhmIbZC91cab05cS59vCdQWy5aUr9cQ4JDPQVDoMRvvAZDZD";
$verify_token = "test";
$hub_verify_token = null;
if(isset($_REQUEST['hub_challenge'])) {
 $challenge = $_REQUEST['hub_challenge'];
 $hub_verify_token = $_REQUEST['hub_verify_token'];
}
if ($hub_verify_token === $verify_token) {
 echo $challenge;
}
$input = json_decode(file_get_contents('php://input'), true);
$sender = $input['entry'][0]['messaging'][0]['sender']['id'];
$message = $input['entry'][0]['messaging'][0]['message']['text'];
$message_to_reply = '';

$url = 'https://graph.facebook.com/v2.6/me/messages?access_token='.$access_token;
$ch = curl_init($url);
$jsonData = '{
    "recipient":{
        "id":"'.$sender.'"
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
$jsonDataEncoded = $jsonData;
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
if(!empty($input['entry'][0]['messaging'][0]['message'])){
    $result = curl_exec($ch);
}
?>