<?php
require __DIR__ .'/../vendor/autoload.php';

    $players=[];

    for ($index=1; $index<5; $index++){
        array_push($players, new classes\AttackPlayer());
    }

    for ($index=1; $index<5; $index++){
        array_push($players, new classes\DefencePlayer());
    }

    array_push($players, new classes\GoadkeeperPlayer());


    $match = new classes\Match($players);
    $match->start();