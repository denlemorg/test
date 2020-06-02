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

use App\PopDecorator\TextHello;
use App\PopDecorator\TextWorld;
use App\PopDecorator\TextEmpty;

$result = new TextWorld( new TextHello( new TextEmpty() ) );
$result->show();