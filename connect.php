<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_customer';

$conn = new mysqli($hostname, $username, $password, $dbname);

if($conn->connect_error) {
    die('Connect failed: '.$conn->connect_error);
}
    