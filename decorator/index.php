<h1>Design patterns: decorator</h1>
<?php

spl_autoload_register('autoload');

function autoload($className)
{
    if (str_contains($className, 'Decorator')) {
        $path = 'solution/';
    } else {
        $path = 'classes/';
    }

    include $path.$className.'.php';
}

$greeting = new Greeting("Vita");
$greeting->showGreeting();

//$greeting = new GreetingBirthdayDecorator($greeting);
//$greeting->showGreeting();
//
//$greeting = new GreetingXmasDecorator($greeting);
//$greeting->showGreeting();