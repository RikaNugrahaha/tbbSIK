<?php 
/**
*
*/

include_once 'Model.php';
class Pasien extends Model{
	public $id_pasien;
	public $nama_pasien;
	public $tgl_lahir;
	public $jenis_kelamin;
	public $alamat;
	public $no_hp;
<<<<<<< HEAD


=======
<<<<<<< HEAD
	
=======


>>>>>>> Agungp
>>>>>>> master
	public function simpanDataPasien($nama_pasien, $tgl_lahir, $jenis_kelamin, $alamat, $no_hp)
	{
		try
		  {
<<<<<<< HEAD
=======
<<<<<<< HEAD
		   $stmt = $this->db->prepare("INSERT INTO pasien(nama_pasien, tgl_lahir, jenis_kelamin, alamat, no_hp) VALUES(:nama_pasien, :tgl_lahir, :jenis_kelamin, :alamat, :no_hp)");
		   $stmt->bindparam(":nama_pasien",$nama_pasien);
		   $stmt->bindparam(":tgl_lahir",$tgl_lahir);
		   $stmt->bindparam(":jenis_kelamin", $jenis_kelamin);
=======
>>>>>>> master
		   $stmt = $this->db->prepare("INSERT INTO pasien(nama_pasien, tgl_lahir, jenis_kelamin, alamat, no_hp ) VALUES(:nama_pasien, :tgl_lahir, :jenis_kelamin, :alamat, :no_hp)");
		   $stmt->bindparam(":nama_pasien",$nama_pasien);
		   $stmt->bindparam(":tgl_lahir",$tgl_lahir);
		   $stmt->bindparam(":jenis_kelamin",$jenis_kelamin);
<<<<<<< HEAD
=======
>>>>>>> Agungp
>>>>>>> master
		   $stmt->bindparam(":alamat",$alamat);
		   $stmt->bindparam(":no_hp",$no_hp);
		   $stmt->execute();
		   return true;
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
<<<<<<< HEAD
		}
}
=======

<<<<<<< HEAD
=======
>>>>>>> Agungp
>>>>>>> master
?>