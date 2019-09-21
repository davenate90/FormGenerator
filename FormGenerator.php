<?php

/**
 * Created by PhpStorm.
 * User: iamcaptaincode
 * Date: 9/19/2017
 * Time: 8:12 AM
 */

require_once 'Input.php';

class FormGenerator
{
    const NAME = "Standard";
    const METHOD_GET  = "GET";
    const METHOD_POST = "POST";
    private $action = "";
    private $inputs = null;
    private $method = FormGenerator::METHOD_POST;
    private $countItems = 0;

    /**
     * FormGenerator constructor. Accepts an optional array of inputs to be attached to this form object.
     * @param array $inputs
     */
    function __construct(array $inputs = null){
        $this->inputs = $inputs;
    }

    /**
     * Standard Destructor. Will unset array to prevent orphanage.
     */
    function __destruct()
    {
        if (isset($this->inputs)) {
            unset($this->inputs);
        }
    }

    /**
     * @param $field The field to be set
     * @param $value The value to be set
     * @throws Exception for unknown, or private fields.
     */
    public function set($field, $value)
    {
        if ($field === "action") {
            $this->setAction($value);
        } else if ($field === "method") {
            $this->setMethod($value);
        }

        throw new Exception("Unknown field");

    }

    /**
     * Sets the method of the form.
     * @param string $method
     */
    public function setMethod(string $method) {
        if ($method != ""){
            $this->method = $method;
        }
    }

    /**
     * Sets the action of the form.
     * @param string $action
     */
    public function setAction(string $action) {
        if ($action != ""){
            $this->action = $action;
        }
    }

    /**
     * Add an input to be used in the form.
     * @param Input $input
     */
    public function addInput(Input $input)
    {
        if (!isset($this->inputs)) {
            $this->inputs = array();
        }
            array_push($this->inputs,$input);

    }

    /**
     * Generate the HTML of the form, and return that to the callee.
     * @return string
     */
    public function generateForm()
    {
        $form = "<form method=\"$this->method\" action=\"$this->action\">";

        foreach ($this->inputs as $input) {

            $form .= $input->getHTML();
        }

        $form .= '<input type="submit" name="submit" />';
        $form .= "</form>";

        return $form;
    }
}

