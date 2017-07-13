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
<<<<<<< HEAD
	public function tambahTransaksi()
	{
		include_once 'model/Transaksi.php';
		$mtransaksi = new Transaksi();
		$id_pasien = $_POST['id_pasien'];
		$id_dokter =$_POST['id_dokter'];
		$no_ruangan =$_POST['no_ruangan'];
		$tanggal_pemeriksaan = date('Y-m-d');
		$pesan = $mtransaksi->simpanDataTransaksi($id_pasien, $id_dokter, $no_ruangan, $tanggal_pemeriksaan);

		return $pesan;
	}
	
=======
>>>>>>> master

}

 ?>