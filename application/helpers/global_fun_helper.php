<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('title_extison'))
{
	function title_extison()
	{
		$CI =& get_instance();
		return $CI->config->item('rc_title_extison');
	}
}