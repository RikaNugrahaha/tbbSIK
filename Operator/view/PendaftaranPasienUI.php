<?php 

require_once 'View.php';
/**
* 
*/
class PendaftaranPasienUI extends View
{
	
	public function tampilFormPasien()
	{
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
 ?>