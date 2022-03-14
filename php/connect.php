<?php 
    
    date_default_timezone_set('Asia/Bangkok');
    error_reporting(-1); //เปิดErrorทั้งหมด

/* เชื่อมต่อDatabse */
    // $conn = new mysqli('localhost','forwardz','LT/}`$bk~tEL8L2j','forwardz_db');
    $conn = new mysqli('localhost','root','12345678','db_sci');
    $conn->set_charset('utf8');

    if($conn->connect_errno){
        echo "Connect Error :".$conn->connect_error;
        exit();
    }

?>