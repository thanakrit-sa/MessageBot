<?php

/* validate verify token needed for setting up web hook */ 
if (isset($_GET['hub_verify_token'])) { 
    if ($_GET['hub_verify_token'] === 'c4d2bc149e31843a21aea7c9db0fd840') {
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

    $url = 'https://graph.facebook.com/v2.6/me/messages?access_token=EAAGy9CJyURMBAKkLFcsaZCdn4n5bx3UtCwdPMrni4oUM8BxRC6EhcHbjWx2Q84TAVEmsdKTYjFqPDM6ZB7ZAd1Qca4cy7WVduxZBXdO7doix9WgViA5IfzNkEm2Ob3pkSg2DryZAbpjHEeIACTyFdZBBRQZCkdQ8ZC5f0tQ0S8ZCMqG7Lvjo7H8Gl';

    /*initialize curl*/
    $ch = curl_init($url);
    /*prepare response*/
    $jsonData = '{
    "recipient":{
        "id":"' . $sender . '"
        },
        "message":{
            "text":"You said, ' . $message . '"
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