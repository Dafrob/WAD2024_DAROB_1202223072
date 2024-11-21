<?php

class DashboardController {
    private $conn;
    public function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        require_once 'config/database.php';
        $this->conn = $conn;
    }

    public function index() {
        $conn = $this->conn;
        // TODO: Implementasi sistem autentikasi dengan langkah berikut:
        // 1. Cek apakah user sudah login dengan memeriksa session login menggunakan isset()
        if (isset($input["login"])) {
        // 2. Jika belum login:
        //    - Cek apakah ada cookie 'nim' dan 'password' menggunakan isset()
        if (isset($cookie['nim']) && !isset($_SESSION['password'])) {
        //    - Jika ada cookie:
        //      * Ambil nilai nim dari cookie dan simpan di variabel $nim
        $nim = $_COOKIE($nim);
        //      * Ambil nilai password dari cookie dan simpan di variabel $password
        $password = $_COOKIE($password);
        //      * Buat query untuk mencari mahasiswa dengan nim tersebut dan simpan di variabel $query
        $query = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
        //      * Eksekusi query dengan mysqli_query dan simpan di variabel $result
        $result = mysqli_query($conn, $query);
        //      * Ambil hasil dengan mysqli_fetch_assoc dan simpan di variabel $data_mahasiswa
        if (mysqli_num_rows($result) == 1) {
            $data_mahasiswa = mysqli_fetch_assoc($result);
        //      * Jika mahasiswa ditemukan dan password valid (gunakan password_verify):
            $_SESSION["login"] = true;
            $_SESSION["id"] = $data['id'];
            header("Location: home.php");
            exit;   
        //        - Set session login = true
        //        - Set session user dengan $data_mahasiswa
        //        - Set session message = "Login Berhasil (Melalui Cookie)"
        //      * Jika tidak valid:
         } else {
        setcookie("id", "", time() - 3600, "/");
    }
}

        //        - Set session message = "Login Gagal (Melalui Cookie)"
        //        - Redirect ke halaman login menggunakan header('Location: index.php?controller=auth&action=login')
        //        - Exit
        //    - Jika tidak ada cookie:
        //      * Set session message = "Please login first"
        //      * Redirect ke halaman login menggunakan header('Location: index.php?controller=auth&action=login')
        //      * Exit

        // TODO: Ambil data mahasiswa yang sedang login
        // 1. Ambil nim dari session user (gunakan $_SESSION['user']['nim']) dan simpan di variabel $nim
        // 2. Buat query untuk mengambil data mahasiswa berdasarkan nim dan simpan di variabel $query
        // 3. Eksekusi query dengan mysqli_query dan simpan di variabel $result
        // 4. Ambil hasil query dengan mysqli_fetch_assoc dan simpan ke variabel $mahasiswa

        include 'views/dashboard/index.php';
    }
}
}
?>