<?php


namespace App\Decorator;

class DiamondDecorator extends TileDecorator
{
    public function getWealthFactor(): int
    {
        print " - DiamondDecorator - ";
        return $this->tile->getWealthFactor() + 3;
    }
}
