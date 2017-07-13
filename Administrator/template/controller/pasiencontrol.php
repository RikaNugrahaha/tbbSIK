<?php 
/**
* 
*/
include_once 'Controller.php';
class Pasien extends Controller
{
	
	public function tambahPasien()
	{
		include_once 'model/pasien.php';
		$nPasien = new Pasien();
		$nama = $_POST['nama'];
		$tgl_lahir = date('Y-m-d');
		$alamat = $_POST['alamat'];
		$jenis_kel = $_POST['jenis_kel'];
		$no_hp = $_POST['no_hp'];
		$pesan = $mberita->setBerita($nama,$tgl_lahir,$alamat, $jenis_kel, $no_hp);
		return $pesan;
	}
	
	}
?>