<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
        $this->nbLane = 2;
        $this->maxSpeed = 50;
    }

    public function addVehicle(Vehicle $newVehicle)
    {
            $this->currentVehicles[] = $newVehicle;
            echo "Vous pouvez rouler ici";
    }
    
}