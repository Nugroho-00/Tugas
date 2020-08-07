<?php

require "connect.php";

?>
<!DOCTYPE html>
<html>

<head>
	<title>Produk Arkademy</title>
</head>

<body>
	<center>
		<h1>Produk Arkademy</h1><br>
		<a href="insert.php"><button>Tambah Produk</button></a><br><br>

		<table border="1" cellspacing="0" width="60%">
			<tr>
				<th>No</th>
				<th>Nama Produk</th>
				<th>Keterangan</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>Action</th>
			</tr>

			<?php

			$no = 1;

			$sql = mysqli_query($conn, "select * from produk");


			while ($data = mysqli_fetch_assoc($sql)) {


			?>

				<tr>
					<td style="text-align: center;"><?php echo $no++; ?></td>
					<td style="text-align: center;"><?php echo $data['nama_produk']; ?></td>
					<td><?php echo $data['keterangan']; ?></td>
					<td><?php echo number_format($data['harga']); ?></td>
					<td><?php echo $data['jumlah']; ?></td>
					<td style="text-align: center;">
						<a href="update.php?nama_produk=<?= $data['nama_produk'] ?>" style="text-decoration: none;"><button>Update</button></a> ||
						<a href="delete.php?nama_produk=<?= $data['nama_produk'] ?>" style="text-decoration: none;"><button>Delete</button></a>

					</td>
				</tr>

			<?php

			}

			?>


		</table>
	</center>
</body>

</html>