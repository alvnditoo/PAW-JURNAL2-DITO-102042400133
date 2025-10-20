<?php
require "connect.php";

if (isset($_POST["create"])) {
    $judul          = $_POST["xjudul"];
    $penulis        = $_POST["xpenulis"];
    $penerbit       = $_POST["xpenerbit"];
    $tahun_terbit   = $_POST["xtahun_terbit"];
    $genre          = $_POST["xgenre"];
    $jumlah_halaman = $_POST["xjumlah_halaman"];
    $stok           = $_POST["xstok"];

    $query = "INSERT INTO buku 
        (judul, penulis, penerbit, tahun_terbit, genre, jumlah_halaman, stok, tanggal_input) 
        VALUES 
        ('$judul', '$penulis', '$penerbit', '$tahun_terbit', '$genre', '$jumlah_halaman', '$stok', NOW())";
        mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>
            alert('Data buku berhasil ditambahkan!');
            window.location.href = 'list_buku.php';
        </script>";
    } else {
        echo "<script>
            alert('Gagal menambahkan data buku.');
            window.history.back();
        </script>";
    }

}
?>
