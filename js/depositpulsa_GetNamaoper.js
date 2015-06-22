// JavaScript Document
function getNamaoper(){
	var kode = document.getElementById('kodedepositpulsa');
	var kodedepositpulsa = kode.value;
    var url = "depositpulsa_GetNamaoper.php?kodedepositpulsa=" + kodedepositpulsa;
	ambilData(url, "namaoperatorpulsa");
	}