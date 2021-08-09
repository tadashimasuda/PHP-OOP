<?php
    require_once ("Soccer.php");
    require_once ("Runner.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>soccer class</title>
</head>
<body>
    <pre>
        <?php
            $player1 = new Soccer("shinji");
            $player1->who();
            $player1->play();
        ?>
        <?php
        $player2 = new Soccer("tsubasa");
        echo "{$player2}";
        ?>
        <?php
        $runner1 = new Runner("福士",23);
        print_r($runner1);
        $runner1->who();
        ?>
    </pre>
</body>
</html>
