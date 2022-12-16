<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Halaman Tambah</title>
    <link rel="icon" href="foto/logo.png">
</head>

<body style="background-image: url(foto/bgcolor2.jpeg);">
    <div class="col-lg-12 text-center mt-5 mb-5">
        <h3 class="display-4">Tambah Data Produk</h3>
    </div>
    <form action="prosestambah.php" method="post">
        <table>
            <tr>
                <td>Kode Produk</td>
                <td>: </td>
                <td><input type="number" name="kodeproduk" required> </td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td>: </td>
                <td><input type="text" name="namaproduk" required> </td>
            </tr>
            <tr>
                <td>Jenis Produk</td>
                <td>: </td>
                <td><input type="text" name="jenisproduk" required> </td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>: </td>
                <td><input type="number" name="stok" required> </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td><input type="submit" name="tambah" value="Tambah"> </td>
            </tr>
        </table>
    </form>
    <p class="text-center"><a href="produk.php">Back</a>
</body>

</html>