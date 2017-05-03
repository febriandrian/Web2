<?php 

require_once 'View.php';
/**
* 
*/
class KonfigurasiUI extends View
{
	
	public function tampilLengkap()
	{
		include_once 'pages/berandakonf.php';
		$this->end();
	}
}



 ?>