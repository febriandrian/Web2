<?php 

require_once 'View.php';
/**
* 
*/
class BerandaUI extends View
{
	
	public function tampilLengkap()
	{
		$nama="Febri";
		include_once 'pages/beranda.php';
		$this->end();
	}
}



 ?>