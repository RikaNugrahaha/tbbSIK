<?php 
<<<<<<< HEAD
=======
<<<<<<< HEAD

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

=======
>>>>>>> master
/**
* 
*/
include_once 'Controller.php';
class Pasien extends Controller
{
	
	
	public function tambahPasien()
	{
		include_once 'model/Pasien.php';
		$npasien = new Pasien();
		$nama_pasien = $_POST['nama_pasien'];
		$tgl_lahir = date('Y-m-d');
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$alamat = $_POST['alamat'];
		$no_hp = $_POST['no_hp'];
		$pesan = $npasien->simpanDataPasien($nama_pasien,$tgl_lahir,$jenis_kelamin,$alamat, $no_hp);
		return $pesan;
	}
	public function getDataUntukPerubahan(){

		#code . . .
	}

	public function UbahBerita(){

		#code . . .
	}
}
 ?>
<<<<<<< HEAD
=======
>>>>>>> Agungp
>>>>>>> master
 ?>