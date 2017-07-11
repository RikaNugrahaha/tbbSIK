<?php 

require_once 'View.php';
/**
* 
*/
class PendaftaranPasienUI extends View
{
	
	public function tampilFormUI()
	{
		include_once 'controller/BeritaManager.php';
		
		$bm = new BeritaManager();
		
		$daftar_kategori = $bm->getDaftarKategori();
		
		include_once 'pages/formberita.php';
		
		$this->end();
	}

	}
	public function tambahPasien(){

	}
		include_once 'controller/pasiencondtroll.php';
		
		$bm = new Pasien();
		
		$pesan = $bm->setPasien();
		
		//include_once 'pages/pesansukses.php';
		
		//$this->end();
	}
	}
 ?>