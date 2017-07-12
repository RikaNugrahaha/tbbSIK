<?php 

require_once 'View.php';
/**
* 
*/
class LaporanPasienUI extends View
{
	
	public function cetakLaporan()
	{
		include_once 'controller/pasien.php';
		
		$bm = new Pasien();
		
		$daftar_pasien = $bm->getDaftarPasien();
		
		include_once 'pages/formpasien.php';
		
		$this->end();
	}

	}
	
 ?>