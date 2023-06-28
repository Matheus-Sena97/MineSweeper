<?php

require 'Slot.class.php';

class Table{

    public int $height;
    public int $width;
    public int $bomb_count;
    public array $row = [];
    public bool $start = false;

    public function __construct($start = false, $row = [])
    {
        $this->start = $start;
        $this->row = $row;
        $this->height = 9;
        $this->width = 9;
        $this->bomb_count = 10;

        for($i1 = 0; $i1 < $this->height; $i1++){
            for($i2 = 0; $i2 < $this->width; $i2++){
                $this->row[$i1][$i2] = new Slot($i1, $i2, true,false);
            }
        }
    }

    public function firstClick($linha, $coluna){
        if($this->start) return false;
        $this->start = true;
        for($i=1; $i <= $this->bomb_count; $i++){
            $c = rand(0, $this->width - 1);
            $l = rand(0, $this->height - 1);
            if ($this->row[$l][$c]->bomb || ($c == $coluna && $l == $linha)){
                $i--;
            }else{
                $this->row[$l][$c]->bomb = true;

                if($l-1 >=0 && $c-1>=0)$this->row[$l-1][$c-1]->n += 1;
                if($l-1 >=0 && $c>=0)$this->row[$l-1][$c]->n += 1;
                if($l-1 >=0 && $c+1<$this->width)$this->row[$l-1][$c+1]->n += 1;
                if($c-1>=0)$this->row[$l][$c-1]->n += 1;
                if($c+1<$this->width)$this->row[$l][$c+1]->n += 1;
                if($l+1 < $this->height && $c-1>=0)$this->row[$l+1][$c-1]->n += 1;
                if($l+1 < $this->height && $c>=0)$this->row[$l+1][$c]->n += 1;
                if($l+1 < $this->height && $c+1<$this->width)$this->row[$l+1][$c+1]->n += 1;
            }
        }
    }

    public function click($l, $c)
    {
        $this->row[$l][$c]->hidden = false;
        if($this->row[$l][$c]->n == 0 && !$this->row[$l][$c]->bomb) {
            if($l-1 >=0 && $c-1>=0) $this->click($l-1,$c-1);
        }
    }

    function render(){
        for($i1 = 0; $i1 < count($this->row); $i1++){
            for($i2 = 0; $i2 < count($this->row[$i1]); $i2++){
                $slot = $this->row[$i1][$i2];
                require 'board.php';
            }
            echo '</br>';
        }
    }


}