<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>

<body>

    <!--  Header Start -->

    <section class="header">

        <a href="home.php" class="logo">
            <img src="Images/logo/Logo.png" alt="Logo">
        </a>

        <nav class="navbar">
            <a href="home.php">Beranda</a>
            <a href="Tentang.php">Tentang</a>
            <a href="Kontak.php">Venue</a>
            <a href="Layanan.php">Booking</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- Header END -->
    <div class="heading" style="background:url(Images/bookpage.jpg) no-repeat">
        <h1>Halaman Booking</h1>
    </div>

    <!-- booking section start -->

    <section class="booking">

        <h1 class="heading-title">Pesanan Lo Sob!</h1>

        <form action="book_form.php" method="post" class="book-form"></form>

        <div class="flex">
            <div class="inputBox">
                <span>Nama : </span>
                <input type="text" placeholder="Masukan Nama" name="nama">
            </div>
            <div class="inputBox">
                <span>Email : </span>
                <input type="email" placeholder="Masukan Email" name="email">
            </div>
            <div class="inputBox">
                <span>No. Handphone : </span>
                <input type="number" placeholder="Masukan No. Hp" name="phone">
            </div>
            <div class="inputBox">
                <span>Alamat : </span>
                <input type="text" placeholder="Masukan Alamat" name="address">
            </div>
            <div class="inputBox">
                <span>Alamat : </span>
                <input type="text" placeholder="Masukan Alamat" name="address">
            </div>
        </div>


    </section>

    <!-- booking section end -->

















    <!-- footer -->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Beranda</a>
                <a href="Tentang.php"><i class="fas fa-angle-right"></i> Tentang</a>
                <a href="Kontak.php"><i class="fas fa-angle-right"></i> Venue</a>
                <a href="Layanan.php"><i class="fas fa-angle-right"></i> Booking</a>
            </div>
            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> Ask Question</a>
                <a href="#"><i class="fas fa-angle-right"></i> About</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privay Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> Term of Use</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> +68 21-8462-039</a>
                <a href="#"><i class="fas fa-envelope"></i> info@bsi.ac.id</a>
                <a href="#"><i class="fas fa-map"></i> Jakarta, Indonesia 13620</a>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a href="https://www.facebook.com/groups/ALLBSI/"> <i class="fab fa-facebook-f"></i> Facebook </a>
                <a href="https://www.facebook.com/groups/ALLBSI/"> <i class="fab fa-twitter"></i> Twitter </a>
                <a href="http://www.instagram.com/bsijatiwaringin"> <i class="fab fa-instagram"></i> Instagram </a>
            </div>
        </div>

        <div class="credit">created by<span> Futsal Finder Developer</span> | All Right Reserved! </div>
    </section>

    <!-- footer EBD -->


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>


</body>

</html>