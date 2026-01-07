<?php
// Konfigurasi database
$host = "localhost"; // Host database (biasanya "localhost")
$username = "root"; // Nama pengguna database
$password = ""; // Kata sandi database (kosong jika default XAMPP/MAMP/WAMP)
$dbname = "tolentop"; // Nama database Anda

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi berhasil!";
}

// Anda bisa menghilangkan baris echo di atas setelah pengujian
?>
