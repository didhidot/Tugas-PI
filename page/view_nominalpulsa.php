<?php
	//pembagian data per halaman 20 baris.
	$halaman = get_Halaman("nominal");
	$hal = get_NomorHalaman($_GET['hal']);
	//shorting
	$short = $_GET['short'];
	if($short == ""){
		$short = "ASC";
	}
	$cari = $_REQUEST['txtCari'];
	$sql = "select * from nominal ORDER BY `nominal`.`Kodenominal` $short LIMIT $hal , 10";
	if ($cari != ""){
		$sql = "select * from nominal where Nominal like '%$cari%' ORDER BY `nominal`.`Kodenominal` ASC";
	}
if($_GET['short'] && $_GET['by'] != ""){
		$sql = "SELECT * FROM nominal ORDER BY nominal.$_GET[by] $short LIMIT $hal , 10";
}
	switch($short){
		case 'ASC':
		$short = "DESC";
		break;
		case 'DESC':
		$short = "ASC";
		break;
}
	
$query = mysql_query($sql);
if($_GET['edit']=="true"){
	include("page/nominal_edit.php");
}
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
				<h1>Data Nominal Pulsa</h1>	
				
			</header>
			
				<a style='color:black' href="index.php?page=tambah_nominalpulsa">Tambah Data</a>
			
			<div class="component">
				<table>
					<thead>
						<tr>
							<th><a href='index.php?page=view_nominalpulsa&by=kodenominal&short=<?php echo $short; ?>'>Kode</a></th>
							<th><a href='index.php?page=view_nominalpulsa&by=Nominal&short=<?php echo $short; ?>'>Nominal</a></th>
							<th><a href='index.php?page=view_nominalpulsa&by=Harga&short=<?php echo $short; ?>'>Harga</a></th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
$i=1;
while($data = mysql_fetch_array($query)){
  echo "<tr><td class='user-name'>$data[Kodenominal]</td><td class='user-email'>$data[Nominal]</td>
  <td class='harga'>Rp. $data[Harga]</td><td class='edit'><a style='color:black' href='?page=view_nominalpulsa&edit=true&id=$data[Kodenominal]'>
			[Edit]</a>
			<a style='color:black' href=proses.php?tipe=hapusnominal&id='$data[Kodenominal]' onclick='return confirm(\"Hapus $data[Nominal] dengan Kode Nominal Pulsa $data[Kodenominal] ?\")'>[Hapus]</a></td>
  
  </tr>";
$i++;
}
?>

<tr>
<td colspan="9" class="tr_grid">
<?php
for($i=1; $i <= $halaman; $i++){
	echo "<a style='color:black' href='?page=view_nominalpulsa&hal=$i'>Page $i |</a> &nbsp;";
}
?><br/><br/><br/><br/><br/><br/><br/><br/><br/>
					</tbody>
				</table>
				
		</div><!-- /container -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/jquery.stickyheader.js"></script>
	</body>
</html>