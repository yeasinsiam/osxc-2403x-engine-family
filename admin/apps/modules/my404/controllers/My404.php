<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends MY_Controller {
	
	public function badrequest(){ 
		$content['subview']="my404/my404";
		$this->load->view('layout', $content);		  
    }

}	