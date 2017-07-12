<?php 
require_once 'View.php';

class PengelolaanTransaksiUI extends View
{
	public function pilihPasien()
	{

	}

	public function tambahTransaksi()
	{
		include_once 'controller/TransaksiControl.php';

		$tc = new TransaksiControl();
		$pesan = $bm->tambah();

		include_once 'pages/pesansukses.php';
		$this->end();
	}
}

 ?>