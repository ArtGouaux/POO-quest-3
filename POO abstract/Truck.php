<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private bool $isEngineOn = false;

    private string $energyType;

    private int $energyLevel;

    private int $loadingCapacity;
    
    private int $truckLoad = 0;

    public function __construct(string $color, int $nbSeats, string $energyType, int $loadingCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergyType($energyType);
        $this->setLoadingCapacity($loadingCapacity);
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

    public function loading(): string
    {
        $sentence2 = "";
        while ($this->truckLoad<$this->loadingCapacity) {
            $this->truckLoad++;
            $sentence2 .= "I'm filling my truck dabedidabeda ...";
        }

        $sentence2 .= "Truck is full.";
        return $sentence2;
    }

    public function setLoadingCapacity(int $loadingCapacity)
    {
        $this->loadingCapacity = $loadingCapacity;
    }

    public function getEnergyType(): string
    {
        return $this->energyType;
    }

    public function setEnergyType(string $energyType): Truck
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