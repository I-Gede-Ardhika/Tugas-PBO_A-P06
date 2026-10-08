<?php

require_once 'Vehicle.php';
require_once 'Movable.php';
require_once 'Fuelable.php';

// Subclass dari Vehicle yang mengimplementasikan Movable dan Fuelable
class Car extends Vehicle implements Movable
{
    use Fuelable;

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    // Implementasi method abstract dari Vehicle
    public function move(): void
    {
        echo $this->name . " bergerak di jalan.\n";
    }

    // Menggunakan default method refuel dari Fuelable tanpa override
    public function refuel(): void
    {
        echo $this->name . "Isi bahan bakar mobil\n";
    }
}
