<?php
require_once ('./Controller/DBConnect.php');
require_once ('form_check.php');

$items=[];
foreach ($_POST as $key => $item){
    $items[$key] = $item;
}

$conn= new DBConnect();
$items =$conn->insert('tasks',$items);

if ($items){

}else{
    echo 'エラーが発生しました。';
}