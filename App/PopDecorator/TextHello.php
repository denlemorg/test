<?php


namespace App\PopDecorator;


class TextHello implements IText
{
    protected $object;

    public function __construct($text)
    {
        $this->object = $text;
    }

    public function show()
    {
        echo 'TextHello<br />';
        $this->object->show();
    }
}