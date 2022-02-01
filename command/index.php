<h1>Design patterns: command</h1>
<?php

spl_autoload_register('autoload');

function autoload($className)
{
    $path = 'classes/';
    include $path . $className . '.php';
}

$commandAction = 'ClearCache';
$command = new $commandAction(new ProjectControl());
echo $command->execute();