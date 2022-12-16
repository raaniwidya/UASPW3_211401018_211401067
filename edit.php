<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Halaman Update</title>
    <link rel="icon" href="foto/logo.png">
</head>

<body style="background-image: url(foto/bgcolor2.jpeg);">
    <div class="col-lg-12 text-center mt-5 mb-5">
        <h3 class="display-4">Edit Data Produk</h3>
    </div>

        <!--Edit data produk-->

        <?php

        include('koneksi.php');
        $kodeproduk = $_GET['kodeproduk'];
        $show = mysqli_query($koneksi, "select * from produk where kodeproduk = '$kodeproduk'");
        if (mysqli_num_rows($show) == 0) {
            echo '<script>window.history.back()</script>';
        } else {
            $d = mysqli_fetch_assoc($show);
        }

        ?>

        <!--Edit data produk-->

        <form action="prosesedit.php" method="post">
            <input type="hidden" name="kodeproduk" value="<?php echo $kodeproduk; ?>">
            <table>
                <tr>
                    <td>Nama produk</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="namaproduk" size="33" value="<?php echo $d['namaproduk']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Jenis produk</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="jenisproduk" size="33" value="<?php echo $d['jenisproduk']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="stok" size="33" value="<?php echo $d['stok']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
            </table>
        </form>
        <p class="text-center"><a href="produk.php">Back</a> </p>

</body>

</html>