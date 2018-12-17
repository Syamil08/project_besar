<?php


class Donatur extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('form_validation');
		$this->load->model('m_donate');

		if(!userdata()){
			redirect('user/verify');	
		}
	}

	public function index()
	{

		$this->template_donatur->show('donatur/index');
	}

	public function edit()
	{
		$this->template_donatur->show('donatur/edit');
	}

	public function update()
	{
		$this->load->model('m_user');

		$id 			= $this->input->post('id');
		$firstname		= $this->input->post('firstname');
		$lastname 		= $this->input->post('lastname');
		$username 		= $this->input->post('username');
		$newpassword 	= $this->input->post('new_password');
		$nohp 			= $this->input->post('nohp');
		$alamat 		= $this->input->post('alamat');
		$role			= 'donatur';
		$status 		= $this->input->post('status');


		$data 	= [
			'name'		=> $firstname." ".$lastname,
			'username'	=> $username,
			'role'		=> $role,
			'status' 	=> $status,
			'phone' 	=> $nohp,
			'address' 	=> $alamat
		];

		if (!empty($newpassword)) {
			$data['password'] = md5($newpassword);
		}

		$save	= $this->m_user->update($data,$id);

		$user = $this->m_user->get($id);

		$this->session->set_userdata('logged_in',$user);

		if($save){
			$this->session->set_flashdata('msg_success','Selamat Anda Berhasil Memperbarui Data Anda.');
		}
		else{
			$this->session->set_flashdata('msg_error','Maaf Data Anda Tidak Dapat Diperbarui');
		}

		redirect('donatur');
	}

	public function riwayat()
	{

		$riwayat_schedule = $this->m_donate->get_all_user(userdata()->id,'schedule');

		$riwayat_completed = $this->m_donate->get_all_user(userdata()->id,'completed');

		$data['riwayat'] = $riwayat_schedule;

		$data['completed'] = $riwayat_completed;

		$this->template_donatur->show('donatur/riwayat',$data);

	}

}

?>