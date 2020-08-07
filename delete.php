<?php

require "connect.php";

$nama_produk = $_GET['nama_produk'];

if (isset($_GET['nama_produk'])) {

	$sql = mysqli_query($conn, "delete from produk where nama_produk='$nama_produk'");
	if ($sql) {
		header("location: index.php");
	}
}
