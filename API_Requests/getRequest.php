<?php
//cURL is a library that lets you make HTTP requests in PHP

$ch = curl_init();
// From URL to get  request.
$url = "https://reqres.in/api/users?page=2";


//grab URL and pass it to the variable.
curl_setopt($ch, CURLOPT_URL, $url);
// Return Page contents.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//execute request and return
$result = curl_exec($ch);

if ($e = curl_error($ch)) {
} else {
    $data = json_decode($result);
    //  to get the first_name in the array of "data" parameter
    foreach ($data->data as $value) {
        $male = $value->first_name;
        echo $male . "\n";
    }
}


curl_close($ch);

?>
