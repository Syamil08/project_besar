<?php

if (!function_exists('userdata')) 
{
	function userdata()
	{
		$ci =& get_instance();

		$userdata = $ci->session->userdata('logged_in');

		return $userdata;
	}
}