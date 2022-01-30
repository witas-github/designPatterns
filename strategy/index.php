<h1>Design patterns: strategy</h1>
<?php

spl_autoload_register('autoload');

function autoload($className)
{
    if (str_contains($className, 'Strategy')) {
        $path = 'solution/';
    } else {
        $path = 'classes/';
    }

    include $path . $className . '.php';
}

const MOBILE = 1;
const PC = 2;

$deviceType = MOBILE;

if ($deviceType === PC) {
    $component = new MobileComponent();
    $component->create();
} else {
    $component = new PcComponent();
    $component->create();
}

//$selectScreenComponent = new SelectScreenComponentStrategy(SelectScreenComponentStrategy::DEVICE_PC);
//echo $selectScreenComponent->createScreenComponent();
