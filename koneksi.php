<?php
$koneksi = mysqli_connect("localhost","root","","Kelompok1_DMA");
//mysqli_select_db("penggajian");

//fungsi format rupiah 
function format_rupiah($rp) {
	$hasil = "Rp." . number_format($rp, 0, "", ".") . ",00";
	return $hasil;
}
?>
