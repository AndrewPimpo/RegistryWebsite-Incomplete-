<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "expedia";

$db = mysqli_connect($host, $user, $password, $db_name);
$connect_error = $db->connect_error;

if ($connect_error != null)
{
    include('../error/db_error_connect.php');
    exit();
}
?>