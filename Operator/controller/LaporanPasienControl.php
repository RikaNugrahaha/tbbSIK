<?php
/**
* 
*/
include_once 'Controller.php';
class LaporanPasiencontrol extends Controller
{
include_once 'model/pasien.php';
		$pas  = new Pasien();
		$daftar_pasien = $pas->getDaftarPasien();
		return $daftar_pasien;
	}
}
?>