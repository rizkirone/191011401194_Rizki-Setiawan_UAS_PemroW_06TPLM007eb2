<?php
include "koneksi.php";
date_default_timezone_set('Asia/Jakarta');
   $arrayHari = date('w');
    if($arrayHari == 0)
    {
      $namaHari = 'Minggu';
    }
    else if($arrayHari == 1)
    {
      $namaHari = 'Senin';
    }
    else if($arrayHari == 2)
    {
      $namaHari = 'Selasa';
    }
    else if($arrayHari == 3)
    {
      $namaHari = 'Rabu';
    }
    else if($arrayHari == 4)
    {
      $namaHari = 'Kamis';
    }
    else if($arrayHari == 5)
    {
      $namaHari = 'Jumat';
    }
    else if($arrayHari == 6)
    {
      $namaHari = 'Sabtu';
    }
    else
    {
      $namaHari = 'Nama Hari Tidak Valid';
    }

    $arrayBulan = date('m');
    if($arrayBulan == 1)
    {
      $namaBulan = 'JANUARI';
    }
    else if($arrayBulan == 2)
    {
      $namaBulan = 'FEBRUARI';
    }
    else if($arrayBulan == 3)
    {
      $namaBulan = 'MARET';
    }
    else if($arrayBulan == 4)
    {
      $namaBulan = 'APRIL';
    }
    else if($arrayBulan == 5)
    {
      $namaBulan = 'MEI';
    }
    else if($arrayBulan == 6)
    {
      $namaBulan = 'JUNI';
    }
    else if($arrayBulan == 7)
    {
      $namaBulan = 'JULI';
    }
    else if($arrayBulan == 8)
    {
      $namaBulan = 'AGUSTUS';
    }
    else if($arrayBulan == 9)
    {
      $namaBulan = 'SEPTEMBER';
    }
    else if($arrayBulan == 10)
    {
      $namaBulan = 'OKTOBER';
    }
    else if($arrayBulan == 11)
    {
      $namaBulan = 'NOVEMBER';
    }
    else if($arrayBulan == 12)
    {
      $namaBulan = 'DESEMBER';
    }
    $keteranganWaktu = date('d').'_'.$namaBulan.'_'. date('Y_H_i_s');
    $keteranganWaktu2 = date('d').' '.$namaBulan.' '. date('Y H:i:s');
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>LAPORAN_PEMESANAN_MAKANAN_PER_<?php echo $keteranganWaktu;?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/font-awesome/css/all.css"/>
     <script type="text/javascript" src="assets/jquery-3.5.1.min.js"></script>

     

</head>
<body onload=waktu();>
    <div class="container-fluid">
      <div class="row justify-content-center">
         <div id="bagianHeader" class="col-lg-12"><br><br><br><br>
            <CENTER><span id="headerText">Data Pemesanan Makanan</span>
         </div>                                                           
            <CENTER><div id="timeWrapper" class="col-lg-12">
                Per <?php echo $keteranganWaktu2;?>
            </div>
            <div id="bagianTampilPesanan" class="col-lg-12" style="padding:0px;">
                <table id="tblOutputPesanan" class="table table-bordered table-hover">
                    <form action="" method="POST">
                        <thead>
                            <th width="5%">No.</th>
                            <th width="15%">Jenis Restoran</th>
                            <th width="18%">Makanan</th>
                            <th width="7%">Harga</th>
                            <th width="16%">Alamat</th>
                            <th>Nama Lengkap</th>
                            <th width="9%">No HP</th>
                            <th>Email</th>
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
                        </tbody>
                        <?php
                        }?>
                    </form>
                </table>
            </div>
      </div>
    </div>

    <script type="text/javascript" src="assets/js/jquery.js"></script>
       <script type="text/javascript" src="assets/js/popper.js"></script>
       <script type="text/javascript" src="assets/js/bootstrap.js"></script>

       <script>

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

         window.print();

      </script>

</body>
</html>