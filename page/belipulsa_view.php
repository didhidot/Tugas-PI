<?php
if($_GET['edit']=="true"){
	include("page/belipulsa_edit.php");
}

$halaman = get_Halaman("belipulsa");
$hal = get_NomorHalaman($_GET['hal']);
$sql = ("select a.Kodepulsa, a.Tanggalpulsa, b.Nama, c.Nominal, a.Harga, a.Bayar, a.Keterangan from belipulsa a inner join operatorpulsa b using(Kodeoper) inner join nominal c using(Kodenominal) ORDER BY `a`.`Kodepulsa` DESC LIMIT $hal , 10");
$query = mysql_query($sql);
?>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Data Nominal Pulsa</title>
		<meta name="description" content="Sticky Table Headers Revisited: Creating functional and flexible sticky table headers" />
		<meta name="keywords" content="Sticky Table Headers Revisited" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<!-- Top Navigation -->
			
			<header>
				<h1>Daftar Pembelian Pulsa</h1>	
				
			</header>
			
				<a style='color:black' href="index.php?page=belipulsa_input">Tambah Data</a>
			
			<div class="component">
				<table>
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Pulsa</th>
							<th>Tanggal</th>
							<th>Operator Pulsa</th>
							<th>Nominal</th>
							<th>Harga</th>
							<th>Bayar</th>
							<th>Keterangan</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
$i=((1*$hal)+1);
while($data = mysql_fetch_array($query)){
		$nomor = $i;
  echo "<tr><td class='user-name'>$i</td><td class='user-email'>$data[Kodepulsa]</td><td class='user-email'>$data[Tanggalpulsa]</td><td class='user-email'>$data[Nama]</td><td class='user-email'>$data[Nominal]</td>
  <td class='harga'>Rp. $data[Harga]</td><td class='harga'>Rp. $data[Bayar]</td><td class='user-email'>$data[Keterangan]</td><td class='edit'><a style='color:black'
			<a style='color:black' href=proses.php?tipe=hapusBelipulsa&id=$data[Kodepulsa] onclick='return confirm(\"Hapus $data[Kodepulsa]?\")'>[Hapus]</a></td>
  
  </tr>";
$i++;
}
?>

<tr>
<td colspan="9" class="tr_grid">
<?php
for($i=1; $i <= $halaman; $i++){
	echo "<a href='?page=belipulsa_view&hal=$i'>Page $i |</a> &nbsp;";
}
?>
</td>
</tr>
					</tbody>
				</table>
				
		</div><!-- /container -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/jquery.stickyheader.js"></script>
	</body>
</html>













