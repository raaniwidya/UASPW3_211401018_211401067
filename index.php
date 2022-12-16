<?php
session_start();
include "koneksi.php";
if (!isset($_SESSION['username'])) {
  header("location:login.php");
}
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
}
?>

<html>

<head>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <!-- Link CSS -->
  <link rel="stylesheet" href="style2.css">

  <title>Miracle Aesthetic Clinic</title>
  <link rel="icon" href="foto/logo.png">
</head>

<body id="utama">
  <!--Navbar start-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#"><img src="foto/logo.png" style="max-height: 44px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#utama">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutus">About Us</a>
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
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav mr-sm-2">
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <!--Navbar end-->

  <!--Carousel start-->
  <section id="slide">
    <div id="carouselExampleCaptions" class="carousel slide mt-5" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="foto/slide1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="foto/slide2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="foto/slide3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
  </section>
  <!--Carousel end-->

  <!--About start-->
  <section id="aboutus">
    <div class="row mt-5">
      <div class="col-lg-12 text-center">
        <h3 class="display-3">About Us</h3>
      </div>
    </div>
    <div class="container">
      <div class="row text-center mt-4 mb-5">
        <div class="col text-justify">
          Dr. Lanny Junarti bersama dr. Jopy Wikana, mewujudkan mimpinya membangun dan mengelola klinik sebagai solusi bagi problem kecantikan dan kesehatan kulit, tepat pada tanggal 25 Juli 1996, Miracle pertama berdiri di jalan Bengawan No. 39 Surabaya. Pada tahun 2000, Miracle memberanikan diri membuka cabang kedua di Denpasar, Bali, untuk menjawab tantangan pada saat itu, yaitu membangun kesadaran masyarakat Bali akan pentingnya perawatan kulit. Tidak hanya di Jawa dan Bali, hanya berselang satu tahun setelah cabang Denpasar dibuka, Miracle membuka cabang ketiganya di kota Balikpapan pada tahun 2001. Masyarakat di Balikpapan sangat antusias dengan kehadiran Miracle pada saat itu. Setelah membuka beberapa cabang di berbagai kota, tiba waktunya membuka cabang di ibukota. Pada September 2006, Dewi Purnamawati Mustakim menahkodai Miracle Cabang Kemang yang kemudian menjadi cikal bakal lahirnya cabang-cabang Miracle Lainnya di Ibukota. Tantangannya pada saat itu adalah memperkenalkan dan menanamkan brand Miracle dalam benak Masyarakat dan media massa Jakarta.
        </div>
        <div class="col text-justify">
          Bagi Miracle, kepuasan pelanggan adalah prioritas utama. Untuk itu, Miracle terus menerus meningkatkan keterampilan stafnya, baik hard skill maupun soft skill, melalui pelatihan berkesinambungan. Untuk memberikan standarisasi kompetensi sumber daya manusia di semua cabang, maka didirikanlah Miracle Academy pada tahun 2008. Tahun 2009 merupakan tahun penuh semangat bagi Miracle. Tak tanggung-tanggung, Miracle membuka 3 cabang sekaligus di Jl. Kertajaya Indah Surabaya, Malang, dan Makassar. Miracle Mendirikan cabang di ibukota Sumatera Utara, Kota Medan dan Miracle cabang Lombok di Kota Mataram pada Tahun 2010. Mengulang semangat yang sama dengan tahun 2009, pada tahun 2011 Miracle kembali membuka 3 cabang secara bersamaan. Kali ini Miracle membuka cabang di kota Manado, Jakarta, dan Yogyakarta. Di Jakarta tepatnya di Mal Taman Anggrek. Semakin berkembang, Miracle terus menjangkau kota-kota besar di pulau Jawa demi terus meningkatkan pelayanan kepada pelanggan. Tahun 2012, Miracle cabang Semarang didirikan oleh dr. Lidya Barasjid.
        </div>
      </div>
    </div>
  </section>

  <section id="why">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h3 class="display-3 mt-5">Why Miracle</h3>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-4 mt-5 mb-4">
          <div class="card mb-5">
            <div class="text-center">
              <img src="foto/ikon1.jpeg" width=50 height=50 alt="">
              <h5 class="text-center">Pengalaman</h5>
            </div>
            <div class="card-body" style="background-color: white;">
              <p class="card-text text-justify">Lebih dari 26 tahun dengan total 20 klinik adalah bukti bahwa Miracle tetap menjadi klinik estetika terdepan dan terpercaya di Indonesia.</p>
            </div>
          </div>
        </div>
        <div class="col-4 mt-5 mb-4">
          <div class="card">
          <div class="text-center mt-1">
              <img src="foto/nyaman.jpeg" width=40 height=40 alt="">
              <h5 class="text-center">Nyaman</h5>
            </div>
            <div class="card-body" style="background-color: white">
              <p class="card-text text-justify">Mengutamakan kenyamanan dan privasi pelanggan. Ruang tunggu nyaman, serta tidak sakit selama melakukan perawatan.</p>
            </div>
          </div>
        </div>
        <div class="col-4 mt-5 mb-4">
          <div class="card">
          <div class="text-center">
              <img src="foto/aman.jpeg" width=50 height=50 alt="">
              <h5 class="text-center">Aman</h5>
            </div>
            <div class="card-body" style="background-color: white">
              <p class="card-text text-justify">Standard hygiene dan sterilitas tidak dikompromikan. Perawatan dilakukan berdasarkan protokol yang telah distandarkan di setiap cabang.</p>
            </div>
          </div>
        </div>
        <div class="col-4 mt-5 mb-4">
          <div class="card">
          <div class="text-center">
              <img src="foto/sdm.jpeg" width=50 height=50 alt="">
              <h5 class="text-center">Sumber Daya Manusia</h5>
            </div>
            <div class="card-body" style="background-color: white">
              <p class="card-text text-justify">Mulai dari keramahan frontline, beauty therapist yang berpengalaman, perawat yang terampil dan cekatan, dokter yang terlatih sesuai dengan kompetensinya (aesthetic, dermatologist, plastic surgeon).</p>
            </div>
          </div>
        </div>
        <div class="col-4 mt-5 mb-4">
          <div class="card mb-5">
          <div class="text-center mt-1">
              <img src="foto/efektif.jpeg" width=50 height=50 alt="">
              <h5 class="text-center">Efektif</h5>
            </div>
            <div class="card-body" style="background-color: white">
              <p class="card-text text-justify">Memberi hasil yang nyata (efektif) karena didukung oleh produk berkualitas dan peralatan canggih yang terus mengikuti perkembangan terkini di bidang estetik.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About end -->

  <!-- Contact start -->
  <section id="contact">
    <div class="row">
      <div class="col-lg-12 text-center mt-5">
        <h3 class="display-3">Contact</h3>
      </div>
    </div>
    <div class="icon ml-5 mt-3 mb-5">
      <p class="text-left"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
          <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z" />
          <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1Zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3V1Z" />
        </svg> : Jl. Hayam Wuruk No. 19 Petisah Hulu Medan 20153</p>
      <p class="text-left"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
        </svg> : +62-61-456 3188</p>
      <p class="text-left"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
          <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
        </svg> : +62 821-6175-8701</p>
      <p class="text-left"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
          <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z" />
          <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z" />
        </svg> : medan@miracle-clinic.com</p>
      <p class="text-left"><a href="https://www.instagram.com/miracle_medan/"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" class="bi bi-instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
        </svg></a> : @miracle_medan</p>
    </div>
  </section>
  <!-- Contact end -->

  <!---footer start-->
  <footer class="footer text-center" >
    <img src="foto/logo.png" width=55px ><hr>&copy;2022 Miracle Aesthetic Clinic
  </footer>
  <!---footer end-->

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>