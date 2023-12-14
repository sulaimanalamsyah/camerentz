<?php

if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login </br>";
    echo "<a href=$admin_url><b>LOGIN</b></a></center>";
} else {
  include "../lib/config.php";
  include "../lib/koneksi.php";

  $r['username'] = $_SESSION['namauser'];
  $user = $r['username'];

  $queryAdmin = mysqli_query($koneksi, "SELECT * FROM akun WHERE username ='$user' ");
  
  $hasilQuery = mysqli_fetch_array($queryAdmin);
      $username    = $hasilQuery['username'];
      $nama_admin  = $hasilQuery['nama']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Require meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Dashboard Admin Camerentz</title>

    <!-- Social network metas -->
    <meta name="author" content="@FikkriReza">
    <meta name="description" content="Open source responsive admin template with Bootstrap framework">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@FikkriReza">
    <meta name="twitter:creator" content="@FikkriReza">

    <meta property="fb:app_id" content="801699283982913">
    <meta property="og:url" content="https://rezafikkri.github.io/Reza-Admin">
    <meta property="og:title" content="Dashboard . Reza Admin">
    <meta property="og:description" content="Open source responsive admin template with Bootstrap framework">
    <meta property="og:image" content="https://rezafikkri.github.io/Reza-Admin/dist/img/rezaadmin.jpg">

	<!-- Bootstrap CSS first -->
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<!-- then Font Awesome -->
	<link rel="stylesheet" type="text/css" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- and Reza Admin CSS -->
	<link rel="stylesheet" type="text/css" href="dist/css/reza-admin.min.css">
	<!-- Favicon -->
	<link rel="icon" href="dist/img/Reza_Admin.ico">
</head>
<body>		
	
	<!-- sidebar -->
	

	<!-- main -->
	<main class="main main--ml-sidebar-width">
		<div class="row">
			<header class="main__header col-md-12 mb-2">
				<div class="main__title">
					<h4>Dashboard <?php echo $username?></h4>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="adminweb.php?module=home=admin">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ul>
				</div>				
			</header>

			<!-- info box -->
			<div class="mb-3 col-md-6 col-lg-4">
				<section class="info-box info-box--blue">
					<div class="info-box__icon"><span class="fa fa-shopping-cart"></span></div>
					<div class="info-box__description">
						<h2>Products</h2>
						<h1></h1>
						<time>Go to Products Page</time>
					</div>
					<a title="Detail Products" class="info-box__btn-detail" href="adminweb.php?module=produk"><span class="fa fa-arrow-right"></span></a>
				</section>
			</div>
			<div class="mb-3 col-md-6 col-lg-4">
				<section class="info-box info-box--green">
					<div class="info-box__icon"><span class="fa fa-users"></span></div>
					<div class="info-box__description">
						<h2>Members</h2>
						<h1></h1>
						<time>Go to Members Page</time>
					</div>
					<a title="Detail Members" class="info-box__btn-detail" href="adminweb.php?module=member"><span class="fa fa-arrow-right"></span></a>
				</section>
			</div>
			<div class="mb-3 col-md-6 col-lg-4">
				<section class="info-box info-box--orange">
					<div class="info-box__icon"><span class="fa fa-shopping-bag"></span></div>
					<div class="info-box__description">
						<h2>Orders</h2>
						<h1></h1>
						<time>Go to Orders Page</time>
					</div>
					<a title="Detail Orders" class="info-box__btn-detail" href="adminweb.php?module=penyewa"><span class="fa fa-arrow-right"></span></a>
				</section>
			</div>

			

			<!-- table -->
			
			</div>
		</div><!-- row -->
	</main>
	<!--  -->

	

	<!-- jQuery first, then Bootstrap JS, and Reza Admin JS-->
    <script src="dist/js/jquery-3.5.1.slim.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/reza-admin.min.js"></script>

    
		<?php } ?>
</body>
</html>
