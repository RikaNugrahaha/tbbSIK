<?php 

require_once 'View.php';
/**
* 
*/
class PendaftaranPasienUI extends View
{
	
	public function tampilFormPasien()
	{
<<<<<<< HEAD
=======
<<<<<<< HEAD

		include_once 'pages/formpasien.php';
		$this->end();
	}

	public function tambahPasien(){

	
		include_once 'controller/PasienControl.php';
		
		$ps = new PasienControl();
		
		$pesan = $ps->tambahPasien();
		
		include_once 'pages/pesansukses.php';
		
		$this->end();
	}
}
	
=======
>>>>>>> master
		include_once 'pages/formpasien.php';
		$this->end();
	}
	public function tambahPasien()
	{
		include_once 'controller/PasienControl.php';

		$pc = new PasienControl();
		$pesan = $pc->tambahPasien();

		include_once 'pages/pesansuksespasien.php';
		$this->end();
	}
}
<<<<<<< HEAD
=======
>>>>>>> Agungp
>>>>>>> master
 ?>