<?php
/**
 * Documentation
 * php version 7.2
 *
 * @category Category
 * @package  Package_Test
 * @author   Author <author@name.com>
 * @license  License http://link.com
 * @link     http://link.com
 */

require_once '../autoloader.php';

use App\Decorator\Plains;
use App\Decorator\DiamondDecorator;
use App\Decorator\PollutionDecorator;

//$tile = new Plains();
//
//print $tile->getWealthFactor()."<br />";
//
//$tile2 = new DiamondDecorator( new Plains() );
//
//print $tile2->getWealthFactor()."<br />";


//$tile3 = new PollutionDecorator(new DiamondDecorator( new Plains() ) );
$tile3 = new DiamondDecorator(new Plains()) ;

print $tile3->getWealthFactor()."<br />";
