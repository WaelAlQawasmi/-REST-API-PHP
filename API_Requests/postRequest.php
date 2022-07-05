<?php

 // initializes a cURL session
$ch = curl_init();
// url that you want to create Post request to it
$url = "https://reqres.in/api/users";

// the data theat you want to post it
$data_array = array(
    'name' => 'wael',
    'job' => 'web developer'
);
// http_build_query — Generate URL-encoded query string
$postHeder=http_build_query($data_array);

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postHeder);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// executes the started cURL session
$apiResponse = curl_exec($ch);

// if no error print the response
if ($e = curl_error($ch)) {
    echo $e;
} else {
 
 echo $apiResponse;
 
 
}

curl_close($ch);
