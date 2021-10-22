<?php

final class MotorWay extends Highway
{
    protected $nbLane = 4;
    protected $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->setCurrentVehicles($vehicle);
            echo 'You can go.';
        }else{
            echo 'You shall not pass !';
        }
    }

}