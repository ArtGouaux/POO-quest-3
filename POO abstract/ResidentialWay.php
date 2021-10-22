<?php

final class ResidentialWay extends Highway
{
    protected $nbLane = 2;
    protected $maxSpeed = 50;
    protected $currentVehicles =[];

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car)
        {
            $this->setCurrentVehicles($vehicle);
            echo 'You can go.';            
        }else{
            echo 'You shall not pass !';
        }
    }
}