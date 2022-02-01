<?php

class EshopSimulator
{
    public function __construct(private array $eshopEntities = [])
    {
    }

    public function addEntity(EntityInterface $entity) {
        array_push($this->eshopEntities, $entity);
    }

    public function updateEntities(array $valuesToUpdate) {
        foreach($this->eshopEntities as $entity) {
            $entity->update($valuesToUpdate);
        }
    }
}