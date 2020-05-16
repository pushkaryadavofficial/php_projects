<?php

//Your authentication key
$authKey = "4187AFDl0tFG53ebc36e";

//Multiple mobiles numbers seperated by comma
$mobileNumber = "9772738942";

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "testid";

//Your message to send, Add URL endcoding here.
$message = urlencode("This is from code :)");

//Define route 
$route = "default";

/******   Fixed code **************/

//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
$url="http://sms.ssdindia.com/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));

//get response
$output = curl_exec($ch);

curl_close($ch);

/******   End of fixed code **************/

echo $output;
?>