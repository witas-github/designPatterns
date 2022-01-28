<?php

class Greeting implements GreetingInterface
{

    public function __construct(private string $name)
    {
    }

    public function showGreeting(): void {
        echo "Yours sincerely " . $this->name;
    }

}