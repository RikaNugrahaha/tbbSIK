<?php
/**
* 
*/
include_once 'Controller.php';
class LaporanPasiencontrol extends Controller
{
include_once 'model/pasien.php';
<<<<<<< HEAD
		$kat  = new Kategori();
		$daftar_kategori = $kat->getDaftarPasien();
=======
		$pas  = new Pasien();
		$daftar_pasien = $pas->getDaftarPasien();
>>>>>>> Fania_15
		return $daftar_pasien;
	}
}
?>