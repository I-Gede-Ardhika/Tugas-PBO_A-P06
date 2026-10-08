<?php

require_once 'Vehicle.php';
require_once 'Movable.php';
require_once 'Fuelable.php';

// Subclass lain dari Vehicle yang mengimplementasikan Movable dan Fuelable
class Boat extends Vehicle implements Movable
{
    use Fuelable;

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    // Implementasi method abstract dari Vehicle
    public function move(): void
    {
        echo $this->name . " bergerak di air.\n";
    }

    // Override default method refuel dari Fuelable
    public function refuel(): void
    {
        echo $this->name . " mengisi bahan bakar solar khusus kapal.\n";
    }
}
