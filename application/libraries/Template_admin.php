<?php


class Template_admin
{
	
	public function show($view, $data = NULL)
	{
		$ci =& get_instance();

		$data['admin'] = $ci->load->view($view,$data,TRUE);

		$ci->load->view('template_admin',$data);
	}

}

?>