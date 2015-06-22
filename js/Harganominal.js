// JavaScript Document

function harganominal(){
	var KodeMBL = document.getElementById('Kodenominal');
	var Kodenominal = KodeMBL.value;
    var url = "harganominal.php?Kodenominal=" + Kodenominal;
    //ambilData(url, "formHarga");
	ambilData(url, "Harga");
	}