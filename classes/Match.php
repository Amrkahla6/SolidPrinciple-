<?php

namespace classes;

class Match{

    protected $attack;
    protected $defense;
    protected $keeper;

    public function __construct()
    {
        $this->attack  = new Attack();
        $this->defense = new Defense();
        $this->keeper  = new Keeper();
    }

    public function start(){
        echo "Start Play";
    }
}
