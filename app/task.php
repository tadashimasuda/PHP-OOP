<?php
require_once ('./Controller/DBConnect.php');

if (!isset($_GET['id']) || $_GET['id'] == ''){
    header('Location:/');
}
$id = htmlspecialchars($_GET['id'],ENT_QUOTES, "UTF-8");

$conn = new DBConnect();
$items = $conn->find('tasks','id',$id);
?>
<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>詳細画面</title>
</head>
<body>
    <?php echo $items['title'];?>
    <?php echo $items['body'];?>
    <form action="delete_post.php" method="post">
        <input type="hidden" name="id" value="<?php echo $items['id'];?>">
        <input type="submit" value="削除">
    </form>
    <form action="update.php" method="get">
        <input type="hidden" name="id" value="<?php echo $items['id'];?>">
        <input type="submit" value="編集">
    </form>
</body>
</html>