<?php 

require_once 'TugasView.php';
/**
* 
*/
class TugasUI extends View
{
	
	public function tampilLengkap()
	{
		include_once '../template-depan/sidebar.php';
		$this->end();
	}
}



 ?>