<?php

// Trait dengan method default untuk mengisi bahan bakar
trait Fuelable
{
    public function refuel(): void
    {
        echo "Mengisi bahan bakar umum.\n";
    }
}
