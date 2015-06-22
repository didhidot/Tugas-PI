<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Laporan Transaksi Pulsa</title>
</head>

<body>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set("display_errors",1);
include("includes/defines.php");
include("includes/fungsi.php");
include("includes/connect.php");
?>
   
<center><h2>LAPORAN PEMBELIAN PULSA </h2></center>
<?php
$sql = "select a.Kodepulsa, a.Tanggalpulsa, b.Nama, c.Nominal, a.Harga, a.Bayar, a.Keterangan from belipulsa a inner join operatorpulsa b using(Kodeoper) inner join nominal c using(Kodenominal)";
$query = mysql_query($sql);
?>
<center>
<table width="100%" border="0" bgcolor="#000000">
      <tr bgcolor="#FFFFFF"  height="40">
        <th width="5%" scope="col">No</th>
        <th width="11%" scope="col">Kode Pembelian</th>
        <th width="12%" scope="col">Tanggal Pembelian</th>
        <th width="15%" scope="col"> Operator </th>
        <th width="12%" scope="col">Nominal</th>
        <th width="9%" scope="col">Harga</th>
        <th width="10%" scope="col">Bayar</th>
        <th width="11%" scope="col">Keterangan</th>
      </tr>
      <?php
			   $i=1;
			  while ($data = mysql_fetch_array($query)){
			echo "<tr bgcolor=white>
              <td align=center>$i</td>
              <td align=center >$data[Kodepulsa]</td>
              <td align=center>$data[Tanggalpulsa]</td>
              <td align=center>$data[Nama]</td>
              <td align=center>$data[Nominal]</td>
			  <td align=center>Rp.$data[Harga]</td>
			  <td align=center>Rp.$data[Bayar]</td>
			  <td align=center>$data[Keterangan]
			  </td>
            </tr>";
			$i++;
			}
			?>
    </table></center>
    <center>
		<input type="submit" name="button" id="button" value="Print" onclick="print()" />
        <form method="get" action="includes/laporan_excel.php">
          <input name="tipeLaporan" type="hidden" id="tipeLaporan" value="belipulsa" />
          <input name="sql" type="hidden" id="sql" value="<?php echo $sql; ?>" />
         <input type="submit" name="button2" id="button2" value="Ekspor ke Ms. Excel" />
        </form>
	</center>
</body>
</html>

