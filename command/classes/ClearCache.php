<?php

use JetBrains\PhpStorm\Pure;

class ClearCache implements CommandInterface
{
    public function __construct(private ProjectControl $projectControl)
    {
    }

    #[Pure] public function execute(): string
    {
        return $this->projectControl->clearCache();
    }

}