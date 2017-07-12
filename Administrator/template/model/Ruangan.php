<?php 
include_once 'Model.php';
/**
*  
*/
class Ruangan extends Model
{
	public $no_ruangan;
	public $nama_ruangan;
	public $id_dokter;
	
	public function simpanDataTransaksi($no_ruangan, $nama_ruangan, $id_dokter)
	{
		try
		{
			$stmt= $this->db->prepare("INSERT INTO ruangan(no_ruangan, nama_ruangan, id_dokter) VALUES (:no_ruangan, :nama_ruangan, :id_dokter)");
			$stmt->bindparam(":no_ruangan", $no_ruangan);
			$stmt->bindparam(":nama_ruangan",$nama_ruangan);
			$stmt->bindparam(":id_dokter", $id_dokter);
			$stmt->execute();
			return true;
		}
		catch(PDOException $e)
		{
		echo $e->getMessege();
		return false;
		}
	}
}



 ?>