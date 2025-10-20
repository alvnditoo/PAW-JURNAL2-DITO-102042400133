<?php
require "./connect.php";

if (isset($_POST["update"])) {
    $id = $_POST["id"];

    $judul = $_POST["judul"];
    $penulis = $_POST["penulis"];
    $penerbit = $_POST["penerbit"];
    $tahun_terbit = $_POST["tahun_terbit"];
    $genre = $_POST["genre"];
    $jumlah_halaman = $_POST["jumlah_halaman"];
    $stok = $_POST["stok"];

     $query = "UPDATE buku SET 
                judul = '$judul',
                penulis = '$penulis',
                penerbit = '$penerbit',
                tahun_terbit = '$tahun_terbit',
                genre = '$genre',
                jumlah_halaman = '$jumlah_halaman',
                stok = '$stok'
              WHERE id = $id";

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>
            alert('Data buku berhasil diperbarui!');
            window.location.href = 'detail_buku.php?id=$id';
        </script>";
    } else {
        echo "<script>
            alert('Tidak ada perubahan data atau update gagal.');
            window.history.back();
        </script>";
    }

}
?>
