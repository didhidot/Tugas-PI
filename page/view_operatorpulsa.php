<?php
	//dialog untuk edit
	if($_GET['edit']=="true"){
 		include("page/operatorpulsa_edit.php");
	}
	//pembagian data per halaman 10 baris.
	$halaman = get_Halaman("operatorpulsa");
	$hal = get_NomorHalaman($_GET['hal']);

$query = mysql_query("select * from operatorpulsa LIMIT $hal , 10");
?>
<!DOCTYPE html>
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
				<h1>Daftar Operator Pulsa</h1>	
				
			</header>
			<a style='color:black' href='index.php?page=input_operatorpulsa'>Tambah Data</a>
			<div class="component">
				<table>
					<thead>
						<tr>
							<th>Kode</th>
							<th>Nama Operator</th>
							<th>Website</th>
							
							<th><a href='index.php?page=view_operatorpulsa&by=Harga&short=<?php echo $short; ?>'>Telepon</a></th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
$i=1;
while($data = mysql_fetch_array($query)){
  echo "<tr><td class='user-name'>$data[Kodeoper]</td><td class='user-email'>$data[Nama]</td><td class='user-phone'>$data[Alamat]</td><td class='user-mobile'>$data[Telepon]</td>
  <td class='edit'><a style='color:black' href='?page=view_operatorpulsa&edit=true&id=$data[Kodeoper]'>
			[Edit]</a>
			<a style='color:black' href=proses.php?tipe=hapusoperatorpulsa&id='$data[Kodeoper]' onclick='return confirm(\"Hapus $data[Merk] dengan Kode Nominal Pulsa $data[Kodeoper] ?\")'>[Hapus]</a></td>
  
  </tr>";
$i++;
}
?>

<tr>
<td colspan="9" class="tr_grid">
<?php
for($i=1; $i <= $halaman; $i++){
	echo "<a style='color:black' href='?page=view_operatorpulsa&hal=$i'>Page $i |</a> &nbsp;";
}
?>
					</tbody>
				</table>
				
		</div><!-- /container -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/jquery.stickyheader.js"></script>
	</body>
</html>

















