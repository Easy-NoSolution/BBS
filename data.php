<?php
/**
 * Created by PhpStorm.
 * User: yiwujie
 * Date: 15/09/2017
 * Time: 11:08
 */
$json = array();
$id = @$_GET['id'] ? $_GET['id'] : 0;
if (empty($id)) {
    $json = array('data' => NULL, 'info' => '无该id信息', 'code' => -201);
    exit(json_encode($json));
}