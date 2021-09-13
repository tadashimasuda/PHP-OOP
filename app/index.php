<?php
require_once ('./Controller/DBConnect.php');
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