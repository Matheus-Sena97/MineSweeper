<?php

class Slot{
    public bool $hidden;
    public bool $bomb;
    public int $pl;
    public int $pc;
    public int $n = 0;

    function __construct($pl, $pc, $hidden,$bomb)
    {
        $this->pl = $pl;
        $this->pc = $pc;
        $this->hidden = $hidden;
        $this->bomb = $bomb;
    }
}