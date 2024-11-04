<?php
include '../connect.php';

$sql = "SELECT * FROM tb_cus WHERE Email = '".$_REQUEST['Email']."' AND password = '".$_REQUEST['password']."'";
$query = $conn->query($sql);
$result = $query->fetch_object();

if ($query->num_rows > 0) {
    session_start();
    $_SESSION['sess_id'] = session_id();

    echo header('Location: ../index.html');
} else {
    echo header('Location: ../login.html');
}