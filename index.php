<?php
require_once 'FormGenerator.php';
require_once 'Input.php';
//require_once 'RadioButtonInput.php';

$form = new FormGenerator();

$form->addInput(new Input("name","What... is your name?"));
$form->addInput(new Input("quest","What... is your quest?"));
$form->addInput(new Input("speed","What... is the air-speed velocity of an unladen swallow?"));

//$radio = new RadioButtonInput("radio1", "What... is the air-speed velocity of an unladen swallow?");
//$radio->addOption("african", "African Swallow");
//$radio->addOption("european", "European Swallow");
//$radio->addOption("american", "American Swallow");

//$form->addInput($radio);

echo $form->generateForm();