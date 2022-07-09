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


///////////////////////////// test part////////////////////////////////////////////////////////////////////////////////////
// this for  crate object in php
$data = ["Name" => "wael k al qawasmi" , "github"=>"https://github.com/WaelAlQawasmi"];
// this for convert to json format
$JSON_data = json_encode($data);
// this for cprint it
print_r($JSON_data);