<?php
$Kodepulsa = $_REQUEST['id'];
$sql = mysql_query("select * from belipulsa where Kodepulsa = '$Kodepulsa'");
$data = mysql_fetch_array($sql);

if($_GET[id] != "") {
	$value = "Edit";	//modus edit data lama
} else {
 	$value = "Simpan";	//modus input data baru
 	$data[Tanggalpulsa]=date("Y-m-d");
	//buat kode otomatis
	$query_oto = mysql_query("select max(Kodepulsa) as maksi from belipulsa");
	$data_oto = mysql_fetch_array($query_oto);
	$data_potong = substr($data_oto[maksi],3,5);
	$data_potong++;
	$kode="";
	for ($i=strlen($data_potong); $i<=4; $i++)
	$kode = $kode."0";
	$data[Kodepulsa] = "CSH$kode$data_potong";
}
?>
<form name="Editoperatorpulsa" method="post" action="proses.php">
  <center>
    <h1>Beli pulsa Edit</h1>
   
    <table width="419" border="0" class="editoperatorpulsa">
      <tr>
        <td width="125">Kode pulsa : </td>
        <td width="278"><label>
          <input name="Kodepulsa" type="text" id="Kodepulsa" value="<?php echo $data[Kodepulsa]; ?>">
        </label></td>
      </tr>
      <tr>
        <td>Tanggal : </td>
        <td><input name="Tanggalpulsa" type="text" id="Tanggalpulsa" value="<?php echo $data[Tanggalpulsa]; ?>"></td>
      </tr>
      <tr>
        <td>operatorpulsa : </td>
        <td><label>
          <select name="Kodeoper" id="Kodeoper">
		  <option value=""></option>
	<?php
	$query_operatorpulsa = mysql_query("select Kodeoper,Nama from operatorpulsa");
	while ($data2=mysql_fetch_array($query_operatorpulsa)){
		if($data[Kodeoper]==$data2[Kodeoper])
	 		echo "<option value=$data2[Kodeoper] selected>$data2[Nama]</option>";
		else 
	 		echo "<option value=$data2[Kodeoper]>$data2[Nama]</option>";
	}
	?>
          </select>
        </label></td>
      </tr>
      <tr>
        <td>Nama Nominal </td>
        <td><select name="Kodenominal" id="Kodenominal">
		<option value=""></option>
		  <?php
		  $query_nominal = mysql_query("select Kodenominal,
		  								         Nominal
										   from nominal");
		  while($data3 = mysql_fetch_array($query_nominal)){
		  	if($data[Kodenominal]==$data3[Kodenominal]){
				echo "<option value=$data3[Kodenominal] selected>$data3[Nominal]</option>";
				}
				else{
					echo"<option value=$data3[Kodenominal]>$data3[Nominal]</option>";
				}
		  }
		  ?>
          </select></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td><input name="Harga" type="text" id="Harga" value="<?php echo $data[Harga]; ?>"></td>
      </tr>
      <tr>
        <td>Bayar</td>
        <td><input name="Bayar" type="text" id="Bayar" value="<?php echo $data[Bayar]; ?>"></td>
      </tr>
      <tr>
        <td>Keterangan : </td>
        <td><input name="Keterangan" type="text" id="Keterangan" value="<?php echo $data[Keterangan]; ?>"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><label>
          <input name="tipe" type="hidden" id="hiddenField" value="updateBelipulsa">
		  <input name="btnSimpan" type="submit"  class="btn_simpan" value="<?php echo $value ?>" />
        </label></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </center>  
</form>

