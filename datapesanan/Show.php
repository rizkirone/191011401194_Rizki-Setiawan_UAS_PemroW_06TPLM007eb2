<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PEMESANAN MAKANAN </title>
	 <link rel="stylesheet" href="assets/css/bootstrap.css"/>
	 <link rel="stylesheet" href="assets/font-awesome/css/all.css"/>
     <script type="text/javascript" src="assets/jquery-3.5.1.min.js"></script>

     

</head>
<body onload=waktu();>
	 <div class="container-fluid">
	 	<div class="row justify-content-center">
	 		<CENTER><div id="bagianHeader" class="col-lg-12"><CENTER><BR><br><br><br><br><br>
	 			<span id="headerText">Data Pemesanan Makanan</span>
	 		</div>                                                           <! TIME WIDGET PART >
            <div id="timeWrapper" class="col-lg-12">
                <div id="time"></div>
            </div>
            <div id="bagianTampilPesanan" class="col-lg-12" style="padding:0px;">
                <span id="textAlert"></span>
                <span id="userInfo"><i class="fas fa-user-circle logouser"></i><?php echo " "; echo $_SESSION['username'];?></span>
                <table id="tblOutputPesanan" class="table table-bordered table-hover">
                    <form action="" method="POST">
                        <thead>
                            <th width="5%">No.</th>
                            <th width="15%">Jenis Restoran</th>
                            <th width="18%">Makanan</th>
                            <th width="7%">Harga</th>
                            <th>Alamat</th>
                            <th>Nama Lengkap</th>
                            <th width="9%">No HP</th>
                            <th>Email</th>
                            <th>Action</th>
                        </thead>
                        <?php
                        $select = mysqli_query($connect, "SELECT * FROM tbl_datapesanan ORDER BY nmrPesanan ASC");
                        while($a = mysqli_fetch_array($select))
                        {?>
                        <tbody>
                            <td><?php echo $a['nmrPesanan']?></td>
                            <td><?php echo $a['jenisRestoran']?></td>
                            <td><?php echo $a['makanan']?></td>
                            <td><?php echo $a['harga']?></td>
                            <td><?php echo $a['alamatPemesan'];?></td>
                            <td><?php echo $a['namaPemesan']?></td>
                            <td><?php echo $a['telpPemesan']?></td>
                            <td><?php echo $a['emailPemesan']?></td> 
                            <td>
                                <a id="aDelete" href="Delete.php?nmrPesanan=<?php echo $a["nmrPesanan"];?>">Hapus <i class="fas fa-eraser"></i></a>
                                <a id="aEdit" href="Edit.php?nmrPesanan=<?php echo $a["nmrPesanan"];?>">Edit <i class="far fa-edit"></i></a>
                            </td>
                        </tbody>
                        <?php
                        }?>
                    </form>
                </table>
            </div>
            <div id="bagianCetakDokumen">
                <a id="aCetakDokumen" target="_blank" href="PreviewDocument.php">Cetak Laporan <i class="far fa-file-pdf"></i></a>
                <button type="button" onclick="redirectToInputPage()">Input Data Pemesanan Baru <i class="fas fa-plus-circle"></i></button>
                <a href="logout.php" id="logoutButton">Log Out <i class="fas fa-sign-out-alt"></i></a>
            </div>
	 	</div>
	 </div>

	 <script type="text/javascript" src="assets/js/jquery.js"></script>
  	    <script type="text/javascript" src="assets/js/popper.js"></script>
  	    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

  	    <script>

        function redirectToInputPage()
        {
            window.location.href="Input.php";
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
  		</script>

</body>
</html>