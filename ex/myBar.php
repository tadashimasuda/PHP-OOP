<?php
    require_once('Staff.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>class opp</title>
</head>
<body>
        <pre>
            <?php
                Staff::deposit(100);
                Staff::deposit(150);

                echo Staff::$piggyBank,"now\n";

                $hana = new Staff('花',21);
                $taro = new Staff('taro',55);

                $hana->latePenalty();
                echo Staff::$piggyBank,"now\n";

            //                $hana->name = "花";
                //                $hana->age = 21;
                //
                //                $taro->name = "taro";
                //                $taro->age = 35;

                $hana->hello();
                $taro->hello();
            ?>
        </pre>
</body>
</html>


