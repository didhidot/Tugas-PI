<?php
ini_set("display_errors",0);

// Definisi database
include("includes/defines.php");

// Kumpulan fungsi
include("includes/fungsi.php");

// Koneksi ke database
include("includes/connect.php");

// Membuat session login
cekSession();

//inisiasi untuk action
$tipe = $_REQUEST['tipe'];

//inisiasi untuk edit nominal


$kodenominal = $_POST['txtKodenominal'];
$merek = $_POST['txtMerek'];
$harga = $_POST['txtHarga'];

//inisiasi untuk edit operatorpulsa
$kodeoperatorpulsa = $_REQUEST['txtKodeoperatorpulsa'];
$Namaoperatorpulsa = $_REQUEST['txtNama'];
$Alamat = $_REQUEST['txtAlamat'];
$Telepon = $_REQUEST['txtTelepon'];
$HP = $_REQUEST['txtHp'];
$noKtp = $_REQUEST['txtNoKtp'];
$KK = $_REQUEST['txtKk'];
$slipGaji = $_REQUEST['txtSlipGaji'];
$Keterangan = $_REQUEST['txtKeterangan'];

switch ($tipe){
	case 'simpannominal':
	//query edit nominal
	if(!empty($fileName)){
		$query = "update nominal set Kodenominal = '$kodenominal',Nominal = '$merek', Harga = '$harga' where Kodenominal = '$kodenominal'";
		
	}else{
		$query = "update nominal set Kodenominal = '$kodenominal',Nominal = '$merek',Harga = '$harga' where Kodenominal = '$kodenominal'";
	}
	$url = "index.php?page=view_nominalpulsa";
	$alert = "Update Data Nominal Pulsa Berhasil";
  	break;

	case 'tambahnominal':
	//query tambah Nominal pulsa
	$query = "insert into nominal (kodenominal,Nominal,Harga)values('$kodenominal','$merek','$harga')";
	$url = "index.php?page=view_nominalpulsa";
	$alert = "Tambah data Nominal Pulsa Berhasil";
	break;
	
	case 'hapusnominal':
	//query for hapus nominal
	$query = "delete from nominal where kodenominal = $_GET[id]";
	$url = "index.php?page=view_nominalpulsa";
	$alert = "Hapus data Nominal Pulsa Berhasil";
	break;
	
	case 'tambahoperatorpulsa':
	//query untuk tambah operator pulsa
	$query = "Insert into operatorpulsa(Kodeoper,Nama,Alamat,Telepon,HP,NoKTP,KK,SlipGaji,Keterangan)value ('$_POST[Kodeoper]','$_POST[Nama]','$_POST[Alamat]','$_POST[Telepon]','$_POST[HP]','$_POST[NoKTP]','$_POST[KK]','$_POST[SlipGaji]','$_POST[Keterangan]')";
	$url = "index.php?page=view_operatorpulsa";
	$alert = "Penambahan operatorpulsa berhasil";
	break;
	
	case 'simpanoperatorpulsa':
	//query untuk edit operatorpulsa
	$query = "update operatorpulsa set Kodeoper = '$kodeoperatorpulsa',Nama = '$Namaoperatorpulsa',Alamat = '$Alamat',Telepon = '$Telepon',HP = '$HP', NoKTP = '$noKtp',KK = '$KK',SlipGaji = '$slipGaji',Keterangan = '$Keterangan' where Kodeoper = '$kodeoperatorpulsa'";
	$url = "index.php?page=view_operatorpulsa";
	$alert = "Update data Operator Pulsa Berhasil";
	break;

	case 'hapusoperatorpulsa':
	//query for hapus Operator Pulsa
		$query = "delete from operatorpulsa where Kodeoper = $_GET[id]";
		$url = "index.php?page=view_operatorpulsa";
		$alert = "Hapus data Operator Pulsa Berhasil";
	break;

	case 'updateBelipulsa':
	//Edit beli pulsa
		$query = "update belipulsa set Kodepulsa='$_POST[Kodepulsa]',Tanggalpulsa='$_POST[Tanggalpulsa]',Kodeoper='$_POST[Kodeoper]',Kodenominal='$_POST[Kodenominal]',Harga='$_POST[Harga]',Bayar='$_POST[Bayar]',Keterangan='$_POST[Keterangan]' Where Kodepulsa='$_POST[Kodepulsa]'";
		$url = "index.php?page=belipulsa_view";
		$alert = "Update data Beli pulsa Berhasil";
	break;

	case 'hapusBelipulsa':
	//Hapus beli pulsa
		$query = "delete from belipulsa where Kodepulsa='$_GET[id]'";
		$url = "index.php?page=belipulsa_view";
		$alert = "Hapus data Beli pulsa Berhasil";
	break;

	case 'inputBelipulsa':
	//Tambah beli pulsa
	 	$query ="Insert into belipulsa(Kodepulsa,Tanggalpulsa,Kodeoper,Kodenominal,Harga,Bayar,Keterangan) value ('$_POST[Kodepulsa]','$_POST[Tanggalpulsa]','$_POST[Kodeoper]','$_POST[Kodenominal]','$_POST[Harga]','$_POST[Bayar]','$_POST[Keterangan]')";
		$url = "index.php?page=belipulsa_view";
		$alert = "Tambah Data Beli Pulsa Berhasil";
	break;
	
	case 'updateBelidepositpulsa':
	//Edit beli pulsa
		$query = "update belidepositpulsa set Kodedepositpulsa='$_POST[Kodedepositpulsa]',Tanggaldepositpulsa='$_POST[Tanggadepositlpulsa]',Kodeoper='$_POST[Kodeoper]',Kodenominal='$_POST[Kodenominal]',Harga='$_POST[Harga]',Keterangan='$_POST[Keterangan]' Where Kodedepositpulsa='$_POST[Kodedepositpulsa]'";
		
		$url = "index.php?page=belidepositpulsa_view";
		$alert = "Update data Beli deposit pulsa Berhasil";
	break;

	case 'beliDepositPulsa_input_OperatorPulsa':
	//query untuk tambah operator pulsa di beli depositpulsa
	$query = "Insert into operatorpulsa(Kodeoper,Nama,Alamat,Telepon,HP,NoKTP,KK,SlipGaji,Keterangan) value ('$_POST[Kodeoper]','$_POST[Nama]','$_POST[Alamat]','$_POST[Telepon]','$_POST[HP]','$_POST[NoKTP]','$_POST[KK]','$_POST[SlipGaji]','$_POST[Keterangan]')";
	$url = "index.php?page=belidepositpulsa_input&Kodeoper=$_POST[Kodeoper]";
	$alert = "Penambahan operatorpulsa berhasil";
	break;

		case 'inputBelidepositpulsa':
	//Tambah beli depositpulsa
		$sisa = $_POST[Harga]-$_POST[uangMuka];
	 	$query ="Insert into belidepositpulsa(Kodedepositpulsa,Tanggaldepositpulsa,Kodeoper,Kodenominal,Harga,UangMuka,TelahBayar,Keterangan) value ('$_POST[kodedepositpulsa]','$_POST[tanggaldepositpulsa]','$_POST[kodeoper]','$_POST[Kodenominal]','$_POST[Harga]','$_POST[uangMuka]','$_POST[uangMuka]','$_POST[keterangan]')";
		$url = "index.php?page=belidepositpulsa_view";
		$alert = "Tambah Data Beli Pulsa Berhasil";
	break;
	
	case 'hapusBelidepositpulsa':
	//Hapus beli pulsa
		$query = "delete from belidepositpulsa where Kodedepositpulsa='$_GET[id]'";
		$url = "index.php?page=belidepositpulsa_view";
		$alert = "Hapus data Beli Deposit pulsa Berhasil";
	break;


case 'bayarsaldo':
	//query for bayar saldo
	//sisa
	$sqlsisa = mysql_query("SELECT sisa - $_POST[jumlah] AS a FROM belidepositpulsa WHERE Kodedepositpulsa = '$_POST[kodedepositpulsa]'");
	$sisa1 = mysql_fetch_array($sqlsisa);
	
	//saldoKe
	$sqlsaldo = mysql_query("SELECT AngsuranKe + 1 as b FROM belidepositpulsa WHERE Kodedepositpulsa = '$_POST[kodedepositpulsa]'");
	$saldo = mysql_fetch_array($sqlsaldo);
	
	//bulan angsuran
	$ket = "Pembayaran bulan ".date("M");
	$query = "insert into bayarsaldo(NomorByr,TanggalByr,Kodedepositpulsa,Jumlah,Sisa,saldo,Keterangan) values ('$_POST[nomorBayar]','$_POST[tanggalBayar]','$_POST[kodedepositpulsa]','$_POST[jumlah]','$sisa1[a]','$saldo[b]','$ket')";

	//telah bayar
	$sqlTelahBayar = mysql_query("SELECT TelahBayar FROM belidepositpulsa WHERE Kodedepositpulsa = '$_POST[kodedepositpulsa]'");
	$telah = mysql_fetch_array($sqlTelahBayar);
	$telahbayar = ($telah[TelahBayar]+$_POST[jumlah]);

	//Update tabel beli depositpulsa
	$update = "update belidepositpulsa set AngsuranKe='$saldo[b]',TelahBayar = '$telahbayar',Sisa = '$sisa1[a]' where Kodedepositpulsa = '$_POST[kodedepositpulsa]'";
	mysql_query($update);
	$url = "index.php?page=belidepositpulsa_view";
	$alert = "Bayar saldo berhasil";
	break;
}
	

// Menjalankan/mengeksekusi perintah SQL di atas
mysql_query($query);

if($tipe != ""){
	echo "<script>
			window.alert('$alert');
			window.location = '$url';
		</script>";
}
?>