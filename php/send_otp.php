<?php

// Start session   
session_start();

// Include database connection file

include_once('link.php');

// Send OTP to mobile Form post
if (isset($_POST['mobile'])) {

    $mobile = $link->real_escape_string($_POST['mobile']);
    $otp    = mt_rand(1111, 9999);
    $query  = "SELECT * FROM users WHERE mobile_number = '$mobile'";
    $result = $link->query($query);

    if ($result->num_rows > 0) {
        $link->query("UPDATE users SET otp = '$otp' WHERE mobile_number = '$mobile'");
        // Check mobile number is not empty than send OTP
        if (!empty($mobile)) {
            echo (sendSMS($mobile, $otp));
            $_SESSION['MOBILE'] = $mobile;
        }
        echo "yes";
    } else {
        echo "no";
    }
}


// Create a common function for send SMS
function sendSMS($mobile, $otp)
{
    $apiKey = urlencode('NmY1NDZjNjc1ODcxNzk2ODMwNGY3MjY0NDk0NDY4Njg=');
    // Message details
    $numbers = array($mobile);
    $sender = urlencode('TXTLCL');
    $message = rawurlencode('Your One Time Password is ' . $otp . ' for verification your account.');

    $numbers = implode(',', $numbers);

    // Prepare data for POST request
    $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

    // Send the POST request with cURL
    $ch = curl_init('https://api.textlocal.in/send/');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);


    return $response;
}
