<?php
if($_GET['tambahoperatorpulsa'] == true ){
 	include("page/beliDepositPulsa_input_OperatorPulsa.php");
}
$kodenominal = $_REQUEST['Kodenominal'];
$pembeli = $_REQUEST['Kodeoper'];
$sql = mysql_query("select * from belipulsa where Kodepulsa = '$Kodepulsa'");
$data = mysql_fetch_array($sql);
if($_GET['id'] != "") {
 	$value = "Edit";	//modus edit data lama
}else{
 	$value = "Simpan";	//modus input data baru
 	$data['Tanggalpulsa']=date("Y-m-d");
	//buat kode otomatis
	$query_oto = mysql_query("select max(Kodedepositpulsa) as maksi from belidepositpulsa");
	$data_oto = mysql_fetch_array($query_oto);
	$data_potong = substr($data_oto['maksi'],3,5);
	$data_potong++;
	$kode="";
	for ($i=strlen($data_potong); $i<=4; $i++)
	$kode = $kode."0";
	$data['Kodepulsa'] = "KRD$kode$data_potong";
}
?>
<form name="Editoperatorpulsa" method="post" action="proses.php">
  <center>
    <h1>INPUT BELI DEPOSIT PULSA</h1>
   
    <table width="450" height="300" border="0" class="inputBelipulsa">
      <tr>
        <td width="134">Kode Deposit </td>
        <td colspan="2"><label>
          <input name="kodedepositpulsa" type="text" id="kodedepositpulsa" value="<?php echo $data['Kodepulsa']; ?>">
        </label></td>
      </tr>
      <tr>
        <td>Tanggal  </td>
        <td colspan="2"><input name="tanggaldepositpulsa" type="text" id="tanggaldepositpulsa" value="<?php echo $data['Tanggalpulsa']; ?>"></td>
      </tr>
      <tr>
        <td>Operator Pulsa</td>
        <td width="166"><label>
          <select name="kodeoper" id="kodeoper">
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
        <td colspan="2"><input name="Harga" type="text" id="Harga" value=""></td>
      </tr>
     <tr>
        <td>Bayar</td>
        <td colspan="2"><input name="uangMuka" type="text" id="uangMuka"></td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td colspan="2"><input name="keterangan" type="text" id="keterangan"></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><label>
		  <input name="tipe" type="hidden" id="hiddenField" value="inputBelidepositpulsa" />
		  <input name="btnSimpan" type="submit"  class="btn_simpan" value="Simpan" />
        </label></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </center>
  
</form>
