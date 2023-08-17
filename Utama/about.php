<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cilacap Tourism</title>
    <link rel="icon" href="img/CilacapTourism_Logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- magnific CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <!-- niceselect CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- slick CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Oleo+Script:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        
        <div class="main_menu_iner">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="about.php"> <img src="img/CilacapTourism_Logo.png" width="150" alt="logo"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item justify-content-left" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.php">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pariwisata.php">Pariwisata</a>
                                    </li>
                                </ul>
                            </div>
                            <?php if(isset($_SESSION['status_login'])){?>
                                <a href="../Admin/dashboard.php" class="btn_1 d-none d-lg-block" style="font-family: Arial, Helvetica, sans-serif; border-radius: 7px" >Dash.. Admin</a>
                            <?php } else{ ?>
                            <a href="../Admin/login.php" class="btn_1 d-none d-lg-block" style="font-family: Arial, Helvetica, sans-serif; border-radius: 7px" >Admin</a>
                            <?php } ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Kota Cilacap</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- Sejarah Cilacap-->
    <section class="about_us section_padding">
        <div class="container">
            <h1 class="text-center mb-5" style="font-size:4em;font-weight:800;">Sejarah Kota Cilacap</h1>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_img">
                        <img src="img/SejarahCilacap.jpg" alt="#"> 
                        <br> <br>
                        <img src="img/SejarahCilacap2.jpg" alt="#">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_text text-justify">
                        <p>Penelusuran sejarah zaman kerajaan Jawa diawali sejak zaman Kerajaan Mataram Hindu sampai dengan Kerajaan Surakarta. Pada akhir zaman Kerajaan Majapahit (1294-1478) daerah cikal-bakal Kabupaten Cilacap terbagi dalam wilayah-wilayah Kerajaan Majapahit, Adipati Pasir Luhur dan Kerajaan Pakuan Pajajaran, yang wilayahnya membentang dari timur ke arah barat : Wilayah Ki Gede Ayah dan wilayah Ki Ageng Donan dibawah kekuasaan Kerajaan Majapahit. Wilayah Kerajaan Nusakambangan dan wilayah Adipati Pasir Luhur. Wilayah Kerajaan Pakuan Pajajaran.</p><br>
                        <p>Menurut Husein Djayadiningrat, Kerajaan Hindu Pakuan Pajajaran setelah diserang oleh kerjaan Islam banten dan Cirebon jatuh pada tahun 1579, sehingga bagian timur Kerajaan Pakuan Pajajaran diserahkan kepada Kerajaan Cirebon.</p><br>
                        <p>Oleh karena itu seluruh wilayah cikal-bakal Kabupaten Cilacap disebelah timur dibawah kekuasaan Kerajaan Islam Pajang dan sebelah barat diserahkan kepada Kerajaan Cirebon. Kerajaan Pajang diganti dengan Kerajaan Mataram Islam yang didirikan oleh Panembahan Senopatipada tahun 1587-1755, maka daerah cikal bakal Kabupaten Cilacap yang semula di bawah kekuasaan Kerajaan Islam Pajang diserahkan kepada Kerajaan Mataram .</p><br>
                        <p>Pada tahun 1595 Kerajaan Mataram mengadakan ekspansi ke Kabupaten Galuh yang berada di wilayah Kerajaan Cirebon. Menurut catatan harian Kompeni Belanda di Benteng Batavia, tanggal 21 Pebruari 1682 diterima surat yang berisi terjemahan perjalanan darat dari Citarum, sebelah utara Karawang ke Bagelen. Nama-nama yang dilalui dalam daerah cikal-bakal Kabupaten Cilacap adalah Dayeuhluhur dan Limbangan.</p><br>
                        <h6 class="text-justify">( Sumber : https://cilacapkab.go.id/v3/sejarah-cilacap/ )</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sejarah Cilacap end-->

    <!-- Tentang Cilacap -->

    <section class="about_us" style="background-color: #0c3e72;">
        <div class="container pt-5 pb-5">
            <h1 class="text-center mb-5" style="font-size:4em;font-weight:800;color:#eeeeee;padding-top:100px; padding-bottom:20px">Tentang Kota Cilacap</h1>
            <p class="text-justify" style="color:#eeeeee;">Cilacap merupakan kota yang terkenal dengan Pulau Nusa Kambangan. Di mana pulau tersebut merupakan tembat berdirinya rumah tahanan bagi pelaku kriminal berat.</p><br>
            <div class="row" style="margin-bottom: 70px;">
                <div class="col-lg-6">
                    <div class="about_text text-justify">
                        <p style="color: #eeeeee;">Selain itu kota ini juga terkenal dengan aksen atau logat bicaranya yang sering di sebut orang “bahasa ngapak”, seperti yang sering dibilang orang sana “ora ngapak ora kepenak “. Disamping hal tersebut, ternyata kota Cilicap memiliki potensi wisata yang sangat layak kamu kunjungi jika berkunjung ke kota ini. Banyak tempat wisata yang menggiurkan di kota ini. Selain yang berada di kotanya ataupun yang berada di Pulau Nusa Kambangan yang masih menjadi bagian dari Cilacap.</p>
                        <p style="color: #eeeeee;">Sebelum kamu mengunjungi kota ini atau ingin berlibur ke kota ini, alangkah baiknya mencari informasi mengenai tempat wisata Cilacap yang hendak kamu kunjungi.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_img">
                        <img src="img/tentangcilacap.jpg" alt="#"> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tentang Cilacap end-->

    <!-- Google maps -->
  <div class="text-center">
    <div class="my-5">
       <h1 class="text-center mb-5" style="font-size:4em;font-weight:800;">Gambar Wilayah Kota Cilacap</h1>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63260.51424653689!2d108.9912949702589!3d-7.7065121315520955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e650c8d0abed43b%3A0x4027a76e3530950!2sCilacap%2C%20Kabupaten%20Cilacap%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1690027319779!5m2!1sid!2sid" width="1150" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <!-- End Google maps -->

    <!--::gallery part start::-->
    <section class="our_gallery section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>Galeri Kota Cilacap</h2>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-12">
                    <div class="card-columns">
                        <div class="card">
                            <a href="img/gallery/galericilacap1.png" class="gallery_img">
                                <img src="img/gallery/galericilacap1.png" class="card-img-top" alt="">
                            </a>
                        </div>
                        <div class="card">
                            <a href="img/gallery/galericilacap2.png" class="gallery_img">
                                <img src="img/gallery/galericilacap2.png" class="card-img-top" alt="">
                            </a>
                        </div>
                        <div class="card">
                            <a href="img/gallery/galericilacap3.jpg" class="gallery_img">
                                <img src="img/gallery/galericilacap3.jpg" class="card-img-top" alt="">
                            </a>
                        </div>
                        <div class="card">
                            <a href="img/gallery/galericilacap4.jpg" class="gallery_img">
                                <img src="img/gallery/galericilacap4.jpg" class="card-img-top" alt="">
                            </a>
                        </div>
                        <div class="card">
                            <a href="img/gallery/galericilacap5.jpg" class="gallery_img">
                                <img src="img/gallery/galericilacap5.jpg" class="card-img-top" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::gallery part end::-->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="single-footer-widget">
                        <h4 style="font-family: Arial, Helvetica, sans-serif">Menu Cilacap Tourism</h4>
                        <ul>
                            <li><a href="about.php">About Cilacap</a></li>
                            <li><a href="pariwisata.php">Pariwisata</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-footer-widget footer_icon">
                        <h4 style="font-family: Arial, Helvetica, sans-serif">Hubungi Kami</h4>
                        <p >Jl. DI Panjaitan No.128, Karangreja, Purwokerto Kidul, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah 53147<br>+628xxxxxxxx</p>
                        <span>CilacapTourism@gmail.com</span>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/"><i class="ti-facebook"></i></a>
                            <a href="https://twitter.com/"><i class="ti-twitter-alt"></i></a>
                            <a href="https://www.instagram.com/"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <p class="footer-text m-0">
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> Cilacap Tourism
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- magnific js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- masonry js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- masonry js -->
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>