<?php 

require_once 'View.php';
/**
* 
*/
class PendaftaranPasienUI extends View
{
	
	public function tampilFormUI()
	{
		include_once 'pages/beranda.php';
		$this->end();
	}
}
 ?>