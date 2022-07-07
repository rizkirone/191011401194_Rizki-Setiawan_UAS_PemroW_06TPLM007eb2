<?php
	include "koneksi.php";

	@$nmrPesanan = $_POST['nmrPesanan'];
	@$jenisRestoran = $_POST['jenisRestoranBaru'];
	@$makanan = $_POST['makananBaru'];
	@$harga = $_POST['hargaHiddenBaru'];
	@$alamat = $_POST['alamatBaru'];
	@$nama = $_POST['namaBaru'];
	@$nomorHP = $_POST['nomorHPBaru'];
	@$email = $_POST['emailBaru'];

	@$restoranLama = $_POST['restoranLama'];
	@$makananLama = $_POST['makananLama'];
	@$hargaLama = $_POST['hargaLama'];

	if($jenisRestoran == "--Pilih Restoran-- " || $harga == "" || $harga == "0")
	{
		$query = "UPDATE tbl_datapesanan SET jenisRestoran='$restoranLama' , makanan='$makananLama' , harga='$hargaLama' , alamatPemesan='$alamat' , namaPemesan='$nama' , telpPemesan='$nomorHP' , emailPemesan='$email' WHERE nmrPesanan='$nmrPesanan'";
		@$sql .= mysqli_query($connect, "ALTER TABLE tbl_datapesanan DROP nmrPesanan");
		@$sql .= mysqli_query($connect, "ALTER TABLE tbl_datapesanan ADD nmrPesanan INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
		mysqli_query($connect , $query);
	}
	else{
		$query = "UPDATE tbl_datapesanan SET jenisRestoran='$jenisRestoran' , makanan='$makanan' , harga='$harga' , alamatPemesan='$alamat' , namaPemesan='$nama' , telpPemesan='$nomorHP' , emailPemesan='$email' WHERE nmrPesanan='$nmrPesanan'";
		@$sql .= mysqli_query($connect, "ALTER TABLE tbl_datapesanan DROP nmrPesanan");
		@$sql .= mysqli_query($connect, "ALTER TABLE tbl_datapesanan ADD nmrPesanan INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
		mysqli_query($connect , $query);
	}
	header('location: Show.php');
?>