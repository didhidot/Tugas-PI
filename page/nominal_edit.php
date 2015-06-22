<?php
$kodenominal = $_REQUEST['id'];
$querynominal = mysql_query("select * from nominal where Kodenominal = '$kodenominal'");
$tampilnominal = mysql_fetch_array($querynominal);
?>
<form name="editnominal" method="post" action="proses.php" enctype="multipart/form-data">
  <center><h1>Edit Nominal </h1>
  <table width="397" height="186" border="0" class="editnominal" >
    <tr>
      <td width="103">Kode Nominal Pulsa</td>
      <td width="278"><label for="txtKodenominal"></label>
      <input name="txtKodenominal" type="text" id="txtKodenominal" value="<?php echo $tampilnominal['Kodenominal']; ?>" readonly="readonly"></td>
    </tr>
    <tr>
      <td>Nominal</td>
      <td><input name="txtMerek" type="text" id="txtMerek" value="<?php echo $tampilnominal['Nominal']; ?>"></td>
    </tr>
  
   
    <tr>
      <td>Harga</td>
      <td><input name="txtHarga" type="text" id="txtHarga" value="<?php echo $tampilnominal['Harga']; ?>"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="tipe" type="hidden" id="hiddenField" value="simpannominal">        <input type="submit" name="btn_simpan" id="button" value="Simpan" class="btn_simpan"></td>
    </tr>
  </table>
  </center>  
</form>

