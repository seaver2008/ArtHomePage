<?php
include "DBLogin.php";
$start = $_GET['start'];
$num = $_GET['num'];

$login = new DBLogin();
$login->login();
$res = mysqli_query($login->con, "SELECT * FROM `work` WHERE `id`>=$start AND `id`<=$num");
$list = array();
while ($row = mysqli_fetch_object($res)){
    array_push($list, $row);
}
echo json_encode($list);