<?php


class Template_donatur
{
	
	public function show($view, $data = NULL)
	{
		$ci =& get_instance();

		$data['donatur'] = $ci->load->view($view,$data,TRUE);

		$ci->load->view('template_donatur',$data);
	}

}

?>