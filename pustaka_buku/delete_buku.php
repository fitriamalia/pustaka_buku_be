<?php
// Konfigurasi koneksi ke database
include 'connection.php';

$conn = getConnection();

try {
    // Data yang akan diupdate
    $kode_buku = $_POST["kode_buku"];

    // Query UPDATE
    $stmt =$conn->prepare("DELETE FROM buku WHERE kode_buku = :kode_buku");

    // Mengikat parameter dengan nilai
    $stmt->bindParam(':kode_buku', $kode_buku);

    // Menjalankan query
    $stmt->execute();

    echo "Buku berhasil dihapus.";

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
