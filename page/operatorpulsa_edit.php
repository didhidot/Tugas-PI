<?php
$Kodeoper = $_REQUEST['id'];
$queryoperatorpulsa = mysql_query("select * from operatorpulsa where Kodeoper = '$Kodeoper'");
$tampiloperatorpulsa = mysql_fetch_array($queryoperatorpulsa);
?>
<form name="Editoperatorpulsa" method="post" action="proses.php">
  <center>
    <h1>Edit operatorpulsa</h1>
   
    <table width="419" border="0" class="editoperatorpulsa">
      <tr>
        <td width="125">Kode operatorpulsa : </td>
        <td width="278"><label>
          <input name="txtKodeoperatorpulsa" type="text" id="txtKodeoperatorpulsa" value="<?php echo $tampiloperatorpulsa[Kodeoper]; ?>">
        </label></td>
      </tr>
      <tr>
        <td>Nama : </td>
        <td><input name="txtNama" type="text" id="txtNama" value="<?php echo $tampiloperatorpulsa[Nama]; ?>"></td>
      </tr>
      <tr>
        <td>Alamat : </td>
        <td><input name="txtAlamat" type="text" id="txtAlamat" value="<?php echo $tampiloperatorpulsa[Alamat]; ?>"></td>
      </tr>
      <tr>
        <td>Telepon : </td>
        <td><input name="txtTelepon" type="text" id="txtTelepon" value="<?php echo $tampiloperatorpulsa[Telepon]; ?>"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><label>
          <input name="tipe" type="hidden" id="hiddenField" value="simpanoperatorpulsa">
          <input type="submit" name="Submit" value="Simpan" class="btn_simpan">
        </label></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </center>
  
</form>

