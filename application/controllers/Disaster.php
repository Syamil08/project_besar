<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Disaster extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_disaster');
		$this->load->model('m_donate');
	}

	public function index()
	{
		$this->load->model('m_disaster');
		
		$data['disaster'] = $this->m_disaster->get_all();

		// var_dump($data);exit;

		$this->load->view('disaster/index',$data);
	}

	public function about()
	{
		$this->load->view('about/index');
	}

	public function detail($id)
	{
		$data['donasi'] = $this->m_donate->get_all($id);

		$data['detail'] = $this->m_disaster->get($id);

		$this->load->view('disaster/read',$data);
	}
}

?>