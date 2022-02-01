<?php

class EshopProducer implements EntityInterface
{

    public function __construct(
        private string $producer,
        private DateTime $lastUpdate
    )
    {
    }

    public function update(array $arrayWithAttributes): void
    {
        if (isset($arrayWithAttributes['producer'])) {
            $this->producer = $arrayWithAttributes['producer'];
        }
        if (isset($arrayWithAttributes['lastUpdate'])) {
            $this->lastUpdate = $arrayWithAttributes['lastUpdate'];
        }
    }
}