<?php
require_once ('./Controller/DBConnect.php');

$id = $_POST['id'];

$conn = new DBConnect();
$result = $conn->delete('tasks','id',$id);

if ($result){
    header("Location: /");
    exit();
}else{
    echo 'エラーが発生しました。';
}

