<?php

use JetBrains\PhpStorm\Pure;

class SelectScreenComponentStrategy
{
    public const DEVICE_MOBILE = 1;
    public const DEVICE_PC = 2;

    public function __construct(public int $device)
    {
        $this->device = $device;
    }

    #[Pure] public function createScreenComponent(): string
    {
        if ($this->device === self::DEVICE_MOBILE) {
            $component = new MobileScreenStrategyComponent();
        } else {
            $component = new PcScreenStrategyComponent();
        }

        return $component->create();
    }

    /**
     * @return int
     */
    public function getDevice(): int
    {
        return $this->device;
    }

    /**
     * @param int $device
     */
    public function setDevice(int $device): void
    {
        $this->device = $device;
    }


}