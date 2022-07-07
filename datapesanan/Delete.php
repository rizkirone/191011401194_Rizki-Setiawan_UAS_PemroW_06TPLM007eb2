<?php
	include "koneksi.php";

	$query = mysqli_query($connect, "DELETE FROM tbl_datapesanan WHERE nmrPesanan='". $_GET["nmrPesanan"] . "'");
	@$sql .= mysqli_query($connect, "ALTER TABLE tbl_datapesanan DROP nmrPesanan");
	@$sql .= mysqli_query($connect, "ALTER TABLE tbl_datapesanan ADD nmrPesanan INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

	mysqli_multi_query($connect , $query);
	header("location:Show.php");
?>