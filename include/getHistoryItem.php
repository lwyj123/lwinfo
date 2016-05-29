<?php
require_once('./medoo.php');
$id = $_POST['lastId'];
$database = new medoo([
    'database_type'=>'mysql',
    'database_name'=>'lwinfo',
    'server'=>'localhost',
    'username'=>'root',
    'password'=>'fuck',
    'charset'=>'utf-8',

    'port'=>3306,
]);

$data = $database->select(
    'Info',
    "*",
    ["InfoId" => $id - 1]
);


$resJson = json_encode($data[0]);
echo $resJson;