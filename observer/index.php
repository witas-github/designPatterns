<h1>Design patterns: observer</h1>
<?php

spl_autoload_register('autoload');

function autoload($className)
{
    $path = 'classes/';
    include $path . $className . '.php';
}

//creating instances of basic objects
$eshopItem = new EshopItem(1000, 'Boty', new DateTime());
$eshopProducer = new EshopProducer('Nike', new DateTime());

//value object with new parameters
$newValues = [
    'price' => 2000,
    'name' => 'Kecky',
    'producer' => 'Adidas',
    'lastUpdate' => new DateTime()
];

//dump current value
echo "<pre>";
print_r($eshopItem);
print_r($eshopProducer);
echo "</pre>";

//creating observer controller
$eshopSimulator = new EshopSimulator();

//adding observers
$eshopSimulator->addEntity($eshopItem);
$eshopSimulator->addEntity($eshopProducer);

//execute observer event with parameters
$eshopSimulator->updateEntities($newValues);

echo "<pre>";
print_r($eshopItem);
print_r($eshopProducer);
echo "</pre>";