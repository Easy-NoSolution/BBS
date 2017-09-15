<?php
/**
 * Created by PhpStorm.
 * User: yiwujie
 * Date: 15/09/2017
 * Time: 11:08
 */
require ('conn.php');
$json = array();
$id = @$_GET['id'] ? $_GET['id'] : 0;
if (empty($id)) {
    $json = array('data' => NULL, 'info' => '无该id信息', 'code' => -201);
    exit(json_encode($json));
}
$result = mysqli_query($conn, 'select * from bbs_info where id='.intval($id));
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
if (!$row) {
    $json = array('data' => NULL, 'info' => '无该id信息', 'code' => -201);
    exit(json_encode($json));
}
$json = array('id' => $row['id'], 'name' => $row['name'], 'content' => $row['content'], 'time' => $row['time']);
exit(json_encode($json));
mysqli_free_result($result);