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




//choosing an answer for a user
if ($messageText == "Hello") { //if there is a message from a user with the text “Hello”
   $menu_keyboard = [		//an array with buttons
       [
           "content_type" => "text",
           "title" => "I'm happy!",
           "payload" => "happy"
       ],
       [
           "content_type" => "text",
           "title" => "I'm sad!",
           "payload" => "sad"
       ]
   ];

   $data = array(				//message data
       'recipient' => array(
           'id' => $id				//user's ID
       ),
       'message' => array(
           'text' => "Hello my dear subscriber!",	//message text
           'quick_replies' => $menu_keyboard	//adding buttons to the messages
       )
   );

   send($data, $token);				//sending message

} elseif ($payload_quick == "happy") {  //if a user presses the button which has a payload ‘happy”
   $menu_keyboard = [
       [
           "content_type" => "text",
           "title" => "To start!",
           "payload" => "start"
       ]
   ];

   $data = array(
       'recipient' => array(
           'id' => $id
       ),
       'message' => array(
           'text' => "I'm happy too!",
           'quick_replies' => $menu_keyboard
       )
   );
   send($data, $token);

} elseif ($payload_quick == "sad") { 	//if a user presses the button which has a payload ‘sad”
   $menu_keyboard = [
       [
           "content_type" => "text",
           "title" => "To start!",
           "payload" => "start"
       ]
   ];

   $data = array(
       'recipient' => array(
           'id' => $id
       ),
       'message' => array(
           'text' => "I'm sad too!",
           'quick_replies' => $menu_keyboard

       )
   );
   send($data, $token);

} else { 				//the rest of cases
   $menu_keyboard = [
       [
           "content_type" => "text",
           "title" => "I'm happy!",
           "payload" => "happy"
       ],
       [
           "content_type" => "text",
           "title" => "I'm sad!",
           "payload" => "sad"
       ]
   ];

   $data = array(
       'recipient' => array(
           'id' => $id
       ),
       'message' => array(
           'text' => "I don't understand you :(",
           'quick_replies' => $menu_keyboard
       )
   );

   send($data, $token);
}
$ch = curl_init('https://graph.facebook.com/v2.6/me/messages?access_token=' . $accessToken);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($response));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
if (!empty($input)) {
  $result = curl_exec($ch);
}
curl_close($ch);
