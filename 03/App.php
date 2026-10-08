<?php

require_once 'BangunDatar.php';
require_once 'Lingkaran.php';
require_once 'Persegi.php';
require_once 'Segitiga.php';

class App
{
    public static function main(array $args): void
    {
        $bd = new BangunDatar();

        $bd->luas();
        $bd->keliling();

        // instantiate / membuat objek lingkaran
        $lk = new Lingkaran(15);
        echo "Luas lingkaran: " . $lk->luas() . "\n";
        echo "keliling lingkaran: " . $lk->keliling() . "\n";

        // instantiate / membuat objek Persegi
        $pj = new Persegi(10);
        echo "Luas Bujur Sangkar: " . $pj->luas() . "\n";
        echo "keliling Bujur Sangkar: " . $pj->keliling() . "\n";

        // instantiate / membuat objek segitiga
        $sg = new Segitiga(10, 8);
        echo "Luas Segitiga: " . $sg->luas() . "\n";

        // karena class Segitiga tidak mendefinisikan keliling
        // maka ketika sg memanggil keliling(), yang terpanggil
        // adalah keliling() yang ada di parent/super class yaitu
        // BangunDatar
        $sg->keliling();
        // echo "keliling Segitiga: " . $sg->keliling() . "\n";
    }
}

App::main([]);
