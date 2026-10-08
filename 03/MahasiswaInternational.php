<?php

require_once 'Mahasiswa.php';

// Kelas MahasiswaInternational (Subclass) yang mewarisi Mahasiswa
class MahasiswaInternational extends Mahasiswa
{
    // Variabel tambahan untuk mahasiswa internasional
    private string $negaraAsal;

    // Constructor (menggantikan 3 constructor Java)
    // new MahasiswaInternational()                           -> tanpa parameter
    // new MahasiswaInternational(nama, nim, negaraAsal)      -> 3 parameter
    // new MahasiswaInternational(nama, nim, umur, negaraAsal) -> 4 parameter
    public function __construct(
        string $nama = "Belum Diisi",
        string $nim = "Belum Diisi",
        int|string $umurAtauNegara = 0,
        ?string $negaraAsal = null
    ) {
        if (is_string($umurAtauNegara)) {
            // 3 parameter: nama, nim, negaraAsal
            parent::__construct($nama, $nim);
            $this->negaraAsal = $umurAtauNegara;
        } else {
            // tanpa parameter, atau 4 parameter: nama, nim, umur, negaraAsal
            parent::__construct($nama, $nim, $umurAtauNegara);
            $this->negaraAsal = $negaraAsal ?? "Belum Diisi";
        }
    }

    // Getter dan Setter untuk negara asal
    public function getNegaraAsal(): string
    {
        return $this->negaraAsal;
    }

    public function setNegaraAsal(string $negaraAsal): void
    {
        $this->negaraAsal = $negaraAsal;
    }

    // Override method tampilkanInfo untuk menampilkan informasi tambahan
    public function tampilkanInfo(): void
    {
        parent::tampilkanInfo(); // Memanggil method tampilkanInfo dari parent
        echo "Negara Asal: " . $this->negaraAsal . "\n";
    }
}
