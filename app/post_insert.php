<?php
require_once ('./Controller/DBConnect.php');

$title = $_POST['title'];
$body = $_POST['body'];

$conn= new DBConnect();
$items =$conn->insert($title,$body);