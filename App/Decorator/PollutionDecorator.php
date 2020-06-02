<?php


namespace App\Decorator;

class PollutionDecorator extends TileDecorator
{
    public function getWealthFactor(): int
    {
        print " - PollutionDecorator - ";
        return $this->tile->getWealthFactor()-4;
    }
}
