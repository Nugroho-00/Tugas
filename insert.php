<?php

include "connect.php";

?>
<!DOCTYPE html>
<html>

<head>
	<title>Insert Produk</title>
</head>

<body>
	<center>
		<h1>Insert Produk</h1><br>
		<table>
			<form action="" method="post">
				<tr>
					<td>Nama Produk</td>
					<td><input type="text" name="nama_produk"></td>
				</tr>
				<tr>
					<td>Keterangan</td>
					<td><input type="text" name="keterangan"></td>
				</tr>
				<tr>
				<tr>
					<td>Harga</td>
					<td><input type="number" name="harga"></td>
				</tr>
				<tr>
				<tr>
					<td>Jumlah</td>
					<td><input type="number" name="jumlah"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<button type="submit" name="insert">Insert!!</button>
						<button><a href="index.php" style="text-decoration: none;">Kembali</a></button>
					</td>
				</tr>
			</form>
		</table>

		<?php

		if (isset($_POST['insert'])) {
			$nama_produk = $_POST['nama_produk'];
			$keterangan = $_POST['keterangan'];
			$harga = $_POST['harga'];
			$jumlah = $_POST['jumlah'];

			$sql = mysqli_query($conn, " insert into produk (nama_produk, keterangan, harga, jumlah) values ('$nama_produk', '$keterangan', '$harga', '$jumlah') ");

			if ($sql) {
				header("location: index.php");
			}
		}

		?>

	</center>
</body>

</html>