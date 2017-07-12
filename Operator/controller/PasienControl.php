<?php 

include_once 'Controller.php';

/**
* 
*/
class PasienControl extends Controller
{
	
	public function tambahPasien()

	{
		include_once 'model/Pasien.php';
		$mpasien = new Pasien();
		$nama_pasien= $_POST['nama_pasien'];
		$tgl_lahir= $_POST['tgl'];
		$jenis_kelamin= $_POST['jenis_kelamin'];
		$alamat= $_POST['alamat'];
		$no_hp= $_POST['no_hp'];
		$pesan= $mpasien->simpanDataPasien($nama_pasien, $tgl_lahir, $jenis_kelamin, $alamat, $no_hp);

		return $pesan;
	}
}

 ?>