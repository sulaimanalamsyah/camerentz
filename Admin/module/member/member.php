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
	

	<div class="col-12 mb-4">
				<section class="main__box">
					<h5>List Member</h5>
					<hr>
					<table class="table table--blue mb-3">
						<thead>
							<tr>
								
								<th>username</th>
								<th>password</th>
								<th>Nama Lengkap</th>
								<th>alamat</th>
								<th>No Telepon</th>
								<th>Status</th>
								<th colspan="2"><center>Action</center></th>
								
							</tr>
						</thead>
						<tbody>
						<?php
                            include "../lib/config.php";
                            include "../lib/koneksi.php";
                            $kueri_member = mysqli_query($koneksi, "SELECT * FROM akun where level='3'");
                            while ($mem = mysqli_fetch_array($kueri_member)) {
                        ?>
							<tr>
								<td><?php echo $mem['username']; ?></td>
								<td><?php echo $mem['password']; ?></td>
								<td><?php echo $mem['nama']; ?></td>
								<td><?php echo $mem['alamat']; ?></td>
								<td><?php echo $mem['no_telp']; ?></td>
								<td><?php echo $mem['status_akun']; ?></td>
								
								<!-- <td width="10"><a href="" class="text-hover-red"><span class="fa fa-trash"></span></a></td> -->
								<!-- <td width="30"><a href="<?php $admin_url; ?>adminweb.php?module=detail_member&idm=<?php echo $mem['id_user']; ?>" class="btn btn--red">Hapus</a></td> -->
								<!-- <td width="10"><a href=""><span class="fa fa-power-off"></span></a></td> -->
								<td width="30"><a href="<?php $admin_url; ?>adminweb.php?module=detail_member&idm=<?php echo $mem['id_user']; ?>" class="btn btn--blue">Detail</a></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</section>
		</div>


	
</div>
</main>

<!-- footer -->

<!-- jQuery first, then Bootstrap JS, and Reza Admin JS-->
<script src="dist/js/jquery-3.5.1.slim.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/reza-admin.min.js"></script>

	<?php } ?>
</body>
</html>
