<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_JQuery extends CI_Controller
{
    function index()
    {
		$this->load->view('test_jquery');
    }
    
    function showMyName(){
    	//$myName = $_POST['my_name'];
    	$myName = $this->input->post('my_name');
    	$array12 = array('result' => $myName);
    	echo json_encode($array12);
    }

    function jqueryui()
    {
    	$this->load->view('test_jquery_ui');
    }
}