<?php

class Table{

public int $height;
public int $width;

public function __construct()
{
    $this->height = 9;
    $this->width = 9;
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