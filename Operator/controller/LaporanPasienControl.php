<?php
/**
* 
*/
include_once 'Controller.php';
class LaporanPasiencontrol extends Controller
{
include_once 'model/pasien.php';
		$kat  = new Kategori();
		$daftar_kategori = $kat->getDaftarPasien();
		return $daftar_pasien;
	}
}
?>