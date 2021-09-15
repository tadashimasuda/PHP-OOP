<?php
require_once ('./Controller/DBConnect.php');

if (isset($_POST['id']) &&isset($_POST['title']) && isset($_POST['body'])){
    $set=[];
    $set['title'] = htmlspecialchars($_POST['title']);
    $set['body'] = htmlspecialchars($_POST['body']);

    $where = [];
    $where['id'] = htmlspecialchars($_POST['id']);

    $conn = new DBConnect();
    $items = $conn->update('tasks',$set,$where);

//    if ($items){
//        header("Location: /");
//        exit();
//    }


}else{
    $id = htmlspecialchars($_GET['id'],ENT_QUOTES, "UTF-8");

    $conn = new DBConnect();
    $items = $conn->find('tasks','id',$id);
}

?>
<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>post</title>
</head>
<body>
<h3>編集画面</h3>
<form action="update.php" method="post">
    <p>
        <label for="title">タイトル</label>
        <input type="text" id="title" name="title" placeholder="<?php echo $items['title'];?>">
    </p>
    <p>
        <label for="body">内容</label>
        <input type="text" id="body" name="body" placeholder="<?php echo $items['body'];?>">
    </p>
    <input type="hidden" name="id" value="<?php echo $items['id'];?>">
    <input type="submit">
</form>
</body>
</html>