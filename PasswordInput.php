<?php
/**
 * Created by PhpStorm.
 * User: iamcaptaincode
 * Date: 9/24/2015
 * Time: 8:17 AM
 */

require_once 'Input.php';

class PasswordInput extends Input
{
    const TYPE = "password";


    function __construct($name = "", $value = "")
    {
        parent::__construct($name);
        $this->value = $value;
    }

    public function getHTML()
    {
        return "<input type=\""
            . self::TYPE
            ."\" name=\""
            . $this->name
            . "\" value=\""
            .   $this->value
            . "\" />";
    }


}