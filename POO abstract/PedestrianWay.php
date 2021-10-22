<?php

final class PedestrianWay extends Highway
{
    protected $nbLane = 1;
    protected $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle)
    {
        if (($vehicle instanceof Bicycle) || ($vehicle instanceof Skateboard))
        {
            $this->currentVehicle = $vehicle;
            echo "You can go.";
        }else{
            echo "You shall not pass !";
        }
    }
}