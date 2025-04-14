<?php
//BE CAREFUL : if you already sent some string to the client the headers will not be sent,
//headers are the first thing you need to send
//if you put some lines or spaces  before your php tag, this will be counted as a body !!!
//be careful !

//Export a JSON to the client
header("Content-type: application/json"); //you can return any type of file !!!
header("Access-Control-Allow-Origin: *"); //CORS header !

include("classes.php");

// if (!isset($_GET["code"])) {
//   $code = "BTC";
// } else {
//   $code = $_GET["code"];
// }

// if $_GET["code"] code = $_GET["code"] / else code = "BTC"
$code = $_GET["code"] ?? "BTC";

$converter = new CryptoConverter($code);
$rateinUSD = $converter?->convert(); //if there is a converter, call this method,
// if not return null, it's the safe called operator
echo "{\"rate\": $rateinUSD}";
