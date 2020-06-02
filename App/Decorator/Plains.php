<?php


namespace App\Decorator;

class Plains extends Tile
{
    /**
     * @var int
     */
    private $wealthfactor = 2;

    /**
     * @return int
     */
    public function getWealthFactor(): int
    {
        print "<pre>";
        var_dump($this);
        print "</pre>";
        print " - Plains - ";
        return $this->wealthfactor;
    }
}
