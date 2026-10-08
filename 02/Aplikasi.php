<?php

require 'Mahasiswa.php';

// Kelas Main untuk menjalankan program
class Aplikasi
{
    public static function main(array $args): void
    {
        $soja = new Mahasiswa();
        $soja->tampilkanInfo();

        // memberikan value Soja Purnamasari ke property nama dari objek soja
        $soja->setNama("Soja Purnamasari");
        echo "Nama : " . $soja->getNama() . "\n";

        $soja->setNim("4523210104");
        echo "NIM : " . $soja->getNim() . "\n";

        $soja->setUmur(15);
        echo "Umur : " . $soja->getUmur() . "\n";

        // Constructor lengkap
        $nenden = new Mahasiswa("Nenden Nuraini", "4523210144", 17);
        $nenden->tampilkanInfo();
    }
}

Aplikasi::main([]);
