<?php 

if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
	echo "<center> untuk mengakses modul, anda harus login</br>";
	echo "<ahref=../../index.php?<b>Login</b></a></center>";
} else{

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
<link rel="stylesheet" href="../dist/css/bootstrap.min.css">
<!-- then Font Awesome -->
<link rel="stylesheet" type="text/css" href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css">
<!-- and Reza Admin CSS -->
<link rel="stylesheet" type="text/css" href="../dist/css/reza-admin.min.css">
<!-- Favicon -->
<link rel="icon" href="../dist/img/Reza_Admin.ico">
</head>
<body>		

<main class="main main--ml-sidebar-width">
	<header class="main__header col-md-12 mb-2">
			<div class="main__title">
				<h4>Dashboard <?php echo $username ?></h4>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="adminweb.php?module=home">Home</a></li>
					<li class="breadcrumb-item active">Kategori</li>
				</ul>
			</div>				
		</header>
	<div class="row">

	<div class="col-12 mb-4">
				<section class="main__box">
				
					<h5>Data Penyewa</h5>
					<hr>
					<table class="table table--blue mb-3">
						<thead>
							<tr>
								<th colspan="2">Action</th>
								<th>Nama</th>
								<th>Tanggal Sewa</th>
								<th>Tanggal Pengembalian</th>
								<th>Durasi Sewa</th>
								<th>Detail</th>
							</tr>
						</thead>
						<tbody>
						<?php
                            
                            $kueri_sewa = mysqli_query($koneksi, "SELECT DISTINCT id_user, tgl_sewa,tgl_kembali, durasi_sewa from sewa");
                            while ($pro = mysqli_fetch_array($kueri_sewa)) {
							$user_id = $pro['id_user'];
                        ?>   
							<tr>
								<td width="10"><a href="" class="text-hover-red"><span class="fa fa-trash"></span></a></td>
								<td width="10"><a href=""><span class="fa fa-edit"></span></a></td>
						
                            <?php
                            $kueri = mysqli_query($koneksi, "SELECT DISTINCT nama FROM `akun` WHERE id_user='$user_id'");
                            while ($akun = mysqli_fetch_array($kueri)) {
                            ?>
								<td><?= $akun['nama'] ?></td>
							<?php } ?>
								<td><?= $pro['tgl_sewa'] ?></td>
								<td><?= $pro['tgl_kembali'] ?></td>
								<td><?= $pro['durasi_sewa'] ?></td>
								<td width="30"><a href="<?php ?>" class="btn btn--red">Detail</a></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</section>
		</div>


	
</div>
</main>



<!-- jQuery first, then Bootstrap JS, and Reza Admin JS-->
<script src="dist/js/jquery-3.5.1.slim.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/reza-admin.min.js"></script>

	<?php } ?>
</body>
</html>
