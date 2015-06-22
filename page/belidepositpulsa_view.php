<?php
	$halaman = get_Halaman("belidepositpulsa");
	$hal = get_NomorHalaman($_GET['hal']);
$halaman = get_Halaman("belidepositpulsa");
$hal = get_NomorHalaman($_GET['hal']);
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Daftar Pembelian Deposit Pulsa</title>
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
				<h1>Daftar Pembelian Deposit Pulsa</h1>	
				
			</header>
			
				<a style='color:black' href="index.php?page=belidepositpulsa_input">Tambah Data</a>
			
			<div class="component">
				<table>
					<thead>
						<tr>
							<th>No</th>
							<th>Kode</th>
							<th>Tanggal</th>
							<th>Harga</th>
							<th>Telah Bayar</th>
							<th>Keterangan</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
if($query === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
  $sql = ("select belidepositpulsa.Kodedepositpulsa, belidepositpulsa.Tanggaldepositpulsa, operatorpulsa.Nama, nominal.Nominal, belidepositpulsa.Harga, belidepositpulsa.TelahBayar, belidepositpulsa.Keterangan from belidepositpulsa inner join operatorpulsa using (Kodeoper) inner join nominal using (Kodenominal)");
$query = mysql_query($sql);
  $i=((1*$hal)+1);
  while($data = mysql_fetch_array($query)){
	echo "<tr><td class='user-name'>$i</td><td class='user-email'>$data[Kodedepositpulsa]</td><td class='user-email'>$data[Tanggaldepositpulsa]</td><td class='user-email'>Rp $data[Harga]</td><td class='user-email'>Rp $data[TelahBayar]</td>
  <td class='user-name'>$data[Keterangan]</td><td class='edit'>
			<a style='color:black' href=proses.php?tipe=hapusBelidepositpulsa&id=$data[Kodedepositpulsa] onclick='return confirm(\"Hapus $data[Kodedepositpulsa]?\")'>[Hapus]</a></td>
  
  </tr>";
  $i++;
  }
  ?>

<tr>
<td colspan="15" class="tr_grid">
<?php
for($i=1; $i <= $halaman; $i++){
	echo "<a href='?page=belidepositpulsa_view&hal=$i'>Page $i |</a> &nbsp;";
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


