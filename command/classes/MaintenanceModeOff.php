<?php

use JetBrains\PhpStorm\Pure;

class MaintenanceModeOff implements CommandInterface
{
    public function __construct(private ProjectControl $projectControl)
    {
    }

    #[Pure] public function execute(): string
    {
        return $this->projectControl->setMaintenanceMode('off');
    }

}