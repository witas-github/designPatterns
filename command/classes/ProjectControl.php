<?php

class ProjectControl
{
    public function clearCache(): string
    {
        return "Cache has been cleared";
    }

    public function setMaintenanceModeOn(): string
    {
        return "Maintenance mode has been turned on";
    }

    public function setMaintenanceModeOff(): string
    {
        return "Maintenance mode has been turned off";
    }

}