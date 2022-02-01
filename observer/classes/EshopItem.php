<?php

class EshopItem implements EntityInterface
{

    public function __construct(
        private float $price,
        private string $name,
        private DateTime $lastUpdate
    )
    {
    }

    public function update(array $arrayWithAttributes): void
    {
        foreach ($arrayWithAttributes as $attribute => $value) {
            if (property_exists(EshopItem::class, $attribute)) {
                $this->$attribute = $value;
            }
        }
    }
}