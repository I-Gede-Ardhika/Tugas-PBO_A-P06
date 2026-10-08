<?php

require_once 'BangunDatar.php';

class Persegi extends BangunDatar
{
    private int $sisi;

    public function __construct(int $sisi)
    {
        $this->sisi = $sisi;
    }

    public function luas(): float
    {
        return $this->sisi * $this->sisi;
    }

    public function keliling(): float
    {
        return $this->sisi * 4;
    }
}
