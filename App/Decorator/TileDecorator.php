<?php


namespace App\Decorator;

abstract class TileDecorator extends Tile
{
    protected $tile;

    public function __construct(Tile $tile)
    {
        print "<pre>";
        var_dump($tile);
        print "</pre>";
        print " - TileDecorator - ";
        $this->tile = $tile;
    }
}
