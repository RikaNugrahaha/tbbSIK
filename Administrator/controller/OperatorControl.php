<?php 
/**
* 
*/
include_once 'Controller.php';
class OperatorControl extends Controller
{

	public function tambahOperator(){
		include_once 'model/Operator.php';
		$noperator = new Operator();
		$nama_operator = $_POST['nama_operator'];
		$tgl_lahir = date('Y-m-d');
		$alamat = $_POST['alamat'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$no_hp = $_POST['no_hp'];
		$pesan = $noperator->tambahOperator($nama_operator,$tgl_lahir,$alamat, $jenis_kelamin, $no_hp);
		return $pesan;

	}
	/*public function updateDataOperator(){

	}
	public function hapusDataOperator(id){

	}*/
}

?>