<?php 
/**
*
*/

include_once 'Model.php';
class Operator extends Model{
<<<<<<< HEAD
	public function getAllDataOperator(){

	}
	public function getDataOperator(id){

	}
	public function simpanDataOperator(){

	}
	public function getDataOperatorSpesifik(id){

	}
	public function updateDataOperator(){

	}
	public function getDataOperator(){

	}
	public function hapusDataOperator(id){

	}
=======
	public $id_operator;
	public $nama_operator;
	public $tgl_lahir;
	public $jenis_kelamin;
	public $alamat;
	public $no_hp;


	public function tambahOperator($nama_operator, $tgl_lahir, $jenis_kelamin, $alamat, $no_hp)
	{
		try
		{
		$stmt = $this->db->prepare("INSERT INTO operator(nama_operator, tgl_lahir, jenis_kelamin, alamat, no_hp) VALUES (:nama_operator, :tgl_lahir, :jenis_kelamin, :alamat, :no_hp)");
		$stmt->bindparam(":nama_operator",$nama_operator);
		$stmt->bindparam(":tgl_lahir",$tgl_lahir);
		$stmt->bindparam(":jenis_kelamin",$jenis_kelamin);
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

	}

>>>>>>> Agungp

}

?>