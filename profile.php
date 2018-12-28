<?php
header("Access-Control-Allow-Origin: http://10.30.29.62:63341");
header("Access-Control-Allow-Credentials: true");
header('Content-type:text/json');
$username = array("userName"=>123);
echo json_encode($username);
//hll
?>