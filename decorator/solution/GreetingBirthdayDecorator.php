<?php

class GreetingBirthdayDecorator implements GreetingInterface
{
    public function __construct(private GreetingInterface $greeting)
    {
    }

    public function showGreeting(): void
    {
        echo "Happy birthday!<br />";
        $this->greeting->showGreeting();
    }


}