<?php
class Mahasiswa3
{
    public $nama;        // nama boleh public
    private $nim;        // NIM harus private (encapsulation)

    // --- Konstruktor ---
    public function __construct($nama, $nim)
    {
        $this->nama = $nama;

        // panggil setter supaya langsung divalidasi
        $this->setNim($nim);
    }

    // --- Setter NIM dengan Validasi ---
    public function setNim($nim)
    {
        // Validasi: panjang NIM harus tepat 10 digit
        if (strlen($nim) == 10 && ctype_digit($nim)) {
            $this->nim = $nim;
            echo "<p style='color:green;'>NIM berhasil diubah menjadi $nim</p>";
        } else {
            echo "<p style='color:red;'>Gagal: NIM harus 7 digit! ($nim)</p>";
        }
    }

    // --- Getter NIM ---
    public function getNim()
    {
        return $this->nim;
    }

    // --- Method Say Hello ---
    public function sayHello()
    {
        echo "Halo, saya adalah Mahasiswa <strong>{$this->nama}</strong>.<br>";
        echo "NIM saya adalah <strong>{$this->nim}</strong>.<br>";
    }
}
