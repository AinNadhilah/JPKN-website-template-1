<?php
$url_agensi="jpkn";
$host = "localhost";
$user  = "viewonly";
$password =  "viewonly";
$database1 = "cms_admin"; // Jangan ubah untuk maintain cms
$database2 = "cpanel"; // Jangan ubah untuk maintain cms

///////////////////////////////////////////////////
// LIST OF DATABASE CONNECTION FOR EVERY TEMPLATE//
///////////////////////////////////////////////////

$conn_admin = new mysqli($host, $user, $password, $database1);
if($conn_admin->connect_errno > 0){
    die('Unable to connect to database' . $conn_admin->connect_error);
}

$conn_cpanel = new mysqli($host, $user, $password, $database2);
if($conn_cpanel->connect_errno > 0){
    die('Unable to connect to database' . $conn_cpanel->connect_error);
}

?>
