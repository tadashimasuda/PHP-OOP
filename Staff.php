<?php
    class Staff{
        public $name;
        public $age;

        public static $piggyBank = 0;

        public static function deposit(int $yen){
            self::$piggyBank += $yen;
        }

        function __construct($name,$age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        public function hello()
        {
            if (is_null($this->name)){
                echo "こんにちは!　名無しさん","\n";
            }else{
                echo "こんにちは!,{$this->name}","\n";
            }
        }

        public function latePenalty(){
            self::deposit(1000);
        }
    }
?>
