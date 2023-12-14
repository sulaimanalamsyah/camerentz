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
					<h5>List Produk</h5>
					
					<table class="table table--blue mb-3">
                        <tr>
                        <th style = "width: 150px">Nama Produk</th>
                        <th style = "width: 150px">Gambar</th>
                        <th>Deskripsi Produk</th>
						<th>Stok Barang</th>
                        <th>Harga Sewa</th>
                        <th style = "width: 110px">Aksi</th>
                        </tr>
                            <?php
                            include "../lib/config.php";
                            include "../lib/koneksi.php";
                            $kueriProduk = mysqli_query($koneksi,"SELECT * FROM produk");
                            while($pro=mysqli_fetch_array($kueriProduk))
                            {
                            ?>
                        <tr>
                            <td><?php echo $pro['nama_produk'];?></td>
                            <td>
                                <img src="upload/<?php echo $pro['gambar'];?>" height="100" width="150">
                            </td>
                            
                            <td>
                                <?php echo $pro['deskripsi'];?>
                            </td>
							<td>
                                <?php echo $pro['stok_barang'];?>
                            </td>
                            <td>
                                Rp. <?php echo $pro['harga_sewa'];?></td>
                            <td>
                                <div class = "btn-group">
                                    <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_produk&id_produk=
                                    <?php echo $pro['id_produk']; ?>" class="btn btn-warning"><i class='fa fa-pencil'></i></button></a>
                                    <a href="<?php echo $admin_url; ?>module/produk/aksi_hapus.php?id_produk=
                                    <?php echo $pro['id_produk']; ?>" onClick="return confirm('anda yakin ingin menghapus data ini?')" 
                                    class="btn btn-danger"><i class='fa fa-power-off'></i></button></a>
                                </div>
                            </td>
                            </tr>
					<?php } ?>
					</table>
					<div class = "box-footer">
						<a href="<?php echo $base_url; ?>admin/adminweb.php?module=tambah_produk">
						<button class="btn btn-primary">Tambah Produk</button>
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
