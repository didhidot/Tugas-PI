<?php
//file yang dipanggil Harganominal.js
//untuk Mengambil harga nominal pada saat Combo Box  nominal terpilih
error_reporting(E_ALL ^ E_DEPRECATED);
include("includes/defines.php");
include("includes/connect.php");
$kodenominal = $_GET['Kodenominal'];
$sql = mysql_query("select Harga from nominal where Kodenominal = '$kodenominal'");
$i = 1;
$harga = mysql_fetch_array($sql);
echo $harga['Harga'];
?>