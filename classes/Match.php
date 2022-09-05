<?php

namespace classes;

class Match{


    private $playerList;
    public function __construct(Array $players)
    {
        $this->playerList = $players;
    }

    public function start(){
        echo "Start Match";
        echo "\n";

        foreach ($this->playerList as $player){
            $player->play();
            echo "\n";
        }
    }
}
