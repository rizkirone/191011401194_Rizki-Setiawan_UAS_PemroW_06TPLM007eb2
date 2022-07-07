<?php
	include "koneksi.php";
	$jenisRestoran = $_POST['jenisRestoran'];
	$makanan = $_POST['makanan'];
	$harga = $_POST['hargaHidden'];
	$alamat = $_POST['alamat'];
	$nama = $_POST['nama'];
	$nomorHP = $_POST['nomorHP'];
	$email = $_POST['email'];

	if($makanan == "")
	{
		header('location:nput.php');
	}
	else
	{
		$query = "INSERT INTO tbl_datapesanan SET  jenisRestoran='$jenisRestoran' , makanan='$makanan' , harga='$harga' , alamatPemesan='$alamat' , namaPemesan='$nama' , telpPemesan='$nomorHP' , emailPemesan='$email'";
		@$sql .= mysqli_query($connect, "ALTER TABLE tbl_datapesanan DROP nmrPesanan");
	    @$sql .= mysqli_query($connect, "ALTER TABLE tbl_datapesanan ADD nmrPesanan INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
	    mysqli_query($connect , $query);
	}
    header('location:input.php');
?>