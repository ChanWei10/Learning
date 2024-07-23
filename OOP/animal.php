<?php

class Animal{
    public $name = "";
    public $speed = "";

    public function __construct($name)
    {
        $this->name = $name;
        echo "Hello there my name is " . $this->name . "<br>";
    }

    
    public function warmup(){
        $this->speed = rand(0,10);
    }
}

?>