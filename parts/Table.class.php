<?php

require 'Slot.class.php';

class Table{

public int $height;
public int $width;
public array $row = [];
public bool $start = false;

public function __construct()
{
    $this->height = 9;
    $this->width = 9;

    for($i1 = 0; $i1 < $this->height; $i1++){
        for($i2 = 0; $i2 < $this->width; $i2++){
            $this->row[$i1][$i2] = new Slot(true,false);
        }
    }
}

public function firstClick(){
    if($this->start) return false;
    $this->start = true;
    for($i=1; $i <= 10; $i++){
        $c = rand(0, $this->width - 1);
        $l = rand(0, $this->height - 1);
        if ($this->row[$l][$c]->bomb){
            $i--;
        }else{
            $this->row[$l][$c]->bomb = true;
        }
    }
}

function render(){
    for($i1 = 0; $i1 < $this->height; $i1++){
        for($i2 = 0; $i2 < $this->width; $i2++){
           require 'board.php';
        }
        echo '</br>';
    }
}


}