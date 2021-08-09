<?php
require_once ("ShoBiz.php");

class MyShop extends ShopBiz{
    public function thanks()
    {
        // TODO: Implement thanks() method.
        echo "ありがとうございました";
    }

    public function hanbai($tanka,$kosu){
        $price = $tanka * $kosu;
        $this->sell($price);
    }

    public function  getUriage(){
        echo "売上合計は{$this->uriage}";
    }
}