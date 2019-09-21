<?php

/**
 * Created by PhpStorm.
 * User: iamcaptaincode
 * Date: 9/22/2015
 * Time: 9:05 AM
 */
class Input
{
    const TYPE = "TEXT";
    protected $name;
    protected $value;
    protected $type;
    protected $label;
    protected $onNewLine = false;

    function __construct($name = "", $label = "", $type = "", $onNewLine = false)
    {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->onNewLine = $onNewLine;
    }

    public function getHTML()
    {
        $html = "<input type=\""
        . self::TYPE
        ."\" name=\""
        . $this->name
        . "\" value=\""
        .   $this->value
        . "\" />";

        return $html;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getLabel():string
    {
        return $this->label;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setName(string $name)
    {
        if ($name != "") {
            $this->name = $name;
        }
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }
}