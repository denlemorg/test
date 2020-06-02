<?php


namespace App\PopDecorator;


class TextEmpty implements IText
{
    public function show()
    {
        echo 'TextEmpty<br />';
    }
}