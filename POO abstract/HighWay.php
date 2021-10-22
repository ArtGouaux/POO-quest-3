<?php

abstract class Highway
{

    protected $currentVehicles = [];
    protected $nbLane;
    protected $maxSpeed;

    public function __construct($nbLane, $maxSpeed)
    {
        $this->nbLane=$nbLane;
        $this->maxSpeed=$maxSpeed;
    }
    
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicle;
    }

    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles[] = $currentVehicles;
        return $this;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane)
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle(Vehicle $vehicle);

}
