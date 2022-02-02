<?php

use JetBrains\PhpStorm\Pure;

class MaintenanceModeOn implements CommandInterface
{
    public function __construct(private ProjectControl $projectControl)
    {
    }

    #[Pure] public function execute(): string
    {
        return $this->projectControl->setMaintenanceMode('on');
    }

}