<?php

class Slot{
    public bool $hidden;
    public bool $bomb;

    function __construct($hidden,$bomb)
    {
        $this->hidden = $hidden;
        $this->bomb = $bomb;
    }
}