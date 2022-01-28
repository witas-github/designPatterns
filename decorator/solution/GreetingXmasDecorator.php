<?php

class GreetingXmasDecorator implements GreetingInterface
{
    public function __construct(private GreetingInterface $greeting)
    {
    }

    public function showGreeting(): void
    {
        echo "Happy Christmas!<br />";
        $this->greeting->showGreeting();
    }


}