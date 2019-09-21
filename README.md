# CS 3620 H2 Assignment Instructions
Using the FormGenerator class that we have been working on together. Complete the following tasks.
- [ ] Finish generating the [Input](Input.php) class to handle traditional text inputs. This includes labels, new lines, required (for html5 validation) and all other aspects of the class diagram not yet implemented. Some functions are partially implemented, and should be finished.
- [ ] You also need to implement the RadioButtonInput class. 
- [ ] Provide an index.php file that demonstrates the usage of your generator system. You may use the sample, or if you prefer to determine your own form that is fine as well.
- [ ] Provide an updated README.md with instructions on running your program.

To see a class diagram of the proposed system, see the PDF [FormGeneratorSystemDiagram.pdf](FormGeneratorSystemDiagram.pdf)

A potential test form would look like this:
```
<?php
require_once 'FormGenerator.php';
require_once 'Input.php';
require_once 'RadioButtonInput.php';

$form = new FormGenerator();

$form->addInput(new Input("name","What... is your name?"));
$form->addInput(new Input("quest","What... is your quest?"));
$form->addInput(new Input("speed","What... is the air-speed velocity of an unladen swallow?"));

$radio = new RadioButtonInput("radio1", "What... is the air-speed velocity of an unladen swallow?");
$radio->addOption("african", "African Swallow");
$radio->addOption("european", "European Swallow");
$radio->addOption("american", "American Swallow");

$form->addInput($radio);

echo $form->generateForm();
```
