<?php
require "connect.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $query = "DELETE FROM buku WHERE id = $id";
    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>
            alert('Data buku berhasil dihapus.');
            window.location.href = 'list_buku.php';
        </script>";
    } else {
        echo "<script>
            alert('Gagal menghapus data buku.');
            window.history.back();
        </script>";
    }
}

mysqli_close($conn);
?>
