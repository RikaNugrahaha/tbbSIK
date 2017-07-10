<?php 
/**
*
*/

include_once 'Model.php';
class Pasien extends Model{
	public $id_karyawan;
	public $nama;
	public $tgl_lahir;
	public $alamat;
	public $jenis_kel;

	public function simpanDataPasien()
	{
		$query = $this->db->prepare("SELECT * FROM pasien");
		$query->execute();
		$data=$query->fethcAll();

		return $data;

	}
	
	public function tambahPasien($id_karyawan,$nama,$tgl_lahir,$alamat,$jenis_kel)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO pasien(id_karyawan, nama, tgl_lahir, alamat, jenis_kel) VALUES(:id_karywan, :nama, :tgl_lahir, :jenis_kel)");
		   $stmt->bindparam(":tanggal",$tanggal);
		   $stmt->bindparam(":judul",$judul);
		   $stmt->bindparam(":isi",$isi);
		   $stmt->bindparam(":id_kategori",$id_kategori);
		   $stmt->execute();
		   return true;
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }

	}
?>