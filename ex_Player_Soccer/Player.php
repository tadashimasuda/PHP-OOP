<?php
class Player {
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function who()
    {
        echo "{$this->name}です","\n";
    }
}