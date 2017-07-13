<?php 
require_once 'View.php';

class PengelolaanTransaksiUI extends View
{
	public function pilihPasien()
	{
		include_once 'controller/TransaksiControl.php';

		$tc = new TransaksiControl();
		$list_dokter = $tc->getDokterRuangan();
		$list_ruangan =$tc->getDokterRuangan();

		include_once 'pages/formtransaksi.php';
		$this->end();
	}

	public function tambahTransaksi()
	{
		include_once 'controller/TransaksiControl.php';

		$tc = new TransaksiControl();
		$pesan = $tc->tambahTransaksi();

		include_once 'pages/pesansuksestransaksi.php';
		$this->end();
	}
}

 ?>