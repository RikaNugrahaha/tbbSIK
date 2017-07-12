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
		include_once 'template_operator/navigasi.php';
		include_once 'template_operator/header.php';
		
	}

	protected function end()
	{
		include_once 'template_operator/content.php';
		include 'template_operator/footer.php';
	}
	
}


 ?>