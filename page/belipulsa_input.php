<?php
if($_GET['tambahoperatorpulsa'] == true ){
 	include("page/beliDepositPulsa_input_OperatorPulsa.php");
}
$Kodepulsa = $_REQUEST['id'];
$sql = mysql_query("select * from belipulsa where Kodepulsa = '$Kodepulsa'");
$data = mysql_fetch_array($sql);
$kodenominal = $_REQUEST['Kodenominal'];
$pembeli = $_REQUEST['Kodeoper'];

if($_GET['id'] != "") {
 	$value = "Edit";	//modus edit data lama
} else {
 	$value = "Simpan";	//modus input data baru
 	$data['Tanggalpulsa']=date("Y-m-d");
	//buat kode otomatis
	$query_oto = mysql_query("select max(Kodepulsa) as maksi from belipulsa");
	$data_oto = mysql_fetch_array($query_oto);
	$data_potong = substr($data_oto['maksi'],3,5);
	$data_potong++;
	$kode="";
	for ($i=strlen($data_potong); $i<=4; $i++)
	$kode = $kode."0";
	$data['Kodepulsa'] = "CSH$kode$data_potong";
}
?>
<form name="Editoperatorpulsa" method="post" action="proses.php">
  <center>
    <h1>INPUT BELI PULSA</h1>
   
    <table width="450" height="300" border="0" class="inputBelipulsa">
      <tr>
        <td width="125">Kode Pulsa </td>
        <td colspan="2"><label>
          <input name="Kodepulsa" type="text" id="Kodepulsa" value="<?php echo $data['Kodepulsa']; ?>">
        </label></td>
      </tr>
      <tr>
        <td>Tanggal  </td>
        <td colspan="2"><input name="Tanggalpulsa" type="text" id="Tanggalpulsa" value="<?php echo $data['Tanggalpulsa']; ?>"></td>
      </tr>
      <tr>
        <td>Operator Pulsa</td>
        <td width="157"><label>
          <select name="Kodeoper" id="Kodeoper">
		  <option value=""></option>
	<?php
	$query_operatorpulsa = mysql_query("select Kodeoper,Nama from operatorpulsa");
	while ($data2=mysql_fetch_array($query_operatorpulsa)){
		if($pembeli==$data2[Kodeoper])
	 		echo "<option value=$data2[Kodeoper] selected>$data2[Nama]</option>";
		else 
	 		echo "<option value=$data2[Kodeoper]>$data2[Nama]</option>";
	}
	?>
          </select>
        </label></td>
      </tr>
      <tr>
        <td>Nominal Pulsa </td>
		<td colspan="2">
<select name="Kodenominal" id="Kodenominal" onChange="harganominal()">
		<option value=""></option>
		  <?php
		  $query_nominal = mysql_query("select Kodenominal,
		  								         Nominal
										   from nominal");
		  while($data3 = mysql_fetch_array($query_nominal)){
		  	if($kodenominal==$data3[Kodenominal]){
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
        <td colspan="2"><input name="Harga" type="text" id="Harga" value="" readonly="readonly"></td>
      </tr>
      <tr>
        <td>Bayar</td>
        <td colspan="2"><input name="Bayar" type="text" id="Bayar"></td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td colspan="2"><input name="Keterangan" type="text" id="Keterangan"></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><label>
		  <input name="tipe" type="hidden" id="hiddenField" value="inputBelipulsa" />
		  <input name="btnSimpan" type="submit"  class="btn_simpan" value="Simpan" />
        </label></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </center>
  
</form>
