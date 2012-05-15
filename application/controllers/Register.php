<?php

class Register extends RC_Controller {

	function  __construct()  {
		parent::__construct();
	}
	
	function index()
	{
		$this->load->library('encrypt');
		$data['name'] = $this->encrypt->encode("kindlymousekindlymousekindlymouse@gmail.gmai.lgmail.com");
		$data['mail'] = $this->encrypt->decode($data['name']);
		$data['name1'] = $this->encrypt->encode("zhangyin@metarnet.com");
		$data['mail1'] = $this->encrypt->decode($data['name1']);
		$this->load->view('register',$data);
	}	
	
}

?>