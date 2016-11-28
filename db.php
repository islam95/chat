<?php

$host = "localhost";
$user = "root";
$password = "";
$db_name = "chat";

$connect = new mysqli($host, $user, $password, $db_name);
if ($connect->connect_error) {
  echo "Connect failed: " . $connect->connect_error;
  exit();
}
function formatDate($date){
	return date('g:i a', strtotime($date));
}

?>