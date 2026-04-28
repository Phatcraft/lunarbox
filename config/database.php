<?php

    $env = parse_ini_file(__DIR__. "\.env");

    $db_hostname = $env["DB_HOST"];
    $db_user = $env["DB_USER"];
    $db_password = $env["DB_PASS"];
    $db_database = $env["DB_DATABASE"];

    try{
        $conn = new mysqli($db_hostname, $db_user, $db_password, $db_database);
    }catch(mysqli_sql_exception){
        die("Có lỗi xảy ra trong khi kết nối server. Vui lòng thửu lại....");
    }

?>