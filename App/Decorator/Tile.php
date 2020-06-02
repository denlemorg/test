<?php

namespace App\Decorator;

abstract class Tile
{
    public function __construct()
    {
        print "<pre>";
        var_dump($this);
        print "</pre>";
        print " - Tile - ";
    }

    abstract public function getWealthFactor(): int;
}
