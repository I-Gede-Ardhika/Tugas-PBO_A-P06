<?php

require_once 'Vehicle.php';
require_once 'Movable.php';
require_once 'Fuelable.php';

class Motor extends Vehicle implements Movable
{
    use Fuelable;

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    // Implementasi method abstract dari Vehicle
    public function move(): void
    {
        echo $this->name . " bergerak di tanah gravel.\n";
    }
}
