<?php

// Kelas Mahasiswa dengan constructor overloading, setter, dan getter
class Mahasiswa
{
    // Variabel instance
    private string $nama;
    private string $nim;
    private int $umur;

    // Constructor (menggantikan 3 constructor Java)
    public function __construct(string $nama = "Belum Diisi", string $nim = "Belum Diisi", int $umur = 0)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->umur = $umur;
    }

    // Getter dan Setter untuk nama
    public function getNama(): string
    {
        return $this->nama;
    }

    public function setNama(string $nama): void
    {
        $this->nama = $nama;
    }

    // Getter dan Setter untuk nim
    public function getNim(): string
    {
        return $this->nim;
    }

    public function setNim(string $nim): void
    {
        $this->nim = $nim;
    }

    // Getter dan Setter untuk umur
    public function getUmur(): int
    {
        return $this->umur;
    }

    public function setUmur(int $umur): void
    {
        $this->umur = $umur;
    }

    // Method untuk menampilkan informasi mahasiswa
    public function tampilkanInfo(): void
    {
        echo "Nama: " . $this->nama . "\n";
        echo "NIM: " . $this->nim . "\n";
        echo "Umur: " . $this->umur . "\n";
    }
}
