<?php
    include '../connect.php';
    $sql = 'INSERT INTO tb_cus(Email,password) VALUES("'.$_REQUEST['Email'].'","'.$_REQUEST['password'].'")';
    $query = $conn->query($sql);
    if ($query) {
        echo "<script>
            alert('เพิ่มข้อมูลสำเร็จ')
            window.location.href='../index.html';
        </scipt>";
    } else {
        echo $conn->error;
    }
?>