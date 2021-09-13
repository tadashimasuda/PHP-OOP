<?php
require_once ('./Controller/DBConnect.php');
require_once ('form_check.php');

$items=[];
foreach ($_POST as $key => $item){
    $items[$key] = htmlspecialchars($item, ENT_QUOTES, "UTF-8");
}

$check = new FormCheck();
$result = $check->check($items);

if (isset($result['errors'])){
    print_r($result['errors']);
}else{
    $conn= new DBConnect();
    $items =$conn->insert('tasks',$items);
    if ($items){
        header("Location: /?message=success");
        exit();
    }else{
        echo 'エラーが発生しました。';
    }
}

