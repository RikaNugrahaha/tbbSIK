<?php 
require_once 'View.php';

class PengelolaanOperatorUI extends View
{

	public function tampilKelolaOperator(){

	}
	public function tampilDetailOperator){

	}
	public function tampilFormOperator(){

	}
	public function tambahOperator(){

	}
	public function tampilFormEdit(){

	}
	public function aksiUbahOperator(){

	}
	public function tampilKelolaOperator(){

	}
	public function aksiHapusOperator(){
		

	public function tampilFormOperator(){
		include_once 'pages/formoperator.php';
		$this->end();

	}
	public function tambahOperator(){
		include_once 'controller/OperatorControl.php';
		$oc = new OperatorControl();
		$pesan = $oc->tambahOperator();

		include_once 'pages/formoperator.php';
		$this->end();

	}
	public function tampilKelolaOperator(){

	}
	public function tampilDetailOperator(){

	}
	public function tampilFormEditOperator(){

	}
	public function aksiUpdateOperator(){


	}
}
?>