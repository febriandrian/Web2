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
		include_once '../template-depan/navigasi.php';
		include_once '../template-depan/header.php';
		include_once '../template-depan/content.php';
		
		
	}

	protected function end()
	{
		include '../template-depan/footer.php';
	}
	
}


 ?>