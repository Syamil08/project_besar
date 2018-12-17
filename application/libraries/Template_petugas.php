<?php


class Template_petugas
{
	
	public function show($view, $data = NULL)
	{
		$ci =& get_instance();

		$data['petugas'] = $ci->load->view($view,$data,TRUE);

		$ci->load->view('template_petugas',$data);
	}

}

?>