<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Test_JQuery extends FrontController
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('table');
        $this->load->library('javascript', array('js_library_driver' => 'scripto'));
    }

    function index()
    {

    }
}