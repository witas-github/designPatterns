<?php

class ProjectControl
{
    public function clearCache(): string
    {
        return "Cache has been cleared";
    }

    public function setMaintenanceMode(string $mode): string
    {
        return "Maintenance mode has been turned " . $mode;
    }


}