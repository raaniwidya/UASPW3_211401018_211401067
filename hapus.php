<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Halaman Hapus</title>
    <link rel="icon" href="foto/logo.png">
</head>

<?php
if (isset($_GET['kodeproduk'])) {
    include('koneksi.php');
    $kodeproduk    = $_GET['kodeproduk'];
    $cek         = mysqli_query($koneksi, "select kodeproduk from produk
            where kodeproduk = '$kodeproduk'") or die($mysqli_error());

    if (mysqli_num_rows($cek) == 0) {
        echo "<script>window.history.back()</script>";
    } else {
        $del = mysqli_query($koneksi, "delete from produk where kodeproduk = '$kodeproduk'");
        if ($del) {
            echo "<h3>Data produk berhasil dihapus</h3>";
            echo "<script>window.location = 'produk.php';</script>";
        } else {
            echo "<h2>Gagal menghapus data</h2>";
            echo "<a href = 'index.php'>Kembali </a>";
        }
    }
} else {
    echo "<script>window.history.back()</script>";
}
?>

<body>

</body>

</html>