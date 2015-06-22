<?php
//buat kode otomatis
	$query_oto = mysql_query("select max(Kodenominal) as maksi from nominal");
	$data_oto = mysql_fetch_array($query_oto);
	$data_potong = substr($data_oto['maksi'],3,5);
	$data_potong++;
	$kode="";
	for ($i=strlen($data_potong); $i<=4; $i++)
		$kode = $kode."0";
	   $data['Kodenominal'] = "MBL$kode$data_potong";
?><form name="Tambahnominal" method="post" action="proses.php" enctype="multipart/form-data">
  <center>
    <h1>Tambah Nominal Pulsa </h1></center>
  <table width="500" height="186" border="0" class="editnominal" >
    <tr>
      <td width="103">Kode Nominal Pulsa</td>
      <td width="278"><label for="txtKodenominal"></label>
      <input name="txtKodenominal" type="text" id="txtKodenominal" value="<?php echo $data['Kodenominal']; ?>"></td>
    </tr>
    <tr>
      <td width="103">Nominal Pulsa</td>
      <td width="278"><input name="txtMerek" type="text" id="txtMerek"></td>
    </tr>
   
    <tr>
      <td width="103">Harga Pulsa</td>
      <td width="278"><input name="txtHarga" type="text" id="txtHarga"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="tipe" type="hidden" id="hiddenField" value="tambahnominal">        <input type="submit" name="btn_simpan" id="button" value="Simpan" class="btn_simpan"></td>
    </tr>
  </table>
</form>

