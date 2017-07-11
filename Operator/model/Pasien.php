<?php 
/**
*
*/

include_once 'Model.php';
class Pasien extends Model{
	public $id_P;
	public $nama;
	public $tgl_lahir;
	public $jenis_kel;
	public $alamat;
	public $no_hp;
	
	public function simpanDataPasien($id_P,$nama, $tgl_lahir, $jenis_kel, $alamat, $no_hp)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO pasien(id_P, nama, tgl_lahir, jenis_kel, alamat, no_hp) VALUES(:id_P, :nama, :tgl_lahir, :jenis_kel, :alamat, :no_hp)");
		   $stmt->bindparam(":id_P",$id_P);
		   $stmt->bindparam(":nama",$nama);
		   $stmt->bindparam(":tgl_lahir",$jenis_kel);
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