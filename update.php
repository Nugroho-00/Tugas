<?php

include "connect.php";

if (!isset($_GET['nama_produk'])) {
	header("location: index.php");
}

$nama_produk = $_GET['nama_produk'];

$sql = mysqli_query($conn, "select * from produk where nama_produk='$nama_produk'");
$data = mysqli_fetch_array($sql);

?>
<!DOCTYPE html>
<html>

<head>
	<title>Update Produk</title>
</head>

<body>
	<center>
		<h1>Update Produk</h1><br><br>
		<form action="" method="post">
			<table>
				<tr>
					<td>Nama Produk</td>
					<td>:</td>
					<td><input type="text" name="nama_produk" value="<?= $data['nama_produk'] ?>"></td>
				</tr>
				<tr>
					<td>Keterangan</td>
					<td>:</td>
					<td><input type="text" name="keterangan" value="<?= $data['keterangan'] ?>"></td>
				</tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="number" name="harga" value="<?= $data['harga'] ?>"></td>
				</tr>
				<td>Jumlah</td>
				<td>:</td>
				<td><input type="number" name="jumlah" value="<?= $data['jumlah'] ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="update" value="Update"></td>
				</tr>
			</table>
		</form>
		<?php

		if (isset($_POST['update'])) {
			$nama_produk = $_POST['nama_produk'];
			$keterangan = $_POST['keterangan'];
			$harga = $_POST['harga'];
			$jumlah = $_POST['jumlah'];

			$sql = mysqli_query($conn, "update produk set nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' where nama_produk='$nama_produk'");

			if ($sql) {
				header("location: index.php");
			}
		}

		?>
	</center>
</body>

</html>