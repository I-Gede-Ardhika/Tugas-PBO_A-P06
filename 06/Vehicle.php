<?php

// Abstract class
abstract class Vehicle
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    // Method umum yang bisa digunakan semua kendaraan
    public function showInfo(): void
    {
        echo "Kendaraan: " . $this->name . "\n";
    }
}
