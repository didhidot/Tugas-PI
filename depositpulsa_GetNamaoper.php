<?php
//file yang dipanggil depositpulsa_GetNamaoper.js
//untuk Mengambil harga nominal pada saat Combo Box nominal terpilih
include("includes/defines.php");
include("includes/connect.php");
$kodedepositpulsa = $_GET['kodedepositpulsa'];
$sql = mysql_query("select Kodeoper from belidepositpulsa where Kodedepositpulsa = '$kodedepositpulsa'");
$kodkred = mysql_fetch_array($sql);
$kodeoper = $kodkred['Kodeoper'];
//ambil nama operatorpulsa
$sql2 = mysql_query("select Nama from operatorpulsa where Kodeoper = '$kodeoper'");
$operatorpulsa = mysql_fetch_array($sql2);
echo $operatorpulsa['Nama'];
?>