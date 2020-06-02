<?php


namespace App\PopDecorator;


class TextWorld implements IText
{
    protected $object;

    public function __construct($text)
    {
        $this->object = $text;
    }

    public function show()
    {
        echo 'TextWorld<br />';
        $this->object->show();
    }
}