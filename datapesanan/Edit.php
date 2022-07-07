<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>EDIT MAKANAN</title>
	 <link rel="stylesheet" href="assets/css/bootstrap.css"/>
	 <link rel="stylesheet" href="assets/font-awesome/css/all.css"/>
     <script type="text/javascript" src="assets/jquery-3.5.1.min.js"></script>

    

</head>
<body onload=waktu();>
	 <div class="container-fluid">
	 	<div class="row justify-content-center">
	 		<div id="bagianHeader" class="col-lg-12"><br><br>
	 			<center><span id="headerText">Edit Data Pemesanan Makanan</span>
	 		</div>                                                           <! TIME WIDGET PART >
            <div id="timeWrapper" class="col-lg-12">
			<center> <div id="time"></div>
            </div>
	 		<div id="bagianInputPesanan" class="col-lg-6">
                <span id="userInfo"><i class="fas fa-user-circle logouser"></i><?php echo " "; echo $_SESSION['username'];?></span>
                <table id="tblInputPesanan" class="table table-bordered table-hover">
                    <form action="Editproses.php" method="POST">
                        <?php
                            $nmrPesanan = $_GET['nmrPesanan'];
                            $select = "SELECT * FROM tbl_datapesanan WHERE nmrPesanan='$nmrPesanan'";
                            $getData = mysqli_query($connect,$select); /* Mengambil Data Dari Database Menggunakan PHP */
                            while($a = mysqli_fetch_array($getData))
                            {?>
                                <?php
                                    $nmrPesanan = $a['nmrPesanan'];
                                    $restoranLama = $a['jenisRestoran'];
                                    $makananLama = $a['makanan'];
                                    $hargaLama = $a['harga'];
                                    $alamatLama = $a['alamatPemesan'];
                                    $namaPemesanLama = $a['namaPemesan'];
                                    $telpPemesanLama = $a['telpPemesan'];
                                    $emailPemesanLama = $a['emailPemesan'];
                                ?>
                            <tr>
                                <th>Jenis Restoran</th>
                                <td>
                                	<select id="jenisRestoran" name="jenisRestoranBaru" onchange="clearAndAdd()" required>
                                	<?php
                                	$select = "SELECT * FROM tbl_restoran";
                                	$getData = mysqli_query($connect,$select); /* Mengambil Data Dari Database Menggunakan PHP */
                                	while($a = mysqli_fetch_array($getData))
                                	{?>
                                		<option value="<?php echo $a['namaRestoran'];?>"><?php echo $a['namaRestoran'];?></option>
                                	<?php
                                	}?>
                                </td><tr></tr>
                                <th>Makanan</th>
                                <td>
                                	<select id="makanan" name="makananBaru" onchange="setHargaPesanan()"></select>
                                </td><tr></tr>
                                <th>Harga</th>
                                <td>
                                	<input type="text" name="hargaBaru" id="harga" disabled>
                                	<input type="hidden" name="hargaHiddenBaru" id="hargaHidden" required>
                                </td><tr></tr>
                                <th>Alamat</th>
                                <td>
                                	<input type="text" name="alamatBaru" id="alamat" value="<?php echo $alamatLama?>" required>
                                </td><tr></tr>
                                <th>Nama Lengkap</th>
                                <td>
                                	<input type="text" name="namaBaru" id="nama" value="<?php echo $namaPemesanLama?>" required>
                                </td><tr></tr>
                                <th>No HP</th>
                                <td>
                                	<input type="text" name="nomorHPBaru" id="nomorHP" value="<?php echo $telpPemesanLama?>" required>
                                </td><tr></tr>
                                <th>Email</th>
                                <td>
                                	<input type="text" name="emailBaru" id="email" value="<?php echo $emailPemesanLama?>" required>
                                    <input type="hidden" name="nmrPesanan" id="nmrPesanan" value="<?php echo $nmrPesanan?>" required>
                                    <input type="hidden" name="restoranLama" value="<?php echo $restoranLama?>" required>
                                    <input type="hidden" name="makananLama" value="<?php echo $makananLama?>" required>
                                    <input type="hidden" name="hargaLama" value="<?php echo $hargaLama?>" required>
                                </td>
                            </tr>
                            <?php
                        }?>
                    </table>
                    <button type="submit" id="submitPesanan">Simpan Perubahan <i class="fas fa-check-circle"></i></button>
                    <button type="button" id="lihatPesanan" onclick="redirectToShowPage()">Lihat Pesanan <i class="fas fa-eye"></i></button>
                    <a href="logout.php" id="logoutButton">Sign Out <i class="fas fa-sign-out-alt"></i></a>
                </form>
            </div>
            
	 	</div>
	 </div>

	 <script type="text/javascript" src="assets/js/jquery.js"></script>
  	    <script type="text/javascript" src="assets/js/popper.js"></script>
  	    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

  	    <script>

        function redirectToShowPage()
        {
            window.location.href="Show.php";
        }

  	    function waktu()      // TimeWidget.js
  	    {
  	    	var hari = "";
  	    	switch(new Date().getDay())
  	    	{
  	    		case 0:
  	    		hari = "Minggu";
  	    		break;
  	    		case 1:
  	    		hari = "Senin";
  	    		break;
  	    		case 2:
  	    		hari = "Selasa";
  	    		break;
  	    		case 3:
  	    		hari = "Rabu";
  	    		break;
  	    		case 4:
  	    		hari = "Kamis";
  	    		break;
  	    		case 5:
  	    		hari = "Jumat";
  	    		break;
  	    		case 6:
  	    		hari = "Sabtu";
  	    		break;
  	    		default:
  	    		break;
  	    	}

  	    	var months = [
  					'Januari',
  					'Februari',
  					'Maret',
  					'April',
  					'Mei',
  					'Juni',
  					'Juli',
  					'Agustus',
  					'September',
  					'Oktober',
  					'November',
  					'Desember'
  					]

  			var waktuSaatIni = new Date();
  			setTimeout("waktu()",1000);
  			document.getElementById("time").innerHTML = "Per "
                              + waktuSaatIni.getDate() + " "
                              + months[waktuSaatIni.getMonth()] + " "
                              + waktuSaatIni.getFullYear() + " " 
                              + waktuSaatIni.getHours() + " : "
                              + waktuSaatIni.getMinutes() + " : "
                              + waktuSaatIni.getSeconds();
  		  }
  		  function setMenuMakanan()
  		  {
  		  	var restoran = document.getElementById("jenisRestoran");
  		  	var selectedRestoran = restoran.options[restoran.selectedIndex].value;
  		  	switch(selectedRestoran)
  		  	{
  		  		case "Warteg Kharisma":
	  		  		var select = $("#makanan")[0];
	  		  		select.add(new Option("--Pilih Makanan--",""))
	  		  		select.add(new Option("Paket Nasi Tempe Orek", "Paket Nasi Tempe Orek"));
	  		  		select.add(new Option("Kentang Balado", "Kentang Balado"));
  		  			select.add(new Option("Oseng-oseng", "Oseng-oseng"));
  		  			break;
  		  		case "Restoran Padang Sederhana":
  		  			var select = $("#makanan")[0];
  		  			select.add(new Option("Paket Nasi Sate Padang", "Paket Nasi Sate Padang"));
  		  			document.getElementById("harga").value = "Rp 40.000";
  		  			document.getElementById("hargaHidden").value = "Rp 40.000";
  		  			break;
  		  		case "Soto Ayam Ndelik":
  		  			var select = $("#makanan")[0];
  		  			select.add(new Option("Paket Nasi Soto Ayam Plus Mendoan", "Paket Nasi Soto Ayam Plus Mendoan"));
  		  			document.getElementById("harga").value = "Rp 35.000";
  		  			document.getElementById("hargaHidden").value = "Rp 35.000";
  		  			break;
  		  		default:
  		  			break;
  		  	}
  		  }
  		  function setHargaPesanan(){
  		  	var makanan = document.getElementById("makanan");
  		  	var selectedMakanan = makanan.options[makanan.selectedIndex].value;
  		  	switch(selectedMakanan)
  		  	{
  		  		case "":
  		  			document.getElementById("harga").value = "0";
  		  			document.getElementById("hargaHidden").value = "0";
  		  			break;
  		  		case "Paket Nasi Tempe Orek":
	  		  		document.getElementById("harga").value = "Rp 30.000";
	  		  		document.getElementById("hargaHidden").value = "Rp 30.000";
  		  			break;
  		  		case "Kentang Balado":
  		  			document.getElementById("harga").value = "Rp 30.000";
  		  			document.getElementById("hargaHidden").value = "Rp 30.000";
  		  			break;
  		  		case "Oseng-oseng":
  		  			document.getElementById("harga").value = "Rp 30.000";
  		  			document.getElementById("hargaHidden").value = "Rp 30.000";
  		  			break;
  		  		default:
  		  			break;
  		  	}
  		  }
  		  function Remove_options()
  		  {
  		  	$('#makanan')
  		  	.empty();
            document.getElementById("harga").value = "";
            document.getElementById("hargaHidden").value = "";
  		  }
  		  function clearAndAdd(){
  		  	Remove_options();
  		  	setMenuMakanan();
  		  }


  		</script>

</body>
</html>