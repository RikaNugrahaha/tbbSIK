<?php 

/**
* 
*/
class View
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
<<<<<<< HEAD
		include_once 'template/navigasi.php';
		include_once 'template/header.php';
		//include_once 'template/content.php';
=======
		include_once 'template_operator/navigasi.php';
		include_once 'template_operator/header.php';
>>>>>>> master
		
	}

	protected function end()
	{
<<<<<<< HEAD
		include_once 'template/footer.php';
=======

		include_once 'template_operator/content.php';
		include 'template_operator/footer.php';

		include_once 'template/footer.php';

>>>>>>> master
	}
	
}


 ?>