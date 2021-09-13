<?php
require_once ('./Controller/DBConnect.php');
if (isset($_GET['message']) && $_GET['message']== 'success'){
    $alert = "<script type='text/javascript'>alert('投稿に成功しました。');</script>";
    echo $alert;
}
?>
<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="post_form.html">投稿する</a>
<?php
$conn= new DBConnect();
$items =$conn->select('SELECT * FROM tasks;');
?>
<?php foreach ($items as $item): ?>
    <p>
        <?php print($item['title']) ?>
        <?php print($item['body']) ?>
    </p>
<?php endforeach; ?>
</body>
</html>