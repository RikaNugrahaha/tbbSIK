<?php 

require_once 'View.php';
/**
* 
*/
class PendaftaranPasienUI extends View
{
	
	public function tampilFormPasien()
	{
		include_once 'pages/pasien.php';
		$this->end();
	}
}
 ?>