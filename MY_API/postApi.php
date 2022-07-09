
<?php
// this part to determine the websites that allow to use your api 
// if you put * that mean all sites can acsess to your api
// ex : header("Access-Control-Allow-Origin: http://www.ttu.edu.jo"); 
// that mean just http://www.ttu.edu.jo can acces to my api

header("Access-Control-Allow-Origin: *");


// this part to support spesial characters and JSON data
header("Content-Type: application/json; charset=UTF-8");



// This part to determine the methode that use (post , put ... etc...)
// * means that all methode allow
//header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Methods: *");


// age time request
header("Access-Control-Max-Age: 3600");
// to exchange data eithout erroes
header("Access-Control-Allow-Headers: *");


//using postman to send request
// {
  
//     "name": "wael",
//     "age": 26,
//     "length": 20
  
//   }
 
//  also you can use  the Fetch API in js

// this line to take the data in body in post request ( you can test using postman)
$data = file_get_contents('php://input');


// this line to convert to object
$data = json_decode($data);
 
// this line to print the parameter name
 print_r(json_encode($data->name));


 
// to open file read ,write  and create if not exisit
 $myfile = fopen("webdictionary.txt", "a+") or die("Unable to open file!");
 fwrite($myfile, json_encode($data));
 fclose($myfile);

?>