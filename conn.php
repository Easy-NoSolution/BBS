<?php
/**
 * Created by PhpStorm.
 * User: yiwujie
 * Date: 15/09/2017
 * Time: 00:42
 */
    header("Content-Type:text/html;charset=utf-8");
    $conn = mysqli_connect("127.0.0.1", "root", "Nsu14310520420");
    if(!$conn) {
        echo '数据库连接错误'.mysqli_error();
        exit();
    }
    mysqli_select_db($conn, 'bbs');
?>