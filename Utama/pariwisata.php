<?php 
	include '../Utama/function.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);
?>

<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CilacapTourism</title>
    <link rel="icon" href="../Utama/img/CilacapTourism_Logo.png">
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
                            <a class="navbar-brand" href="pariwisata.php"> <img src="img/CilacapTourism_Logo.png" width="150" alt="logo"> </a>
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
                            <h2>Pariwisata Kota Cilacap</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->



	<!-- category -->
	<div class="section">
		<div class="container">
            <aside class="single_sidebar_widget search_widget mb-5 mt-5">
                            <form method="get" action="../Utama/produk.php">
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" name="search" style="border-radius: 15px; background-color: #ffffff" placeholder='Cari Tempat Wisata' autocomplete="off" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cari Tempat Wisata'" >
                                        <div class="input-group-append">
                                            <button class="btn" type="submit" name="cari" style="border: none; background-color: transparent">
                                                <i class="ti-search" style="color: #000000"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <button class="button rounded-0 primary-bg text-white w-100 btn_1" name="cari" type="submit">Search</button> -->
                            </form>
            </aside>
			<h3 style="font-family: Arial, Helvetica, sans-serif; font-weight: bold; text-align: center" >Kategori</h3>
			<div class="box" style="border: none; border-radius: 25px">
				<?php 
					$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
					if(mysqli_num_rows($kategori) > 0){
						while($k = mysqli_fetch_array($kategori)){
				?>
					<a href="../Utama/produk.php?kat=<?php echo $k['category_id']?>">
						<div class="col-5">
							<img src="../Utama/img/icon/iconwisata.png" width="50px" style="margin-bottom:5px;">
							<p><?php echo $k['category_name'] ?></p>
						</div>
					</a>
				<?php }}else{ ?>
					<p>Kategori Tidak Ada</p>
				<?php } ?>
			</div>
		</div>
	</div>

	<!-- wisata -->
	<div class="section">
		<div class="container">
			<h3 style="font-family: Arial, Helvetica, sans-serif; font-weight: bold; text-align: center">Tempat Wisata</h3>
			<div class="box" style="border: none; background-color: transparent; padding-left: 70px">
				<?php 
					$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 ORDER BY product_id DESC LIMIT 8");
					if(mysqli_num_rows($produk) > 0){
						while($p = mysqli_fetch_array($produk)){
				?>	
					<a href="../Utama/detail-produk.php?id=<?php echo $p['product_id'] ?>">
						<div class="col-4 ml-2 mr-2" style="border: none; border-radius: 20px; background-color: #ffffff">
							<img src="../Admin/produk/<?php echo $p['product_image'] ?>" >
							<p class="nama"><?php echo substr($p['product_name'], 0, 30) ?></p>
                            <p class="harga">Tiket Masuk Rp. <?php echo number_format($p['product_price']) ?></p>
						</div>
					</a>
				<?php }}else{ ?>
					<p>Produk Tidak Tersedia</p>
				<?php } ?>
			</div>
		</div>
	</div>
    <!--================Blog Area =================-->

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