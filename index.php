<h1>Design patterns</h1>
<h3>https://github.com/witas-github/designPatterns/</h3>
<h3>https://refactoring.guru/</h3>

<?php

interface AnimalInterface {
    public function eat(): void;
    public function sleep(): void;
    public function getName(): string;
    public function getAnimalType(): string;
}

abstract class Animal implements AnimalInterface {
    public function __construct(protected int $vitality, protected int $saturation, protected string $name)
    {
    }

    public function getName(): string { return $this->name; }

    public function getAnimalType(): string { return $this::class; }
}

class Dog extends Animal {
    public function eat(): void { $this->saturation += 10; }

    public function sleep(): void { $this->vitality += 20; }
}

class Cat implements AnimalInterface {
    public function __construct(protected int $vitality, protected int $saturation, protected string $name)
    {
    }

    public function eat(): void { $this->saturation += 5; }

    public function sleep(): void { $this->vitality += 30; }

    public function getName(): string { return $this->name; }

    public function getAnimalType(): string { return "Cat"; }
}

$dog = new Dog(50,80, "Lassie");
$cat = new Cat(50,80, "Tom");

function showAnimalDetail (AnimalInterface $animal) {
    echo $animal->getAnimalType() . " " . $animal->getName();
}

showAnimalDetail($dog);
echo "<br />";
showAnimalDetail($cat);
