<?php 

// Pastikan kelas induk User dimuat terlebih dahulu.
require_once 'User.php';

/**
 * Kelas Anak (Child Class) Admin.
 * Mewarisi semua properti dan metode dari kelas User.
 */
class Admin extends User
{
    private $akses_level = 'full';

    /**
     * Konstruktor Admin.
     * Tidak perlu parameter role karena sudah disetel di sini.
     */
    public function __construct($nama)
    {
        // 1. Memanggil konstruktor kelas induk (User)
        parent::__construct($nama);

        // 2. Mengubah properti kelas induk karena visibilitasnya protected
        $this->role = 'admin';
    }

    /**
     * Method Overriding: Menimpa metode salam() dari kelas User.
     */
    public function salam()
    {
        // Mengambil sapaan default dari kelas induk
        $pesan_induk = parent::salam();

        // Menambahkan detail khusus Admin
        return $pesan_induk . " Sebagai admin, saya memiliki **akses {$this->akses_level}**.";
    }

    /**
     * Metode khusus Admin.
     */
    public function kelolaSistem()
    {
        return "Admin {$this->nama} sedang mengelola data sistem.";
    }
}

