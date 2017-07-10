<?php 
/**
* 
*/
include_once 'Controller.php';
class Pasien extends Controller
{
	
	public function tampilPasien()
	{
		include_once 'model/Pasien.php';
		$kat  = new Pasien();
		$daftar_pasien = $pas->getDaftarPasien();
		return $daftar_kategori;
	}
	public function tambahPasien()
	{
		include_once 'model/pasien.php';
		$nPasien = new Pasien();
		$tanggal = date('Y-m-d');
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$id_kategori = $_POST['kategori'];
		$pesan = $mberita->setBerita($tanggal,$judul,$isi,$id_kategori);
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
 ?>