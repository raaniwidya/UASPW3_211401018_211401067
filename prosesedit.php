<?php

if (isset($_POST['simpan']))
{
    include('koneksi.php');
    $kodeproduk       = $_POST['kodeproduk'];
    $namaproduk       = $_POST['namaproduk'];
    $jenisproduk      = $_POST['jenisproduk'];
    $stok           = $_POST['stok'];
    $update     = mysqli_query($koneksi, "update produk set
    
    namaproduk        = '$namaproduk',
    jenisproduk       = '$jenisproduk',
    stok              = '$stok'
    
    where kodeproduk  = '$kodeproduk'")
        
    or die($mysqli_error());
    
    
    if($update)
    {
        echo "<h2>Data berhasil diupdate</h2>";
        echo "<script>window.location = 'produk.php'</script>";
    }
    
    else
    {
        echo "<h2>Gagal menyimpan data</h2>";
        echo "<a href ='edit.php ?kodeproduk = ".$kodeproduk."'>Kembali</a>";
    } 
}

else
{
        echo "<script>window.history.back()</script>";
}


?>