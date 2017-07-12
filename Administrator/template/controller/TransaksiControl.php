<?php 
/**
* 
*/
include_once 'Controller.php';

class TransaksiControl extends Controller
{
	public function getDokterRuangan(){
		include_once 'model/Dokter.php';
		$dok = new Dokter();
		$list_dokter= $dok->getDataDokter();

		return $list_dokter;
		include_once 'model/Ruangan.php';
		$ru= new Ruangan();
		$list_ruangan= $ru->getDataRuangan();

		return $list_ruangan;

	}

}

 ?>