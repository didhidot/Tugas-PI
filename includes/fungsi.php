<?php
function getMenu() {
	include("menu.php");
}
function getPage($page){
	if ($page != ""){
		include("page/".$page.".php");
	}
	else{
		include("page/home.php");
	}
}

function cekSession() {
	session_start();
	$user = $_SESSION['username'];
	if  ($user ==""){
	echo "<script>
		window.location = 'login.html';
		</script>";
	}	
}

function urutkan_data($s,$b){
	
	if($s && $b != ""){
		$sql = "SELECT * FROM nominal ORDER BY nominal.$b $s";
		$short = $s;
	}
	switch($short){
			case 'ASC':
			$short = "DESC";
			break;
			case 'DESC':
			$short = "ASC";
			break;
	}
}
function get_Halaman($tabel){
	switch ($tabel){
		case 'nominal':
		$kolom = "Kodenominal";
		break;
		case 'operatorpulsa':
		$kolom = "Kodeoper";
		break;
		case 'belipulsa':
		$kolom = "Kodepulsa";
		break;
		case 'belidepositpulsa':
		$kolom = "Kodedepositpulsa";
		break;
	}
	$sqlRow = mysql_query("SELECT count($kolom) as row FROM $tabel");
	$jumlahBaris = mysql_fetch_array($sqlRow);
	$jumlah =  $jumlahBaris['row'];
	$halaman = ceil(($jumlah/10));
	return($halaman);
}
function get_NomorHalaman($halaman){
	$hal = ((10*$halaman)-10);
	if($hal == -10){
		$hal = 0;
	}	
	return ($hal);
}
function getAjax() {
	echo "
	<script type='text/javascript' src='js/ajax.js'></script>
	<script type='text/javascript' src='js/Harganominal.js'></script>
	<script type='text/javascript' src='js/depositpulsa_GetNamaoper.js'></script>
	";
}
?>