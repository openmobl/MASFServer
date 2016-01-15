<?php

openlog("palm-google-locservices", LOG_NDELAY, LOG_LOCAL0);

require_once __DIR__ . '/Protobuf-PHP/library/DrSlump/Protobuf.php';

use \DrSlump\Protobuf;

Protobuf::autoload();

// require_once __DIR__ . '/LocationServices/.php';



$postdata = file_get_contents("php://input");
$getdata = json_encode($_GET);
$postdata2 = json_encode($_POST);
$headerdata = json_encode($_SERVER);


syslog(LOG_ERR, "POSTDATA $postdata");
syslog(LOG_ERR, "GET $getdata");
syslog(LOG_ERR, "POST $postdata2");
syslog(LOG_ERR, "HEADERS $headerdata");

closelog();

print("{}");

/*

 TODO:

  * Receive Protobuf message from client
  * Decode to JSON and modify if necessary
  * Pass on to Google Location Service
  * Receive response and modify if necessary
  * Encode to Protobuf and return to client

*/

?>

