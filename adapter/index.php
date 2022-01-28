<?php

spl_autoload_register('autoload');

function autoload($className)
{
    if (str_contains($className, 'Adapter')) {
        $path = 'solution/';
    } else {
        $path = 'classes/';
    }

    include $path.$className.'.php';
}

$inputData = 'Věta k zahešování!';
//$generator = new HashGeneratorAdapter();
//$generator->setData($inputData);

$generator = new HashGenerator($inputData);
$generator2 = new HashGeneratorNewVersion($inputData);

echo "<pre>";
echo $inputData . " = " . $generator->generateHash();
echo "<br />";
echo $inputData . " = " . $generator2->createHash();
echo "</pre>";