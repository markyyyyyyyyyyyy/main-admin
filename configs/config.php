<?php 

$hostname = 'localhost';
$uname = 'root';
$password = '';
$database = 'users_db';

$conn = new mysqli($hostname, $uname, $password, $database);

if (!$conn){

echo "mali code";

}

$select = "SELECT * FROM admin_user";