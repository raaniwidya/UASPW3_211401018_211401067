<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <title>Product - Miracle Aesthetic Clinic</title>
    <link rel="icon" href="foto/logo.png">
</head>

<body style="background-image: url(foto/bgcolor2.jpeg);">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="foto/logo.png" style="max-height: 44px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Service
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="treatment.php">Treatment</a>
                        <a class="dropdown-item" href="produk.php">Product</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-sm-2">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="col-lg-12 text-center mt-5 mb-5">
            <h3 class="display-3">Daftar Produk</h3>
        </div>
        <a href="tambah.php">
            <h4 class="text-center" style="color: black;">Add Product</h4>
        </a>
        <table class="table table-striped-dark" style="text-align: center">
            <thead class="table-light">
                <th>No.</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Jenis Produk</th>
                <th>Stok</th>
                <th>Opsi</th>
            </thead>

            <?php
            include_once 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from produk");
            while ($d = mysqli_fetch_array($data)) {
            ?>

                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['kodeproduk']; ?></td>
                    <td><?php echo $d['namaproduk']; ?></td>
                    <td><?php echo $d['jenisproduk']; ?></td>
                    <td><?php echo $d['stok']; ?></td>
                    <td>
                        <a href="edit.php ?kodeproduk=<?php echo $d['kodeproduk']; ?>">Update</a>
                        <a href="hapus.php ?kodeproduk=<?php echo $d['kodeproduk']; ?>">Delete</a>
                    </td>
                </tr>

            <?php
            }
            ?>

        </table>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>