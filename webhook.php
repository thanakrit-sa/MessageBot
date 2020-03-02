<?php
//Code to verify the website
$verify_token = $_GET['hub_verify_token'];
if (isset($verify_token)) {
 $challenge = $_GET['hub_challenge'];
 if ($verify_token == "verification_token") {
 print $challenge;
 } elseif ($verify_token != "verification_token") {
 print 'Error, wrong validation token';
 }
}
//Code to process requests
$postData = file_get_contents('php://input');
$postData = preg_replace('/"id":(\d+)/', '"id":"$1"', $postData); //Important - to prevent ID becoming a float
if(getMessage($postData)){
sendMessage(getSender($postData), "Echo: ".getMessage($postData));
}
function getMessage($input){
 $postdata = json_decode($input);
 return $postdata->entry[0]->messaging[0]->message->text;
}
function getSender($input){
 $postdata = json_decode($input);
 return $postdata->entry[0]->messaging[0]->sender->id;
}
function sendMessage($recipient, $textMessage) {
$token = 'EAAGy9CJyURMBAMPPo1vtbwIDTsmqTfjeBIvGal5h90J5oRVLfadZCZBDKlyFlGIPE1Dlkss9Pml92tMMUZBUeJeIFEWTyCWoGAjZB8WiXFlcsoR1tzlE7sYAm84hl7zMVVaJMixLZAOKq2Ex6KC9jZA9RgPG3aI4WNmK7xcwsjfv8xONkCRgo6';
 $json = '{
 "recipient":{"id":"' . $recipient . '"},
 "message":{
 "text":"' . $textMessage . '"
 }
}';
$options = array(
 'http' => array(
 'method' => 'POST',
 'content' => $json,
 'header' => "Content-Type: application/json\r\n" .
 "Accept: application/json\r\n"
 )
 );
 
 $url = 'https://graph.facebook.com/v2.6/me/messages?access_token=' . $token;
 $context = stream_context_create($options);
 $result = file_get_contents($url, false, $context);
 return $json;
}