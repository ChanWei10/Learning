<?php

class Game{
    private $member = [];

    public function takepart(Animal $animal){
        // var_dump($animal);
        $this->member[] = $animal;
        
    }

    public function warmup(){
        foreach($this->member as $v){
            $v->warmup();
        }
    }

    public function start(){
        if($this->member[0]->speed > $this->member[1]->speed){
            echo $this->member[0]->name . " win.";
        }
        elseif($this->member[0]->speed < $this->member[1]->speed){
            echo $this->member[1]->name . " win.";
        }
        else{
            echo "Draw.";
        }
    }

    public function report(){
        echo "<hr>";
        foreach($this->member as $v){
            echo $v->name. " " .$v->speed. "<br>";
        }
    }
}

?>