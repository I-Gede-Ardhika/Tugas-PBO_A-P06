# Tugas-PBO_A-P06

notes:
1. saya menggunakan extention code runner untuk menampilkan output file php

folder 01:

Output:

Main.php:
<img width="871" height="191" alt="image" src="https://github.com/user-attachments/assets/310e1c1d-81a0-4ddd-8225-5d8670983533" />

perubahan dasar dan per file:

Main.php:
1. saya menambahkan "Main::main([]);" pada file main.php agar bisa dirun
2. saya menambahkan "require 'iPhone.php';" pada file main.php agar bisa membuat objek Iphone dari class iphone

Iphone.php:
1. Konstruktor Java bernama sama dengan class, sedangkan di PHP namanya __construct.


folder 02:

Output:

Aplikasi.php
<img width="916" height="243" alt="image" src="https://github.com/user-attachments/assets/4b5b40b9-2202-4be3-9d46-b16e32160b59" />

perubahan dasar dan per file:

Mahasiswa.php:
1. Constructor overloading tidak ada di PHP. Satu class hanya boleh punya satu __construct, jadi tiga constructor Java digabung menjadi satu dengan nilai default pada parameternya.


folder 03:

Output:

App.php:
<img width="855" height="223" alt="image" src="https://github.com/user-attachments/assets/40f5657f-1831-4191-966d-4e732300a4fb" />

Main.php:
<img width="862" height="361" alt="image" src="https://github.com/user-attachments/assets/6f2e7b5e-4123-411b-9d2e-0b03a8b89ac2" />

perubahan dasar dan per file:
1. Constructor Java bernama sama dengan class. Di PHP namanya selalu __construct.
2. extends tetap sama, tetapi file parent harus dimuat dulu dengan require_once. Java mencari class lain otomatis, PHP tidak.
3. super.tampilkanInfo() menjadi parent::tampilkanInfo(), dan super() menjadi parent::__construct().
4. Anotasi @Override dihapus karena PHP tidak memilikinya. Method di subclass dengan nama yang sama otomatis menimpa method parent.
5. Method main tetap dibuat sebagai method static, tetapi harus dipanggil manual di bagian bawah (App::main([]);, Main::main([]);) karena PHP tidak punya entry point otomatis.
6. Tipe kembalian pindah ke belakang method (float luas() menjadi luas(): float). String menjadi string, dan void tetap void.

BangunDatar.php:
1. Method luas() dan keliling() di BangunDatar di Java tidak punya modifier (package-private). Di PHP saya jadikan public supaya bisa dipanggil dari App dan di-override subclass.

Lingkaran.php
1. Math.PI menjadi M_PI
2. Karena Segitiga tidak punya keliling(), pemanggilan $sg->keliling() otomatis memakai method milik BangunDatar, sama seperti di Java.
3. Di Segitiga, Java membagi dua integer sehingga hasilnya dibulatkan ke bawah. Pembagian / di PHP menghasilkan desimal, jadi saya pakai intdiv() agar perilakunya sama.

Mahasiswa.php:
1. PHP tidak mendukung constructor overloading, jadi tiga constructor di Mahasiswa digabung menjadi satu dengan nilai default pada parameter.

MahasiswaInternational.php:
1. Di MahasiswaInternational, constructor 3 parameter (nama, nim, negara) dan 4 parameter (nama, nim, umur, negara) tidak bisa dibedakan lewat jumlah parameter saja. Karena itu parameter ketiga dibuat bertipe int|string dan dicek dengan is_string(). Kalau berisi string, berarti itu negara asal (kasus 3 parameter), dan kalau berisi angka, berarti itu umur (kasus 4 parameter atau tanpa parameter).
2. Properti private di parent tidak bisa diakses langsung oleh subclass, di Java maupun PHP. Karena itu MahasiswaInternational mengisinya lewat parent::__construct(...).


folder 04:

Output:

Main.php:
<img width="866" height="279" alt="image" src="https://github.com/user-attachments/assets/dca56db8-acfa-48a6-9351-040537ee71c4" />

perubahan dasar dan per file:

Handphone.php:
1. Properti protected tetap protected di PHP, sehingga subclass (Smartphone, FeaturePhone) bisa mengaksesnya langsung lewat $this->merk dan $this->model.
2. Constructor berubah menjadi __construct, System.out.println menjadi echo ... . "\n", dan tipe kembalian void ditulis setelah tanda kurung.

Smartphone.php:
1. Ditambahkan require_once 'Handphone.php'; karena PHP tidak memuat parent class otomatis seperti Java.
2. super(merk, model) menjadi parent::__construct($merk, $model).
3. @Override dihapus karena PHP tidak memerlukannya. Method dengan nama yang sama otomatis menimpa method parent.
4. Di Java merk dan model ditulis langsung, di PHP harus $this->merk dan $this->model.

FeaturePhone.php:
1. Perubahannya sama dengan Smartphone.php: require_once untuk parent, parent::__construct(...), @Override dihapus, dan akses properti lewat $this->.
2. Method mainGameSnake() hanya ada di class ini, sama seperti di Java.

Main.php:
1. Handphone[] daftarHandphone = new Handphone[2]; menjadi $daftarHandphone = [];. Array PHP tidak punya tipe maupun ukuran tetap, jadi cukup dibuat kosong lalu diisi.
2. Loop for (Handphone hp : daftarHandphone) menjadi foreach ($daftarHandphone as $hp).
3. instanceof tetap sama, tetapi else if menjadi elseif (boleh juga else if).
4. Casting ((Smartphone) hp).aksesInternet() tidak diperlukan di PHP. PHP bertipe dinamis, sehingga setelah dicek dengan instanceof, method langsung dipanggil lewat $hp->aksesInternet().
5. Method main dipanggil manual lewat Main::main([]); karena PHP tidak punya entry point otomatis.


folder 05:

Output:

Main.php:
<img width="864" height="213" alt="image" src="https://github.com/user-attachments/assets/585d3b07-2917-4349-a629-cee2d86fa82a" />

perubahan dasar dan per file:

Pasien.php:
1. Constructor menjadi __construct, tipe String menjadi string, dan tipe kembalian ditulis setelah tanda kurung (getNama(): string).

Dokter.php:
1. Ditambahkan require_once 'Pasien.php'; karena Dokter memakai class Pasien, dan PHP tidak memuat class lain secara otomatis.
2. Parameter Pasien pasien menjadi Pasien $pasien.
3. Dokter hanya menerima Pasien lewat parameter method dan tidak menyimpannya sebagai properti.

Pemain.php:
1. Constructor menjadi __construct, tipe String menjadi string, dan tipe kembalian ditulis setelah tanda kurung (getNama(): string).

Tim.php:
1. import java.util.List; dihapus. PHP tidak punya List<Pemain>, jadi diganti dengan tipe array bawaan.
2. Loop for (Pemain pemain : daftarPemain) menjadi foreach ($this->daftarPemain as $pemain). Properti harus ditulis dengan $this->.
3. daftar pemain dibuat di luar lalu diberikan ke Tim, sehingga pemain tetap ada walaupun Tim dihapus.

Bab.php:
1. Constructor menjadi __construct, tipe String menjadi string, dan tipe kembalian ditulis setelah tanda kurung (getNama(): string).

Buku.php:
1. import java.util.ArrayList; dan import java.util.List; dihapus. new ArrayList<>() menjadi array kosong [].
2. daftarBab.add(...) menjadi $this->daftarBab[] = ...
3. Pemanggilan tambahBab() di constructor menjadi $this->tambahBab(). Method private juga dipanggil lewat $this->.
4. objek Bab dibuat di dalam Buku, bukan diterima dari luar.

Main.php:
1. import java.util.Arrays; dihapus. Arrays.asList(pemain1, pemain2) menjadi literal array [$pemain1, $pemain2].
2. Semua require_once ditambahkan untuk memuat class yang dipakai.
3. buku = null; menjadi $buku = null;. Efeknya sama: objek Buku tidak lagi direferensikan sehingga ikut dibersihkan beserta objek Bab di dalamnya.
4. Method main dipanggil manual lewat Main::main([]);.


folder 06:

Output:

Main.php:
<img width="861" height="336" alt="image" src="https://github.com/user-attachments/assets/45f3931c-0f3f-47f3-8fc6-49469cf7a1d6" />

perubahan dasar dan per file:

Vehicle.php:
1. __construct, $this->, echo . "\n", dan tipe kembalian : void.

Movable.php:
1. di PHP ditulis public function dan diakhiri ; tanpa isi. Di Java cukup void move();.

Fuelable.php:
1. interface dengan default void refuel() diganti menjadi trait.

Car.php:
1. implements Movable, Fuelable menjadi implements Movable ditambah use Fuelable; di dalam class.
2. Method refuel() yang ditulis di class otomatis menimpa method milik trait, sama seperti override di Java.
3. require_once ditambahkan untuk parent, interface, dan trait.

Boat.php:
1. Perubahannya sama dengan Car.php: use Fuelable;, implements Movable, dan refuel() di class menimpa versi trait.

Motor.php:
1. Motor tidak menulis refuel(), sehingga memakai versi default dari trait Fuelable ("Mengisi bahan bakar umum."), sama seperti default method di Java.
2. Urutan implements Fuelable, Movable di Java tidak relevan lagi karena Fuelable sekarang dipakai lewat use.

Main.php:
1. System.out.println() kosong menjadi echo "\n";.
2. Method main dipanggil manual lewat Main::main([]);.
