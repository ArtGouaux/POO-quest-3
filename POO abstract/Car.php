<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private bool $isEngineOn = false;

    private string $energyType;

    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energyType)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergyType($energyType);
    }

    public function start()
    {
        if($this->isEngineOn){
            return 'Motor is already on.';
        }else{
            $this->isEngineOn = true;
            return 'Motor started.';     
        }
    }

    public function getEnergyType(): string
    {
        return $this->energyType;
    }

    public function setEnergyType(string $energyType): Car
    {
        if (in_array($energyType, self::ALLOWED_ENERGIES)) {
        $this->energyType = $energyType;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}