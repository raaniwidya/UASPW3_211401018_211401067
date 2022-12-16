<?php

    if(isset($_POST['tambah']))
    {
        include_once 'koneksi.php';
        $kodeproduk      = $_POST['kodeproduk'];
        $namaproduk      = $_POST['namaproduk'];
        $jenisproduk     = $_POST['jenisproduk'];
        $stok           = $_POST['stok'];
        
        $input  = mysqli_query($koneksi, "insert into produk values
        ('$kodeproduk', '$namaproduk', '$jenisproduk', '$stok')");
        
        if($input)
        {
            echo "<h3>Data berhasil ditambahkan</h3>";
            echo "<script>window.location='produk.php'</script>";
        }
        else
        {
            echo "Gagal menambahkan data";
            echo "<a href = 'tambah.php'>Kembali</a>";
        }
        
    }
    else
    {
        echo "<script>window.history.back()</script>";
    }


?>