<?php
include "koneksi.php";

if (isset($_GET['periode'])) {
    $periode = $_GET['periode'];

    // Hindari SQL injection menggunakan prepared statement
    $query = mysqli_prepare($koneksi, "DELETE FROM data_forecasting WHERE periode = ?");
    mysqli_stmt_bind_param($query, 's', $periode);

    if (mysqli_stmt_execute($query)) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }

    mysqli_stmt_close($query);
} else {
    echo "Periode tidak ditemukan.";
}

// Setelah menghapus, alihkan kembali ke halaman upload.php
header("Location: upload.php");
?>
