<?php
$data['Tanggalpulsa']=date("Y-m-d");
//buat kode otomatis
	$query_oto = mysql_query("select max(NomorByr) as maksi from bayarsaldo");
	$data_oto = mysql_fetch_array($query_oto);
	$data_potong = substr($data_oto['maksi'],3,5);
	$data_potong++;
	$kode="";
	for ($i=strlen($data_potong); $i<=4; $i++)
		$kode = $kode."0";
	   $data['NomorByr'] = "BYR$kode$data_potong";
?>
<center>
  <h1>
		Input Bayar Saldo
  </h1>
  <form name="input_bayarsaldo" method="post" action="proses.php">
    <table width="450" height="220" border="0"  class="bayarsaldo">
      <tr>
        <td width="125">Nomor Bayar</td>
        <td width="315"><label for="nomorBayar"></label>
        <input name="nomorBayar" type="text" id="nomorBayar" value="<?php echo $data['NomorByr']; ?>"></td>
      </tr>
      <tr>
        <td>Tanggal Bayar</td>
        <td><label for="tanggalBayar"></label>
        <input name="tanggalBayar" type="text" id="tanggalBayar" value="<?php echo $data['Tanggalpulsa']; ?>"></td>
      </tr>
      <tr>
        <td>Kode Deposit</td>
        <td>
        <select name="kodedepositpulsa" id="kodedepositpulsa" onChange="getNamaoper()">
		  <option value=""></option>
			<?php
				$sqlKodedepositpulsa = mysql_query("select Kodedepositpulsa from belidepositpulsa");
				while ($kodedepositpulsa=mysql_fetch_array($sqlKodedepositpulsa)){
	 			echo "<option value=$kodedepositpulsa[Kodedepositpulsa]>$kodedepositpulsa[Kodedepositpulsa]</option>";
				}
			?>
          </select>
         </td>
      </tr>
      <tr>
        <td>Nama Operator</td>
        <td><input name="namaoperatorpulsa" type="text" disabled id="namaoperatorpulsa" readonly="readonly"></td>
      </tr>
      <tr>
        <td>Jumlah</td>
        <td><label for="jumlah"></label>
        <input type="text" name="jumlah" id="jumlah"></td>
      </tr>
      <tr>
        <td height="43">&nbsp;</td>
        <td><input type="submit" name="btn_masukan" class="btn_masukan" value="Simpan">
        <input name="tipe" type="hidden" id="tipe" value="bayarsaldo"></td>
      </tr>
    </table>
  </form>
</center>