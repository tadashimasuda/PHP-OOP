<?php
require_once ('./Controller/DBConnect.php');
require_once ('form_check.php');

$title = $_POST['title'];
$body = $_POST['body'];

$conn= new DBConnect();
$items =$conn->insert($title,$body);

var_dump($items);
//if($items ['errors']){
//    echo 'aaa';
//}else{
//    echo $items;
//}