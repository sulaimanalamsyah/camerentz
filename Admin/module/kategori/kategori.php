<?php 
// session_start();
	if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
		echo "<center> untuk mengakses modul, anda harus login</br>";
		echo "<ahref=../../index.php?<b>Login</b></a></center>";
	} else{

		// var_dump();
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
		<div class="row">
			<header class="main__header col-md-12 mb-2">
				<div class="main__title">
					<h4>Dashboard <?php echo $username ?></h4>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="adminweb.php?module=home">Home</a></li>
						<li class="breadcrumb-item active">Kategori</li>
					</ul>
				</div>				
			</header>
		</div><!-- row -->

		<div class="col-12 mb-4">
				<section class="main__box">
					<h5>List Kategori</h5>
					<hr>
					<table class="table table--gray">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nama Kategori</th>
								<th style = "width: 100px">Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php 
								include "../lib/config.php";
								include "../lib/koneksi.php";
								$kueri_Kategori= mysqli_query($koneksi, "select * from kategori");
								while($kat=mysqli_fetch_array($kueri_Kategori))
								{
									$id = $kat['id_kategori'];
									$nama = $kat['nama_kategori'];
								?>
							<tr>
								<td><?php echo $id; ?></td>
								<td><?php echo $nama; ?></td>
								<td>
                                <div class = "btn-group">
                                    <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_kategori&kategori=<?php echo $id; ?>" class="btn btn-warning"><i class='fa fa-pencil'></i></button></a>
                                    <a href="<?php echo $admin_url; ?>module/kategori/aksi_hapus.php?kategori=<?php echo $id; ?>" onClick="return confirm('anda yakin ingin menghapus data ini?')" 
                                    class="btn btn-danger"><i class='fa fa-trash'></i></button></a>
                                </div>
                            	</td>
								<?php } ?>
							</tr>
						</tbody>
						
					</table>
					<br><br>
					<div class = "box-footer">
						<a href="<?php echo $base_url; ?>admin/adminweb.php?module=tambah_kategori">
						<button class="btn btn-primary">Tambah kategori</button>
					</div>
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
