<?php
// Konfigurasi koneksi ke database
include 'connection.php';

$conn = getConnection();

try {
    // Data yang akan diupdate
    $kode_kategori = $_POST["kode_kategori"];

    // Query UPDATE
    $stmt =$conn->prepare("DELETE FROM kategori WHERE kode_kategori = :kode_kategori");

    // Mengikat parameter dengan nilai
    $stmt->bindParam(':kode_kategori', $kode_kategori);

    // Menjalankan query
    $stmt->execute();

    echo "Kategori berhasil dihapus.";

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
