<?php
require __DIR__ .'/../vendor/autoload.php';

    $players=[];

    for ($index=1; $index<12; $index++){
        array_push($players, new classes\Player());
    }

    $match = new classes\Match($players);
    $match->start();