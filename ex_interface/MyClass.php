<?php
require_once ('WorldRule.php');

class MyClass implements WorldRule {

    public function hello()
    {
        echo "こんにちは!","\n";
    }

    public function thanks(){
        echo "ありがとう","\n";
    }
}